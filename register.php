<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>
    <h2>Registration Form</h2>
    <form method="post" action="register.php">
        <label>Username:</label><br>
        <input type="text" name="username"><br>

        <label>Password:</label><br>
        <input type="password" name="password"><br>

        <label>Email:</label><br>
        <input type="email" name="email"><br>

        <label>First Name:</label><br>
        <input type="text" name="first_name"><br>

        <label>Middle Name:</label><br>
        <input type="text" name="middle_name"><br>

        <label>Last Name:</label><br>
        <input type="text" name="last_name"><br>

        <label>Phone Number:</label><br>
        <input type="text" name="phone_number"><br>

        <label>User Role:</label><br>
        <select name="user_role">
            <option value="customer">Customer</option>
            <option value="driver">Driver</option>
        </select>

        <br>
        <br>
        </html>
        <input type="submit" name="register" value="Register">
    </form>
</body>
        <a href="registered_users.php">View Registered Users</a>
    </form>
</body>

</html>
