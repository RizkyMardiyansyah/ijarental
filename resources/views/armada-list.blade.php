<!doctype html>
<html lang="en-gb" class="no-js">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
    <title>Daftar Armada Ija Rental – Sewa Mobil di Padang dengan Armada Terlengkap</title> @include('partials.head')
  </head>
  <body data-spy="scroll" data-target="#main-menu">
    <!--Start Navigation--> @include('partials.navbar2')
    <!--End Navigation-->
    <!-- page-header -->
    <section id="armada-rental-mobil-padang" class="parallax">
      <div class="overlay"></div>
      <div class="container">
        <h1>Armada Ija Rental Mobil Padang</h1>
        <!--Start Breadcrumb-->
        <div class="breadcrumb">
          <ul></ul>
        </div>
        <!--End Breadcrumb-->
      </div>
    </section>
    <!-- /page-header -->
    <!--Start fleet-->
    <section id="armada-ija-rental-mobil-padang" class="section">
      <div class="container">
        <div class="row">
          <div class="title-box text-center">
            <h2 class="title">Daftar Armada Kami</h2>
          <p class="info">Armada mobil terawat di Padang dengan harga terjangkau hanya di Ija Rental.</p>
          </div>
          <!-- Start Blog item #1--> @foreach ($cars as $car) <div class="col-md-4">
            <a href="/{{Str::slug($car->nama) }}-{{ $car->id }}">
              <div class="blog-post">
                <div class="car-image-wrapper">
                  <img src="{{ asset('storage/' . $car->image) }}" alt="Rental Mobil {{ $car->nama }} Padang">
                </div>
                <div class="car-info">
                  <h3 class="car-title">{{ $car->nama }}</h3>
                  <div class="car-specs">
                    <div class="spec-item">
                      <i class="fa fa-users"></i>
                      <span>Kapasitas {{ $car->kapasitas }}</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-clock"></i>
                      <span>Durasi Rental {{ $car->durasi_rental }}</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-check-circle"></i>
                      <span>Harga Termasuk {{ $car->harga_termasuk }}</span>
                    </div>
                  </div>
                  <div class="car-footer">
                    <div class="car-price"> @if($car->tambah_harga) <span>Rp.{{ number_format($car->harga_sewa, 0, ',', '.') }}</span> @else <span>Call</span> @endif </div>
                    <div class="car-buttons">
                      <a href="/{{Str::slug($car->nama) }}-{{ $car->id }}" class="btn btn-detail">Detail</a>
                      <a href="https://wa.me/6281268258986" target="_blank" class="btn btn-rent">Rental</a>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div> @endforeach
        </div>
        <!--/.row-->
      </div>
      <!--/.container-->
    </section>
    {{-- end fleet --}}
        {{-- </div> --}}
      </div>
      <div style="margin-top: 10px" class="text-center mt-4">
        {{ $cars->links('pagination::simple-default') }}
      </div>
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
    <script>setActiveNavbar("/#layanan-ija-rental-mobil-padang");</script>
  </body>
</html>