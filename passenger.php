<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Passenger Page</title>
    <link rel="stylesheet" href="passenger.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <?php
    session_start();
    $id = $_SESSION['uID'];
    include 'connection.php';
    $sql = "SELECT * FROM tbl_users WHERE uID = '$id'";
    $query = $conn->query($sql);

    if (!$query) {
        echo "Error executing query: " . $conn->error;
    } else {
        $row = $query->fetch_array();
        // rest of your code here
    }
    ?>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="passenger.php">
            <div class="main-icon-without-slide icon-png-container pd-lv4" data-type="img"
                data-png="https://cdn-icons-png.flaticon.com/512/1611/1611733.png" data-id="1611733" data-premium="">
                <img src="   https://cdn-icons-png.flaticon.com/512/1611/1611733.png " width="70" height="70" alt=""
                    title="" class="img-small">
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="passenger.php">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item active" class="nav-item active"
                    style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%);">
                    <a id="logout-button" onclick="confirmLogout()"> Log Out </a>
                    <script>
                        function confirmLogout() {
                            if (confirm("Are you sure you want to log out?")) {
                                logout();
                            }
                        }

                        function logout() {
                            // add your logout functionality here
                            window.location.href = "index.html";
                        }
                    </script>
                    <style>
                        #logout-button {
                            display: inline-block;
                            padding: 8px 16px;
                            background-color: red;
                            color: white;
                            border: none;
                            border-radius: 4px;
                            cursor: pointer;
                        }
                    </style>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="row justify-content-center">
            <div class="content">
                <br><br>
                <?php echo "<h1 class='title'>Welcome to Carpool App Passenger, " . $row['fName'] . "!</h1>" ?>
                😊
                <p>Here you can find all the information you need to register as a driver with our Carpool App 🚗.</p>
                <button class="button"><a href="#">Edit Profile</a></button>
                <button class="button"><a href="car-regist.php">Register a Car</a></button>
                <button class="button"><a href="#">Registration Process</a></button>
            </div>
        </div>
    </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>