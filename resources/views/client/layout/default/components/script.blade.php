<!-- Core JavaScript
================================================== -->
<script src="{{ asset('dist/layout/default/js/jquery.min.js') }}"></script>
<script src="{{ asset('dist/layout/default/js/tether.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="{{ asset('dist/layout/default/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('dist/layout/default/js/custom.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
{{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> --}}
<script>
    $(document).ready(function() {
        $("#owl-feelings").owlCarousel({
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            margin: 50,
            loop: true,
            smartSpeed: 1000,
            items: 2,
            nav: true,
            navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
            responsive: {
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
{{--------------------- CSS Hover Teacher ------------------------------}}
<script>
    // // Get the modal
    // var modal = document.getElementById("[id^=teacher-modal-]");
    // // Get the button that opens the modal
    // var btn = document.getElementById("myBtn");
    // // Get the <span> element that closes the modal
    // var span = document.getElementsByClassName("close")[0];
    // // When the user clicks the button, open the modal
    // btn.onclick = function() {
    //     modal.style.display = "block";
    // }
    // // When the user clicks on <span> (x), close the modal
    // span.onclick = function() {
    //     modal.style.display = "none";
    // }
    // // When the user clicks anywhere outside of the modal, close it
    // window.onclick = function(event) {
    //     if (event.target == modal) {
    //         modal.style.display = "none";
    //     }
    // }
</script>
