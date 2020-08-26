<!-- start navbar  -->
<header style=" margin-bottom:10px;">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.php"><img src="assets/logo.png" width=100></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="promo.php">Promotion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.php">Blog</a>
                    </li>
                    
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <?php if(isset($_SESSION['user'])): ?>
							
					<strong class="text-primary" ><a type="submit" href="login.php"><?php echo $row['prenom']." ".$row['nom']; ?></a></strong>&nbsp;
					<small>
						<i  style="color: #888;">
                        <?php if($row['groupID']==1) echo"(Admin)"; ?>
						</i> 
					</small>
					&nbsp;
                    <div style="width:1px;background:black; height:25px;"></div>
                    &nbsp;
					<a href="../controllers/logout.php" class="btn btn-light" type="submit">
                    	<i class="fas fa-sign-out-alt"> <b>Logout</b></i>
                    </a>
					<?php else: ?>
					<a href="login.php" class="btn btn-light">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        Log in
                    </a>
                    &nbsp;
                    <div style="width:1px;background:black; height:25px;"></div>
                    &nbsp;
                    <a href="register.php" class="btn btn-light">
                        <i class="fa fa-sign-in" aria-hidden="true"></i>
                        Sign Up
                    </a>
					<?php endif; ?>
                </form>
            </div>
        </nav>
    </header>
    <!-- end navbar  -->