<?php
if (!isset($_COOKIE['username'])) {
    // Jika belum login atau cookie sudah habis
    echo "
        <script>
            alert('Akses ditolak! Cookie tidak ditemukan atau sudah kadaluarsa.');
            window.location = 'login.php';
        </script>
    ";
    exit();
}

if (isset($_COOKIE["username"])) {
    echo "<h3>Cookie masih ada!</h3>";
    echo "<p>Isi cookie: <b>" . $_COOKIE["username"] . "</b></p>";
} else {
    echo "<h3>Cookie sudah hilang.</h3>";
}
echo '<a href="login.php">Log Out</a>';
?>
