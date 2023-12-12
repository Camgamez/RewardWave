<?php

class User {
    private $email;
    private $password;

    public function __construct($email, $password) {
        $this->email = $email;
        // Use a secure method to hash the password before storing it in the database
        $this->password = password_hash($password, PASSWORD_BCRYPT);
    }

    // Set the connection to the once
    public function dataBaseCon() {
        $servername = "u889606606_User_Table";
        $username = "u889606606_admin";
        $password = "Ni?KL>?e!1";
        $dbname = "Users";

        $conn = new mysqli($servername, $username, $password, $dbname);

        return $conn

    }

    // Save the user to the database
    public function saveToDatabase() {
        // Perform database connection
        $conn = self::dataBaseCon();

        // Check the connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare and execute the SQL query to insert the user into the database
        $sql = "INSERT INTO users (email, password) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $this->email, $this->password);

        if ($stmt->execute()) {
            echo "User successfully registered!";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the database connection
        $stmt->close();
        $conn->close();
    }

    // Login method
    public static function login($email, $password) {
        // Fetch user from the database based on the email
        $user = self::getUserByEmail($email);

        // Check if the user exists and the password is correct
        if ($user && password_verify($password, $user['password'])) {
            return $user;
        } else {
            return null;
        }
    }

    // Fetch the user by email from the Database
    private static function getUserByEmail($email) {
        
        $conn = dataBaseCon();

        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        // Fetch the user as an associative array
        $user = $result->fetch_assoc();

        $stmt->close();
        $conn->close();

        return $user;
    }
}

// Example usage
// $email = "user@example.com";
// $password = "securepassword";

// $user = new User($email, $password);
// $user->saveToDatabase();
?>
