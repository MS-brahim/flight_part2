<?php include_once '../model/dbconnect2.php'?>
<?php include_once "../controllers/sessionUser.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Account | AirLux</title>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/style.css">
    <script src="https://kit.fontawesome.com/8f45faa16b.js" crossorigin="anonymous"></script>
  

</head>
<body>
	<!-- start navbar  -->
	<header style=" margin-bottom:10px;">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="../index.html"><img src="assets/logo.png" width=100></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="../index.html">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Promotion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Voyage</a>
                    </li>
                    
                </ul>
                <form class="form-inline my-2 my-lg-0" action="logout.php" method="post">
                    <a href="welcome.php">
                    <?php echo $loggedin_session;?>
                    </a>
                    &nbsp;
                    <div style="width:1px;background:black; height:25px;"></div>
                    &nbsp;
                    <a href="../controllers/logout.php" class="btn btn-light" type="submit">
                    <i class="fas fa-sign-out-alt"> <b>Logout</b></i>
                    </a>
                </form>
            </div>
        </nav>
        <div class="navbar navbar-inverse " >
            <div class="container">
                <ul class="nav nav-tabs w-100" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile <i class="fa fa-user-circle" aria-hidden="true"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">History <i class="fa fa-history" aria-hidden="true"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Users <i class="fa fa-users" aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    
    <!-- end navbar  -->

    <!-- start flight content  -->
    <div class="container" style="width:72%;">
        <div class="tab-content" id="myTabContent">
            <!-- start profile content  -->
            <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="home-tab">
                <div class="row">
                <?php
                $sql="SELECT * FROM Utilisateur where id_user=$loggedin_id";
                $result=mysqli_query($con,$sql);
                ?>
                <?php
                while($rows=mysqli_fetch_array($result)){
                ?>
                <form action="" method="post" class="w-100">
                    <div class="row">
                        <div class="col-sm-3">
                            <picture>
                                <source srcset="assets/userPhoto/user.jpg" type="image/svg+xml">
                                <img src="assets/userPhoto/user.jpg" width=300 class="img-fluid img-thumbnail" alt="...">
                            </picture>
                            <h5 class="title"><?php echo $rows['groupID'];?></h5>
                        </div>
                        <div class="col-sm-9">
                            <div class="card">
                                <div class="card-header">
                                    <big>Inofrmations</big>
                                    <i class="fas fa-edit    "></i>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $rows['nom']." ".$rows['prenom'];?></h5>
                                    <p class="card-text"><?php echo $rows['email'];?></p>
                                    <p class="card-text"><?php echo $rows['tel'];?></p>
                                    <p class="card-text"><?php echo $rows['num_passport'];?></p>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                    ​
                </form>
                    <?php 
                    // close while loop 
                    }
                    ?>
                </div>
            </div>
            <!-- end profile content  -->
            <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
                <!-- Add history airline  -->
                    history
                <!-- end history content  -->
            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                nbnbnb
            </div>
        </div>
    </div>
    <!-- end flight content  -->

    <!-- start footer  -->
    <footer>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm">
					<img src="assets/logo.png" width="100" alt="logo">
					<h3>About us</h3>
					<p> Dolores deleniti esse sit fuga sunt fugit numquam, unde soluta quae autem natus quam asperiores minima consequuntur repellendus similique? Eligendi, facere quod!</p>

				</div>
				<div class="col-sm">
					<label for="comment">Comment:</label>
					<textarea class="form-control" rows="5" id="comment"></textarea>
					<input type="submit" class="btn btn-info" value="Send Your Message" style="margin-top: 10px;">
				</div>
				<div class="col-sm">
					<div class="mu-footer-widget">
						<h4>Business Offers</h4>
						<ul class="list-group">
							<a href="" class="listOffers">Business trip</a><br>
							<a href="" class="listOffers">Beyond Business</a><br>
							<a href="" class="listOffers">Meetings and conferences</a>
						</ul>
						
						
					  </div>
				</div>
				<div class="col-sm-2">
					<h3>Follow us</h3>
					<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, et cumque iure cum sint accusantium praesentium recusandae </p>
					<div class="row justify-content-around">
						<i class="fa fa-whatsapp" aria-hidden="true"></i>
						<i class="fa fa-linkedin" aria-hidden="true"></i>
						<i class="fa fa-twitter" aria-hidden="true"></i>
						<i class="fa fa-facebook" aria-hidden="true"></i>
						<i class="fa fa-instagram" aria-hidden="true"></i>
					</div>
				</div>
			</div>
			
		</div>
		<div class="col" style="margin-top: 40px;background-color: gainsboro;">
			<p>Copyright-2020 ©  By : You<span style="color:blue">code</span> Safi</p>
		</div>
	</footer>
	<!-- end footer  -->
	
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>