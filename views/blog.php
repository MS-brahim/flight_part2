<?php
//session
session_start();
include_once('../controllers/details.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Blog | AirLux</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/blog.css">
    <script src="https://kit.fontawesome.com/8f45faa16b.js" crossorigin="anonymous"></script>

	

</head>
<body>
<?php include_once "parts/navbar.php"?>
    <div class="container">
        <h2 class="text-center" style="margin:40px 0;" >Blog</h2>
        
        <div id="myBtnContainer">
            <button class="btn" onclick="filterSelection('all')"> Show all</button>
            <button class="btn" onclick="filterSelection('airoport')"> Aéroport</button>
            <button class="btn" onclick="filterSelection('flight')"> Flight </button>
            <button class="btn" onclick="filterSelection('services')"> Services</button>
        </div>
        
        <div class="row">
            <div style="justify-content: center; display: flex; flex-wrap: wrap;">

            <div class="column airoport">
                <div class="content">
                    <img src="assets/blog/airport.jpg" alt="airport" width="30%">
                    <h4>Mountains</h4>
                    <p>Lorem ipsum dolor..</p>
                </div>
                <div class="content">
                    <img src="assets/blog/airport2.jpg" alt="airport" width="30%">
                    <h4>Mountains</h4>
                    <p>Lorem ipsum dolor..</p>
                </div>
                <div class="content">
                    <img src="assets/blog/airport3.jpg" alt="airport" width="30%">
                    <h4>Mountains</h4>
                    <p>Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="column flight">
                <div class="content">
                    <img src="assets/airplane.jpg" alt="Lights" width="30%">
                    <h4>Lights</h4>
                    <p>Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="column services">
                <div class="content">
                    <img src="assets/airplane.jpg" alt="Nature" width="30%">
                    <h4>Forest</h4>
                    <p>Lorem ipsum dolor..</p>
                </div>
            </div>

          </div>
        </div>
    </div>
    
    <script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    removeClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) addClass(x[i], "show");
  }
}

function addClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function removeClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}

    </script>

<?php
    include_once "parts/footer.php";
    include_once "parts/scripts.php";
    ?>
</body>
</html>