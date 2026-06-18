<?php

session_start();


$username_admin = "admin";
$password_admin = "admin123";


$error_message = "";
if (isset($_POST['login'])) {
    $username_input = $_POST['username'];
    $password_input = $_POST['password'];

    if ($username_input === $username_admin && $password_input === $password_admin) {
        $_SESSION['logged_in'] = true;
        $_SESSION['username'] = $username_input;
        header("Location: index.php"); // Refresh halaman setelah sukses login
        exit;
    } else {
        $error_message = "Username atau password salah!";
    }
}


if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    session_destroy();
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Manajemen Barang</title>
    
    <style>
        body { background-color: #f8f9fa; }
        .login-container { max-width: 400px; margin-top: 100px; }
    </style>
</head>
<body>

<?php 

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) : 
?>
    <div class="container login-container">
        <div class="card shadow">
            <div class="card-header bg-primary text-white text-center py-3">
                <h4 class="mb-0">Login Sistem Barang</h4>
            </div>
            <div class="card-body p-4">
                <?php if ($error_message !== ""): ?>
                    <div class="alert alert-danger py-2"><?= $error_message; ?></div>
                <?php endif; ?>
                
                <form action="index.php" method="POST">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan admin" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan admin123" required>
                    </div>
                    <button type="submit" name="login" class="btn btn-primary w-100 mt-2">Masuk</button>
                </form>
            </div>
        </div>
    </div>

<?php 

?>
   
    <nav class="navbar navbar-dark bg-info shadow-sm mb-4">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1 text-dark fw-bold">DATA BARANG</span>
            <div class="d-flex align-items-center">
                <span class="text-dark me-3">Halo, <strong><?= htmlspecialchars($_SESSION['username']); ?></strong></span>
                <a href="index.php?action=logout" class="btn btn-danger btn-sm">Keluar Aplikasi</a>
            </div>
        </div>
    </nav>

    <div class="container">
        
        <div class="row mb-3 align-items-center">
            <div class="col-md-6 mb-2 mb-md-0">
                <button class="btn btn-primary btn-sm me-1">+ Tambah Data</button>
                <button class="btn btn-info btn-sm text-dark fw-semibold">Cetak Data Barang</button>
            </div>
            <div class="col-md-6">
                <form class="d-flex justify-content-md-end">
                    <span class="align-self-center me-2 text-secondary text-nowrap">Cari berdasarkan :</span>
                    <select class="form-select form-select-sm me-2" style="width: auto;">
                        <option>Kode Barang</option>
                        <option>Nama Barang</option>
                    </select>
                    <input type="text" class="form-control form-control-sm me-2" style="width: 150px;">
                    <button type="button" class="btn btn-info btn-sm text-dark">Cari</button>
                </form>
            </div>
        </div>

        
        <div class="card shadow-sm">
            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle mb-0 text-center">
                    <thead class="table-light text-secondary small text-uppercase">
                        <tr>
                            <th style="width: 5%;">No</th>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Stok</th>
                            <th>Harga Beli</th>
                            <th>Harga Jual</th>
                            <th>Gambar Produk</th>
                            <th style="width: 15%;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2</td>
                            <td>BRG02</td>
                            <td class="text-start">Redmi Note 6</td>
                            <td>20</td>
                            <td class="text-end">Rp 2.200.000,00</td>
                            <td class="text-end">Rp 2.500.000,00</td>
                            <td>
                                <!-- Placeholder gambar kotak abu-abu jika file fisik belum ada -->
                                <div class="bg-secondary text-white mx-auto d-flex align-items-center justify-content-center rounded" style="width: 50px; height: 65px; font-size: 10px;">
                                    Redmi 6
                                </div>
                            </td>
                            <td>
                                <div class="d-grid gap-1 d-md-block">
                                    <button class="btn btn-info btn-sm text-white px-3 me-1">Edit</button>
                                    <button class="btn btn-danger btn-sm px-3">Hapus</button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php endif; ?>

<script src="https://jsdelivr.net"></script>
</body>
</html>
