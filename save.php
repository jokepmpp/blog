<?php
	require_once('db.php'); 
	//$today = date("Y-m-d");
	$sql = "INSERT INTO book (id,title, story,create_by,create_date,category) 
		VALUES ('".$_POST["AUTO_INCREMENT"]."','".$_POST["title"]."','".$_POST["story"]."',
		'".$_POST["create_by"]."',CURDATE(),'".$_POST["category"]."')";		
	
	$result = $conn->query($sql);		
	if($result){
		echo "OK";
	}else{
		echo "NO";
	}
?>

