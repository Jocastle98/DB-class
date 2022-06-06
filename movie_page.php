<html>
<!-- <meta charset="utf-8"> -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<?php

	$host = 'localhost';
	$user = 'wsvxy';
	$pw = '1234';
	$dbName = 'sungkyul';
	$mysqli = new mysqli($host, $user, $pw, $dbName);

	$date = $_POST['date'];
	$date = addslashes($date);
	$time = $_POST['time'];
	$time = addslashes($time);
	$name = $_POST['people'];
	$name = addslashes($name);
    $money = $_POST['money'];
    $money = addslashes($money);
	$option = $_POST['option'];
    $option = addslashes($option);

	$sql = "insert into movie (
		date,
		time,
		name,
		money,
		option
	)";

$sql = $sql. "values (
	'$date',
	'$time',
	'$name',
	'$money',
	'$option'
	)";

	if($mysqli->query($sql)){ 
  echo '<script>alert("success inserting")</script>'; 
	}else{ 
  echo '<script>alert("fail to insert sql")</script>';
	}

	mysqli_close($mysqli);

?>
<script>
	location.href = "movie_page.html";
</script>

</html>