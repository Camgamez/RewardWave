<?php
session_start();

require_once 'User.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Call the login method from the User class
    $user = User::login($email, $password);

    if ($user) {
        // Save user information in the session
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_email'] = $user['email'];

        // Redirect to the welcome screen or any other page
        header('Location: ../View/welcome.html');
        exit();
    } else {
        echo "Invalid email or password. Please try again.";
    }
}
?>
