<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        h2 {
            text-align: center;
            margin-top: 50px;
        }
        form {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.3);
            border-radius: 5px;
        }
        label {
            display: inline-block;
            margin-bottom: 10px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="password"],
        input[type="email"],
        select {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            margin-top: 5px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #3e8e41;
        }
        a {
            display: block;
            margin-top: 20px;
            text-align: center;
            font-weight: bold;
        }
        input[type="reset"] {
            background-color: #f44336;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-left: 10px;
        }
        input[type="reset"]:hover {
            background-color: #d32f2f;
        }
        a {
            display: block;
            margin-top: 20px;
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h2>Registration Form</h2>
    <form method="post" action="insert.php">
        <label>Username:</label><br>
        <input type="text" name="username"><br>
            <label>Password:</label><br>
    <input type="password" name="password"><br>

    <label>Email:</label><br>
    <input type="email" name="email"><br>
    
    <label>User Role:</label><br>
    <select name="user_role">
        <option value="customer">Passenger</option>
        <option value="driver">Driver</option>
    </select>

    <label>First Name:</label><br>
    <input type="text" name="first_name"><br>

    <label>Middle Name:</label><br>
    <input type="text" name="middle_name"><br>

    <label>Last Name:</label><br>
    <input type="text" name="last_name"><br>

    <label>Phone Number:</label><br>
    <input type="text" name="phone_number" maxlength="11"><br>

    <br>
    <br>

    <input type="submit" name="register" value="Register">
    <input type="reset" name="clear" value="Clear">
</form>
<a href="registered_users.php">View Registered Users</a>
</body>
</html>