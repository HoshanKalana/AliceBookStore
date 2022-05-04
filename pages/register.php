<?php 

include_once("../site-components/header.php");
require '../DBConnect.php'; 

// Define variables and initialize with empty values
$username = $password = $confirm_password = $email = $fullname= $company= $address=$phone ="";
$username_err = $password_err = $confirm_password_err= $email_err = $fullname_err=$company_err= $address_err= $phone_err="";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
   
    // Validate username
    if(empty($_POST["username"])){
        $username_err = "Please enter a username.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
        $username_err = "Username can only contain letters, numbers, and underscores.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Validate fullname
    if(empty($_POST["fname"])){
        $fullname_err = "Please enter a fullname.";
    }else{
         // Set parameters
        $fullname = trim($_POST["fname"]);
    }

    // Validate company
    if(empty($_POST["company"])){
        $company_err = "Please enter a username.";
    } else{
         // Set parameters
        $company = trim($_POST["company"]);
    }

    // Validate address
    if(empty($_POST["address"])){
        $address_err = "Please enter the addresss.";
    } else{
         // Set parameters
        $address = trim($_POST["address"]);
    }

    // Validate address
    if(empty($_POST["phoneno"])){
        $phone_err = "Please enter the phone number.";
    } else{
         // Set parameters
        $phone = trim($_POST["phoneno"]);
    }
    
   
    //validate email
    if(empty($_POST["email"])){
        if(trim($_POST["email"])==""){
            $email_err = "Please enter a email.";
        }
    }else{
        $email= trim($_POST["email"]);
    }
    
    // Validate password
    if(empty($_POST["password"])){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty($_POST["cpassword"])){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["cpassword"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    echo  "pass".$confirm_password." /usern ".$username." /email ".$email."/full".$fullname."/compa: ".$company."/pn: ".$phone."/addre: ".$address;
    // Check input errors before inserting in database
    if($username!="" && $password!="" && $email!="" && $fullname!="" && $company!="" & $phone!="" ){
 
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password, email, role_id, fullname, company_name, address, phone_no) VALUES (?,?,?,?,?,?,?,?)";
         
        if($stmt = mysqli_prepare($conn, $sql)){
       
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssissss", $username, $param_password, $email, $role, $fullname, $company, $address,$phone);
            
            // Set parameters
            $param_username = $username;
            $role=1;
            $param_password= password_hash($password, PASSWORD_DEFAULT);// Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page and reset parameter
                $username = $password = $confirm_password = $email = $fullname= $company= $address=$phone ="";
                $username_err = $password_err = $confirm_password_err= $email_err = $fullname_err=$company_err= $address_err= $phone_err="";
               
                echo "<script type='text/javascript'>window.location.href='/pages/login.php'</script>";
                // ob_end_flush();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
    
    // Close connection
    mysqli_close($conn);
}


?>

<body>
    <div class="page-content register-page">
        <section class="hero-banner">
            <div class="img-wrap" style="background-image: url('../assets/images/slider-img-5.jpg')">
                <div class="overlay"></div>
                <div class="page-title">
                    <h2>Register</h2>
                </div>
            </div>
        </section>

        <section class="register-link">
            <div class="container">
                <div class="link-wrap">
                    <h4>Already have an account? Please <a href="/pages/login.php">Login</a></h4>
                </div>
            </div>
        </section>

        <section class="registration-form">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-2"></div>
                    <div class="col-12 col-md-12 col-lg-8">
                        <div class="section-heading">
                            <h4>User Registertion</h4>
                        </div>
                        <div class="form-section">
                            <form class="row g-3" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" name="fname"  class="form-control <?php echo (!empty($fullname_err)) ? 'is-invalid' : ''; ?>" id="floatingInput"
                                            placeholder="name@example.com">
                                            <span class="invalid-feedback"><?php echo $fullname_err; ?></span>
                                        <label for="floatingInput">Full Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" name="email"  class="form-control <?php echo $email_err!="" ? 'is-invalid' : ''; ?>" id="floatingPassword"
                                            placeholder="Email">
                                            <span class="invalid-feedback"><?php echo $email_err; ?></span>
                                        <label for="floatingPassword">Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>" id="floatingPassword"
                                            placeholder="Username">
                                        <span class="invalid-feedback"><?php echo $username_err; ?></span>
                                        <label for="floatingPassword">User Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" name="company" class="form-control <?php echo (!empty($company_err)) ? 'is-invalid' : ''; ?>" id="floatingPassword"
                                            placeholder="Company Name">
                                            <span class="invalid-feedback"><?php echo $company_err; ?></span>
                                        <label for="floatingPassword">Company Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" name="phoneno" class="form-control <?php echo (!empty($phone_err)) ? 'is-invalid' : ''; ?>" id="floatingPassword"
                                            placeholder="Phone No.">
                                            <span class="invalid-feedback"><?php echo $phone_err; ?></span>
                                        <label for="floatingPassword">Phone No</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <textarea type="pastextsword" name="address" class="form-control <?php echo (!empty($address_err)) ? 'is-invalid' : ''; ?>" id="floatingPassword"
                                            placeholder="Address"></textarea>
                                            <span class="invalid-feedback"><?php echo $address_err; ?></span>
                                        <label for="floatingPassword">Address</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" id="floatingPassword"
                                            placeholder="Password">
                                            <span class="invalid-feedback"><?php echo $password_err; ?></span>
                                        <label for="floatingPassword">Password</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="password" name="cpassword" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" id="floatingPassword"
                                            placeholder="Password">
                                            <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
                                        <label for="floatingPassword">Confirm Password</label>
                                    </div>
                                </div>
                                <div class="col-12 button-col">
                                    <button type="submit" class="btn btn-submit">Sign up</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-2"></div>
                </div>
            </div>
        </section>

    </div>

    <?php include_once("../site-components/footer.php")  ?>