<?php

session_start();

if (!isset($_SESSION["kadi"])) {
    header("Location: login.php");
    exit;
}

require_once "fonksiyonlar.php";

$baglanti = baglan();

$baslik = trim($_POST["baslik_dizi"] ?? "");
$slogan = trim($_POST["slogan_dizi"] ?? "");
$icerik = trim($_POST["icerik_dizi"] ?? "");
$resim = trim($_POST["resim_dizi"] ?? "");
$kisa = trim($_POST["kısa_dizi"] ?? "");

if ($baslik === "" || $icerik === "") {
    die("Başlık ve içerik alanları zorunludur.");
}

$sorgu = mysqli_prepare(
    $baglanti,
    "INSERT INTO makale
    (baslik_dizi, slogan_dizi, icerik_dizi, resim_dizi, `kısa_dizi`)
    VALUES (?, ?, ?, ?, ?)"
);

if (!$sorgu) {
    die("Sorgu hazırlanamadı.");
}

mysqli_stmt_bind_param(
    $sorgu,
    "sssss",
    $baslik,
    $slogan,
    $icerik,
    $resim,
    $kisa
);

if (mysqli_stmt_execute($sorgu)) {
    header("Location: metin_listele.php");
    exit;
}

die("Kayıt eklenirken bir hata oluştu.");
