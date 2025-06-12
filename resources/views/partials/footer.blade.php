    {{-- Footer --}}
    <div class="footer container-fluid bg-dark text-light py-5">
        <div class="container">
            <div class="row">
                <!-- Logo -->
                <div style="margin-bottom: 20px;"  class="col-lg-3 col-md-6 col-12 flex-column ">
                    <img src="../images/Ij_rental_logo_putih.svg" alt="Ija Rental Mobil Padang" class="footer-logo me-3" style="height: 40px;">
                    <a href="#" style="color: inherit; text-decoration: none;">
                        <p style="margin-top:20px;"><b>Jl. Gn. Tandikat No.35</b>, Gn. Pangilun, Kec. Padang Utara, Kota Padang, Sumatera Barat 25173</p>
                    </a>
                </div>
                
                <!-- About us -->
                <div style="margin-bottom: 20px;" class="col-lg-3 col-md-6 col-12 text-left">
                    <h6 style="font-weight:bolder" data-lang-en="Ija Rental Padang" data-lang-id="Ija Rental Padang">Ija Rental Padang</h6>
                    <a href="/#layanan-ija-rental-mobil-padang" style="color: inherit; text-decoration: none;">
                        <p  data-lang-en="Our Services" data-lang-id="Layanan Kami">Layanan Kami</p>
                    </a>
                    <a href="/armada" style="color: inherit; text-decoration: none;">
                        <p data-lang-en="Our Fleet" data-lang-id="Armada Kami">Armada kami</p>
                    </a>
                    <a href="/paket-wisata" style="color: inherit; text-decoration: none;">
                        <p href="/#tur-ija-rental-mobil-padang" data-lang-en="Padang Tour" data-lang-id="Paket Wisata Padang">Paket Wisata Padang</p>
                    </a>
                    
                </div>

                <!-- Our Services -->
                <div style="margin-bottom: 20px;" class="col-lg-3 col-md-6 col-12 text-left">
                    <h6 style="font-weight:bolder">Menu</h6>
                    <a href="/#kenapa-memilih-ija-rental-mobil-padang" style="color: inherit; text-decoration: none;">
                        <p data-lang-en="Why Choose Ija Rental" data-lang-id="Kenapa memilih Ija Rental">Kenapa memilih Ija Rental</p>
                    </a>
                    <a href="/artikel" style="color: inherit; text-decoration: none;">
                        <p data-lang-en="Travel Articles" data-lang-id="Artikel Wisata">Artikel Wisata</p>
                    </a>
                    <a href="/faq" style="color: inherit; text-decoration: none;">
                        <p  data-lang-en="FAQ" data-lang-id="Pertanyaan Tentang Kami">Pertanyaan Tentang Kami</p>
                    </a>
                </div>

                <!-- Contact Us -->
                <div style="margin-bottom: 20px;" class="col-lg-3 col-md-6 col-12 text-left">
                    <h6 style="font-weight:bolder" data-lang-en="Contact Us" data-lang-id="Hubungi Kami">Contact Us</h6>
                    <a href="mailto:hi@mardsoft.com" style="color: inherit; text-decoration: none;">
                        <p>zaharman2017@gmail.com</p>
                    </a>
                    <a style="margin-top: 10px;" href="https://wa.me/6281268258986" target="_blank" class="btn btn-message" data-lang-en="Get in Touch" data-lang-id="Hubungi Kami">
                        Get in Touch
                    </a>
                </div>
            </div>

            <!-- Footer Bawah -->
            <div style="margin-top: 10px" class="row align-items-center">
                <!-- Social Media Icons Section -->
                <div style="justify-content: center; align-item:center; display:flex;" class="order-md-2 col-lg-6 col-md-6 col-12 d-flex justify-content-lg-end justify-content-md-end justify-content-start">
                    <footer class="mt-4 ml-md-auto">
                  
                        <a href="https://www.facebook.com/ija.doank.39" target="_blank" class="me-3" style="color: inherit; text-decoration: none;" title="Facebook">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="https://www.instagram.com/resmirentalmobilpadang/" target="_blank" class="me-3" style="color: inherit; text-decoration: none;" title="Instagram">
                            <i class="fab fa-instagram "></i>
                        </a>
                    </footer>
                </div>
                <!-- Copyright Section -->
                <div style="justify-content: center; align-item:center; display:flex;" class="order-md-1 copyright col-lg-6 col-md-6 col-12 ">
                    <footer class="mt-4 text-left">
                        <p style="text-transform:capitalize;" class="mb-0">
                            Copyright <span id="year"></span>,  <span style="margin-left: 10px">{{ ucfirst(strtolower(config('app.name'))) }}.</span>
                        </p>
                        
                        <script>
                            document.getElementById("year").textContent = new Date().getFullYear();
                        </script>
                    </footer>
                </div>
            </div>
        </div>
    </div>