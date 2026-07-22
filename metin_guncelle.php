<?php
session_start();
if(isset($_SESSION["kadi"])){
    require_once "fonksiyonlar.php";
    $baglanti=baglan();

    $id=$_GET["id"];
    echo $id;
    $sorgu= "SELECT * FROM `makale` WHERE makale_id=$id";
    $sonuc = mysqli_query($baglanti,$sorgu);
    if($sonuc){
        $satir=mysqli_fetch_array($sonuc);
        echo $satir["baslik_dizi"]."-".$satir["slogan_dizi"]."-".$satir["icerik_dizi"]."-".$satir["resim_dizi"]."-".$satir["kısa_dizi"];
        /*if($satir["ogrenci_cinsiyet"]==1){
            $ch1="checked";
            $ch2="";
        }else{
            $ch1="";
            $ch2="checked";
        }*/
        echo '
        <form action="update.php" method="post">
            <input type="hidden" name="makale_id" value="'.$id.'"><br>
            Betimleyici: <input type="text" name="kısa_dizi" value='.$satir["kısa_dizi"].'><br>
            Baslik: <input type="text" name="baslik_dizi" value='.$satir["baslik_dizi"].'><br>
            Slogan: <input type="text" name="slogan_dizi" value='.$satir["slogan_dizi"].'><br>
            İçerik: <input type="text" name="icerik_dizi" value='.$satir["icerik_dizi"].'><br>
            Resim Adı: <input type="text" name="resim_dizi" value='.$satir["resim_dizi"].'><br>
        '.$ch1.'<br>
            
            <input type="submit" name="metin_kaydet" value="Kaydet">
        </form>'; 
    }
}
else{
    header("Location:login.php");
    exit;
}
?>
