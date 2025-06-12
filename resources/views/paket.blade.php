<!doctype html>
<html lang="en-gb" class="no-js">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
    <title>{{ $paket->nama_paket }}</title> @include('partials.head')
  </head>
  <body data-spy="scroll" data-target="#main-menu">
    <!--Start Navigation--> @include('partials.navbar2')
    <!--End Navigation-->
    <!--start page-header -->
    <section id="armada-rental-mobil-padang" class="parallax">
      <div class="overlay"></div>
      <div class="container">
        <h1>{{ $paket->nama_paket }}</h1>
        <!--Start Breadcrumb-->
        <!--End Breadcrumb-->
      </div>
    </section>
    <!--End page-header -->
    <!--Start single-work -->
    <section id="single-work" class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div class="item">
              <img src="{{ asset('storage/' . $paket->image) }}" alt="{{ $paket->nama_paket }}">
            </div>
          </div>
          <!--Start Work Detail-->
          <div class="col-md-5 work-detail">
            <h3 class="margin-bottom-15">{{ $paket->nama_paket}} </h3>
            <p>{{ $paket->deskripsi}}</p>
            <ul class="work-detail-list">
              <li>
                <span>Durasi</span>{{ $paket->durasi }}
              </li>
              <li>
                <span>Harga</span> @if($paket->tambah_harga) <span>Rp.{{ number_format($paket->harga_paket, 0, ',', '.') }}</span> @else <span>Call</span> @endif
              </li>
            </ul>
            <a href="https://wa.me/6281268258986" target="_blank" class="btn btn-blue-border">Pesan Sekarang</a>
          </div>
          <!--End Work Detail-->
        </div>
        <!--/ row-->
      </div>
      <!--/ container-->
    </section>
    <!--End single-work -->
    <!--Start Contact-->
    <section id="hubungi-ija-rental-mobil-padang" class="section">
      <div class=""></div>
      <div class="container">
        <div class="row">
          <div class="title-box text-center">
            <h2 class="title" data-lang-en="Contact Us" data-lang-id="Hubungi Kami"> Hubungi Kami </h2>
          </div>
        </div>
        <!--Start contact form-->
        <div class="contact-form">
          <div class="contact-info text-center">
            <p>+62812-6825-8986</p>
            <p>Jl. Gn. Tandikat No.35, Gn. Pangilun, Kec. Padang Utara, Kota Padang, Sumatera Barat 25173</p>
            <p>zaharman2017@gmail.com</p>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-md-6 map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127659.5175445589!2d100.27448837396881!3d-0.8685326467322902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b972245cd4ff%3A0x7447bcdddccd571a!2sResmi%20rental%20mobil%20padang!5e0!3m2!1sid!2sid!4v1749620249458!5m2!1sid!2sid" width="100%" height="310" style="border:0; border-radius:10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
              <div class="col-md-6 form">
                <form method="POST" action="{{ route('send.email') }}" id="contactForm"> @csrf <div class="row">
                    <div class="col-md-4">
                      <input type="text" name="website" style="display:none" tabindex="-1" autocomplete="off">
                      <input class="form-control" name="name" placeholder="Full Name" type="text" required>
                    </div>
                    <div class="col-md-4">
                      <input class="form-control" name="email" placeholder="Your Email" type="email" required>
                    </div>
                    <div class="col-md-4">
                      <input class="form-control" name="subject" placeholder="Subject" type="text" required>
                    </div>
                    <div class="col-md-12">
                      <textarea class="form-control" name="message" rows="7" placeholder="Your Message" required></textarea>
                    </div>
                    <div class="col-md-12 text-right">
                      <button type="submit" class="btn btn-message btn-blue-border">SEND MESSAGE</button>
                    </div>
                  </div>
                </form>
              </div> @if(session('success')) <script>
                document.addEventListener('DOMContentLoaded', function() {
                  Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: '{{ session('
                    success ') }}',
                    timer: 3000,
                    showConfirmButton: false
                  });
                  // Reset form setelah sukses
                  document.getElementById('contactForm').reset();
                });
              </script> @endif
            </div>
            <!-- end .row -->
          </div>
          <!-- end .container -->
        </div>
        <!--End contact form-->
      </div>
      <!-- /.container-->
    </section>
    <!--End Contact-->
    <!--Start Footer--> @include('partials.footer')
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