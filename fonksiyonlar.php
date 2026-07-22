<?php

function baglan(): mysqli
{
    $host = getenv("DB_HOST") ?: "localhost";
    $user = getenv("DB_USER") ?: "root";
    $password = getenv("DB_PASSWORD") ?: "";
    $database = getenv("DB_NAME") ?: "phpuygulama";

    $baglanti = mysqli_connect($host, $user, $password, $database);

    if (!$baglanti) {
        die("Veritabanı bağlantısı kurulamadı.");
    }

    mysqli_set_charset($baglanti, "utf8mb4");

    return $baglanti;
}

