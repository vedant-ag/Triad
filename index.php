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
      <title>Triad | An E-commerce site</title>
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
                     <li class="active"><a href="index.php">Home</a></li>
                     <li><a href="products.php">Products</a></li>
                     <li><a href="about.php">About</a></li>
                     <li><a href="contact.php">Contact</a></li>
                     <li><a href="logout.php">Logout</a></li>
                  </ul>
               </nav>
               <a href="cart_details.php"><img src="images/cart.png" width="30px" height="30px"> </a>
               <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
            </div>
         </div>
      </header>
      <!----- header end------>

      <section class="container-fluid">
         <div class="container">
            <div class="row">
               <div class="col2">
                  <h1>Give your Workout<br/> A new Style!</h1>
                  <p>Fitness isn't a seasonal hobby, it's a lifestyle.<br>Get stronger and fitter with us!</p>
                  <a class="btn" href="products.php">Explore Now &#8594;</a> 
               </div>
               <div class="col2"> <img src="images/image1.png" alt="" srcset=""> </div>
            </div>
         </div>
      </section>

      <!----- category product section start------>
      <section class="categories">
         
         <div class="small_container">
            <div class="row">
               <div class="col3"> <img src="images/category-1.jpg"/> </div>
               <div class="col3"> <img src="images/category-2.jpg"/> </div>
               <div class="col3"> <img src="images/category-3.jpg"/> </div>
            </div>
         </div>
      
      </section>
       <!----- category product section end------>

      <!----- featured product section start------>
      <div class="small_container">
         <h2 class="title">Featured Product</h2>
         <div class="row">
            <div class="col4">
               <a href="about.php"><img src="images/product-1.jpg"/> </a>
               <a href="about.php"><h4>RED Printed T-shirt</h4></a>
               <div class="ratings"> <i class="fa fa-star"></i> <i class="fa fa-star" ></i> <i class="fa fa-star" ></i> <i class="fa fa-star"></i> <i class="far fa-star"></i> </div>
               <P>$50.00</P>
            </div>
            <div class="col4">
               <img src="images/product-2.jpg"/> 
               <h4>Blue Modern Shoe</h4>
               <div class="ratings"> <i class="fa fa-star"></i> <i class="fa fa-star" ></i> <i class="fa fa-star" ></i> <i class="fa fa-star"></i> <i class="far fa-star"></i> </div>
               <P>$40.00</P>
            </div>
            <div class="col4">
               <img src="images/product-3.jpg"/> 
               <h4>Black Printed Pant</h4>
               <div class="ratings"> <i class="fa fa-star"></i> <i class="fa fa-star" ></i> <i class="fa fa-star" ></i> <i class="fa fa-star-half-alt"></i> <i class="far fa-star"></i> </div>
               <P>$60.00</P>
            </div>
            <div class="col4">
               <img src="images/product-4.jpg"/> 
               <h4>Black printed T-shirt</h4>
               <div class="ratings"> <i class="fa fa-star"></i> <i class="fa fa-star" ></i> <i class="fa fa-star" ></i> <i class="fa fa-star"></i> <i class="far fa-star"></i> </div>
               <P>$30.00</P>
            </div>
         </div>
      </div>
       <!----- featured product section end------>

        <!----- latest product section start------>
      <div class="small_container">
         <h2 class="title">latest Product</h2>
         <div class="row">
            <div class="col4">
               <img src="images/product-5.jpg"/> 
               <h4>RED Printed T-shirt</h4>
               <div class="ratings"> <i class="fa fa-star"></i> <i class="fa fa-star" ></i> <i class="fa fa-star" ></i> <i class="fa fa-star"></i> <i class="far fa-star"></i> </div>
               <P>$50.00</P>
            </div>
            <div class="col4">
               <img src="images/product-6.jpg"/> 
               <h4>Blue Modern Shoe</h4>
               <div class="ratings"> <i class="fa fa-star"></i> <i class="fa fa-star" ></i> <i class="fa fa-star" ></i> <i class="fa fa-star"></i> <i class="far fa-star"></i> </div>
               <P>$40.00</P>
            </div>
            <div class="col4">
               <img src="images/product-7.jpg"/> 
               <h4>Black Printed Pant</h4>
               <div class="ratings"> <i class="fa fa-star"></i> <i class="fa fa-star" ></i> <i class="fa fa-star" ></i> <i class="fa fa-star-half-alt"></i> <i class="far fa-star"></i> </div>
               <P>$60.00</P>
            </div>
            <div class="col4">
               <img src="images/product-8.jpg"/> 
               <h4>Black printed T-shirt</h4>
               <div class="ratings"> <i class="fa fa-star"></i> <i class="fa fa-star" ></i> <i class="fa fa-star" ></i> <i class="fa fa-star"></i> <i class="far fa-star"></i> </div>
               <P>$30.00</P>
            </div>
         </div>
         <div class="row">
            <div class="col4">
               <img src="images/product-9.jpg"/> 
               <h4>RED Printed T-shirt</h4>
               <div class="ratings"> <i class="fa fa-star"></i> <i class="fa fa-star" ></i> <i class="fa fa-star" ></i> <i class="fa fa-star"></i> <i class="far fa-star"></i> </div>
               <P>$50.00</P>
            </div>
            <div class="col4">
               <img src="images/product-10.jpg"/> 
               <h4>Blue Modern Shoe</h4>
               <div class="ratings"> <i class="fa fa-star"></i> <i class="fa fa-star" ></i> <i class="fa fa-star" ></i> <i class="fa fa-star"></i> <i class="far fa-star"></i> </div>
               <P>$40.00</P>
            </div>
            <div class="col4">
               <img src="images/product-11.jpg"/> 
               <h4>Black Printed Pant</h4>
               <div class="ratings"> <i class="fa fa-star"></i> <i class="fa fa-star" ></i> <i class="fa fa-star" ></i> <i class="fa fa-star-half-alt"></i> <i class="far fa-star"></i> </div>
               <P>$60.00</P>
            </div>
            <div class="col4">
               <img src="images/product-12.jpg"/> 
               <h4>Black printed T-shirt</h4>
               <div class="ratings"> <i class="fa fa-star"></i> <i class="fa fa-star" ></i> <i class="fa fa-star" ></i> <i class="fa fa-star"></i> <i class="far fa-star"></i> </div>
               <P>$30.00</P>
            </div>
         </div>
         <div class="row">
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
      </div>
      <!----- latest product section end------>

      <!----- offer product section start------>
      <section class="offer">
         <div class="small_container">
            <div class="row">
               <div class="col2"> <img src="images/exclusive.png" alt="" class="offer_img"> </div>
               <div class="col2">
                  <p>Exclusive Aailable On Here</p>
                  <h1 id="band">Smart Band 4</h1>
                  <p>Whether you're trying out some new dance moves or tearing it up at the gym, the Smart Band will track your steps and count those calories.</p>
                  <a href="#" class="btn">Buy Now &#8594;</a> 
               </div>
            </div>
         </div>
      </section>
      <!----- offer product section start------>

      <!----- testimonial product section start------>
      <section class="testimonial">
         <div class="small_container">
            <div class="row">
               <div class="col3">
                  <i class="fa fa-quote-left"></i> 
                  <p>Finally an affordable product that delivers exactly what it says it will.<br>I'm totally blown away.</p>
                  <div class="ratings"> <i class="fa fa-star"></i> <i class="fa fa-star" ></i> <i class="fa fa-star" ></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                  <img src="images/user-1.png"> 
                  <h3>Vedant Agarwal</h3>
               </div>
               <div class="col3">
                  <i class="fa fa-quote-left"></i> 
                  <p>Awesome products and good value of equipment.<br>It provides genuine products amd it's easy to search and place orders.</p>
                  <div class="ratings"> <i class="fa fa-star"></i> <i class="fa fa-star" ></i> <i class="fa fa-star" ></i> <i class="fa fa-star"></i> <i class="far fa-star"></i> </div>
                  <img src="images/user-2.png"> 
                  <h3>Nikhil Yadav</h3>
               </div>
               <div class="col3">
                  <i class="fa fa-quote-left"></i> 
                  <p>Awesome stylish products and comfortable interface.<br>Tried this site for the first time and loved the smoothness it provides.
                     </p>
                  <div class="ratings"> <i class="fa fa-star"></i> <i class="fa fa-star" ></i> <i class="fa fa-star" ></i> <i class="fa fa-star"></i> <i class="far fa-star"></i> </div>
                  <img src="images/user-3.png"> 
                  <h3>Samiksha Agarwal</h3>
               </div>
            </div>
         </div>
      </section>

      <section>
         <!----- testimonial product section end------>

         <!----- brands product section start------>
         <div class="brands">
            <div class="small_container">
               <div class="row">
                  <div class="col5"> <img src="images/logo-coca-cola.png"> </div>
                  <div class="col5"> <img src="images/logo-godrej.png"> </div>
                  <div class="col5"> <img src="images/logo-oppo.png"> </div>
                  <div class="col5"> <img src="images/logo-paypal.png"> </div>
                  <div class="col5"> <img src="images/logo-philips.png"> </div>
               </div>
            </div>
         </div>
      </section>
         <!----- brands product section end------>

          <!----- footer product section start------>
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
      <!----- footer product section end------>

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