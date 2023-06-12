<html>
<!-- <meta charset="utf-8"> -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<?php

		$host = 'localhost';
		$user = 'wsvxy';
		$pw = '1234';
		$dbName = 'wsvxy';
		$mysqli = new mysqli($host, $user, $pw, $dbName);

		$name = $_POST['name'];
	    $email = $_POST['email'];
	    $subject = $_POST['subject'];
		$message = $_POST['message'];

		$sql = "insert into member (
				name,
				email,
				subject,
				message
		)";
		
		$sql = $sql. "values (
				'$name',
				'$email',
				'$subject',
				'$message'
		)";

		if($mysqli->query($sql)){ 
		  echo '<script>alert("success inserting")</script>'; 
		}else{ 
		  echo '<script>alert("fail to insert sql")</script>';
		}

		mysqli_close($mysqli);
	  
	?>

<script>
	location.href = "index.html";
</script>

</html>