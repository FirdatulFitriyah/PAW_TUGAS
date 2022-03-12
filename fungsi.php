<?php
// Membuat fungsi
function perkenalan($nama, $salam){
  echo $salam."<br/>";
  echo "Perkenalkan, nama saya ".$nama."<br/>";
}

// memanggil fungsi yang sudah dibuat
perkenalan("Firdatul", "Assalamualaikum");

  echo "<br>";

perkenalan("Putri", "Hallo");

  echo "<br>";

  $saya = "Fitriyah";
  $ucapanSalam = "Selamat Pagi";
  // memanggilnya lagi
  perkenalan($saya, $ucapanSalam);
?>