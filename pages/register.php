<?php 

include_once("../site-components/header.php");
require '../DBConnect.php'; 

// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
        $username_err = "Username can only contain letters, numbers, and underscores.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM office_users WHERE UserName = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
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
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["cpassword"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["cpassword"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO office_users (UserName, Password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
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
                                        <input type="text" name="fname"  class="form-control" id="floatingInput"
                                            placeholder="name@example.com">
                                        <label for="floatingInput">Full Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" name="email"  class="form-control" id="floatingPassword"
                                            placeholder="Password">
                                        <label for="floatingPassword">Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>" id="floatingPassword"
                                            placeholder="Password">
                                        <span class="invalid-feedback"><?php echo $username_err; ?></span>
                                        <label for="floatingPassword">User Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="password" name="company" class="form-control" id="floatingPassword"
                                            placeholder="Password">
                                        <label for="floatingPassword">Company Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="password" name="phoneno" class="form-control" id="floatingPassword"
                                            placeholder="Password">
                                        <label for="floatingPassword">Phone No</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <textarea type="password" name="address" class="form-control" id="floatingPassword"
                                            placeholder="Password"></textarea>
                                        <label for="floatingPassword">Address</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="password" name="password" class="form-control" id="floatingPassword"
                                            placeholder="Password">
                                        <label for="floatingPassword">Password</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="password" name="cpassword" class="form-control" id="floatingPassword"
                                            placeholder="Password">
                                        <label for="floatingPassword">Confirm Password</label>
                                    </div>
                                </div>
                                <div class="col-12 button-col">
                                    <button type="submit" class="btn btn-submit">Sign in</button>
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