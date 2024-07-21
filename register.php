<?php
include 'koneksi.php'; // Include the database connection file

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $institution = $_POST['institution'];
    $email = $_POST['email'];
    $password =$_POST['password']; 

    // Insert user into tbl_users
    $sql = "INSERT INTO tbl_users (fullname, username, institution, email, password) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $fullname, $username, $institution, $email, $password);

    if ($stmt->execute()) {
        // Registration successful, redirect to index.html
        header("Location: index.html");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>
