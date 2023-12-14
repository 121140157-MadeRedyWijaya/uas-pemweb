<?php
//memulai sesi
session_start();

//mendefinisikan database
$host = "localhost";
$username = "root";
$password = "";
$dbname = "db_uaspemweb";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

// Validasi data
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $nama = $_POST["nama"];
  $makanan = implode(", ", $_POST["makanan"]);
  $jenis_pemesanan = $_POST["jenis_pemesanan"];
  $pengiriman = $_POST["pengiriman"];

  // Mengumpulkan informasi browser
  $browser = $_SERVER['HTTP_USER_AGENT'];

  // Mengumpulkan alamat IP
  $ip_address = $_SERVER['REMOTE_ADDR'];



  // Simpan data pemesanan ke database menggunakan prepared statement
  $query = "INSERT INTO pemesanan (nama, makanan, jenis_pemesanan, pengiriman, browser, ip_address) VALUES (?, ?, ?, ?, ?, ?)";
  $stmt = mysqli_prepare($conn, $query);

  // Bind parameter ke statement
  mysqli_stmt_bind_param($stmt, 'ssssss', $nama, $makanan, $jenis_pemesanan, $pengiriman, $browser, $ip_address);

  // Eksekusi statement
  mysqli_stmt_execute($stmt);

  // Tutup statement
  mysqli_stmt_close($stmt);

  // Tampilkan pesan sukses 
  echo json_encode(["success" => "Pemesanan berhasil."]);
}


?>