jQuery(function ($) {
    $(document).ready(function () {
        $('.hero-slider').owlCarousel({
            loop: true,
            margin: 0,
            nav: false,
            dots: false,
            responsiveClass: true,
            lazyLoad: true,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplaySpeed: 1000,
            //mouseDrag: false,
            //touchDrag: false,
            smartSpeed: 250,
            transitionStyle: "fade",

            // animateIn: 'animate__fadeInRight',
            // animateOut: 'animate__fadeOutLeft',
            // slideTransition: 'linear',
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


        //Navbar Scrollspy 
        $(window).scroll(function () {
            var scroll = $(window).scrollTop();
            if (scroll > 80) {
                $(".inner").addClass("affix");
            } else {
                $(".inner").removeClass("affix");
            }
        });

        //*******Video Play popup******//
        // Gets the video src from the data-src on each button
        var $videoSrc;
        $('.video-btn').click(function () {
            $videoSrc = $(this).data("src");
        });
        console.log($videoSrc);

        // when the modal is opened autoplay it  
        $('#videoModal').on('shown.bs.modal', function (e) {
            // set the video src to autoplay and not to show related video.
            $("#video").attr('src', $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");
        })

        // stop playing the youtube video when I close the modal
        $('#videoModal').on('hide.bs.modal', function (e) {
            // a poor man's stop video
            $("#video").attr('src', $videoSrc);
        })


        $(document).ready(function() {
            $('#example').DataTable();
        } );

        $(document).ready(function() {
            $('#admintable').DataTable();
        } );

    });
});