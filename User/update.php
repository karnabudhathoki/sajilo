<?php
include('connection.php');

if(isset($_POST['submit'])){
    $name = $_POST['first-name'];
    $email = $_POST['email'];
    $contact = $_POST['phone'];
    $password = $_POST['password'];

    if($db_connect){
        // Using prepared statements to avoid SQL injection
        $stmt = $db_connect->prepare("UPDATE user_register SET fullname = ?, email = ?, contact = ?, password = ? WHERE email = ?");
        $stmt->bind_param("sssss", $name, $email, $contact, $password, $email);

        if($stmt->execute()){
            if($stmt->affected_rows > 0){
                // Fetch the updated row to update session variables
                $stmt = $db_connect->prepare("SELECT fullname FROM user_register WHERE email = ?");
                $stmt->bind_param("s", $email);
                $stmt->execute();
                $result = $stmt->get_result();

                if($result->num_rows > 0){
                    $row = $result->fetch_assoc();
                    $fullname = $row['fullname'];
                    $_SESSION['email'] = $email;
                    header("Location: viewpage.php? fullname=$fullname");
                    exit();
                } else {
                    echo "No update found ...";
                }
            } else {
                echo "No update found ..."; 
            }
        } else {
            echo "Error updating record: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "No database connected ....";
    }
} else {
    echo "Nothing has been changed in the database ....";
}
?>
