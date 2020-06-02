<?php include_once '../model/dbconnect2.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>New Flight | AirLux</title>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/style.css">
	<script src="https://kit.fontawesome.com/8f45faa16b.js" crossorigin="anonymous"></script>

</head>
<body>
	<!-- start navbar  -->
	<header>
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
                    <li>
                        <a href="newflight.php" class="nav-link text-primary" style="margin:0 10px;">
                            New Flight <b>+</b>
                        </a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0" action="logout.php" method="post">
                    <a>
                    <?php
                        session_start();

                        if(isset($_SESSION['user'])){

                            echo '' . $_SESSION['user'];

                        }else{
                            header('location: login.php');
                            exit();
                        }
                    ?>
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
    </header>
    <!-- end navbar  -->

    <!-- Add new airline  -->
    <div class="container">
    <h3 class="text-primary">Insert New Airline</h3>
        <div class="jumbotron">
            <form action="" method="POST">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="">Flight Name</label>
                            <input type="text" name="nam" id="fly" class="form-control"/>
                            <small id="helpId" class="text-muted">Help text</small>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="">Departure City <i class="fas fa-plane-departure    "></i></label>
                            <input type="text" name="depart" id="depart" class="form-control"/>
                            <small id="helpId" class="text-muted">Help text</small>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="">Arrival city <i class="fas fa-plane-arrival    "></i></label>
                            <input type="text" name="arrival" id="arrival" class="form-control"/>
                            <small id="helpId" class="text-muted">Help text</small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="">Date/Time departure</label>
                            <input type="datetime-local" name="d_depart" id="d_depart" class="form-control"/>
                            <small id="helpId" class="text-muted">Help text</small>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="">Date/Time Arrival</label>
                            <input type="datetime-local" name="d_arrival" id="d_arrival" class="form-control"/>
                            <small id="helpId" class="text-muted">Help text</small>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="">Prix</label>
                            <input type="text" name="prix" id="prix" class="form-control"/>
                            <small id="helpId" class="text-muted">Help text</small>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="">Place</label>
                            <input type="text" name="place" id="place" class="form-control"/>
                            <small id="helpId" class="text-muted">Help text</small>
                        </div>
                    </div>
                </div>
                <input type="submit" name="sub" class="btn btn-primary" value="insert">
            </form>
        </div>
    </div>
    <!-- end new airline  -->



    <!-- <form action="" method="POST" style="margin: 0 100px;">
        <input type="text" name="nam"/> <br>
        <input type="text" name="depart"/> <br>
        <input type="text" name="arrival"/> <br>
        <input type="datetime-local" name="d_depart"/> <br>
        <input type="datetime-local" name="d_arrival"/> <br>
        <input type="number" name="prix"/> <br>
        <input type="number" name="place"/> <br>
        
        <input type="submit" name="sub" value="ADD"/> <br>
    </form> -->
    
    <?php
        if(isset($_POST['sub'])){
            include "../controllers/adminClass.php";
            $nam = $_POST ['nam'];
            $dep = $_POST['depart'];
            $arriv = $_POST['arrival'];
            $tDep = $_POST['d_depart'];
            $tArv = $_POST['d_arrival'];
            $prix = $_POST['prix'];
            $place = $_POST['place'];

            $obj = new Database();
            $obj->saveRecords($nam,$dep,$arriv,$tDep,$tArv,$prix,$place);
        }
    ?>



    <!-- start flight content  -->
    <div class="container">
        <div class="row">
            <div class="table-responsive">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Flight</th>
                            <th>Departure</th>
                            <th>Arrival</th>
                            <th>Departure Time</th>
                            <th>Arrival Time</th>
                            <th>Price</th>
                            <th>Place Rest</th>
                        </tr>
                    </thead>
                    <tbody>
                
                    <?php

                    $sql = "SELECT *  FROM vols";
                    $result = $con->query($sql);

                    if ($result->num_rows != 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) { 
                            echo "<tr><td>". $row["id_vol"]. "</td><td>" .$row["nom_vol"]."</td><td>" .$row["departure"]. "</td><td>" .$row["arrival"]."</td><td>" .$row["d_depart"]."</td><td>" .$row["d_arrival"]."</td><td>" .$row["prix"]."</td><td>" .$row["place"]."</td></tr>";
                            
                        }
                    } else {
                        echo "0 results";
                    }

                    $con->close();
                    ?>
                    </tbody>
                </table>
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

    <script src="assets/js/check-newflight.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>