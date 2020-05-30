<!DOCTYPE html>
<html lang="en">
<head>
	<title>Compte | AirLux</title>
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
                        <a href="newflight.php?id_user=<?= $row['id_user']?>" class="nav-link text-primary" style="margin:0 10px;">
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

    <!-- start flight content  -->
    <div class="container">
        <div class="row">
            
        </div>
    </div>
    <!-- end flight content  -->
	
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>