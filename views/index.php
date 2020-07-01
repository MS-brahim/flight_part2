<?php
//session
session_start();
if(isset($_SESSION['user'])){
	include_once('../controllers/details.php');
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>AirLux</title>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">

	

</head>
<body>
<?php include_once "parts/navbar.php"?>
	
	<!-- start content  -->
	<div class="container-fluid">
		<div class="position-relative">
			<!-- start carousel slides  -->
			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" >
				<div class="carousel-inner" style="max-height:500px;">
					<div class="carousel-item active">
						<img class="d-block w-100" src="assets/airplanee.jpg" alt="First slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="assets/airplane.jpg" alt="Second slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="assets/airplane2.jpg" alt="Third slide">
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev" style="width:5%;">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next" style="width:5%;" >
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			<!-- end carusel slides  -->

			<!-- start search from  -->
			<div class="position-absolute" id="cntfrom">

				<div class="contentform" id="homepage">
					<div class="btn-group btn-group-justified" style="width:100%;" >			
						<div class="btn-group">
							<button id="button1" type="button" href="#SearchResult" class="btn btn-primary" >Search by city</button>
						</div>
						<div class="btn-group">
							<button id="button2" type="button" href="#all" class="btn btn-primary">Search all flights</button>
						</div>
					</div>
					<hr />
					<!-- Start search  Result -->
					<div id="SearchResult">
						<form role="form" action="SearchResult.php" method="post">
							<div class="row">
								<div class="col-sm-6">
									<label for="from">From:</label>
									<input type="text" class="form-control" id="from" name="from" placeholder="From ..." required>
								</div>
								<div class="col-sm-6">
									<label for="to">To:</label>
									<input type="text" class="form-control" id="to" name="to" placeholder="To ..." required>
								</div>
							</div>
							<br>
							<div class="btn-group btn-group-justified">	
									<div class="btn-group">
										<button type="submit" class="btn btn-success">Submit</button>
									</div>
									<div class="btn-group">
										<button type="reset"  class="btn btn-info" value="Reset">Reset</button>
									</div>
							</div>
						</form>
					</div>
					<!-- end search  Result   -->
				
					<!-- end search  Result All  -->
					<div id="all">
						<form role="form" action="SearchResultAll.php" method="post">
							<div class="row"> 
								<div class="col-sm-6">
									<label for="selectdate">Select a date:</label>
									<input type="date" class="form-control" id="selectdate" name="selectdate" required>
								</div>
							</div>
							<br>
							<div class="row">   
								<div class="col-sm-6">
									<button type="submit" class="btn btn-primary">Show ALL</button>
								</div>
							</div> 
						</form>
					</div>	
					<!-- end search Search Result All  -->
				</div>	
			</div>
			<!-- end search from  -->
		</div>
	</div>
	<!-- end content   -->

	
	<?php
    include_once "parts/footer.php";
    include_once "parts/scripts.php";
    ?>
	<script src="assets/js/search.js"> </script>
</body>
</html>