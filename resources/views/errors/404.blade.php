<!doctype html>
<html lang="en-gb" class="no-js">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
    <title>Rental Mobil Terpercaya Kota Padang di Ija Rental</title> @include('partials.head')
  </head>
  <body data-spy="scroll" data-target="#main-menu">
    <!--Start Navigation--> @include('partials.navbar')
    <!--End Navigation-->
    <!-- Start Slider  -->
    <section id="rental-mobil-padang" class="home">

      <div class="container" style="margin-top: 80px">
        <div class="serv container hero-text row text-center">
          <img style="width: 100%;" src="images/404.svg" alt="">
          <a href="/" 
             style="font-weight: bolder; width:300px; margin:30px auto;" 
             data-lang-en="Back to home page" 
             data-lang-id="Kembali Ke halaman utama" 
             type="submit" 
             class="btn btn-blue-border">
             Home Page
          </a>
        </div>
      </div>
      
      
    </section>
    {{-- Footer Section --}} 
    @include('partials.footer') 
    {{-- End Footer Section --}}
    <a href="#" class="scrollup">
      <i class="fa fa-chevron-up"></i>
    </a>
    <!--Plugins-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript" src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/owl-carousel/owl.carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.flexslider-min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/easing.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.easypiechart.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.appear.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.parallax-1.1.3.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.mixitup.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
  </body>
</html>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const navbar = document.getElementById('header');
    if (navbar) {
      navbar.classList.add('scrolled');
    }
  });

  window.addEventListener("scroll", function () {
      const header = document.getElementById("header");
      if (window.scrollY > 10) {
        header.classList.add("scrolled");
      } else {
        header.classList.add("scrolled");
      }
    });
</script>

