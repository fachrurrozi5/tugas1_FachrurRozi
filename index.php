<?php
$nama = "Ali";
$durasi = "3";
$kamar = "deluxe";
if($kamar = "deluxe"){
    $harga = 650000;
}
elseif($kamar = "standar"){
    $harga = 450000;
}
elseif($kamar = "ekonomi"){
    $harga = 300000;
}

$total = $harga * $durasi;

echo "Tagihan Atas Nama ". $nama  .  "Berjumlah"  .  $total;
?>