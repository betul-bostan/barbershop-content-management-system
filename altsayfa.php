<?php
    require_once "altsayfatema.php";
    $title= "tema parcalama";
    $id = $_GET["id"];
    enustkisim();
    mainkismi($baslik_dizi,$slogan_dizi,$icerik_dizi,$resim_dizi, $kısa_dizi);

    footerkismi();
?>