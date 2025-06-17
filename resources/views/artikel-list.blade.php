<!doctype html>
<html lang="en-gb" class="no-js">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
    <title>Artikel Ija Rental – Informasi Seputar Rental Mobil di Padang</title> @include('partials.head')
  </head>
  <body data-spy="scroll" data-target="#main-menu">
    <!--Start Navigation--> @include('partials.navbar2')
    <!--End Navigation-->
    <!-- page-header -->
    <section id="artikel-rental-mobil-padang" class="parallax">
      <div class="overlay"></div>
      <div class="container">
        <h1>Artikel Ija Rental Mobil Padang</h1>
        <!--Start Breadcrumb-->
        <div class="breadcrumb">
          <ul></ul>
        </div>
        <!--End Breadcrumb-->
      </div>
    </section>
    <!-- /page-header -->
    <!--Start blog -->
    <section class="section">
      <div class="container">
        <div class="row">
          <div class="title-box text-center">
            <h2 class="title">Artikel Terbaru</h2>
            <p class="info">Baca berbagai artikel terbaru seputar tips, destinasi, dan layanan sewa mobil di Padang.</p>
          </div>
          <!-- Blog Post -->
          <div class="">
            <div class="post-content"></div> 
            @foreach ($blogs as $blog) 
            <div class="col-md-4">
              <a href="/artikel-{{ Str::slug($blog->judul) }}-{{ $blog->id }}">
                <div class="blog-post">
                  <div class="post-media">
                    <img src="{{ asset('storage/' . $blog->thumbnail) }}" alt="{{ $blog->judul }}">
                  </div>
                  <div class="post-desc">
                    <h4>{{ $blog->judul }}</h4>
                    <h5>{{ $blog->penulis }}/{{ $blog->published_at }}</h5>
                    <div class="konten">
                      <p>{!! $blog->konten !!}</p>
                    </div>
                    <div class="text-center">
                      <a href="/artikel-{{Str::slug($blog->judul) }}-{{ $blog->id }}" class="btn btn-read" data-lang-en="Read More" data-lang-id="Lanjut Baca">Lanjut Baca</a>
                    </div>
                  </div>
                </div>
              </a>
            </div> 
            @endforeach
          </div>
          <!-- /Blog Post -->
        </div>
      </div>
      <div style="margin-top: 10px" class="text-center mt-4">
        {{ $blogs->links('pagination::simple-default') }}
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
    <script>setActiveNavbar("/artikel");</script>
  </body>
</html>