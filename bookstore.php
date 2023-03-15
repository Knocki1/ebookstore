<!DOCTYPE html>
<html>
<head>
	<title>Bookstore</title>
	<link rel="stylesheet" type="text/css" href="./css/book.css">
</head>
<body>
	<header>
		<h1>Bookstore</h1>
		<nav>
			<ul>
				<li><a href="bookstore.php">All</a></li>
				<li><a href="bookstore.php?genre=technology">Technology</a></li>
				<li><a href="bookstore.php?genre=computerscience">Computer Science</a></li>
				<li><a href="bookstore.php?genre=softwaredevelopment">Software Development</a></li>
				<li><a href="bookstore.php?genre=programming">Programming</a></li>
			</ul>
		</nav>
	</header>
	<main>
		<div class="book-container">
			<?php
				// Database Connection
				$host = "localhost";
				$user = "root";
				$pass = "";
				$db = "bookstoreuser";
				$conn = mysqli_connect($host, $user, $pass, $db);

				// Check connection
				if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
				}

				// Default genre
				$genre = "";

				// Check if genre is set
				if (isset($_GET['genre'])) {
					$genre = $_GET['genre'];
				}

				// Query books
				$sql = "SELECT * FROM books";

				// Filter by genre if set
				if ($genre != "") {
					$sql .= " WHERE genre = '$genre'";
				}

				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
					while($row = mysqli_fetch_assoc($result)) {
						echo '<div class="book-card">';
						echo '<img src="' . $row["thumbnail"] . '">';
						echo '<div class="book-details">';
						echo '<h2>' . $row["title"] . '</h2>';
						echo '<p>Genre: ' . $row["genre"] . '</p>';
						echo '<a href="' . $row["downloadLink"] . '" download class="download-btn">Download</a>';
						echo '</div>';
						echo '</div>';
					}
				} else {
					echo "No books found";
				}

				// Close connection
				mysqli_close($conn);
			?>
		</div>
	</main>
</body>
</html>
