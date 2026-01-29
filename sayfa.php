<?php
    require_once "tema.php";
    $title= "tema parcalama";
    $id = $_GET["id"];
    head_ustkisim($title);
    siyah_ustkisim();
    header_menu();
   //$baslik_dizi=array("YUSUF ERKEK KUAFÖRÜ");
   //$slogan_dizi=array("basa sloganin bulundugu yer");
  
   // slogan_menu($baslik_dizi[$id],$slogan_dizi[$id]);
    slogan_menu();
    markalar_kismi();
    hakkinda_hizmetler_fiyat();
    kesim_modelleri();
    footer();
?>