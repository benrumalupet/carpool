<!DOCTYPE html>
<html>

<head>
    <title>Signup</title>
    <link rel="stylesheet" href="signup.css">
</head>

<body>
    <form method="post" action="insert.php">
        <h2>Registration Form</h2>
        <label>Username:</label><br>
        <input type="text" name="username" required><br>
        <label>Password:</label><br>
        <input type="password" name="password" required><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br>


        <label>First Name:</label><br>
        <input type="text" name="first_name" required><br>

        <label>Middle Name:</label><br>
        <input type="text" name="middle_name" required><br>

        <label>Last Name:</label><br>
        <input type="text" name="last_name" required><br>

        <label>Phone Number:</label><br>
        <input type="text" name="phone_number" maxlength="11" required><br>

        <br>
        <br>

        <input type="submit" name="register" value="Register">
        <input type="reset" name="clear" value="Clear">
    
        <div class="form-group" style="text-align: center;">
            <p>Already have an account? <span style="display: inline-block;"><a href="index.html">Login Here</a></span>
            </p>
            
        </div>
        </div>

</body>

</html>