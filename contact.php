<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: account.php");
}


?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="author" content="Vedant Nikhil Samiksha">
      <title>Triad | Contact</title>
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
      <link rel="stylesheet" href="style.css" type="text/css"/>
   </head>
   <body>
       <!----- header start------>
       <header class="container-fluid">
         <div class="container">
            <div class="navbar">
               <div class="logo"> 
                  <a href="index.php"><img src="images/logo.png" alt="Redstore logo" width="125px"/></a>
                </div>
               <nav>
                  <ul id="MenuItems">
                     <li><a href="index.php">Home</a></li>
                     <li><a href="products.php">Products</a></li>
                     <li><a href="about.php">About</a></li>
                     <li class="active"><a href="contact.php">Contact</a></li>
                     <li><a href="logout.php">Logout</a></li>
                  </ul>
               </nav>
               <a href="cart_details.php"><img src="images/cart.png" width="30px" height="30px"> </a>
               <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
            </div>
         </div>
      </header>
      <!----- header end------>
     <!-- contact-us section -->
     <div class="container">
        <div class="row help_container">
           <h2 class="title">Help Categories</h2>
        </div>
        <div class="row icn_st">
           <div class="col6">
            <i class="fas fa-shopping-cart icn"></i>
            <p>Order Related</p>
           </div>
           <div class="col6">
            <a href="products.php"><i class="fas fa-truck icn"></i></a>
            <a href="products.php"><p>Shopping</p></a>
           </div>
           <div class="col6">
            <a href="logout.php"><i class="fas fa-user icn"></i></a>
            <a href="logout.php"><p>Triad Account</p></a>
           </div>
           <div class="col6">
            <a href="cart_details.php"><i class="fas fa-credit-card icn"></i></a>
            <a href="cart_details.php"><p>Payments</p></a>
           </div>
           <div class="col6">
            <i class="fas fa-info-circle icn"></i>
            <p>Others</p>
           </div>
           <div class="col6">
            <a href="contact.php"><i class="fas fa-paper-plane icn"></i></a>
            <a href="contact.php"><p>Write to us</p></a>
           </div>
        </div>
        
     </div>
     <div class="container email_container">
      <div class="row">
         <hr>
      </div>
      <div class="row">
         <div class="col1">
            <p>Email: support@triad.com<br><br>Email for international orders: internationalsupport@triad.com</p>
         </div>
      </div>
      <div class="row">
         <hr>
      </div>
     </div>
     
       
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
      <!-- JS for Toggle menu -->
      <script>
         var MenuItems = document.getElementById("MenuItems");
         MenuItems.style.maxHeight = "0px";
         function menutoggle(){
            if(MenuItems.style.maxHeight == "0px"){
               MenuItems.style.maxHeight="200px";
            }
            else{
               MenuItems.style.maxHeight="0px";
            }
         }
      </script>
   </body>
</html>