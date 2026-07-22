<?php
session_start();
if(isset($_SESSION["kadi"])){
    require_once "fonksiyonlar.php";
    $baglanti=baglan();
    $sorgu= "SELECT * FROM `makale`";
    $sonuc = mysqli_query($baglanti,$sorgu);
    echo '<table border="1">
    <tr><td>ID</td><td>Baslik</td><td>Slogan</td>
    <td>İçerik</td><td>Resim Adı</td></tr>';
    while($satir=mysqli_fetch_array($sonuc)){
        
        echo 
        '<tr>
            <td>'.$satir["makale_id"].'</td>
            <td>'.$satir["baslik_dizi"].'</td>
            <td>'.$satir["slogan_dizi"].'</td>
            <td>'.$satir["icerik_dizi"].'</td>
            <td>'.$satir["resim_dizi"].'</td>
            <td>'.$satir["kısa_dizi"].'</td>
        
            <td><a href="metin_guncelle.php?id='.$satir["makale_id"].'">Güncelle</a></td>
            <td><a href="metin_sil.php?id='.$satir["makale_id"]. '">Sil</a></td>
            <td><a href="goster.php?id='.$satir["makale_id"]. '">Göster</a></td>
        </tr>';

    }
    echo "</table>";
}else{
    header("Location:login.php");
    exit;
}
?>

