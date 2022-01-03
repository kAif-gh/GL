<?php include '../php/conn.php';   ?>

<?php
$user = $_POST['email'];
$pass = $_POST['pass'];
//$bo = FALSE;
if ($pass == "client") {
    header("Location: ../backend/index1.html");
} elseif ($pass == "admin") {
    header("Location: ../backend/index1.html");
}
//$result = mysqli_query($conn, "SELECT email, password FROM user");
/*while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    if ($row['email'] != $user) {
        $bo = FALSE;
    } else {
        if ($row['password'] != $pass) $bo = FALSE;
        else {
            if ($row['password'] == "client") {
                header("Location: ../backend/index1.html");
                $bo = true;
            } elseif ($row['password'] == "admin") {
                header("Location: ../backend/index.html");
                $bo = true;
            }
        }
    }
}
if ($bo == FALSE) echo "Erreur";
mysqli_free_result($result);
mysqli_close($conn);*/
?>