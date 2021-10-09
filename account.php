<?php
//This script will handle login
session_start();

// check if the user is already logged in
if(isset($_SESSION['username']))
{
    header("location: index.php");
    exit;
}
require_once "config.php";
if (isset($_POST['submit_login'])){
    $username = $password = "";
    $err = "";

    // if request method is post
    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        if(empty(trim($_POST['username'])) || empty(trim($_POST['password'])))
        {
            $err = "Please enter username + password";
        }
        else{
            $username = trim($_POST['username']);
            $password = trim($_POST['password']);
        }

    if(empty($err))
    {
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $param_username);
        $param_username = $username;
        
        
        // Try to execute this statement
        if(mysqli_stmt_execute($stmt)){
            mysqli_stmt_store_result($stmt);
            if(mysqli_stmt_num_rows($stmt) == 1)
                    {
                        mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                        if(mysqli_stmt_fetch($stmt))
                        {
                            if(password_verify($password, $hashed_password))
                            {
                                // this means the password is corrct. Allow user to login
                                session_start();
                                $_SESSION["username"] = $username;
                                $_SESSION["id"] = $id;
                                $_SESSION["loggedin"] = true;

                                //Redirect user to welcome page
                                header("location: index.php");
                                
                            }
                            else{
                                $err = "Incorrect Password!";
                            }
                        }

                    }
                    else{
                        $err = "Incorrect Username!";
                    }

        }
    } 
    if(empty($err) == FALSE){
        echo "<script>alert('{$err}');</script>";
    }

    }

}
else{
    $username = $password = $confirm_password = "";
    $username_err = $password_err = $confirm_password_err = "";

    if ($_SERVER['REQUEST_METHOD'] == "POST"){

    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Username cannot be blank";
    }
    else{
        $sql = "SELECT id FROM users WHERE username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if($stmt)
        {
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set the value of param username
            $param_username = trim($_POST['username']);

            // Try to execute this statement
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    $username_err = "This username is already taken"; 
                }
                else{
                    $username = trim($_POST['username']);
                }
            }
            else{
                echo "Something went wrong";
            }
        }
    }

    mysqli_stmt_close($stmt);


    // Check for password
    if(empty(trim($_POST['password']))){
        $password_err = "Password cannot be blank";
    }
    elseif(strlen(trim($_POST['password'])) < 5){
        $password_err = "Password cannot be less than 5 characters";
    }
    else{
        $password = trim($_POST['password']);
    }

    // Check for confirm password field
    if(trim($_POST['password']) !=  trim($_POST['confirm_password'])){
        $password_err = "Passwords should match";
    }


    // If there were no errors, go ahead and insert into the database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err))
    {
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        if ($stmt)
        {
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

            // Set these parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT);

            // Try to execute the query
            if (mysqli_stmt_execute($stmt))
            {
                header("location: account.php");
            }
            else{
                echo "Something went wrong... cannot redirect!";
            }
        }
        mysqli_stmt_close($stmt);
    }
    else if(empty($username_err) == FALSE){
        echo "<script>alert('{$username_err}');</script>";
    }
    else{
        echo "<script>alert('{$password_err}');</script>";
    }
    mysqli_close($conn);
    }
}



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Vedant Nikhil Samiksha">
    <title>Triad | Account</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>

    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="account.php"><img src="images/logo.png" width="125px"></a>
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="#" onclick="myFunction();">Home</a></li>
                    <li><a href="#" onclick="myFunction();">Products</a></li>
                    <li><a href="#" onclick="myFunction();">About</a></li>
                    <li><a href="#" onclick="myFunction();">Contact</a></li>
                    <li class="active"><a href="account.php">Account</a></li>
                </ul>
            </nav>
            <a href="#" onclick="myFunction();"><img src="images/cart.png" width="30px" height="30px"></a>
            <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">

        </div>
    </div>

    <!-- --------------------- account page -----------------  -->

    <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col2">
                    <img src="images/image1.png" width="100%">
                </div>
                <div class="col2">
                    <div class="form-container">
                        <div class="form-btn">
                            <span onclick="login()">Login</span>
                            <span onclick="register()">Register</span>
                            <hr id="Indicator">
                        </div>

                        <form id="LoginForm" action="" method="post">
                            <input type="text" placeholder="Username" name="username" required>
                            <input type="password" placeholder="Password" name="password" required>
                            <button type="submit" class="btn" name="submit_login">Login</button>
                            <a href="#">Forgot password?</a>
                        </form>

                        <form id="RegForm" action="" method="post">
                            <input type="text" placeholder="Username" name="username" required>
                            <input type="password" placeholder="Password" name="password" required>
                            <input type="password" placeholder="Confirm Password" name="confirm_password" required>
                            <button type="submit" class="btn" name="submit_registration">Register</button>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>



    <!-- ------------------ footer ----------------  -->
    <div class="footer">
      <div class="container">
         <div class="row">
            <div class="footer_col_1">
               <h3>Download Our App</h3>
               <p>Download Our App for android and ios</p>
               <div class="app_logo"> <img src="images/play-store.png" width="100px"> <img src="images/app-store.png" width="100px"> </div>
            </div>
            <div class="footer_col_2">
               <img src="images/logo-white.png" width="200px"> 
               <p>Our purpose is to sustainaly help you reach your goal.</p>
            </div>
            <div class="footer_col_3">
               <h3>Usefull Links</h3>
               <uL>
                  <li>Coupons</li>
                  <li>Blog Post</li>
                  <li>Return Policy</li>
                  <li>Join Affiliate</li>
               </uL>
            </div>
            <div class="footer_col_4">
               <h3>Follow us</h3>
               <uL>
                  <li>Facebook</li>
                  <li>Twitter</li>
                  <li>Instragram</li>
                  <li>Youtube</li>
               </uL>
            </div>
         </div>
         <hr>
         <p class="copyright">&copy; 2021 all reserved by Vedant, Nikhil and Samiksha</p>
      </div>
   </div>

    <!-- ------------ js for toggle menu -----------  -->
    <script>
        var MenuItems = document.getElementById("MenuItems");
        MenuItems.style.maxHeight = "0px";

        function menutoggle() {
            if (MenuItems.style.maxHeight == "0px") {
                MenuItems.style.maxHeight = "200px";
            } else {
                MenuItems.style.maxHeight = "0px";
            }
        }
    </script>

    <!-- -----------------js for the toggle form ---------------  -->

    <script>
        var LoginForm = document.getElementById("LoginForm");
        var RegForm = document.getElementById("RegForm");
        var Indicator = document.getElementById("Indicator");

        function register() {
            RegForm.style.transform = "translateX(0px)";
            LoginForm.style.transform = "translateX(0px)";
            Indicator.style.transform = "translateX(100px)";
        }

        function login() {
            RegForm.style.transform = "translateX(300px)";
            LoginForm.style.transform = "translateX(300px)";
            Indicator.style.transform = "translateX(0px)";
        }
    </script>
    <script>
        function myFunction() {
            alert("Login Required! ");
        }
    
    </script>
</body>

</html>