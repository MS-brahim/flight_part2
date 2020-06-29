<?php
session_start();
//return to login if not logged in
if (!isset($_SESSION['user']) ||(trim ($_SESSION['user']) == '')){
	header('location:index.php');
}
include_once('../controllers/details.php');
if($row['groupID']==0){
	header('location: indexuser.php');
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

    <div class="navbar navbar-inverse " >
        <div class="container">
            <ul class="nav nav-tabs w-100" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link " id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile <i class="fa fa-user-circle" aria-hidden="true"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Airline <i class="fa fa-cart-plus" aria-hidden="true"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Users <i class="fa fa-users" aria-hidden="true"></i></a>
                </li>
            </ul>
        </div>
    </div>
    <!-- start flight content  -->
    <div class="container" style="width:72%;">
        <div class="tab-content" id="myTabContent">
            <!-- start info account  -->
            <div class="tab-pane fade " id="profile" role="tabpanel" aria-labelledby="home-tab">
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
                                        <a href="" data-toggle="modal" data-target="#editUser<?php echo $row['id_user']?>" aria-hidden="true">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    </div> 
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="card-text"><b>Full Name : </b><?php echo $row['nom']." ".$row['prenom']; ?></p>
                                    <hr>
                                    <p class="card-text"><b>Email : </b><?php echo $row['email'];?></p>
                                    <hr>
                                    <p class="card-text"><b>Phone : </b><?php echo $row['tel'];?></p>
                                    <hr>
                                    <p class="card-text"><b>N° passeport : </b><?php echo $row['num_passport'];?></p>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                    ​
                </form>
                </div>
            </div>
            <!-- end info account  -->

            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <!-- Add new airline  -->
                <h3 class="text-primary">Insert New Airline</h3>
                    <div class="jumbotron">
                        <form action="" method="POST">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="">Flight Name</label>
                                        <input type="text" name="nam" id="fly" class="form-control"/>
                                        <small id="helpFly" class="text-danger"></small>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="">Departure City <i class="fas fa-plane-departure    "></i></label>
                                        <input type="text" name="depart" id="depart" class="form-control"/>
                                        <small id="helpD" class="text-danger"></small>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="">Arrival city <i class="fas fa-plane-arrival    "></i></label>
                                        <input type="text" name="arrival" id="arrival" class="form-control"/>
                                        <small id="helpA" class="text-danger"></small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="">Date/Time departure</label>
                                        <input type="datetime-local" name="d_depart" id="d_depart" class="form-control"/>
                                        <small id="helpTD" class="text-danger"></small>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="">Date/Time Arrival</label>
                                        <input type="datetime-local" name="d_arrival" id="d_arrival" class="form-control"/>
                                        <small id="helpTA" class="text-danger"></small>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="">Prix</label>
                                        <input type="text" name="prix" id="prix" class="form-control"/>
                                        <small id="helpPR" class="text-danger"></small>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="">Place</label>
                                        <input type="text" name="place" id="place" class="form-control"/>
                                        <small id="helpPC" class="text-danger"></small>
                                    </div>
                                </div>
                            </div>
                            <input type="submit" name="addVol" id="submit" class="btn btn-primary" value="insert">
                        </form>
                    </div>
                
                    <?php
                        // new airline 
                        include "../controllers/airline.php";
                        
                    ?>

                    <!-- start flight content  -->
                    <div class="input-group mb-3">
                        <input type="search" class="form-control" placeholder="Search..." id="searchInput">
                    </div>
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
                                        <th>Place</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody  id="searchLine">
                            
                                <?php
                                include_once "../models/connect_DB.php";
                                // show all flight 
                                $sqlS = "SELECT *  FROM vols";
                                $result = $con->query($sqlS);

                                if ($result->num_rows != 0) {
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) { 

                                ?>
                                            <tr>
                                                <td><?php echo $row["id_vol"]?></td>
                                                <td><?php echo $row["nom_vol"]?></td>
                                                <td><?php echo $row["departure"]?></td>
                                                <td><?php echo $row["arrival"]?></td>
                                                <td><?php echo $row["d_depart"]?></td>
                                                <td><?php echo $row["d_arrival"]?></td>
                                                <td><?php echo $row["prix"]?></td>
                                                <td><?php echo $row["place"]?></td>
                                                <td><button class="btn btn-success" type="button"<?php echo $row['id_vol']?>">Open</button></td>
                                            </tr>                                   
                                <?php
                                    }
                                }
                            
                                $con->close();
                                ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                    <!-- end flight content  -->
            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                nbnbnb
            </div>
        </div>
    </div>
    <!-- end flight content  -->
    <!-- end content admin  -->

	<?php
    include_once "parts/footer.php";
    include_once "parts/scripts.php";
    ?>
    <script>

    $(document).ready(function(){
    $("#searchInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#searchLine tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
    });

    </script>
    <script src="assets/js/check-newLine.js"></script>
</body>
</html>