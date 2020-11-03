

$(document).ready(function(){




    /* /////////// LIGHTBOX NAVIGATION /////////// */


    $('.toggle').click(function(){
        $('#nav').toggleClass('open');
        $('.lightbox').toggleClass('lightbox-open');
        $('.nav-list').toggleClass('nav-list-entry-animation');
    });


    $(document).on('keyup',function(evt) {
        if (evt.keyCode == 27) {
            $('#nav').removeClass('open');
            $('.lightbox').removeClass('lightbox-open');
            $('.nav-list').toggleClass('nav-list-entry-animation');
        }
    });

    /* /////////// end LIGHTBOX NAVIGATION /////////// */






    /* /////////// HIDE/SHOW STATIC NAVIGATION /////////// */

    var lastScrollTop = 0;
    var delta = 5;
    var didScroll;
    // on scroll, let the interval function know the user has scrolled
    $(window).scroll(function(event){
    didScroll = true;
    });
    // run hasScrolled() and reset didScroll status
    setInterval(function() {
        if (didScroll) {
            hasScrolled();
            didScroll = false;
        }
    }, 250);

    function hasScrolled() {
    // do stuff here...
        var st = $(this).scrollTop();
        
        // Make sure they scroll more than delta
        if(Math.abs(lastScrollTop - st) <= delta)
            return;
        
        // If they scrolled down and are past the navbar, add class .nav-up.
        // This is necessary so you never see what is "behind" the navbar.
        if (st > lastScrollTop){
            // Scroll Down
            $('#header').addClass('nav-down');
            // $('#intro').addClass('remove-intro');
        } else {
            // Scroll Up
            if(st + $(window).height() < $(document).height()) {
                $('header').removeClass('nav-down');
            }
        }
        
        lastScrollTop = st;
    }

    /* /////////// END HIDE/SHOW STATIC NAVIGATION /////////// */











    /* /////////// LIGHTBOX /////////// */

    /* Open when someone clicks on the 'menu' element */
    /*function NavIn() {
        document.getElementById('myNav').style.opacity = .98;
        document.getElementById('myNav').style.display = 'block';
        $("#myNav").fadeIn();
    }

    /* Close when someone clicks on the "x" symbol inside the overlay */
    /*function closeNav() {
        document.getElementById("myNav").style.display = "none";
    }

    /* /////////// END LIGHTBOX /////////// */




    /* /////////// SEARCH LIGHTBOX /////////// */

    /* Open when someone clicks on the 'search icon' element */
    /*function SearchIn() {
        document.getElementById('mySearch').style.opacity = 1;
        document.getElementById('mySearch').style.display = 'block';
    }

    /* Close when someone clicks on the "x" symbol inside the overlay */
    /*function closeSearch() {
        document.getElementById("mySearch").style.display = "none";
    }

    /* /////////// END SEARCH LIGHTBOX /////////// */




    /* /////////// SHARE LIGHTBOX /////////// */

    /* Open when someone clicks on the 'share button' element */
    /*function ShareIn() {
        document.getElementById('myShare').style.opacity = 1;
        document.getElementById('myShare').style.display = 'block';
    }

    /* Close when someone clicks on the "x" symbol inside the overlay */
    /*function closeShare() {
        document.getElementById("myShare").style.display = "none";
    }

    /* /////////// END SHARE LIGHTBOX /////////// */












    /* /////////// NAV LIGHTBOX /////////// */

    // /* Open when someone clicks on the 'menu' element */
    // function NavIn(el,op) {
    //     var navelem = document.getElementById(el);
    //     navelem.style.transition = "left .2s ease-in 0s";
    //     navelem.style.left = op;
    // }

    // /* Close when someone clicks on the "x" symbol inside the overlay */
    // function closeNav() {
    //     document.getElementById("myNav").style.left = "100%";
    // }

    /* /////////// END NAV LIGHTBOX /////////// */










    /* /////////// ESC CLOSE  /////////// */

    $(document).on('keyup',function(evt) {
        if (evt.keyCode == 27) {
        //alert('Esc key pressed.');
            closeShare();
            closeSearch();
            closeNav();
        }
    });

    /* /////////// END ESC CLOSE /////////// */






});



/* /////////// SEARCH LIGHTBOX /////////// */

/* Open when someone clicks on the 'menu' element */
function SearchIn(sel,bt) {
    var searchelem = document.getElementById(sel);
    searchelem.style.bottom = bt;
    // searchelem.style.opacity = "1";
    searchelem.style.transition = "bottom .2s ease-in 0s";
    
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeSearch() {
    document.getElementById("mySearch").style.bottom = "100%";
    // document.getElementById("mySearch").style.opacity = "0";
}

// $('#search').click(SearchIn('mySearch', '0'));
// $('.closebtn').click(closeSearch());
/* /////////// END SEARCH LIGHTBOX /////////// */






/* /////////// SHARE LIGHTBOX /////////// */

/* Open when someone clicks on the 'menu' element */
function ShareIn(shel,tp) {
    var shareelem = document.getElementById(shel);
    shareelem.style.transition = "top .2s ease-in 0s";
    shareelem.style.top = tp;
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeShare() {
    document.getElementById("myShare").style.top = "100%";
}

/* /////////// END SHARE LIGHTBOX /////////// */





