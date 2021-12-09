<?php
$Username = $_POST["Username"];
$user_email	 = $_POST["user_email"];
$user_pwd = $_POST["user_pwd"];

$conn = new mysqli('localhost','Radbk','bankshot','bkstore');

$sql = " INSERT INTO users(Username,user_email,user_pwd)
		VALUES('$Username','$user_email','user_pwd')";

		if ($conn->query($sql) === True) {
			echo "data inserted";
		}
		else {
			echo "Error:".$sql."<br>".$conn->error;
		}



?>