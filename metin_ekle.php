<?php
session_start();
if(isset($_SESSION["kadi"])){
    echo'
<!DOCTYPE html>
<html>
    <head></head>
    <body>
    <form action="islem.php" method="post">
        Betimleyici:<input type="text" name="kısa_dizi"><br>
        Baslik:<input type="text" name="baslik_dizi"><br>
        Slogan:<input type="text" name="slogan_dizi"><br>
        İçerik:<input type="text" name="icerik_dizi"><br>
        Resim Adı:<input type="text" name="resim_dizi"><br>
        <input type="submit" name="metin_kaydet" value="Kaydet">
    </form>    
    </body>
</html>';
//<form action="islem.php" method="post">

}
else{
    header("Location: login.php");
    exit;
}
?>
