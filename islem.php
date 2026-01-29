<?php
require_once "fonksiyonlar.php";
$baglanti = baglan();

$baslik_dizi=$_POST["baslik_dizi"];
$slogan_dizi=$_POST["slogan_dizi"];
$icerik_dizi=$_POST["icerik_dizi"];
$resim_dizi=$_POST["resim_dizi"];
$kısa_dizi=$_POST["kısa_dizi"];
$sorgu="INSERT INTO `makale`( `baslik_dizi`, `slogan_dizi`, `icerik_dizi`, `resim_dizi`, `kısa_dizi`) 
VALUES ('$baslik_dizi','$slogan_dizi', '$icerik_dizi', '$resim_dizi', '$kısa_dizi')";
//echo $sorgu;
$sonuc= mysqli_query($baglanti,$sorgu);
if($sonuc){
    header("location: metin_listele.php");
    //echo "Kayıt Başarıyla eklendi";
}else{
    echo "Hata var";
}

?>
