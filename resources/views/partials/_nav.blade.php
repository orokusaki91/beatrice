<div id="header" style="background:url({{ asset('storage/uploads/home/' . $homeHeader->image) }}) no-repeat 0 0;">
    <div class="header-top">
        <img src="{{ asset('img/logos/ceo.png') }}" alt="">
    </div>
    <div class="header-sredina">{!! $homeHeader->text !!}</div>
    <div class="header-bottom">
        <a href="#main">Mehr erfahren</a>
    </div>
    <div class="header-left">
        <div class="header-left-top">
            <a href="#"><img src="{{ asset('img/logos/mali.png') }}" alt=""></a>
        </div>
        <div class="header-left-sredina"> 
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="#main">Dienstleistungen</a>
                <a href="#about_us">Über mich</a>
                <a href="#contact">Kontakt</a>
            </div>
            <div id="header-left-sredina-open">
                <span  onclick="openNav()"><i class="fa fa-bars" aria-hidden="true"></i></span>
            </div>
        </div>
    </div>
</div>