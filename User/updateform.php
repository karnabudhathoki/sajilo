<?php
    include('connection.php');
    if (isset($_GET['email'])){
        $email = $_GET['email'];
        if($db_connect){
            $sql = "SELECT* FROM user_register WHERE email= '$email' " ;
            $result = mysqli_query($db_connect, $sql);

            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                // print_r($row['fullname']);die();
            }else {
                echo "<script>alert('Invalid username or password');</script>";
            }
        }else{
            echo "No database found ...";
        }
    }else {
        echo "No name found .. . ";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
     
    <title>Update</title>
    <link rel="stylesheet" href="updateform.css"/>
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Update Here</h2>
        <form action="update.php" method="post" class="profile-form">
            <div class="form-group">
                <label for="first-name">Full name</label>
                <input type="text" id="first-name" name="first-name"  value="<?php echo htmlspecialchars($row['fullname']); ?>">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email"  value="<?php echo htmlspecialchars($row['email']); ?>">
            </div>
            <div class="form-group">
                <label for="phone">Contact</label>
                <input type="tel" id="phone" name="phone" value="<?php echo htmlspecialchars($row['contact']); ?>">
            </div>
            <div class="form-group">
                <label for="phone">Password</label>
                <input type="pas" id="password" name="password" value="<?php echo htmlspecialchars($row['password']); ?>">
            </div>
            <div class="form-group">
                <button type="submit" name="submit">Update</button>
            </div>
        </form>
    </div>
</body>
</html>

</body>
</html>