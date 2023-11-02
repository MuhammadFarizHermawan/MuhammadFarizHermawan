<?php
// Include config
include 'dbconfig.php'; 
session_start(); // Start the session

// Check 'username' and 'password' parameters
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Use prepared statements to prevent SQL injection
    $query = mysqli_prepare($connect, "SELECT * FROM userdb WHERE username = ?");
    mysqli_stmt_bind_param($query, "s", $username);
    mysqli_stmt_execute($query);
    $result = mysqli_stmt_get_result($query);

    if ($row = mysqli_fetch_assoc($result)) {
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $username;
            $_SESSION['status'] = "login";
            header("location:../dasboard.php");
            exit;
        } else {
            $_SESSION['error'] = "Username atau Password salah";
            header("location:../login.php");
            exit;
        }
    } else {
        $_SESSION['error'] = "Username atau Password salah";
        header("location:../login.php");
        exit;
    }
} else {
    $_SESSION['error'] = "Username atau Password tidak boleh kosong";
    header("location:../login.php");
    exit;
}

// Close prepared statement
mysqli_stmt_close($query);

// Close db connection (if it's not done already)
mysqli_close($connect);
?>
