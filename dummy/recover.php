<?php
include 'database.php';

if(isset($_POST['sendrecover'])){
    $email = mysqli_real_escape_string($conn, $_POST['recoveremail']);

    $emailquery = "select * FROM user_login where email ='$email'";
    $query = mysqli_query($conn,$emailquery);

    $emailcount = mysqli_num_rows($query);

    if($emailcount){
        $subject = "Password Reset";
        $body = "Hi, $username. Click here too activate your account";
    }
}

?>


<!doctype html>
<html lang="en">
  <head>
  	<title>Login 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(images/bg.jpg);">
	

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h1 class="heading-section">Forgot Password</h1>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
                    <h5 class="mb-4 text-center">Recover your account using email...</h5>
		      	<form action="server.php" method = "POST" class="signin-form">
		      		<div class="form-group">
		      			<input type="email" name="recoveremail" class="form-control" placeholder="Email" required>
		      		</div>
	            
	            <div class="form-group">
	            	<button type="submit" name="sendrecover" class="form-control btn btn-primary submit px-3">Send mail</button>
	            </div>
	            
	          </form>
	          <!-- <p class="w-100 text-center">&mdash; Or Sign In With &mdash;</p> -->
	          <!-- <div class="social d-flex text-center">
	          	<a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Facebook</a>
	          	<a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Twitter</a>
	          </div> -->
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

