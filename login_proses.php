<?php
session_start();
include 'admin/koneksi.php';

$email    = $_POST['email'];
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT * FROM user WHERE email = ? AND password = ?");
$stmt->bind_param("ss", $email, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    $_SESSION['nama_pengguna'] = $user['nama_pengguna'];
    $_SESSION['role'] = $user['role'];
    $_SESSION['login'] = true;
    $_SESSION['login_success'] = true; 

    if ($user['role'] == 'admin') {
        header("Location: admin/index.php");
    } elseif ($user['role'] == 'owner') {
        header("Location: owner/index.php");
    }
    
} else {
    $_SESSION['login_error'] = true; 
    header("Location: index.php"); 
}

$stmt->close();
$conn->close();
?>
