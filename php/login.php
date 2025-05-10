<?php
session_start();
$data = json_decode(file_get_contents("../users.json"), true);
$username = $_POST['username'];
$password = $_POST['password'];

foreach ($data as $user) {
  if ($user['username'] === $username && $user['password'] === $password) {
    $_SESSION['username'] = $username;
    header("Location: ../dashboard.html");
    exit();
  }
}
echo "<script>alert('Invalid credentials'); window.location.href = '../login.html';</script>";
?>
