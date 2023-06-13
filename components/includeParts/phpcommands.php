<?php
session_start();

$conn = mysqli_connect('localhost', 'root', '', 'multimedia_db') or die('connection failed');

// Function to check if the "users" table exists in the database
function isUsersTableExists($conn)
{
    $check_query = "SHOW TABLES LIKE 'users'";
    $result = mysqli_query($conn, $check_query);
    return mysqli_num_rows($result) == 1;
}

// Function to create the "users" table in the database
function createUsersTable($conn)
{
    $create_query = "CREATE TABLE users (
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        password VARCHAR(255) NOT NULL,
        age INT(11) NOT NULL,
        user_type VARCHAR(255) NOT NULL
    )";
    mysqli_query($conn, $create_query);
}

// Check if the "users" table exists
if (!isUsersTableExists($conn)) {
    // Create the "users" table if it doesn't exist
    createUsersTable($conn);
}

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: /multimedia");
}

// Check if there are no admins
$check_admin_query = "SELECT COUNT(*) as count FROM users WHERE user_type = 'admin'";
$check_admin_result = mysqli_query($conn, $check_admin_query);
$row = mysqli_fetch_assoc($check_admin_result);
$admin_count = $row['count'];

if ($admin_count == 0) {
    // Create a user with the role admin
    $username = 'Tali';
    $email = 'tali@gmail.com';
    $password = 'Tali123.';
    $age = 21;
    $user_type = 'admin';

    // Encrypt the password using md5
    $hashed_password = md5($password);

    // Insert the user into the database
    $insert_query = "INSERT INTO users (username, email, password, age, user_type) VALUES ('$username', '$email', '$hashed_password', $age, '$user_type')";
    mysqli_query($conn, $insert_query);
}
