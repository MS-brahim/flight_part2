<?php include('../controllers/register-controller.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  
	<title>Login | AirLux</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://kit.fontawesome.com/8f45faa16b.js" crossorigin="anonymous"></script>
      
</head>
<body>
    <?php include_once "parts/navbar.php"?>
    
    <!-- start content from  register  -->
    <div class="container" style="margin-top:60px">
        <div class="jumbotron">
            <form action="../controllers/register-controller.php" method="POST">
                
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group <?php echo (!empty($fname_err)) ? 'has-error' : ''; ?>">
                            <label for="">First name <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="fname" value="<?php echo $fname ?>">
                            <small class="form-text text-danger"><?php echo $fname_err; ?></small>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group <?php echo (!empty($lname_err)) ? 'has-error' : ''; ?>">
                            <label for="">Last name <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="lname" value="<?php echo $lname ?>">
                            <small class="form-text text-danger"><?php echo $lname_err; ?></small>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group <?php echo (!empty($phone_err)) ? 'has-error' : ''; ?>">
                            <label for="">Phone number <span class="text-danger">*</span></label>
                            <input class="form-control" type="tel" name="phone" value="<?php echo $phone ?>">
                            <small class="form-text text-danger"><?php echo $phone_err; ?></small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8">
                        <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                            <label for="">Your email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" name="email" value="<?php echo $email ?>">
                            <small class="form-text text-danger"><?php echo $email_err; ?></small>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group <?php echo (!empty($passport_err)) ? 'has-error' : ''; ?>">
                            <label for="">Passport number <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" name="numPassport" value="<?php echo $passport ?>">
                            <small class="form-text text-danger"><?php echo $passport_err; ?></small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                            <label for="">Password <span class="text-danger">*</span></label>
                            <input type="password" class="form-control" name="password" >
                            <small class="form-text text-danger"><?php echo $password_err; ?></small>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group <?php echo (!empty($confirm_pwd_err)) ? 'has-error' : ''; ?>">
                            <label for="">Confirm password <span class="text-danger">*</span></label>
                            <input type="password" class="form-control" name="confirm_password">
                            <small class="form-text text-danger"><?php echo $confirm_pwd_err; ?></small>
                        </div>
                    </div>
                </div>
                <p class="lead">
                    <input class="btn btn-primary btn-lg" type="submit" name="register" value="Register">
                    <input class="btn btn-warning btn-lg" type="reset" value="reset">
                </p>
            </form>
        </div>
    </div>
    <!-- end content from  register  -->

    <?php
    include_once "parts/footer.php";
    include_once "parts/scripts.php";
    ?>
	<script src="assets/js/login.js"></script>
</body>
</html>
