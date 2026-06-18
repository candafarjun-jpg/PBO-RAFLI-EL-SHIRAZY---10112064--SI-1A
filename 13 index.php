<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tampil Data</title>
    <style>
        body { font-family: sans-serif; font-size: 12px; margin: 20px; line-height: 1.5; }
        table { border-collapse: collapse; margin: 5px 0 15px 0; font-size: 11px; }
        th, td { border: 1px solid #777; padding: 4px 6px; text-align: left; }
        th { background-color: #e6e6e6; }
        input[type="text"] { padding: 2px; font-size: 11px; }
        button, .btn { padding: 2px 6px; font-size: 11px; background: #e1e1e1; border: 1px solid #adadad; cursor: pointer; text-decoration: none; color: black; }
        .nav { font-weight: bold; color: blue; text-decoration: underline; word-spacing: 5px; margin-bottom: 10px; }
        .action-links a { color: blue; text-decoration: underline; }
    </style>
</head>
<body>

<?php

$customers = [
    ["CST0001", "3132042020231", "Mochammad Anwar", "Laki-laki", "Subang", "08523342342", "anwar_an@gmail.com"],
    ["CST0002", "9128327493433", "Rini Agustin", "Perempuan", "Bandung", "08734353454", "rini_agustin@gmail.com"]
];


$suppliers = [
    ["SUPP0001", "PT. Electronic City", "Jakarta", "08968968765", "ptindomarco@gmail.com"],
    ["SUPP0002", "PT. Megatron Elektronik", "Jakarta", "08953453463", "megatronelec@gmail.com"]
];
?>


<div class="nav">Beranda Data_Barang Data_Customer Data_Supplier Logout</div>

<div style="text-align: center; width: 600px; margin-bottom: 5px;">
    <input type="text" placeholder="Cari Nama Customer"> <button>Cari</button>
</div>

<button>Tambah Data</button> <button>Print Data Customer</button>

<table>
    <tr>
        <th>ID Customer</th>
        <th>NIK Customer</th>
        <th>Nama Customer</th>
        <th>Jenis Kelamin</th>
        <th>Alamat Customer</th>
        <th>Telepon Customer</th>
        <th>Email Customer</th>
        <th>Password Customer</th>
        <th>Action</th>
    </tr>
    <?php foreach ($customers as $c) : ?>
    <tr>
        <td><?= $c[0] ?></td>
        <td><?= $c[1] ?></td>
        <td><?= $c[2] ?></td>
        <td><?= $c[3] ?></td>
        <td><?= $c[4] ?></td>
        <td><?= $c[5] ?></td>
        <td><?= $c[6] ?></td>
        <td>***</td>
        <td class="action-links"><a href="#">Edit</a> <a href="#">Hapus</a></td>
    </tr>
    <?php endforeach; ?>
</table>

<input type="text" placeholder="Masukkan ID Customer"> <button>Print Data Satuan Customer</button>
<p><button>Keluar Aplikasi</button></p>

<br><hr style="border: 1px dashed #ccc;"><br>


<div class="nav">Beranda Data_Barang Data_Customer Data_Supplier Logout</div>

<div style="text-align: center; width: 600px; margin-bottom: 5px;">
    <input type="text" placeholder="Cari Nama supplier"> <button>Cari</button>
</div>

<button>Tambah Data</button> <button>Print Data supplier</button>

<table>
    <tr>
        <th>ID Supplier</th>
        <th>Nama Supplier</th>
        <th>Alamat Supplier</th>
        <th>Telepon Supplier</th>
        <th>Email Supplier</th>
        <th>Password Supplier</th>
        <th>Action</th>
    </tr>
    <?php foreach ($suppliers as $s) : ?>
    <tr>
        <td><?= $s[0] ?></td>
        <td><?= $s[1] ?></td>
        <td><?= $s[2] ?></td>
        <td><?= $s[3] ?></td>
        <td><?= $s[4] ?></td>
        <td>***</td>
        <td class="action-links"><a href="#">Edit</a> <a href="#">Hapus</a></td>
    </tr>
    <?php endforeach; ?>
</table>

<input type="text" placeholder="Masukkan ID Supplier"> <button>Print Data Satuan Supplier</button>
<p><button>Keluar Aplikasi</button></p>

</body>
</html>
