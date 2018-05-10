$(function() {
    // initialize sliders
    $('.slider-active').owlCarousel({
        loop:true,
        navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
        nav:true,
        responsive:{
            0:{
                items:1
            },
            320:{
                items:1
            },
            767:{
                items:2
            },
            1023:{
                items:3
            },
            1200:{
                items:3
            }
        }
    });

    $('.slider-active2').owlCarousel({
        loop:true,
        navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
        nav:true,
        responsive:{
            0:{
                items:2
            },
            767:{
                items:4
            },
            1023:{
                items:4
            },
            1200:{
                items:4
            }
        }
    });

    // toggle class not-empty on contact form
    $('.js-input').keyup(function() {
        if($(this).val()) {
            $(this).addClass('not-empty');
        } else {
            $(this).removeClass('not-empty');
        }
    });

    $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 2000);
                return false;
            }
        }
    });
});

var dropdown = document.getElementsByClassName("dropdown-btn");
var i;
for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
            dropdownContent.style.display = "none";
        } else {
            dropdownContent.style.display = "block";
        }
    });
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("header-left-sredina-open").style.marginLeft= "0";
    document.body.style.backgroundColor = "white";
    document.getElementById("header-left-sredina-open").style.display="block";
}

function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("header-left-sredina-open").style.marginLeft = "250px";
    document.getElementById("header-left-sredina-open").style.display="none";
}