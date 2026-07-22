<?php

require_once "fonksiyonlar.php";

$baglanti = baglan();

$kadi = trim($_POST["kadi"] ?? "");
$ksifre = $_POST["ksifre"] ?? "";

if ($kadi === "" || $ksifre === "") {
    die("Kullanıcı adı ve şifre zorunludur.");
}

$sorgu = mysqli_prepare(
    $baglanti,
    "SELECT kadi, ksifre FROM kullanicilar WHERE kadi = ? LIMIT 1"
);

mysqli_stmt_bind_param($sorgu, "s", $kadi);
mysqli_stmt_execute($sorgu);

$sonuc = mysqli_stmt_get_result($sorgu);
$kullanici = mysqli_fetch_assoc($sonuc);

if ($kullanici && password_verify($ksifre, $kullanici["ksifre"])) {
    session_start();
    session_regenerate_id(true);

    $_SESSION["kadi"] = $kullanici["kadi"];

    header("Location: index.php");
    exit;
}

echo "Kullanıcı adı veya şifre hatalı.";
