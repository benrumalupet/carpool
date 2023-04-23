<?php
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
    $user_role = $_POST["user_role"];
    $first_name = $_POST["first_name"];
    $middle_name = $_POST["middle_name"];
    $last_name = $_POST["last_name"];
    $phone_number = $_POST["phone_number"];


    // Insert the user's information into the database
    $sql = "INSERT INTO tbl_users (`username`, `password`, `email`, `uType`, `fName`, `mName`, `LName`, `pNum`) VALUES (' $username','$password', '$email', '$user_role', ' $first_name', ' $middle_name', '$last_name', '$phone_number')";

    if (mysqli_query($conn, $sql)) {
        echo "Registration successful!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
  header("Location: ./index.php");
}
?>