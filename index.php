<?php
session_start();
if(isset($_SESSION["kadi"])){
    echo "<h1>Hoşgeldin  ".$_SESSION["kadi"]."</h1>";
    echo'
    <ul>
        <li><a href="metin_ekle.php">Model Ekle</a></li>  
        <li><a href="metin_listele.php">Model Listele</a></li>  
        <li><a href="logout.php">Oturumu Kapat</a></li>  
    </ul>';
}else{
    header("location:login.php");
}
?>
