<!DOCTYPE html>
<html>
<head>
<title>Form Produk</title>
</head>
<body>
<h2>Input Data Produk</h2>
<form action="proses_produk.php" method="POST">
Nama Produk :
<input type="text" name="nama"><br><br>
Harga :
<input type="number" name="harga"><br><br>
<input type="submit" value="Simpan">
</form>
</body>
</html>

<?php
$nama  = $_POST['nama'];
$harga = $_POST['harga'];
echo "<h2>Data Produk</h2>";
echo "Nama Produk : " . $nama . "<br>";
echo "Harga : Rp " . $harga;
?>

 
<?php
class Produk {
public $nama;
public $harga;
}
$produk1 = new Produk();
$produk1->nama  = 
htmlspecialchars($_POST['nama']);
$produk1->harga = 
htmlspecialchars($_POST['harga']);
echo "<h2>Data Produk</h2>";
echo "Nama Produk : " . $produk1->nama . "<br>";
echo "Harga : Rp " . $produk1->harga;
?>
<?php
class Produk {
public $nama;
public $harga;
}

$produk1 = new Produk();
$produk1->nama  = 
htmlspecialchars($_POST['nama']);
$produk1->harga = 
htmlspecialchars($_POST['harga']);
echo "<h2>Data Produk</h2>";
echo "Nama Produk : " . $produk1->nama . "<br>";
echo "Harga : Rp " . $produk1->harga;
?>
