<?php 
session_start();

// connect to database
$db_connect = mysqli_connect('localhost', 'root', '', 'sajilo_upaya');

// call the register() function if register_btn is clicked
if (isset($_POST['register_btn'])) {
    $username    =  $_POST['username'];
        $email       =  $_POST['email'];
        $password_1  =  $_POST['password_1'];
        $password_2  =  $_POST['password_2'];

        // form validation: ensure that the form is correctly filled
        if (empty($username)) { 
                array_push($errors, "Username is required"); 
        }
        if (empty($email)) { 
                array_push($errors, "Email is required"); 
        }
        if (empty($password_1)) { 
                array_push($errors, "Password is required"); 
        }
        if ($password_1 != $password_2) {
                array_push($errors, "The two passwords do not match");
        }

        // register user if there are no errors in the form
        
                $password = md5($password_1);//encrypt the password before saving in the database

                
                        $query = "INSERT INTO admin (username, email, password) VALUES('$username', '$email','$password')";
                        mysqli_query($db_connect, $query);

                        // put logged in user in session
                        $_SESSION['username'] = $username; 
                        $_SESSION['success']  = "You are now logged in";
                        header('location: dashboard.php');             
}


 