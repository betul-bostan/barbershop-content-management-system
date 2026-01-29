<?php
session_start();
require_once "fonksiyonlar.php";
$baglanti=baglan();
$id=$_GET["id"];
$sorgu= "DELETE FROM `makale` WHERE makale_id=$id";
$sonuc = mysqli_query($baglanti,$sorgu);
if($sonuc){
    header("location:metin_listele.php");
}else{
    echo "Problem var";
}
?>
