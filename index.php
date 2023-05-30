<?php
include('includes/navbar.php');
?>

<main>
    <!-- header -->
    <header>
        <!-- This div is  intentionally blank. It creates the transparent black overlay over the video which you can modify in the CSS -->
        <div class="overlay"></div>
        <!-- The HTML5 video element that will create the background video on the header -->
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="img/background.mp4" type="video/mp4">
        </video>
        <!-- The header content -->
        <div class="container h-100">
            <div class="d-flex h-100 text-center align-items-center">
                <div class="w-100 text-white">
                    <h1 class="display-3">Daerah Istimewa Yogyakarta</h1>
                    <p class="lead mb-0">Daerah Istimewa Yogyakarta (disingkat DIY, Jawa: ꦝꦌꦫꦃꦆꦱ꧀ꦠꦶꦩꦺꦮꦪꦺꦴꦒꦾꦏꦂꦠ,
                        pengucapan bahasa Jawa:
                        [ŋajogjɔ'kart̪ɔ], pelafalan tidak resmi: Jogja/Jogjakarta) adalah Daerah Istimewa setingkat
                        provinsi
                        di Indonesia yang merupakan peleburan dari Negara Kesultanan Yogyakarta dan Negara Kadipaten
                        Paku
                        Alaman.</p>
                    <a class="btn btn-warning p-2 m-2" href="#1" role="button">Jelajahi Sekarang</a>
                </div>
            </div>
        </div>
    </header>
    <!-- header end-->
    <!-- Content -->
    <div class="mx-auto mt-5 mb-5 p-4 shadow" style="width: 80vw; background-color: #F5F5F5;">

        <h4 style="color:#62311F;">Kota Yogyakarta</h4>
        <div class="mt-4 container">
            <div class="row">
                <div class="col">
                    <img src="img/contenthome2.jpg" alt="">
                </div>
                <div class="col">
                    <h1 class="mx-auto mt-1 mb-1">Motto</h1>
                    <p class=" display-6">YOGYAKARTA BERHATI NYAMAN yang merupakan kependekan dari Yogyakarta Bersih,
                        Sehat, Asri, dan Nyaman (yang menjadi slogan Kota Yogyakarta dan dapat ditemui di beberapa
                        tempat strategis di wilayah Pemerintahan Kota Yogyakarta), dan julukan KOTA GUDEG, KOTA
                        PENDIDIKAN, dan KOTA BUDAYA</p>
                </div>
            </div>
        </div>
        <p class="mt-4 mb-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/HS-6lQQfaKg"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
            </div>
            <p class="mt-4 mb-1">

            <h4 style="color:#62311F;">Peta Wilayah</h4>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-9">
                        <iframe id="1"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63245.97085555823!2d110.33364507052718!3d-7.803248457453288!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5787bd5b6bc5%3A0x21723fd4d3684f71!2sYogyakarta%2C%20Kota%20Yogyakarta%2C%20Daerah%20Istimewa%20Yogyakarta!5e0!3m2!1sid!2sid!4v1684502909605!5m2!1sid!2sid"
                            width="800" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            </header>
            <!-- Content End -->
</main>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>