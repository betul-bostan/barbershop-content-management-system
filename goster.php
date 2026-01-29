<?php
function mainkismi($baslik_dizi,$slogan_dizi,$icerik_dizi,$resim_dizi, $kısa_dizi){
        $baglanti=baglan();
        $sorgu= "SELECT * FROM `makale`";
        $sonuc = mysqli_query($baglanti,$sorgu);
        while($satir=mysqli_fetch_array($sonuc)){
        echo '
        <div class="col-md-3 wrapper-product position-relative mb-5">
            <div class="wrapper-product position-relative">
                <div class="product-image position-relative">
                    <a href="">
                        <img src="fotolar/'.$satir["resim_dizi"].'" class="img-fluid" alt="buzz cut">
                    </a>
                    <div class="product-overlay">
                        <span class="product-tag text-orange fw-bold-600">Trend</span>
                        <span class="favorite"><i class="bi bi-heart"></i></span>
                        <span class="unfavorite"><i class="bi bi-heart-fill"></i></span>
                        <a href="" class="product-brand text-orange fw-bold-600">
                            '.$satir["kısa_dizi"].'
                        </a>
                    </div>
                </div>
                <div class="product-info text-center pt-3">
                    <h4 class="product-title">'.$satir["baslik_dizi"].'</h4>
                    <div class="text-muted product-description">
                        '.$satir["slogan_dizi"].'
                    </div>
                    <a href="" class="product-price text-orange">'.$satir["icerik_dizi"].'</a>
                </div>
            </div>';
}

               
}


?>