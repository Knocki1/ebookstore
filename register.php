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
    $confirm_password = $_POST["confirm_password"];

    // Check if passwords match
    if ($password == $confirm_password) {
      
        // Check if username already exists in the database
        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "Error: Username already exists";
        } else {
            // Insert the data into the database
            $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
          
            if ($conn->query($sql) === TRUE) {
                // Redirect to bookstore.html
                header("Location: bookstore.php");
                exit();
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
      
    } else {
        echo "Error: Passwords do not match";
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
    <title>Sign Up</title>
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>
    <div class="container">
        <div class="container-content">
            <h1>Sign Up</h1>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 
                <input class="input-fields" type="text" name="username" id="" placeholder="Username" required><br><br>
                <input class="input-fields" type="password" name="password" id="" placeholder="Password" required><br><br>
                <input class="input-fields" type="password" name="confirm_password" id="" placeholder="Confirm Password" required><br><br>
                <button type="submit">Sign Up</button>
            </form>
            <p>Existing user? <a href="./login.php">Login</a></p>
            
        </div>
    </div>
</body>
</html>
