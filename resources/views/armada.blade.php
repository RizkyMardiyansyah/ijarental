<!doctype html>
<html lang="en-gb" class="no-js">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
    <title>Rental Mobil {{ $car->nama }} Terpercaya di Kota Padang</title> @include('partials.head')
  </head>
  <body data-spy="scroll" data-target="#main-menu">
    <!--Start Navigation--> 
    @include('partials.navbar2')
    <!--End Navigation-->
    <!--start page-header -->
    <section id="armada-rental-mobil-padang" class="parallax">
      <div class="overlay"></div>
      <div class="container">
        <h1>{{ $car->nama }}</h1>
        <!--Start Breadcrumb-->
        <!--End Breadcrumb-->
      </div>
    </section>
    <!--End page-header -->
    <!--Start single-work -->
    <script>
      function setImageHeight() {
        const workDetail = document.querySelector('.work-detail');
        const armadaImageContainer = document.querySelector('.armadaImageContainer');
    
          armadaImageContainer.style.height = workDetail.offsetHeight + 'px';
        
      }
    
      window.addEventListener('load', setImageHeight);
      window.addEventListener('resize', setImageHeight);
    </script>
    <section style="padding-top: 80px" id="single-work" class="section armada">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div style="padding-top: 20px;" class="item armadaImageContainer">
              <img src="{{ asset('storage/' . $car->image) }}" alt="Rental Mobil {{ $car->nama }} Padang">
            </div>
          </div>
          <!--Start Work Detail-->
          <div style="padding-top:20px" class="col-md-5 work-detail">
            <h3 class="margin-bottom-15">{{ $car->nama}} </h3>
            <p>{{ $car->deskripsi}}</p>
            <ul class="work-detail-list">
              <li>
                <span>Kapasitas </span>{{ $car->kapasitas }}
              </li>
              <li>
                <span>Durasi Rental</span>{{ $car->durasi_rental }}
              </li>
              <li>
                <span>Harga Termasuk</span>{{ $car->harga_termasuk }}
              </li>
              <li>
                <span>Harga</span>@if($car->tambah_harga) <span>Rp.{{ number_format($car->harga_sewa, 0, ',', '.') }}</span> @else <span>Call</span> @endif
              </li>
            </ul>
            <a href="https://wa.me/6281268258986" target="_blank" class="btn btn-read" style="width: auto;">Rental Sekarang</a>
          </div>
          <!--End Work Detail-->
        </div>
        <!--/ row-->
      </div>
      <!--/ container-->
    </section>
    
    <!--End single-work -->
    <!--Start Contact-->
    @include('partials.contact')
    <!--End Contact-->
    <!--Start Footer--> 
	@include('partials.footer')
    <!--End Footer-->
    <a href="#" class="scrollup">
      <i class="fa fa-chevron-up"></i>
    </a>
    <!--Plugins-->
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