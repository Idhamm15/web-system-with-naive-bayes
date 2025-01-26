<footer id="footer" class="footer dark-background" style="margin-top: 300px;">

<div class="container footer-top">
    <div class="row gy-4">
    <div class="col-lg-4 col-md-6 footer-about">
        <a href="index.html" class="logo d-flex align-items-center">
        <span class="sitename">Klasifikasi Naive Bayes</span>
        </a>
        <div class="footer-contact pt-3">
        <p>A108 Adam Street</p>
        <p>New York, NY 535022</p>
        <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
        <p><strong>Email:</strong> <span>info@example.com</span></p>
        </div>
        <div class="social-links d-flex mt-4">
        <a href=""><i class="bi bi-twitter-x"></i></a>
        <a href=""><i class="bi bi-facebook"></i></a>
        <a href=""><i class="bi bi-instagram"></i></a>
        <a href=""><i class="bi bi-linkedin"></i></a>
        </div>
    </div>

    <div class="col-lg-2 col-md-3 footer-links">
        <h4>Halaman</h4>
        <ul>
        <li><a href="{{ url('/') }}">Beranda</a></li>
        <li><a href="{{ url('/data-perawat') }}">Data Perawat</a></li>
        <li><a href="{{ url('/skrining-penyakit') }}">Skrining Penyakit</a></li>
        <li><a href="{{ url('/prediksi-penyakit') }}">Prediksi Penyakit</a></li>
        </ul>
    </div>

    <div class="col-lg-2 col-md-3 footer-links">
        <h4>Layanan</h4>
        <ul>
            <li><a href="{{ url('/skrining-penyakit') }}">Skrining Penyakit</a></li>
            <li><a href="{{ url('/prediksi-penyakit') }}">Prediksi Penyakit</a></li>
        </ul>
    </div>

    <div class="col-lg-4 col-md-12 footer-newsletter">
        <h4>Berita Terbaru</h4>
        <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
        <form action="forms/newsletter.php" method="post" class="php-email-form">
        <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
        <div class="loading">Loading</div>
        <div class="error-message"></div>
        <div class="sent-message">Your subscription request has been sent. Thank you!</div>
        </form>
    </div>

    </div>
</div>

<div class="container copyright text-center mt-4">
    <p>© <span>Copyright</span> <strong class="px-1 sitename">Klasifikasi Naive Bayes</strong> <span>All Rights Reserved</span></p>
    <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you've purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed by <a href="https://themewagon.com">ThemeWagon
    </div>
</div>

</footer>