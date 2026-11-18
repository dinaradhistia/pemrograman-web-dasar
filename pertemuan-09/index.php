<?php
require_once 'data.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan & Tugas Pertemuan 9</title>
</head>

<body>
    <h2>Latihan 1</h2>
    <h3>Menampilkan Bilangan Kelipatan 3 & 5 (1 - 100)</h3>
    <ul>
        <?php
        for ($i = 1; $i <= 100; $i++) {
            if ($i % 3 == 0 && $i % 5 == 0) {
        ?>
                <li><?= $i; ?></li>
        <?php
            }
        }
        ?>
    </ul>

    <h2>Latihan 2</h2>
    <h3>Daftar Nilai Mahasiswa</h3>
    <table border="1" cellpadding="5" cellspacing="2">
        <thead>
            <tr>
                <th>NO</th>
                <th>NPM</th>
                <th>NAMA MAHASISWA</th>
                <th>NILAI</th>
                <th>KETERANGAN</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($mahasiswa as $mhs) :
            ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $mhs["npm"]; ?></td>
                    <td><?= $mhs["nama"]; ?></td>
                    <td><?= $mhs["nilai"]; ?></td>
                    <td><?= cekKelulusan($mhs["nilai"]); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>