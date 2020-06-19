<?php 
    include('../controllers/login-controller.php');
	if (!isLoggedIn()) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admins | AirLux</title>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/style.css">
    <script src="https://kit.fontawesome.com/8f45faa16b.js" crossorigin="anonymous"></script>
  

</head>
<body>
    <?php include_once "parts/navbar.php"?>

    <!-- start content admin  -->
    <div class="navbar navbar-inverse " >
        <div class="container">
            <ul class="nav nav-tabs w-100" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile <i class="fa fa-user-circle" aria-hidden="true"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Ticket <i class="fas fa-ticket-alt"></i></a>
                </li>
            </ul>
        </div>
    </div>
    <!-- start flight content  -->
    <div class="container" style="width:72%;">
        <div class="tab-content" id="myTabContent">
            <!-- start info account  -->
            <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="home-tab">
                <div class="row">

                
                
                <form action="" method="post" class="w-100">
                    <div class="row">
                        <div class="col-sm-3">
                            <picture>
                                <source srcset="assets/userPhoto/user.jpg" type="image/svg+xml">
                                <img src="assets/userPhoto/user.jpg" width=300 class="img-fluid img-thumbnail" alt="...">
                            </picture>
                        </div>
                        <div class="col-sm-9">
                            <div class="card">
                                <div class="card-header">
                                    
                                    <div class="row">
                                       <div class="col-9 ">Personal inofrmation</div>
                                    <div class="col-3 text-right">
                                        <a href="" data-toggle="modal" data-target="#editUser<?php echo $rows['id_user']?>" aria-hidden="true">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    </div> 
                                    </div>
                                </div>
                                <div class="card-body">
                                <?php  if (isset($_SESSION['user'])) : ?>
                                    <p class="card-text"><b>Full Name : </b><?php echo $_SESSION['user']['nom']." ".$_SESSION['user']['prenom']; ?></p>
                                    <hr>
                                    <p class="card-text"><b>Email : </b><?php echo $_SESSION['user']['email'];?></p>
                                    <hr>
                                    <p class="card-text"><b>Phone : </b><?php echo $_SESSION['user']['tel'];?></p>
                                    <hr>
                                    <p class="card-text"><b>N° passeport : </b><?php echo $_SESSION['user']['num_passport'];?></p>
                                <?php endif ?>                             
                                </div>
                            </div>
                        </div>
                    
                    </div>
                    ​
                </form>
                </div>
            </div>
            <!-- end info account  -->

          
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                nbnbnb
            </div>
        </div>
    </div>
    <!-- end flight content  -->
	<?php
    include_once "parts/footer.php";
    include_once "parts/scripts.php";
    ?>
</body>
</html>