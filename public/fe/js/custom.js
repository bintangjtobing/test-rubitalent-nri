$(window).on("load", function () {
    "use strict";

    /* ========================================================== */
    /*   Owl Carousel                                             */
    /* ========================================================== */

    $("#owl1").owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 1,
            },
            1000: {
                items: 1,
            },
        },
    });

    $("#owl2").owlCarousel({
        center: true,
        autoplay: true,
        loop: true,
        margin: 40,
        nav: false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: false,
            },
            600: {
                items: 2,
                nav: false,
            },
            1000: {
                items: 4,
                nav: false,
                loop: true,
            },
        },
    });

    /* ========================================================== */
    /*   Slider                              */
    /* ========================================================== */

    $(function () {
        $.vegas("slideshow", {
            backgrounds: [
                {
                    src: "https://res.cloudinary.com/dilb4d364/image/upload/w_1000/q_auto/f_auto/v1736227197/1_oaxo3f.png",
                    fade: 1500,
                },
                {
                    src: "https://res.cloudinary.com/dilb4d364/image/upload/w_1000/q_auto/f_auto/v1736227197/2_ukrxab.png",
                    fade: 1500,
                },
                {
                    src: "https://res.cloudinary.com/dilb4d364/image/upload/w_1000/q_auto/f_auto/v1736227197/3_a3csjz.png",
                    fade: 1500,
                },
            ],
            loading: false,
        });
    });

    /* ========================================================== */
    /*   Navigation Background Color                              */
    /* ========================================================== */

    $(window).on("scroll", function () {
        if ($(this).scrollTop() > 450) {
            $(".navbar-fixed-top").addClass("opaque");
        } else {
            $(".navbar-fixed-top").removeClass("opaque");
        }
    });

    /* ========================================================== */
    /*   Hide Responsive Navigation On-Click                      */
    /* ========================================================== */

    $(".navbar-nav li a").on("click", function (event) {
        $(".navbar-collapse").collapse("hide");
    });

    /* ========================================================== */
    /*   Navigation Color                                         */
    /* ========================================================== */

    $("#navbar-collapse-02").onePageNav({
        filter: ":not(.external)",
    });
});
