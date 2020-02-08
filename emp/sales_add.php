<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$bankname = $_POST['bankname'];
		$plantype = $_POST['plantype'];

		$sql = "INSERT INTO bank (bankname, plantype) VALUES ('$bankname', '$plantype')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Bank added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}	
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: bank.php');

?>