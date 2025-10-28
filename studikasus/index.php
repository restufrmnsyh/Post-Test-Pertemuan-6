<?php
// Cek apakah user mengirim form dari login.php
if ($_SERVER["REQUEST_METHOD"] != "POST" || !isset($_POST["username"])) {
    // Jika tidak ada POST username maka redirect ke login.php
    header("Location: login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"]; // tidak dipakai

    if ($username === "admin") {
        setcookie("username", "eh admin...", time() + 5, "/"); // cookie "username" dengan isi "eh admin" untuk 5 detik
        $pesan = "Cookie dibuat! (akan hilang dalam 5 detik)";
    } else {
        $pesan = "Login gagal! (hanya username 'admin' yang bisa)";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Hasil Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
  <div class="container">
    <h3>Hasil Login</h3>
    <?php if ($username === "admin"): ?>
      <div class="alert <?= ($username === 'admin') ? 'alert-success' : 'alert-danger' ?>">
        <?= $pesan ?>
      </div>
         <a href="cekCookie.php" class="btn btn-success mt-3">Cek Cookie</a>
        <a href="login.php" class="btn btn-secondary mt-3">Log Out</a>

      <?php else: ?>
      <div class="alert alert-danger mt-3">
        Login gagal! (hanya username'admin' yang bisa)
      </div>
      <a href="login.php" class="btn btn-secondary">Kembali</a>
    <?php endif; ?>    

 
  </div>
</body>
</html>
