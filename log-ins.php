<?php
session_start();
include 'connection.php';

if(isset($_POST['email']) && isset($_POST['password'])){

    $uEmail = $_POST['email'];
    $uPass = $_POST['password'];

    $sql = "SELECT * FROM tbl_users WHERE email = '$uEmail' AND password = '$uPass'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) == 1){
        // Login success
        $row = mysqli_fetch_assoc($result);
        $_SESSION['uID'] = $row['uID'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['uType'] = $row['uType'];
        $_SESSION['fName'] = $row['fName'];
        $_SESSION['mName'] = $row['mName'];
        $_SESSION['LName'] = $row['LName'];
        $_SESSION['pNum'] = $row['pNum'];
        if($_SESSION['uType'] == 'Passenger'){
            header("Location: passenger.php?user=".$row['uID']);
            exit();
        } else if($_SESSION['uType'] == 'Driver'){
            header("Location: driver.php?user=".$row['uID']);
            exit();
        }else if($_SESSION['uType'] == 'Admin'){
            header("Location: admin.php?user=".$row['uID']);
            exit();
        }

        header("Location: index.html"); // Redirect to home page
    } else {
        // Login failed, show alert message
        echo "<script>alert('Invalid email or password.')</script>";
        echo "<script>window.location.href='index.html';</script>";
    }
}
?>