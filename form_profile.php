<html>

<head>
    <title>Form Profile Mahasiswa</title>
</head>

<body>
    <form method="POST" action="tabel_profile.php">
        <table>
            <tr>
                <td>NIM</td>
                <td>: <input type="number" name="nim"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>: <input type="text" name="name"></td>
            </tr>
            <tr>
                    <td>Gender</td>
                <td>: <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
                    <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
            </tr>
            <tr>
                <td>Status</td>
                <td>: <input type="radio" name="status" value="Menikah"> Menikah
                    <input type="radio" name="status" value="Belum Menikah"> Belum Menikah
            </tr>
            <tr>
                <td>No HP</td>
                <td>: <input type="number" name="no_hp"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>: <input type="text" name="alamat"></td>
            </tr>
        </table>
        <button type="submit">Submit</button>
    </form>
</body>
</html>