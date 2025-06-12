<!doctype html>
<html lang="en-gb" class="no-js">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
    <title>{{ $blog->judul }}</title> @include('partials.head')
  </head>
  <body data-spy="scroll" data-target="#main-menu">
    <!--Start Navigation--> @include('partials.navbar2')
    <!--End Navigation-->
    <!-- page-header -->
    <section id="artikel-rental-mobil-padang" class="parallax">
      <div class="overlay"></div>
      <div class="container">
        <h1>{{ $blog->judul }}</h1>
        <!--Start Breadcrumb-->
        <div class="breadcrumb">
          <ul>
            <li>
              <a>{{ $blog->penulis }} | {{ $blog->published_at}}</a>
            </li>
          </ul>
        </div>
        <!--End Breadcrumb-->
      </div>
    </section>
    <!-- /page-header -->
    <!--Start blog -->
    <section class="section">
      <div class="container">
        <div class="row">
          <!-- Blog Post -->
          <div class="col-md-8 col-sm-8">
            <div class="post-content">
              <!-- Post Image -->
              <div class="post-img">
                <img src="{{ asset('storage/' . $blog->thumbnail) }}" alt="{{ $blog->thumbnail }}">
              </div>
              <!-- /Post Image-->
              <!-- Post Meta-->
              <div class="post-meta">
                <ul class="list-inline">
                  <li>
                    <a href="#">
                      <i class="fa fa-calendar"></i>{{ $blog->published_at }}
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user"></i>by {{ $blog->penulis }}
                    </a>
                  </li>
                </ul>
              </div>
              <!-- /Post Meta-->
              <!-- Post Description -->
              <div class="post-description">
                <h3>{{ $blog->judul }}</h3>
                <p>{!! $blog->konten !!}</p>
              </div>
              <!-- /Post Description -->
            </div>
          </div>
          <!-- /Blog Post -->
          <!-- Right Sidebar -->
          <div class="col-md-4 col-sm-4">
            <div class="widget-main">
              <h4>Latest Post</h4> @foreach ($blogs as $blog) <div class="sidebar-widget clearfix d-flex">
                <div class="blog-thumbnail">
                  <a class="blogmedia" href="/artikel-{{ Str::slug($blog->judul) }}-{{ $blog->id }}">
                    <img src="{{ asset('storage/' . $blog->thumbnail) }}" alt="{{ $blog->judul }}">
                  </a>
                </div>
                <div class="blog-info">
                  <p class="sidebar-widget-title blog-title">
                    <a href="/artikel-{{ Str::slug($blog->judul) }}-{{ $blog->id }}">
                      {{ $blog->judul }}
                    </a>
                  </p>
                  <p class="date text-muted small">{{ \Carbon\Carbon::parse($blog->published_at)->format('Y-m-d') }}</p>
                </div>
              </div> @endforeach
            </div>
          </div>
          <!-- /right Sidebar -->
        </div>
        <!-- /row -->
      </div>
    </section>
    <!-- /blog -->
    <!--Start Contact-->
    @include('contact.footer')
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