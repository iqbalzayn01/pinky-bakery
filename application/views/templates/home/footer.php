    <!-- footer section start here  -->
    <footer class="footer" id="contact">
        <div class="box-container">
            <div class="mainBox">
                <div class="content">
                    <a href="#"><img src="images/logo.png" alt=""></a>
                    <h1 class="logoName"> Lokasi Toko </h1>
                </div>
                <p>Jln. Raya Cilebut Bridge III, Kota Bogor, 16312, Provinsi Jawa Barat, Indonesia</p><hr><br>
                <strong><p style="text-align: center;">Lets Order Cake Now!</p></strong>
            </div>

            <div class="box">
                <h3>Home Page</h3>
                <a href="<?= base_url('#home')?>"> <i class="fas fa-arrow-circle-right"></i>Home</a>
                <a href="<?= base_url('#product')?>"> <i class="fas fa-arrow-circle-right"></i>Produk</a>
                <a href="<?= base_url('#review')?>"> <i class="fas fa-arrow-circle-right"></i>Review</a>
            </div>

            <div class="box">
                <h3>Other Page</h3>
                <a href="<?= base_url('pages/contact')?>"> <i class="fas fa-arrow-circle-right"></i>Kontak</a>
                <a href="<?= base_url('pages/about')?>"> <i class="fas fa-arrow-circle-right"></i>Tentang Kami</a>
                <a href="<?= base_url('auth'); ?>"> <i class="fas fa-arrow-circle-right"></i>SignUp / Login</a>
            </div>

            <div class="box">
                <h3>Our Contact</h3>
                <a href="<?= base_url('pages/contact')?>"> <i class="fas fa-phone"></i>(021) 8274 6499</a>
                <a href="<?= base_url('pages/contact')?>"> <i class="fas fa-envelope"></i>co&cake_cake@shop.com</a>
                <a href="<?= base_url('pages/contact')?>"> <i class="fas fa-comment"></i>Contact Us</a>
            </div>
        </div>

        <div class="share">
            <a href="<?= base_url('pages/contact')?>" class="fab fa-facebook-f"></a>
            <a href="<?= base_url('pages/contact')?>" class="fab fa-twitter"></a>
            <a href="<?= base_url('pages/contact')?>" class="fab fa-instagram"></a>
        </div>

        <div class="credit">
           @2022 <span>Copyright Co&Cake</span> | All Rights and Copyrights Reserved  
        </div>
    </footer>
    <!-- footer section ends here  -->


    
    <!-- swiper js link  -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- js link file  -->
    <script src="<?= base_url('assets/_ref/index.js'); ?>"></script>

</body>

</html>