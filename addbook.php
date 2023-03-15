<!DOCTYPE html>
<html>
<head>
	<title>Bookstore</title>
	<link rel="stylesheet" type="text/css" href="./css/addbook.css">
</head>
<body>

<?php

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bookstoreuser";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect the form data
    $title = $_POST["title"];
    $genre = $_POST["genre"];
    $thumbnail = $_POST["thumbnail"];
    $downloadlink = $_POST["downloadlink"];
    
    // Insert the data into the books table
    $sql = "INSERT INTO books (title, genre, thumbnail, downloadlink)
            VALUES ('$title', '$genre', '$thumbnail', '$downloadlink')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>

<!-- Add the form to collect book data -->
<div class="container">

<h1>Add Book</h1>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="title">Title:</label>
    <input type="text" id="title" name="title" required><br><br>
    
    <label for="genre">Genre:</label>
    <select id="genre" name="genre" required>
        <option value="">Select a genre</option>
        <option value="technology">Technology</option>
        <option value="computerscience">Computer Science</option>
        <option value="softwaredevelopment">Software</option>
        <option value="programming">Programming</option>
    </select><br><br>
    
    <label for="thumbnail">Thumbnail:</label>
    <input type="text" id="thumbnail" name="thumbnail" required><br><br>
    
    <label for="downloadlink">Download Link:</label>
    <input type="text" id="downloadlink" name="downloadlink" required><br><br>
    
    <input type="submit" id="submit" value="Submit">

</form>
</div>
</body>
</html>
