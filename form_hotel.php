<html>

<head>
    <title>Form Booking Hotel Transylvania</title>
</head>

<body>
    <form method="POST" action="tabel_hotel.php">
        <table>
            <tr>
                <td>Nama</td>
                <td>: <input type="text" name="name"></td>
            </tr>
                <tr>
                    <td>Alamat</td>
                    <td>: <input type="text" name="alamat"></td>
                </tr>
                    <tr>
                        <td>Check IN</td>
                        <td>: <input type="date" name="cekin"></td>
                    </tr>
                        <tr>
                            <td>Tipe Kamar</td>
                            <td>: <input type="radio" name="tipe_kamar" value="Deluxe"> Deluxe
                                <input type="radio" name="tipe_kamar" value="Standar"> Standar
                                <input type="radio" name="tipe_kamar" value="Ekonomi"> Ekonomi
                        </tr>
                            <tr>
                                <td>Nomor Kamar</td>
                                <td>: <input type="number" name="no_kamar"></td>
                            </tr>
                                <tr>
                                    <td>Lama Inap</td>
                                    <td>: <input type="number" name="lamainap"></td>
                                </tr>

        </table>
        <button type="submit">Submit</button>
    </form>
    <title> Biaya Kamar Hotel Transylvania </title>
    <table border="1" cellpadding="2" width>
        <thead>
            <tr>
                <th>Jenis Kamar</th>
                <th>Biaya Kamar</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>Deluxe</th>
                <th>RP 650.000,-/hari</th>
            </tr>
            <tr>
                <th>Standar</th>
                <th>RP 450.000,-/hari</th>
            </tr>
            <tr>
                <th>Ekonomi</th>
                <th>RP 300.000,-/hari</th>
            </tr>
        </tbody>
    </table>
</body>
</html>