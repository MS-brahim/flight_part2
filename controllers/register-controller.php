<?php 
    session_start();

    if(isset($_SESSION['user'])){
        header('location: welcome.php');
    };
    
    require_once '../model/dbconnect2.php';

 
    $fname = $lname = $phone = $email = $passport = $password = $confirm_pwd ="";
    $fname_err = $lname_err = $phone_err = $email_err = $passport_err = $password_err = $confirm_pwd_err ="";

    // Processing form data when form is submitted
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        // Validate firstname 
        if(empty(trim($_POST['nom']))){
            $fname_err = "Please enter your firstname.";
        }else{
            // Prepare a select statement
            $sql = "SELECT id_user FROM Utilisateur WHERE nom = ?";
            
            if($stmt = $con->prepare($sql)){
                // Bind variables to the prepared statement as parameters
                $stmt->bind_param("s", $param_fname);
                
                // Set parameters
                $param_fname = trim($_POST["nom"]);
                
                // Attempt to execute the prepared statement
                if($stmt->execute()){
                    // store result
                    $stmt->store_result();
                    $fname = trim($_POST["nom"]);
                } else{
                    echo "Oops! Something went wrong. Please try again later.";
                }
    
                // Close statement
                $stmt->close();
            }
        }
        // Validate lastname 
        if(empty(trim($_POST["prenom"]))){
            $lname_err = "Please enter your lastname";
        }else{
            // Prepare a select statement
            $sql = "SELECT id_user FROM Utilisateur WHERE prenom = ?";
            
            if($stmt = $con->prepare($sql)){
                // Bind variables to the prepared statement as parameters
                $stmt->bind_param("s", $param_lname);
                
                // Set parameters
                $param_lfname = trim($_POST["prenom"]);
                
                // Attempt to execute the prepared statement
                if($stmt->execute()){
                    // store result
                    $stmt->store_result();
                    $lname = trim($_POST["prenom"]);
                } else{
                    echo "Oops! Something went wrong. Please try again later.";
                }
    
                // Close statement
                $stmt->close();
            }
        }
        // Validate phone number 
        if(empty(trim($_POST["tel"]))){
            $phone_err = "Please enter your phone number";
        }else{
            $sql ="SELECT id_user FROM Utilisateur WHERE tel = ?";
            if($stmt = $con->prepare($sql)){
                $stmt->bind_param("s", $param_phone);
                $param_phone = trim($_POST["tel"]);
                if($stmt->execute()){
                    $stmt->store_result();
                    $phone = trim($_POST["tel"]);
                }else{
                    echo "Oops! something went wrong. Please try again later.";
                }
            }
        }
        // Validate email 
        if(empty(trim($_POST["email"]))){
            $email_err = "Please enter your email";
        }else{
            $sql ="SELECT id_user FROM Utilisateur WHERE email = ?";

            if($stmt = $con->prepare($sql)){
                $stmt->bind_param("s", $param_email);

                $param_email = trim($_POST["email"]);

                if($stmt->execute()){
                    $stmt->store_result();

                    if($stmt->num_rows == 1){
                        $email_err = "This email is already taken.";
                    } else{
                        $email = trim($_POST["email"]);
                    }
                }else{
                    echo "Oops! something went wrong. Please try again later.";
                }
            }
        }
        // Validate passport number 
        if(empty(trim($_POST["num_passport"]))){
            $passport_err = "Please enter your passport";
        }else{
            $sql ="SELECT id_user FROM Utilisateur WHERE num_passport = ?";
            
            if($stmt = $con->prepare($sql)){
                $stmt->bind_param("s", $param_passport);
                $param_passport = trim($_POST["num_passport"]);
                if($stmt->execute()){
                    $stmt->store_result();
                    $passport = trim($_POST["num_passport"]);
                }else{
                    echo "Oops! something went wrong. Please try again later.";
                }
            }
        }
        // Validate password
        if(empty(trim($_POST["mot_de_passe"]))){
            $password_err = "Please enter a password.";     
        } elseif(strlen(trim($_POST["mot_de_passe"])) < 6){
            $password_err = "Password must have atleast 6 characters.";
        } else{
            $password = trim($_POST["mot_de_passe"]);
        }
        // Validate confirm password
        if(empty(trim($_POST["confirm_password"]))){
            $confirm_pwd_err = "Please confirm password.";     
        } else{
            $confirm_pwd = trim($_POST["confirm_password"]);
            if(empty($password_err) && ($password != $confirm_pwd)){
                $confirm_pwd_err = "Password did not match.";
            }
        }

        // Check input errors before inserting in database
        if(empty($fname_err) && empty($lname_err) && empty($phone_err) && empty($email_err) && empty($passport_err) && empty($password_err) && empty($confirm_pwd_err)){
        
            // Prepare an insert statement
            $sql = "INSERT INTO Utilisateur (nom, prenom, tel, email, num_passport, mot_de_passe) VALUES (?, ?, ?, ?, ?, ?)";
            
            if($stmt = $con->prepare($sql)){
                // Bind variables to the prepared statement as parameters
                $stmt->bind_param("ssssss", $fname, $lname, $phone, $email, $passport, sha1($password));
                
                // Set parameters
                $param_fname = $fname;
                $param_lname = $lname;
                $param_phone = $phone;
                $param_email = $email;
                $param_passport = $passport;
                $param_password = password_hash($password, PASSWORD_DEFAULT);
                
                // Attempt to execute the prepared statement
                if($stmt->execute()){
                    // Redirect to login page
                    header("location: login.php");
                } else{
                    echo "Something went wrong. Please try again later.";
                }

                // Close statement
                $stmt->close();
            }
        }
        // Close connection
        $con->close();
    }
   
?>