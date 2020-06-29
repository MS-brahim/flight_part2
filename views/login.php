<?php
	//start session
	session_start();

	//redirect if logged in
	if(isset($_SESSION['user'])){

        if( $_SESSION['groupID']==1){
            header('location: admin.php');
        }else{
            header('location: indexuser.php');
        }
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
	<title>Login | AirLux</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
	<script src="https://kit.fontawesome.com/8f45faa16b.js" crossorigin="anonymous"></script>
      
</head>
<body>
<?php include_once "parts/navbar.php"?>

	<!-- login content  -->
	<div class="container">
		<h2 class="text-center">Login Form</h2>
		<div class="jumbotron" style="background: #fbfbfb;">
			<div style="width:50%;
						margin:auto;
						background: #d8d8d838;
    					padding: inherit;
						box-shadow: 2px 2px 6px gray">
						<?php
                        if(isset($_SESSION['message'])){
                            ?>
                                <div class="alert alert-danger text-center">
                                    <?php echo $_SESSION['message']; ?>
                                </div>
                            <?php

                            unset($_SESSION['message']);
                        }
                    ?>
				<form method="post" action="../controllers/login-controller.php" id="form" >
					<p class="lead">Welcome To Services AirLux</p>
					<div class="row">
						<div class="col">
							<div class="form-group">
								<label for="">Email</label>
								<input type="email" class="form-control" name="email" id="emailLogin" aria-describedby="emailHelpId" placeholder="enter your email">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<div class="form-group">
								<label for="">Password</label>
								<input type="password" class="form-control" name="password" id="passLogin" placeholder="*************">
							</div>
						</div>
					</div>
					<p class="lead">
						<button type="submit" id="login" class="btn btn-primary w-100" name="login_btn">Login</button>
					</p>
					<p>Don't have an account?<a href="register.php"> Sign up now.</a></p>
				</form>
			</div>
		</div>
	</div>

	<?php
    include_once "parts/footer.php";
    include_once "parts/scripts.php";
    ?>
	<script src="assets/js/login.js"></script>
</body>
</html>
