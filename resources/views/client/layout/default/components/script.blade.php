<!-- Core JavaScript
================================================== -->
<script src="{{ asset('dist/layout/default/js/jquery.min.js') }}"></script>
<script src="{{ asset('dist/layout/default/js/tether.min.js') }}"></script>
<script src="{{ asset('dist/layout/default/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('dist/layout/default/js/custom.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
    $(document).ready(function(){
        $("#owl-feelings").owlCarousel({
            autoplay:true,
            autoplayTimeout:5000,
            autoplayHoverPause:true,
            margin:50,
            loop: true,
            smartSpeed:1000,
            items: 2,
            nav: true,
            navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
            responsive : {
            // breakpoint from 0 up
            0: {
                items: 1
            },
            // breakpoint from 768 up
            1024: {
                items: 2
            }
        }
        });
    });
</script>
