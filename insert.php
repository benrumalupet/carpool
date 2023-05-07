<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

// Check if the form has been submitted
if (isset($_POST['register'])) {
 

    // Connect to the database
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "carpoolrgstr";

    $conn = mysqli_connect($host, $username, $password, $database);

    // Check if the connection was successful
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $first_name = $_POST["first_name"];
    $middle_name = $_POST["middle_name"];
    $last_name = $_POST["last_name"];
    $phone_number = $_POST["phone_number"];


    // Insert the user's information into the database
    $sql = "INSERT INTO tbl_users (username, password, email, uType, fName, mName, LName, pNum) VALUES (' $username','$password', '$email', 'Passenger', ' $first_name', ' $middle_name', '$last_name', '$phone_number')";

    $mail =new PHPMailer(true);
    // $mail->SMTPDebug = SMTP::DEBUG_OFF; 
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
  
    $mail->Username = 'urobot22@gmail.com';
    $mail->Password = 'rxfxvbnrewknbgoc';
    $mail->SMTPSecure = "tls";
    $mail->Port = 587;
    //Recipients
  
    $mail->setFrom('urobot22@gmail.com', 'CarpoolApp');
    $mail->addAddress($email);
    $mail->isHTML(true);
    $mail->Subject = 'Email verification';
  
    $message = "<p><b style='font-size: 30px;'>Carpool App</b><hr><br>Greetings!, <b> $first_name! </b>
                The last step for your verification is clicking this link below! Have a Great day! ♥
                  <a href='http://localhost/romecita/subdomain/carpool_app/verify-email.php?email=$email'><br>Verifying Email Address</a>";
    $mail->Body = $message;
    $mail->send();
  
  
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Registration Succesful (Check Email for the Verification)');</script>";
    } else {
      echo "<script>alert('ERROR!');</script>" . mysqli_error($conn);
    }
    //Email is Exist
    $email_exist = "SELECT email FROM tbl_users WHERE email='$email' LIMIT 1";
    $email_exist_run = mysqli_query($conn, $email_exist);
  
    // Close the database connection
    mysqli_close($conn);
    header("Location: ./index.html");
  }


    // Close the database connection


?>