<?php
    session_start();
    include "../../templates/connection.php";

    // Ambil input secara aman
    $Username = $_POST["Username"] ?? '';
    $pass  = $_POST["Password"] ?? '';

    // Validasi input kosong
    if (empty($Username) || empty($pass)) {
        header("Location: login.php?failed");
        exit;
    }

    // Siapkan statement SQL yang aman dari SQL Injection
    $stmt = $conn->prepare("SELECT * FROM users WHERE Username = ?");
    $stmt->bind_param("s", $Username);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    if ($row['Password'] == $pass){
        $_SESSION['Loged']       = true;
        $_SESSION['Username']    = $row['Username'];
        $_SESSION['Level']       = $row['Level'];

        header("Location: ../../pengguna/php/pengguna.php");
    } else {
        header("Location: login.php?failed");
    }

    $stmt->close();
    $conn->close();
?>