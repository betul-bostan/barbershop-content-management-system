<?php
function head_ustkisim($title){
echo ' 
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>'.$title.'</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Playfair:ital,opsz,wght@0,5..1200,300..900;1,5..1200,300..900&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <link rel="stylesheet" href="style.css">

    </head>
    <body> ';
}
function siyah_ustkisim(){
echo '
    <div class="ust-bolum bg-black">
            <div class="container">
                <div class="giris float-end">
                    <ul class="giris-listesi">
                        <li><a href="" class="text-white"><i class="bi bi-facebook" style="font-size: 30px;"></i></a></li>
                        <li><a href="" class="text-white"><i class="bi bi-instagram"></i></a></li>
                        <li><a href="" class="text-white"><i class="bi bi-whatsapp"></i></a></li>
                        <li><a href="" class="text-white"><i class="bi bi-youtube"></i></a></li>
                        <li class="dropdown kullanici-bildirimi position-relative">
                            <a href="#" class="dropdown-toggle"
                            role="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="bi bi-bell zoom text-white" style="float: left;"></i>
                            <span class="bildirim-sayisi bg-orange text-black">13</span>
                        </a>
                        <div class="dropdown-menu">
                            <div class="row kaydirma-cubugu">
                                <div class="col-12">
                                    <div class="bildirim border-0">
                                        <div class="row">
                                            <div class="col-4">
                                                <img src="fotolar/unlem.jpeg" alt="" class="img-fluid rounded-start">
                                                <!--rounded-start başladığı yerden yuvarlıklık ver-->
                                            </div>
                                            <div class="col-8">
                                                <div class="bildirim-ici">
                                                    <h5 class="bildirim-basligi">Bildirim Başlığı</h5>
                                                    <p class="bildirim-yazisi">Bildirim İçeriği</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <hr class="my-4">
                                </div>
                                <div class="col-12">
                                    <div class="bildirim border-0">
                                        <div class="row">
                                            <div class="col-4">
                                                <img src="fotolar/unlem.jpeg" alt="" class="img-fluid rounded-start">
                                                <!--rounded-start başladığı yerden yuvarlıklık ver-->
                                            </div>
                                            <div class="col-8">
                                                <div class="bildirim-ici">
                                                    <h5 class="bildirim-basligi">Bildirim Başlığı</h5>
                                                    <p class="bildirim-yazisi">Bildirim İçeriği</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <hr class="my-4">
                                </div>
                                <div class="col-12">
                                    <div class="bildirim border-0">
                                        <div class="row">
                                            <div class="col-4">
                                                <img src="fotolar/unlem.jpeg" alt="" class="img-fluid rounded-start">
                                                <!--rounded-start başladığı yerden yuvarlıklık ver-->
                                            </div>
                                            <div class="col-8">
                                                <div class="bildirim-ici">
                                                    <h5 class="bildirim-basligi">Bildirim Başlığı</h5>
                                                    <p class="bildirim-yazisi">Bildirim İçeriği</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <hr class="my-4">
                                </div>
                            </div>
                        </div>
                        </li>
                     </ul>
                </div>
            </div>
        </div>';
}
function header_menu(){
echo '
 <header>
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img src="fotolar/weblogo2.jpeg" alt="Logo" class="logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                            <li class="nav-item active dropdown">
                                <a class="nav-link active dropdown-toggle" aria-current="page" href="#"
                                    data-bs-toggle="dropdown"
                                    role="button">
                                    EKSTRALAR
                                </a>
                                <div class="dropdown-menu">
                                    <div class="row">
                                        <div class="col-md-9 navbar-brands">
                                            <h4 class="mb-4">TÜM EKSTRA İŞLERİMİZ</h4>
                                            <div class="row">
                                                <div class="col ekstra-cubugu">
                                                    <a href="product-list.html" class="dropdown-link">Vişne</a>
                                                    <a href="#" class="dropdown-link">Kiraz</a>
                                                    <a href="#" class="dropdown-link">Kayısı</a>
                                                    <a href="#" class="dropdown-link">Elma</a>
                                                    <a href="#" class="dropdown-link">Armut</a>
                                                    <a href="#" class="dropdown-link">Nohut</a>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <h4 class="mb-4">GÖRSELLER</h4>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="nav-brand-swiper swiper-container">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide">
                                                                <a href="">
                                                                    <img src="fotolar/visne1.jpeg" class="img-fluid" alt="">
                                                                </a>                                                                                
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a href="">
                                                                    <img src="fotolar/kiraz.jpeg" class="img-fluid" alt="">
                                                                </a>                                                                                
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a href="">
                                                                    <img src="fotolar/kayısı.jpeg" class="img-fluid" alt="">
                                                                </a>                                                                                
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a href="">
                                                                    <img src="fotolar/elma.jpeg" class="img-fluid" alt="">
                                                                </a>                                                                                
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a href="">
                                                                    <img src="fotolar/armut.jpeg" class="img-fluid" alt="">
                                                                </a>                                                                                
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a href="">
                                                                    <img src="fotolar/nohut.jpeg" class="img-fluid" alt="">
                                                                </a>                                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#hakkımızda">HAKKIMIZDA</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="modeller.html">MODELLER</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#hizmetler">HİZMETLER</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#fiyat">FİYATLAR</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#iletişim">İLETİŞİM</a>
                            </li>
                        </ul>
                    </div>
                    <div class="nav-right">
                        <a href="#" class="search-open">
                            <i class="bi bi-search zoom"></i>
                        </a>
                        <div class="search-inside">
                            <i class="bi bi-x search-close"></i>
                            <div class="search-overlay"></div>
                            <div class="position-center-center">
                                <div class="search animate__animated animate__backInUp">
                                    <form action="" name="search" id="arama">
                                        <input type="search" placeholder="Arama">
                                        <button type="submit"><i class="bi bi-check-circle"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>';
}
function slogan_menu(){
echo '
  <section class="slider position-relative bg-orange mt-2">
            <div class="home-swiper swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slide" style="height: 100%;">
                            <img src="fotolar/beyaz.jpeg" alt="">
                        </div>
                        <div class="slider-title">
                            <div class="baslik-kismi">
                                <h3 style="font-family: playfair;">YUSUF ERKEK KUAFÖRÜ</h3>
                                <h2>SAÇLARINIZ EN İYİSİNİ HAK EDİYOR</h2>
                                <a href="" class="btn btn-outline-dark text-center mt-3">RANDEVU AL</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="fotolar/beyaz.jpeg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="fotolar/beyaz.jpeg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="fotolar/beyaz.jpeg" alt="">
                    </div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </section>
    ';
}
function markalar_kismi(){
    echo '
       <section class="kullanilan-markalar position-relative mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 position-relative">
                        <h3 class="fw-bold-600">KULLANDIĞIMIZ MARKALAR</h3>
                        <div id="brandPrev" class="swiper-button-prev"></div>
                        <div id="brandNext" class="swiper-button-next"></div>
                    </div>
                    <div class="col-12">
                        <div class="brand-swiper mt-4">
                            <div class="swiper-wrapper text-center">
                                <div class="swiper-slide">
                                    <div class="brand-slider">
                                        <a href="">
                                            <img src="fotolar/clear-men.jpeg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-slider">
                                        <a href="">
                                            <img src="fotolar/clear-men.jpeg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-slider">
                                        <a href="">
                                            <img src="fotolar/clear-men.jpeg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-slider">
                                        <a href="">
                                            <img src="fotolar/clear-men.jpeg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-slider">
                                        <a href="">
                                            <img src="fotolar/clear-men.jpeg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-slider">
                                        <a href="">
                                            <img src="fotolar/clear-men.jpeg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-slider">
                                        <a href="">
                                            <img src="fotolar/clear-men.jpeg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-slider">
                                        <a href="">
                                            <img src="fotolar/clear-men.jpeg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-slider">
                                        <a href="">
                                            <img src="fotolar/clear-men.jpeg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-slider">
                                        <a href="">
                                            <img src="fotolar/clear-men.jpeg" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    ';
}
function hakkinda_hizmetler_fiyat(){
    echo '
     <section class="hizmetler-bolumu-resmi position-relative mt-5">
            <div class="col-12">
                <div id="hakkımızda" class="banner position-relative">
                    <img src="fotolar/hakkımızda1.jpeg" class="web-banner" alt="">
                </div>
            </div>
        </section>
        <section id="hizmetler" class="slider position-relative bg-orange mt-5">
            <div class="home-swiper swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="fotolar/secenek1.jpeg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="fotolar/secenek2.jpeg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="fotolar/secenek3.jpeg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="fotolar/secenek4.jpeg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="fotolar/secenek5.jpeg" alt="">
                    </div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </section>
         <section class="hizmetler-bolumu-resmi position-relative mt-5">
            <div class="col-12">
                <div id="fiyat" class="banner position-relative mb-5" style="height: 500px;">
                    <img src="fotolar/fiyat.jpeg" class="web-banner" alt="">
                </div>
            </div>
        </section>';
}
function kesim_modelleri(){
    echo ' <section class="sezon-kesim-modelleri position-relative my-5 py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 position-relative">
                        <h3 class="fw-bold-600">SEZONUN ÖNE ÇIKAN SAÇ KESİM MODELLERİ</h3>
                        <div id="seasonPrev" class="swiper-button-prev"></div>
                        <div id="seasonNext" class="swiper-button-next"></div>
                    </div>
                    <div class="col-12">
                        <div class="season-product-swiper mt-4">
                            <div class="swiper-wrapper text-center">
                                <div class="swiper-slide">
                                    <div class="wrapper-product position-relative">
                                        <div class="product-image position-relative">
                                            <a href="">
                                                <img src="fotolar/buzzcut1.jpeg" class="img-fluid" alt="buzz cut">
                                            </a>
                                            <div class="product-overlay">
                                                <span class="product-tag text-orange fw-bold-600">Trend</span>
                                                <span class="favorite"><i class="bi bi-heart"></i></span>
                                                <span class="unfavorite"><i class="bi bi-heart-fill"></i></span>
                                                <a href="" class="product-brand text-orange fw-bold-600">
                                                    Kısa Ve Modern
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-info text-center pt-3">
                                            <h4 class="product-title">BUZZ CUT</h4>
                                            <div class="text-muted product-description">
                                                Minimalist Ve Maskülen
                                            </div>
                                            <a href="" class="product-price text-orange">Kısa Kenarlar Ve <br> Hafif Bir Üst Kısım</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="wrapper-product position-relative">
                                        <div class="product-image position-relative">
                                            <a href="">
                                                <img src="fotolar/fade.jpeg" class="img-fluid" alt="fade">
                                            </a>
                                            <div class="product-overlay">
                                                <span class="product-tag text-orange fw-bold-600">Trend</span>
                                                <span class="favorite"><i class="bi bi-heart"></i></span>
                                                <span class="unfavorite"><i class="bi bi-heart-fill"></i></span>
                                                <a href="" class="product-brand text-orange fw-bold-600">
                                                    Kenarlar Yukarı
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-info text-center pt-3">
                                            <h4 class="product-title">FADE</h4>
                                            <div class="text-muted product-description">
                                                Modern Ve Temiz
                                            </div>
                                            <a href="" class="product-price text-orange">Tüm Saç Tipine Ve Uzunluğuna <br>Uyumlu Zarif Geçişli</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="wrapper-product position-relative">
                                        <div class="product-image position-relative">
                                            <a href="">
                                                <img src="fotolar/pompadour.jpeg" class="img-fluid" alt="pompadour">
                                            </a>
                                            <div class="product-overlay">
                                                <span class="product-tag text-orange fw-bold-600">Trend</span>
                                                <span class="favorite"><i class="bi bi-heart"></i></span>
                                                <span class="unfavorite"><i class="bi bi-heart-fill"></i></span>
                                                <a href="" class="product-brand text-orange fw-bold-600">
                                                    Retro Şıklığı
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-info text-center pt-3">
                                            <h4 class="product-title">POMPADOUR</h4>
                                            <div class="text-muted product-description">
                                                Sofistike Ve Çekici
                                            </div>
                                            <a href="" class="product-price text-orange">Saçın Üst Kısmında <br>Yoğun Hacim</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="wrapper-product position-relative">
                                        <div class="product-image position-relative">
                                            <a href="">
                                                <img src="fotolar/slickback.jpeg" class="img-fluid" alt="buzz cut">
                                            </a>
                                            <div class="product-overlay">
                                                <span class="product-tag text-orange fw-bold-600">Trend</span>
                                                <span class="favorite"><i class="bi bi-heart"></i></span>
                                                <span class="unfavorite"><i class="bi bi-heart-fill"></i></span>
                                                <a href="" class="product-brand text-orange fw-bold-600">
                                                    Mat Ve Doğal
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-info text-center pt-3">
                                            <h4 class="product-title">SLİCK BACK</h4>
                                            <div class="text-muted product-description">
                                                Klas Ve Ciddi
                                            </div>
                                            <a href="" class="product-price text-orange">Geriye Doğru Taranmış <br>Şık Saç Modeli</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="wrapper-product position-relative">
                                        <div class="product-image position-relative">
                                            <a href="">
                                                <img src="fotolar/crewcut.jpeg" class="img-fluid" alt="buzz cut">
                                            </a>
                                            <div class="product-overlay">
                                                <span class="product-tag text-orange fw-bold-600">Trend</span>
                                                <span class="favorite"><i class="bi bi-heart"></i></span>
                                                <span class="unfavorite"><i class="bi bi-heart-fill"></i></span>
                                                <a href="" class="product-brand text-orange fw-bold-600">
                                                    Bakımı Kolay
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-info text-center pt-3">
                                            <h4 class="product-title">CREW CUT</h4>
                                            <div class="text-muted product-description">
                                                Düzenli Ve Temiz
                                            </div>
                                            <a href="" class="product-price text-orange">Kısa Ve Sadeliği İle <br>Şıklıktan Ödün Vermeyenlere</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="wrapper-product position-relative">
                                        <div class="product-image position-relative">
                                            <a href="">
                                                <img src="fotolar/undercut.jpeg" class="img-fluid" alt="buzz cut">
                                            </a>
                                            <div class="product-overlay">
                                                <span class="product-tag text-orange fw-bold-600">Trend</span>
                                                <span class="favorite"><i class="bi bi-heart"></i></span>
                                                <span class="unfavorite"><i class="bi bi-heart-fill"></i></span>
                                                <a href="" class="product-brand text-orange fw-bold-600">
                                                    Dikkat Çekici
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-info text-center pt-3">
                                            <h4 class="product-title">UNDER CUT</h4>
                                            <div class="text-muted product-description">
                                                Cesur ve Modern
                                            </div>
                                            <a href="" class="product-price text-orange">Yanlardan Kısa Kesim<br>Üstlerin İse Daha Uzun Bırakılması </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="wrapper-product position-relative">
                                        <div class="product-image position-relative">
                                            <a href="">
                                                <img src="fotolar/texturedfringe.jpeg" class="img-fluid" alt="buzz cut">
                                            </a>
                                            <div class="product-overlay">
                                                <span class="product-tag text-orange fw-bold-600">Trend</span>
                                                <span class="favorite"><i class="bi bi-heart"></i></span>
                                                <span class="unfavorite"><i class="bi bi-heart-fill"></i></span>
                                                <a href="" class="product-brand text-orange fw-bold-600">
                                                    Perçem
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-info text-center pt-3">
                                            <h4 class="product-title">TEXTURED FRİNGE</h4>
                                            <div class="text-muted product-description">
                                                Hacim Ve Doku
                                            </div>
                                            <a href="" class="product-price text-orange">Alnı Geniş Olan Erkekler <br>İçin Önlerden Hacim</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="wrapper-product position-relative">
                                        <div class="product-image position-relative">
                                            <a href="">
                                                <img src="fotolar/quiff.jpeg" class="img-fluid" alt="buzz cut">
                                            </a>
                                            <div class="product-overlay">
                                                <span class="product-tag text-orange fw-bold-600">Trend</span>
                                                <span class="favorite"><i class="bi bi-heart"></i></span>
                                                <span class="unfavorite"><i class="bi bi-heart-fill"></i></span>
                                                <a href="" class="product-brand text-orange fw-bold-600">
                                                    Hacim
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-info text-center pt-3">
                                            <h4 class="product-title">QUİFF</h4>
                                            <div class="text-muted product-description">
                                                Klasik İle Modern
                                            </div>
                                            <a href="" class="product-price text-orange">Öne Doğru Hacimli <br>Şekillendirilen Model</a>
                                        </div>
                                    </div>
                                </div>
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>';
}
function footer(){
    echo '

    <footer id="iletişim" class="position-relative">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h6 class="text-white">ADRES <br></h6>
                <ul class="link">
                    <li><a href="#">Cumhuriyet Mahallesi</a></li>
                    <li><a href="#">4. Sokak</a></li>
                    <li><a href="#">No:47/A</a></li>
                    <li><a href="#">Çubuk/ANKARA</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h6 class="text-white">ÇALIŞMA GÜNLERİ</h6>
                <ul class="link">
                    <li><a href="#">Pazartesi</a></li>
                    <li><a href="#">Salı</a></li>
                    <li><a href="#">Çarşamba</a></li>
                    <li><a href="#">Perşembe</a></li>
                    <li><a href="#">Cuma</a></li>
                    <li><a href="#">Cumartesi</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h6 class="text-white">ÇALIŞMA SAATLERİ</h6>
                <ul class="link">
                    <li><a href="#">09:00-22:00</a></li>
                    <li><a href="#">09:00-22:00</a></li>
                    <li><a href="#">09:00-22:00</a></li>
                    <li><a href="#">09:00-22:00</a></li>
                    <li><a href="#">09:00-22:00</a></li>
                    <li><a href="#">09:00-22:00</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h6 class="text-white">TELEFON <br></h6>
                <ul class="link">
                    <li><a href="#">0202 345 78 37</a></li>
                    
                </ul>
            </div>
        </div>
    </div>
</footer>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="javascript/main.js"></script>
<script>
    var swiper = new Swiper(".home-swiper", {
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
</script>
<script>
    var navBrandSwiper = new Swiper(".nav-brand-swiper",{
        speed: 1400,
        navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      autoplay:{
        delay:1000,
        pauseOnMouseEnter: true,

      }
    });
</script>
<script>
    var brandSwiper = new Swiper(".brand-swiper",{
        speed: 1400,
        navigation: {
        nextEl: "#brandNext",
        prevEl: "#brandPrev",
      },
      autoplay:{
        delay:1000,
        pauseOnMouseEnter: true,

      },
      breakpoints: {
        320: {
            slidesPerView: 2,
        },
        640: {
            slidesPerView:3,
        },
        768: {
            slidesPerView: 4,
        },
        1024: {
            slidesPerView: 6,
        },
      }
    });
</script>
<script>
    var seasonProductSwiper = new Swiper(".season-product-swiper",{
        speed: 1400,
        navigation: {
        nextEl: "#seasonNext",
        prevEl: "#seasonPrev",
      },
      autoplay:{
        delay:1000,
        pauseOnMouseEnter: true,

      },
      breakpoints: {
        
        1024: {
            slidesPerView: 4,
            spaceBetween:20
        },
      }
    });
</script>
</body>
</html>
    ';
}


?>