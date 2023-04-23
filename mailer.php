<?php
    session_start();
   require 'conn.php';
   use PHPMailer\PHPMailer\PHPMailer;
   use PHPMailer\PHPMailer\SMTP;
   use PHPMailer\PHPMailer\Exception;
 
   require 'phpmailer/src/Exception.php';
   require 'phpmailer/src/PHPMailer.php';
   require 'phpmailer/src/SMTP.php';
   function sendemail_verify($fname,$midname,$lastname,$email,$Confirmed){
                $mail = new PHPMailer(true);
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
 
                $message= "<p><b style='font-size: 30px;'>Carpool App</b><hr><br>Greetings!, <b> $fname! </b>
                The last step for your verification is clicking this link below! Have a Great day! ♥
                <a href='http://localhost/CarpoolApp/verify-email.php?token=$Confirmed'><br>Verifying Email Address</a>";
                $mail->Body = $message;
                $mail->send();
                // echo 'Message has been sent';
   }
   if(isset($_POST['send'])){
 
        //GET THE DATA FROM THE FORM
        require 'connect.php';
        $fname = $_POST['fName'];
        $midname = $_POST['mName'];
        $lastname = $_POST['LName'];
        $contact = $_POST['pNum'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $Confirmed = "Registered";
 
        //Email is Exist
        $email_exist = "SELECT email FROM userstbl WHERE email='$email' LIMIT 1";
        $email_exist_run = mysqli_query($connection, $email_exist);
 
        if(mysqli_num_rows($email_exist_run) > 0){
 
            echo "Email already Exists!";
            header('Location:index.php');
        }else{
            // Insert User /
            $query = "INSERT INTO tbl_users (user_firstname, user_midname, user_lastname,user_contactnum,user_email,user_address,user_password,user_confirmation) VALUES ('$fname','$midname','$lastname','$address', '$contact','$email','$password', 'Registered')";
            $query_run = mysqli_query($connection, $query);
 
            if($query_run){
                 sendemail_verify("$fname","$lname","$email","$Confirmed");
                 echo "<center><h1>Check your email for the verification link</h1> </center>";
            }else{
                echo "Registered Failed";
                header('Location:index.php');
            }
 
        }
 
   }
?>