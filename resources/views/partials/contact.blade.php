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
                    <button type="submit" class="btn btn-message">SEND MESSAGE</button>
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