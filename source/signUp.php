<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once("include/db.php");

/*
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        var_dump($row);
    }
} else {
    echo "0 results";
}
$conn->close();
*/

if (array_key_exists("username", $_REQUEST)) {

	$stmt = $conn->prepare("INSERT INTO users (username, password, email) VALUES (?, ?, ?)");
	$stmt->bind_param("sss", $username, $password, $email);

	// set parameters and execute
	$username = $_REQUEST['username'];
	$password  = password_hash($_REQUEST['password'], PASSWORD_DEFAULT);
	$email     = $_REQUEST['email'];
	$stmt->execute();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Nathan's Form</title>
</head>
<?php require_once('../private/initialize.php'); ?>
<?php $page_title = 'Home Page'; ?>
<?php include(SHARED_PATH . '/nu_header.php'); ?>
<body>

	<h1>SIGN UP!</h1>
	<form method="post">
		<input type="text" name="username" placeholder="User Name" required>
		<input type="password" name="password" placeholder="Enter Password!" required>
		<input type="email" name="email" placeholder="Email" required>
		<input type="submit" value="sendIt">		
	</form>
<?php include(SHARED_PATH . '/home_footer.php'); ?>
</body>
</html>
