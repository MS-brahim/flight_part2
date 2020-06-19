<?php 
	session_start();

	// connect to database
	$con = mysqli_connect('localhost', 'root', '', 'app_vols');


	// call the login() function if register_btn is clicked
	if (isset($_POST['login_btn'])) {
		login();
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['user']);
		header("location: ..views/login.php");
	}

	// return user array from their id
	function getUserById($id){
		global $con;
		$query = "SELECT * FROM utilisateur WHERE id_user="  .$id;
		$result = mysqli_query($con, $query);

		$user = mysqli_fetch_assoc($result);
		return $user;
	}

	// LOGIN USER
	function login(){
		global $con, $email, $email_err, $pass_err;

		// grap form values
		$email = e($_POST['email']);
		$password = e($_POST['password']);
		$password1 = sha1($password);

		if (empty($email)) {
			$email_err = "email is required";
		}
		if (empty($password1)) {
			$pass_err = "Password is required";
		}

	
			$query = "SELECT * FROM utilisateur WHERE email='$email' AND mot_de_passe='$password1' LIMIT 1";
			$results = mysqli_query($con, $query);

			if (mysqli_num_rows($results) == 1) { 

				// check if Utilisateur is admin or user
				$logged_in_user = mysqli_fetch_assoc($results);
				if ($logged_in_user['groupID'] == 1) {

					$_SESSION['user'] = $logged_in_user;
					header('location: ../views/admin.php');	
						  
				}else if($logged_in_user['groupID'] == 0){
					$_SESSION['user'] = $logged_in_user;
					header('location: ..views/index.php');
				}
			}else {
				$user_err = "Wrong email/password combination";
			}
	}

	function isLoggedIn()
	{
		if (isset($_SESSION['user']) && $_SESSION['user']['groupID'] == 0) {
			return true;
		}else{
			return false;
		}
	}

	function isAdmin()
	{
		if (isset($_SESSION['user']) && $_SESSION['user']['groupID'] == 1 ) {
			return true;
		}else{
			return false;
		}
	}

	// escape string
	function e($val){
		global $con;
		return mysqli_real_escape_string($con, trim($val));
	}
?>