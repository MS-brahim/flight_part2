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
        <div class="container-fluid">
            <ul class="nav nav-tabs w-100" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile <i class="fa fa-user-circle" aria-hidden="true"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">History <i class="fa fa-history" aria-hidden="true"></i></a>
                </li>
            </ul>
        </div>
    </div>
    <!-- start flight content  -->
    <div class="container-fluid">
        <div class="tab-content" id="myTabContent">
            <!-- start info account  -->
            <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="home-tab">
                <div class="container-fluid row">
                    <div class="w-100">
                        <div class="row">
                            <div class="col-sm-2">
                                <picture>
                                    <source srcset="assets/userPhoto/user.jpg" type="image/svg+xml">
                                    <img src="assets/userPhoto/user.jpg" width=300 class="img-fluid img-thumbnail" alt="...">
                                </picture>
                            </div>
                            <div class="col-sm-10">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-9 ">Personal inofrmation</div>
                                            <div class="col-3 text-right">
                                                <i class="fa fa-user" aria-hidden="true"></i>
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
                    </div>
                </div>
            </div>
            <!-- end info account  -->          
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <div class="container-fluid row">
                    <div class="table-responsive">
                        <div class="input-group mb-3">
                            <input type="search" class="form-control" placeholder="Search..." id="searchinp">
                        </div>
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>Nom de vol</th>
                                    <th>Client</th>
                                    <th>Date reservation</th>
                                </tr>
                            </thead>
                            <tbody id="searchhistory" >
                            
                            <?php
                            // show all reservation 
                            $idU = $_SESSION['user'];
                            include_once "../models/reservClass.php";
                            // show all ariline
                            $reserve = new Reserve();
                            $RSV = $reserve->reserveID($idU);
                            foreach ($RSV as $row)
                                // output data of each row
                                { 

                                ?>
                                    <tr> 
                                        <td><?php echo $row["nom_vol"]?><br>
                                            <small class="text-primary">
                                                <?php echo $row["departure"]?> 
                                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                <?php echo $row["arrival"]?>
                                            </small><br>
                                            <small>
                                                <ul class="list-unstyled">
                                                    <li class=""><?php echo $row["d_depart"]?> </li>
                                                    <li class=""><?php echo $row["d_arrival"]?> </li>
                                                    <li class=""><?php echo $row["prix"]?> DH </li>
                                                </ul>
                                            </small>
                                        </td>
                                        <td><?php echo $row["nom"]." ".$row["prenom"]?>
                                            <small>
                                                <ul class="list-unstyled">
                                                    <li class=""><?php echo $row["num_passport"]?> </li>
                                                    <li class=""><?php echo $row["phone"]?> </li>
                                                    <li class=""><?php echo $row["email"]?> </li>
                                                </ul>
                                            </small>
                                        </td> 
                                        <td><?php echo $row["date_reservation"]?></td>                                          
                                    </tr>                                   
                            <?php } ?>
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
    <script>
    $(document).ready(function(){
        $("#searchinp").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#searchhistory tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>
</body>
</html>