<?php
session_start();
require_once "fonksiyonlar.php";
$baglanti = baglan();
$id=$_POST["makale_id"];
$baslik_dizi = $_POST["baslik_dizi"];
$slogan_dizi = $_POST["slogan_dizi"];
$icerik_dizi = $_POST["icerik_dizi"];
$resim_dizi = $_POST["resim_dizi"];
$kısa_dizi = $_POST["kısa_dizi"];

$sorgu = "UPDATE `makale` SET `baslik_dizi`='$baslik_dizi',
`slogan_dizi`='$slogan_dizi' , `icerik_dizi`='$icerik_dizi' , `resim_dizi`='$resim_dizi', `kısa_dizi`='$kısa_dizi' WHERE 
makale_id=$id";
$sonuc=mysqli_query($baglanti,$sorgu);
if($sonuc){
    header("location:metin_listele.php");
    //echo "Kayıt başarıyla güncellendi";
}else{
    echo "Problem var";
}
?>
