@extends('layouts.app') 

@section('title', 'Home')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.19.0/sweetalert2.min.css">
@stop

@section('content')
<div id="main" class="wrapper">
    @foreach($services as $key => $service)
        <div class="{{ $key % 2 == 1 ? 'main_desno2' : 'main_levo' }}">
            <img src="{{ asset('storage/uploads/services/' . $service->image) }}">
        </div>
        <div class="{{ $key % 2 == 1 ? 'main_levo2' : 'main_desno' }}">
            <h3>{{ $service->title }}</h3>
            {!! $service->text !!}
            <a href="#">Lorem ipsum</a>
        </div>
    @endforeach
</div>
<div class="nastavak_main" style="background:url({{ asset('storage/uploads/slogan/' . $slogan->image) }}) no-repeat fixed top center; background-size: cover; ">
    {!! $slogan->text !!}
</div>
<div class="kosa">
    <img src="{{ asset('img/kosa.png') }}" alt="">
</div>
<div id="about_us">
    <div class="about_left">
        <img src="{{ asset('storage/uploads/about_us/' . $aboutUs->image) }}" alt="">
    </div>
    <div class="about_right">
        <h1>Über mich</h1>
        {!! $aboutUs->text !!}
    </div>
</div>
<div class="kosa2">
    <img src="{{ asset('img/kosa.png') }}" alt="">
</div>
<div id="contact" class="wrapper">
    <section class="get-in-touch">
        <h1 class="title">Kontakt</h1>
        <form action="{{ url('ajax/contact') }}" class="contact-form row" method="post" id="contactForm">
            {{ csrf_field() }}
            <div class="form-field col x-50">
                <input id="name" class="input-text js-input" type="text" name="name">
                <label class="label" for="name">Name</label>
                <p class="greska"></p>
            </div>
            <div class="form-field col x-50">
                <input id="email" class="input-text js-input" type="text" name="email">
                <label class="label" for="email">Emailadresse</label>
                <p class="greska"></p>
            </div>
            <div class="form-field col x-100">
                <label for="comment" class="label-textarea">Nachricht</label>
                <textarea class="textarea" name="comment"></textarea>
                <p class="greska2"></p>
            </div>
            <div class="form-field col x-100 align-center">
                <input class="submit-btn" type="submit" value="Bestätigen">
            </div>
        </form>
    </section>
</div>
<div class="number">
    <p><i class="fa fa-phone" aria-hidden="true"></i> Tel. 078 832 64 10</p>
    <p><i class="fa fa-envelope" aria-hidden="true"></i>  beatrice.niederhauser@unitone.ch</p>
</div>
@stop

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.19.0/sweetalert2.all.min.js"></script>
<script>
    $(function () {
        $('#contactForm').submit(function (e) {
            e.preventDefault();
            var form = $(this);
            var formData = form.serialize();
            var submitButton = form.find('input[type="submit"]');
            submitButton.attr('disabled', true);
            $.ajax({
                url: 'ajax/contact',
                data: formData,
                method: 'post',
                success: function (response) {
                    // empty all previous errors 
                    $('.has-error').removeClass('.has-error').text('');
                    var errors = response.errors;
                    if ($.isEmptyObject(errors)) {
                        location.reload();
                    } else {
                        submitButton.attr('disabled', false);
                        // print the errors
                        $.each(errors, function (key, val) {
                            var input = form.find('[name="'+ key +'"]');
                            input.parents('.form-field').find('p').addClass('has-error').text(val[0]);
                        });
                    }
                },
                errors: function() {
                    location.reload();
                }
            });
        });

        @if(Session::has('success'))
        swal(
            'Erledigt!',
            '{{ Session::get('success') }}',
            'success'
            );
        @elseif(Session::has('error'))
        swal(
            'Fehler!',
            '{{ Session::get('error') }}',
            'error'
            );
        @endif
    });
</script>
@stop