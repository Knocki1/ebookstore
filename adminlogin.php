<?php

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bookstoreuser";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    // Get the input data
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Check if username exists in the database
    $sql = "SELECT * FROM admin WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Username exists, check password
        $row = $result->fetch_assoc();
        if ($password == $row["password"]) {
            // Password is correct, redirect to bookstore.html
            header("Location: ./addbook.php");
            exit();
        } else {
            // Password is incorrect, show error message
            echo "Error: Incorrect password";
        }
    } else {
        // Username does not exist, show error message
        echo "Error: Username does not exist";
    }
}

// Close the database connection
$conn->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>
    <div class="container">
        <div class="container-content">
            <h1>Login</h1>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <input class="input-fields" type="text" name="username" id="" placeholder="Username" required><br><br>
                <input class="input-fields" type="password" name="password" id="" placeholder="Password" required><br><br>
                <button type="submit">Login</button>
            </form>
            
        </div>
    </div>
</body>
</html>
