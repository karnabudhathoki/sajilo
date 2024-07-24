<?php
include("connection.php");
session_start();

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($db_connect) {
        $sql = "SELECT fullname FROM user_register WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($db_connect, $sql);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['fullname'] = $row['fullname'];
            $_SESSION['email'] = $email ;
            header("Location: viewpage.php");
            exit();
        } else {
            echo "<script>alert('Invalid username or password');</script>";
        }
    } else {
        echo "Database connection failed!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login form</title>
    <link rel="stylesheet" href="login.css" />
    <!-- <script type="text/javascript" src="index.js" defer></script> -->
</head>
<body>
    <div class="main">
        <h1>Welcome<br>to</h1>
        <h2>Sajilo Upaya</h2>
        <form method="POST" action="">
            <label for="first">Email:</label>
            <input type="text" name="email" required>

            <label for="password">Password:</label>
            <input type="password" name="password" required>

            <div class="wrap">
                <button type="submit" name="submit" class="submit">Login</button>
            </div>
        </form>
        <p>Not registered? <a href="Register.php" style="text-decoration: none;">Create an account</a></p>
    </div>
</body>
</html>
