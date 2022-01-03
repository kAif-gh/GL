<?php include '../php/conn.php';   ?>

<?php
$user = $_POST['login'];
$pass = $_POST['password'];
mysqli_query($conn, "DELETE FROM users WHERE login='$user' and password='$pass'");
mysqli_close($conn);
header("Location:./webmaster.php");
?>