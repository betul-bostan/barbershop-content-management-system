<?php
require_once "fonksiyonlar.php";
$baglanti= baglan();
$kadi= mysqli_real_escape_string($baglanti,$_POST["kadi"]);
$ksifre= mysqli_real_escape_string($baglanti,$_POST["ksifre"]);

$sorgu="SELECT * FROM kullanicilar WHERE kadi='$kadi' AND ksifre='$ksifre'";

//echo $sorgu;
$sonuc=mysqli_query($baglanti,$sorgu);
if($sonuc){
    $count = mysqli_num_rows($sonuc);
    if($count>0){
        session_start();
        $_SESSION["kadi"]=$kadi;
        header("location:index.php");
    }else{
        echo "Eksik ya da hatalı bilgi";
    }
}




?>