<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="author" content="Vedant Nikhil Samiksha">
      <title>Triad | Product Details</title>
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
                     <li><a href="products.php">Products</a></li>
                     <li class="active"><a href="about.php">About</a></li>
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
    


      <!-- single product details -->
      <div class="small_container single-product">
          <div class="row">
              <div class="col2">
                  <img src="images/gallery-1.jpg" width="100%" id="productImg">
                  <div class="small-img-row">
                      <div class="small-img-col">
                          <img src="images/gallery-1.jpg" width="100%" class="small-img">
                      </div>
                      <div class="small-img-col">
                        <img src="images/gallery-2.jpg" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="images/gallery-3.jpg" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="images/gallery-4.jpg" width="100%" class="small-img">
                    </div>
                  </div>
              </div>
              <div class="col2">
                  <p>Home / T-Shirt</p>
                  <h1>Red Printed T-Shirt by HRX</h1>
                  <h4>$50.00</h4>
                  <select>
                      <option>Select Size</option>
                      <option>XXL</option>
                      <option>XL</option>
                      <option>Large</option>
                      <option>Medium</option>
                      <option>Small</option>
                  </select>
                  <input type="number" value="1">
                  <a href="" class="btn">Add to Cart</a>
                  <h3>Product Details <i class="fa fa-indent"></i></h3><br>
                  <p>Give your summer wardrobe a style upgrade with the HRX Men's Active T-shirt. Team it with a pair of shorts for your morning workout or a denim for an evening out with the guys</p>
              </div>
          </div>
      </div>

      <!-- Title -->
      <div class="small_container">
          <div class="row row_2">
              <h2>Related Products</h2>
              <p>View More</p>
          </div>
      </div>


      <!-- Products -->
      <div class="small_container">
        
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

      <!-- JS for Product Gallery -->
      <script>
          var productImg = document.getElementById("productImg")
          var SmallImg =document.getElementsByClassName("small-img")
          SmallImg[0].onclick = function(){
              productImg.src = SmallImg[0].src;
          }
          SmallImg[1].onclick = function(){
              productImg.src = SmallImg[1].src;
          }
          SmallImg[2].onclick = function(){
              productImg.src = SmallImg[2].src;
          }
          SmallImg[3].onclick = function(){
              productImg.src = SmallImg[3].src;
          }

      </script>
   </body>
</html>