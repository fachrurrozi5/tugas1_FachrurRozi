<?php
$nama = $_POST['name'];
$alamat = $_POST['alamat'];
$cekin = $_POST['cekin'];
$tipe_kamar = $_POST['tipe_kamar'];
$no_kamar = $_POST['no_kamar'];
$lamainap = $_POST['lamainap'];
    if($tipe_kamar == "Deluxe"){
        $biaya = 650000;
            }
    elseif($tipe_kamar == "Standar"){
        $biaya = 450000;
            }
    elseif($tipe_kamar == "Ekonomi"){
        $biaya = 300000;
            }
            
$totalbayar = $biaya * $lamainap;
?>

<html>
<head>
    <title> Form Booking Hotel Transylvania</title>
</head>

<table border="1" cellpadding="7" width>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pelanggan</th>
                <th>Alamat</th>
                <th>Tanggal Check In</th>
                <th>Jenis Kamar</th>
                <th>Nomor Kamar</th>
                <th>Biaya</th>
                <th>Lama Inap</th>
                <th>Total Bayar</th>
            </tr>
        </thead>
        <tbody>

            <tr>
            <td> 1 </td>
            <td><?= $nama;?></td>
            <td><?= $alamat;?></td>
            <td><?= $cekin;?></td>
            <td><?= $tipe_kamar;?></td>
            <td><?= $no_kamar;?></td>
            <td><?= $biaya;?></td>
            <td><?= $lamainap;?></td>
            <td><?= $totalbayar;?></td>
            </tr>
            <tr>
            <td colspan = "8" align="center">Total Seluruh</td>
            <td><?= $totalbayar;?></td>
            </tbody>
</table>