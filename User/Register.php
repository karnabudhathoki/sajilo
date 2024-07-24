<?php
// Include the connection file
include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <link rel="stylesheet" href="Register.css"/>
</head>
<body>
    <div class="main">
        <h2>Sajilo Upaya</h2>
        <form method="POST">
            <label for="first">Full Name:</label>
            <input type="text" id="first" name="first" required />
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required />
            <label for="mobile">Contact:</label>
            <input type="text" id="mobile" name="mobile" maxlength="10" required />
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" pattern="^(?=.*\d)(?=.*[a-zA-Z])(?=.*[^a-zA-Z0-9])\S{8,}$" title="Password must contain at least one number, one alphabet, one symbol, and be at least 8 characters long" required />
            <label for="repassword">Confirm Password:</label>
            <input type="password" id="repassword" required />
            <input type="submit" name="submit" value="Sign Up">
        </form>
        <?php
        session_start();
        if (isset($_POST['submit'])) {
            $name = $_POST['first'];
            $email = $_POST['email'];
            $contact = $_POST['mobile'];
            $password = $_POST['password'];
            // Ensure the connection is successful
            if ($db_connect) {
                // Prepare the SQL query
                $sql = "INSERT INTO user_register (fullname, email, contact, password) VALUES ('$name', '$email', '$contact', '$password')";
                
                // Execute the query
                $res = mysqli_query($db_connect, $sql);

                // Check if the query was successful
                if ($res) {
                    // Registration successful, set session variables and redirect
                    $_SESSION['fullname'] = $name;
                    $_SESSION['email'] = $email;
                    header("Location: viewpage.php");
                } else {
                    // Query failed, output error
                    echo "Registration failed! Please try again.";
                }
            } else {
                // Connection failed, output error
                echo "Database connection failed!";
            }
        }
        ?>
    </div>
</body>
</html>
