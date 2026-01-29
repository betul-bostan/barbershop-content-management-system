<?php
$id = $_GET['id'];
$sorgu = "SELECT * FROM makale WHERE id = $id";
$sonuc = mysqli_query($baglanti, $sorgu);
$satir = mysqli_fetch_array($sonuc);


?>