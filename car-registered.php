<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Driver Page</title>
    <link rel="stylesheet" href="passenger.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>Successful Registrants</title>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img src="https://em-content.zobj.net/source/skype/289/automobile_1f697.png"
                srcset="https://em-content.zobj.net/source/skype/289/automobile_1f697.png 2x"
                alt="Automobile on Skype Emoticons 1.2" width="80" height="80"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="driver.php">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">About</a>
                </li>
            </ul>
        </div>
    </nav>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        img {
            max-width: 100px;
            max-height: 100px;
        }
    </style>
</head>

<body>
    <h1>Successful Registrants</h1>
    <table>
        <tr>
            <th>Car Name</th>
            <th>Brand</th>
            <th>Plate Number</th>
            <th>Car Type</th>
            <th>Year</th>
            <th>Color</th>
            <th>Chassis Number</th>
            <th>ORCR</th>
            <th>Seat Type</th>
            <th>Seat Rate</th>
        </tr>
        <?php
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

        $sql = "SELECT * FROM tbl_car";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['carName'] . "</td>";
                echo "<td>" . $row['brand'] . "</td>";
                echo "<td>" . $row['plateNum'] . "</td>";
                echo "<td>" . $row['carType'] . "</td>";
                echo "<td>" . $row['year'] . "</td>";
                echo "<td>" . $row['color'] . "</td>";
                echo "<td>" . $row['chassisNum'] . "</td>";
                if (!empty($row['orcr_url'])) {
                    echo "<td><img src='orcr_url/" . $row['orcr_url'] . "' alt='ORCR Image' width='100' height='100'></td>";
                } else {
                    echo "<td>No Image</td>";
                }
                echo "<td>" . $row['seatType'] . "</td>";
                echo "<td>" . $row['seatRate'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='10'>No registrants found</td></tr>";
        }

        // Close the database connection
        mysqli_close($conn);
        ?>


    </table>
</body>
<br><br>
<a onclick="history.back()" class="btn btn-m btn-success">Back</a>

</html>