<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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

    // Get the form data
    $car_name = $_POST['carName'] ?? "";
    $brand = $_POST['brand'] ?? "";
    $plate_number = $_POST['plateNum'] ?? "";
    $car_type = $_POST['carType'] ?? "";
    $year = $_POST['year'] ?? "";
    $color = $_POST['color'] ?? "";
    $chassis_number = $_POST['chassisNum'] ?? "";
    $seat_type = $_POST['seatType'] ?? "";
    $seat_rate = $_POST['seatRate'] ?? "";

    // Handle the file upload
    $orcr_name = $_FILES['orcr_url']['name'] ?? "";
    $orcr_tmp_name = $_FILES['orcr_url']['tmp_name'] ?? "";
    $orcr_error = $_FILES['orcr_url']['error'] ?? "";

    if ($orcr_error == UPLOAD_ERR_OK) {
        $upload_dir = 'orcr_url';
        $upload_path = $upload_dir . basename($orcr_name);
        $upload_success = move_uploaded_file($orcr_tmp_name, $upload_path);

        if ($upload_success) {
            $orcr_url = $upload_path;
        } else {
            echo "Error uploading file.";
            exit;
        }
    } elseif (!empty($orcr_name)) {
        echo "Error uploading file.";
        exit;
    } else {
        $orcr_url = "";
    }

    // Insert the data into the database
    $sql = "INSERT INTO tbl_car(`carName`, `brand`, `plateNum`, `carType`, `year`, `color`, `chassisNum`, `orcr_url`, `seatType`, `seatRate`) 
        VALUES ('$car_name', '$brand', '$plate_number', '$car_type', '$year', '$color', '$chassis_number', '$orcr_url', '$seat_type', '$seat_rate')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Registration Succesful (Wait for the Confirmation)');</script>";
    } else {
        echo "<script>alert('Error');</script>" . $sql . "<br>" . $conn->error;
    }
}
?>
