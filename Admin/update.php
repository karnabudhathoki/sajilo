<?php
// include "connection.php"; // Ensure this path is correct

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get data from the form
    $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Hash the password before storing it
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare an SQL statement to update the user data
    $sql = "UPDATE users SET username=?, email=?, password=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("sssi", $username, $email, $hashed_password, $id);

        // Execute the statement
        if ($stmt->execute()) {
            echo "User updated successfully";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "Error: " . $conn->error;
    }

    // Close the connection
    $conn->close();
} else {
    // Display the form
?>
    <form method="post" action="">
        <label for="id">User ID:</label>
        <input type="text" id="id" name="id" required><br>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>
        <input type="submit" value="Update User">
    </form>
<?php
}
?>
