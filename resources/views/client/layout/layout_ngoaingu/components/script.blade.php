  <script src="{{ asset('dist/layout/layout_khoangoaingu/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('dist/layout/layout_khoangoaingu/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('dist/layout/layout_khoangoaingu/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('dist/layout/layout_khoangoaingu/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('dist/layout/layout_khoangoaingu/vendor/jquery-sticky/jquery.sticky.js') }}"></script>
  <script src="{{ asset('dist/layout/layout_khoangoaingu/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('dist/layout/layout_khoangoaingu/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('dist/layout/layout_khoangoaingu/vendor/counterup/counterup.min.js') }}"></script>
  <script src="{{ asset('dist/layout/layout_khoangoaingu/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('dist/layout/layout_khoangoaingu/vendor/venobox/venobox.min.js') }}"></script>
  <script src="{{ asset('dist/layout/layout_khoangoaingu/js/main.js') }}"></script>
  <script>
      $(document).ready(function() {
          $('#owl-comment').owlCarousel({
              loop: 0,
              margin: 100,
              autoplay: true,
              nav: true,
              navText: [" ", " "],
              autoplayTimeout: 2000,
              autoplayHoverPause: true,
              responsive: {
                  0: {
                      items: 1
                  },
                  600: {
                      items: 2
                  },
                  // 1440: {
                  // 	items: 2
                  // }
              }
          })

          $('#owl-hop-tac').owlCarousel({
              loop: true,
              margin: 100,
              autoplay: true,
              nav: true,
              navText: [" ", " "],
              autoplayTimeout: 2000,
              autoplayHoverPause: true,
              responsive: {
                  0: {
                      items: 2
                  },
                  600: {
                      items: 3
                  },
                  1000: {
                      items: 5
                  }
              }
          })
          $('#owl-tieubieu').owlCarousel({
              loop: 1,
              margin: 100,
              autoplay: 1,
              nav: true,
              navText: [" ", " "],
              autoplayTimeout: 2000,
              autoplayHoverPause: true,
              responsive: {
                  0: {
                      items: 1
                  },
                  600: {
                      items: 2
                  },
                  1000: {
                      items: 3
                  }
              }
          })
      });

  </script>

  <!-- Template Main JS File -->
