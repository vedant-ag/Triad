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
      <title>Triad | Products</title>
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
      <link rel="stylesheet" href="style.css" type="text/css"/>
   </head>
   <body>
      
         <!----- header start------>
      <header class="container-fluid">
         <div class="container">
            <div class="navbar">
               <div class="logo"> 
                  <a href="index.php"><img src="images/logo.png" alt="Redstore logo" width="125px"/> </a>
               </div>
               <nav>
                  <ul id="MenuItems">
                     <li><a href="index.php">Home</a></li>
                     <li class="active"><a href="products.php">Products</a></li>
                     <li><a href="about.php">About</a></li>
                     <li><a href="contact.php">Contact</a></li>
                     <li><a href="logout.php">Logout</a></li>
                  </ul>
               </nav>
               <a href="cart_details.php"><img src="images/cart.png" width="30px" height="30px"></a>
               <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
            </div>
         </div>
      </header>
      <!----- header end------>
    
      <div class="small_container">
        <div class="row row_2">
           <h2>All Products</h2>
           <select>
              <option>default shorting</option>
              <option>short by ratings</option>
              <option>dshort by sale</option>
              <option>short by popularity</option>
           </select>
        </div>
         <div class="row">
            <div class="col4">
               <a href="about.php"><img src="images/buy-1.jpg"/> </a>
               <a href="about.php" style="text-decoration: none;"><h4>RED Printed T-shirt</h4></a>
               <div class="ratings"> <i class="fa fa-star"></i> <i class="fa fa-star" ></i> <i class="fa fa-star" ></i> <i class="fa fa-star"></i> <i class="far fa-star"></i> </div>
               <P>$50.00</P>
            </div>
            <div class="col4">
               <img src="images/buy-2.jpg"/> 
               <h4>Blue Modern Shoe</h4>
               <div class="ratings"> <i class="fa fa-star"></i> <i class="fa fa-star" ></i> <i class="fa fa-star" ></i> <i class="fa fa-star"></i> <i class="far fa-star"></i> </div>
               <P>$40.00</P>
            </div>
            <div class="col4">
               <img src="images/buy-3.jpg"/> 
               <h4>Black Printed Pant</h4>
               <div class="ratings"> <i class="fa fa-star"></i> <i class="fa fa-star" ></i> <i class="fa fa-star" ></i> <i class="fa fa-star-half-alt"></i> <i class="far fa-star"></i> </div>
               <P>$60.00</P>
            </div>
            <div class="col4">
               <img src="images/buy-4.jpg"/> 
               <h4>Black printed T-shirt</h4>
               <div class="ratings"> <i class="fa fa-star"></i> <i class="fa fa-star" ></i> <i class="fa fa-star" ></i> <i class="fa fa-star"></i> <i class="far fa-star"></i> </div>
               <P>$30.00</P>
            </div>
            <div class="col4">
               <img src="images/buy-1.jpg"/> 
               <h4>RED Printed T-shirt</h4>
               <div class="ratings"> <i class="fa fa-star"></i> <i class="fa fa-star" ></i> <i class="fa fa-star" ></i> <i class="fa fa-star"></i> <i class="far fa-star"></i> </div>
               <P>$50.00</P>
            </div>
            <div class="col4">
               <img src="images/buy-2.jpg"/> 
               <h4>Blue Modern Shoe</h4>
               <div class="ratings"> <i class="fa fa-star"></i> <i class="fa fa-star" ></i> <i class="fa fa-star" ></i> <i class="fa fa-star"></i> <i class="far fa-star"></i> </div>
               <P>$40.00</P>
            </div>
            <div class="col4">
               <img src="images/buy-3.jpg"/> 
               <h4>Black Printed Pant</h4>
               <div class="ratings"> <i class="fa fa-star"></i> <i class="fa fa-star" ></i> <i class="fa fa-star" ></i> <i class="fa fa-star-half-alt"></i> <i class="far fa-star"></i> </div>
               <P>$60.00</P>
            </div>
            <div class="col4">
               <img src="images/buy-4.jpg"/> 
               <h4>Black printed T-shirt</h4>
               <div class="ratings"> <i class="fa fa-star"></i> <i class="fa fa-star" ></i> <i class="fa fa-star" ></i> <i class="fa fa-star"></i> <i class="far fa-star"></i> </div>
               <P>$30.00</P>
            </div>
            <div class="col4">
               <img src="images/buy-1.jpg"/> 
               <h4>RED Printed T-shirt</h4>
               <div class="ratings"> <i class="fa fa-star"></i> <i class="fa fa-star" ></i> <i class="fa fa-star" ></i> <i class="fa fa-star"></i> <i class="far fa-star"></i> </div>
               <P>$50.00</P>
            </div>
            <div class="col4">
               <img src="images/buy-2.jpg"/> 
               <h4>Blue Modern Shoe</h4>
               <div class="ratings"> <i class="fa fa-star"></i> <i class="fa fa-star" ></i> <i class="fa fa-star" ></i> <i class="fa fa-star"></i> <i class="far fa-star"></i> </div>
               <P>$40.00</P>
            </div>
            <div class="col4">
               <img src="images/buy-3.jpg"/> 
               <h4>Black Printed Pant</h4>
               <div class="ratings"> <i class="fa fa-star"></i> <i class="fa fa-star" ></i> <i class="fa fa-star" ></i> <i class="fa fa-star-half-alt"></i> <i class="far fa-star"></i> </div>
               <P>$60.00</P>
            </div>
            <div class="col4">
               <img src="images/buy-4.jpg"/> 
               <h4>Black printed T-shirt</h4>
               <div class="ratings"> <i class="fa fa-star"></i> <i class="fa fa-star" ></i> <i class="fa fa-star" ></i> <i class="fa fa-star"></i> <i class="far fa-star"></i> </div>
               <P>$30.00</P>
            </div>
         </div>
         <div class="page_btn">
            <span>1</span>
            <span>2</span>
            <span>3</span>
            <span>4</span>
            <span>&#8594;</span>
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