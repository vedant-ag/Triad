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
      <title>Triad | Cart</title>
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
                     <li><a href="about.php">About</a></li>
                     <li><a href="contact.php">Contact</a></li>
                     <li><a href="logout.php">Logout</a></li>
                  </ul>
               </nav>
               <a href="cart_details.php"></a><img src="images/cart.png" width="30px" height="30px" class="active"> </a>
               <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
            </div>
         </div>
      </header>
      <!----- header end------>

      <!-- cart items details -->
      <div class="small_container cart-page">
          <table>
              <tr>
                  <th>Product</th>
                  <th>Qunatity</th>
                  <th>Subtotal</th>
              </tr>
              <tr>
                  <td>
                      <div class="cart-info">
                          <img src="images/buy-1.jpg" alt="">
                          <div>
                              <p>Red Printed Tshirt</p>
                              <small>Price: $50.00</small><br>
                              <a href="">Remove</a>
                          </div>
                      </div>
                  </td>
                  <td><input type="number" value="1"></td>
                  <td>$50.00</td>
              </tr>
              <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/buy-2.jpg" alt="">
                        <div>
                            <p>Red Printed Tshirt</p>
                            <small>Price: $75.00</small><br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>$50.00</td>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/buy-3.jpg" alt="">
                        <div>
                            <p>Red Printed Tshirt</p>
                            <small>Price: $75.00</small><br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>$50.00</td>
            </tr>
          </table>
          <div class="total-price">
              <table>
                  <tr>
                      <td>Subtotal</td>
                      <td>$200.00</td>
                  </tr>
                  <tr>
                    <td>Tax</td>
                    <td>$35.00</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>$235.00</td>
                </tr>
              </table>
          </div>
      </div>


      
       <!-- FOOTER -->
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