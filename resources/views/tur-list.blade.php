<!doctype html>
<html lang="en-gb" class="no-js">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
    <title>Paket Wisata Ija Rental - Paket Wisata Keliling Padang Sumatera Barat</title> @include('partials.head')
  </head>
  <body data-spy="scroll" data-target="#main-menu">
    <!--Start Navigation--> @include('partials.navbar2')
    <!--End Navigation-->
    <!-- page-header -->
    <section id="artikel-rental-mobil-padang" class="parallax">
      <div class="overlay"></div>
      <div class="container">
        <h1>Paket Wisata Kota Padang Ija Rental</h1>
        <!--Start Breadcrumb-->
        <div class="breadcrumb">
          <ul></ul>
        </div>
        <!--End Breadcrumb-->
      </div>
    </section>
    <!-- /page-header -->
    <!--Start blog -->
    <section id="armada-ija-rental-mobil-padang" class="section">
      <div class="container">
        <div class="row">
          <div class="title-box text-center">
            <h2 class="title">Paket Wisata Padang</h2>
          <p class="info">Jelajahi Padang dengan paket wisata lengkap dan terjangkau. Perjalanan nyaman, pengalaman tak terlupakan!</p>
          </div>
          <!-- Start Blog item #1--> @foreach ($paketWisata as $paket) <div class="col-md-4">
            <a href="/detail-{{Str::slug($paket->nama_paket) }}-{{ $paket->id }}">
              <div class="blog-post">
                <div class="car-image-wrapper">
                  <img src="{{ asset('storage/' . $paket->image) }}" alt="{{ $paket->nama }}">
                </div>
                <div class="car-info">
                  <h3 class="car-title">{{ $paket->nama_paket }}</h3>
                  <div class="car-specs">
                    <div class="spec-item">
                      <i class="fa fa-clock"></i>
                      <span>Durasi {{ $paket->durasi }}</span>
                    </div>
                  </div>
                  <div class="car-footer">
                    <div class="car-price"> @if($paket->tambah_harga) <span>Rp.{{ number_format($paket->harga_paket, 0, ',', '.') }}</span> @else <span>Call</span> @endif </div>
                    <div class="car-buttons">
                      <a href="/detail-{{Str::slug($paket->nama_paket) }}-{{ $paket->id }}" class="btn btn-detail">Detail</a>
                      <a href="https://wa.me/6281268258986" target="_blank" class="btn btn-rent">Pesan</a>
                    </div>
                  </div>
                </div>
                <a></a>
              </div> @endforeach
          </div>
          <!--/.row-->
        </div>
        <!--/.container-->
    </section>
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