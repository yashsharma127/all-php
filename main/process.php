<?php
include 'config.php';
?>
<?php

if(isset($_POST['create'])){

	$firstname 		= $_REQUEST['firstname'];
	$lastname 		= $_REQUEST['lastname'];
	$email 			= $_REQUEST['email'];
	$phonenumber	= $_REQUEST['phonenumber'];
	

		$sql = "INSERT INTO users (firstname, lastname, email, phonenumber ) VALUES($firstname,$lastname,$email,$phonenumber";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$firstname, $lastname, $email, $phonenumber]);
		if($result){
			echo 'Successfully saved.';
		}else{
			echo 'There were erros while saving the data.';
		}
}else{
	echo 'No data';
}