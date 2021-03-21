<script src=" https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"> </script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="{{ asset('dist/layout/layout_khoadulich/js/owl.carousel.js') }}"></script>

<script>
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("movetop").style.display = "block";
        } else {
            document.getElementById("movetop").style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 100;
        document.documentElement.scrollTop = 100;

    }

</script>
</section>

{{-- linl sript cong tac doanh nghiep --}}
<script>
    $('#owl-congtac').owlCarousel({
        loop: true,
        margin: 10,
        autoplay: true,
        nav: true,
        navText: [" ", " "],
        autoplayTimeout: 2500,
        autoplayHoverPause: true,
        stagePadding: Number,
        item: 2,
        responsive: {
            0: {
                items: 2,
                margin: 50
            },
            600: {
                items: 2
            },

            720: {
                items: 4
            }
        }
    })

</script>

<script>
    $("#owl-example1").owlCarousel({
        margin: 10,
        items: 3,
        autoplay: true,
        autoplayTimeout: 600,
        navText: [" ", " "],
        loop: true,
        autoplayTimeout: 2500,
        autoplayHoverPause: true,
        nav: true,
        center:true
    });

</script>


</section>
<script>
    $(function() {
        $('.navbar-toggler').click(function() {
            $('body').toggleClass('noscroll');
        })
    });

</script>

<script>
    $(document).ready(function() {
        $('.owl-one').owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            responsiveClass: true,
            autoplay: false,
            autoplayTimeout: 5000,
            autoplaySpeed: 1000,
            autoplayHoverPause: false,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                480: {
                    items: 1,
                    nav: false
                },
                667: {
                    items: 1,
                    nav: true
                },
                1000: {
                    items: 1,
                    nav: true
                }
            }
        })
    })

</script>
