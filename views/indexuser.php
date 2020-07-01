<?php
session_start();
//return to login if not logged in
if (!isset($_SESSION['user']) ||(trim ($_SESSION['user']) == '')){
	header('location:index.php');
}

include_once('../controllers/details.php');

if($row['groupID']==1){
	header('location: admin.php');
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
                                    <p class="card-text"><b>Full Name : </b><?php echo $row['nom']." ".$row['prenom']; ?></p>
                                    <hr>
                                    <p class="card-text"><b>Email : </b><?php echo $row['email'];?></p>
                                    <hr>
                                    <p class="card-text"><b>Phone : </b><?php echo $row['tel'];?></p>
                                    <hr>
                                    <p class="card-text"><b>N° passeport : </b><?php echo $row['num_passport'];?></p>
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
                                $sqlS = "SELECT *  FROM reservation";
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