<?php  

$servername ="localhost";
$username = "root";
$password = "";
$dbname = "Driver";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
	die("connection failed");
}

$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$password = $_POST["password"];
$salt = "Driver";
$password_encrypted = sha1($password.$salt);


$sql = "INSERT INTO signup (name, email, phone, password) 
VALUES ('$name', '$email', '$phone', '$password_encrypted')";

if($conn->query($sql) === TRUE){
	?>
	<script>
		window.location.href='signlog.html';
		alert('You are Successfully Registered');
	</script>
	<?php
}
else{
	?>
	<script>
		alert('Values did not insert');
	</script>
	<?php
}


?>




















