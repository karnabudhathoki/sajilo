<?php
// Database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sajilo_upaya";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize inputs
    $name = $_POST['name'];
    $details =$_POST['details'];

    // Handle file upload
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["images"]["name"]);
    $uploadOk = 1;
    // $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is an actual image or fake image
    $check = getimagesize($_FILES["images"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }


    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        // Try to upload file
        if (move_uploaded_file($_FILES["images"]["tmp_name"], $target_file)) {
            // Prepare an SQL statement to insert data into the database
            $stmt = $conn->prepare("INSERT INTO services (name, image, details) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $name, $target_file, $details);

            // Execute the statement
            if ($stmt->execute()) {
                // echo "The service has been added successfully.";
                header ("LOCATION : service.html");
            } else {
                echo "Error: " . $stmt->error;
            }

            // Close the statement
            $stmt->close();
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}

// Close the connection
$conn->close();
?>
