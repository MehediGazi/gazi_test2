<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!-- fonts -->
 <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
 <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
       rel="stylesheet">
 <!-- bootstrap cdn -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
       integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
 <!-- font awsome cdn  -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
       integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
       crossorigin="anonymous" referrerpolicy="no-referrer" />
 <script src="https://code.jquery.com/jquery-1.12.4.min.js" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"
       crossorigin="anonymous"></script>
 <!-- custom css -->
 <link rel="stylesheet" href="css/signup.css">
 <link rel="stylesheet" href="css/responsive.css">
 <title>Sign in to RomaxDev</title>
</head>
<body>
          <!-- animations -->
         <!-- animations -->
    <header class="header">
      <nav class=" fixed-top ">
          <div class="container">
              <div class="wrapper d-flex align-items-center justify-content-between">
                  <div class="logo d-flex align-items-center mb-0 mb-md-3">
                      <img style="width:100px; height: 50px;margin-left: -10px;" src="img/logo.png" alt="">
                      <span class="mt-2">RomaxDev</span>
                  </div>
                  <input type="radio" name="slide" id="menu-btn">
                  <input type="radio" name="slide" id="cancel-btn">
                  <ul class="nav-links">
                      <label for="cancel-btn" class="btn cancel-btn"> <i class="fas fa-times"></i>
                                  </label>
                      <li><a href="index.html" class="">Home</a></li>
                      <li><a href="about.html">About us</a></li>
                   
                      
                      <li> <a class="login active" href="signup.html">Sign Up</a></li>
                      <li><a class="login" href="signin.html">login</a></li>
                  </ul>
                  <label for="menu-btn" class="btn menu-btn"> <i class="fas fa-bars"></i> </label>
              </div>
          </div>
      </nav>
  </header>



    <!-- news latter section -->
    <section class="news-latter ">
      <div class="container">
            <div class="row d-flex justify-content-center">
                  <div class="col-6 img fluid text-center">
                        <img class="img-fluid" src="img/signup.png" alt="">
                  </div>
                  <div class="col-6 row d-flex justify-content-center card">
                        <form action="signup_process.php", method="POST">
                              <div class="row d-flex justify-content-center">
                                      <div class="col-xl-6  col-lg-12 col-md-12 inputBox">
                                         
                                            <input type="text" placeholder="Enter your first name", name='fn'>
                                     
                                      </div>
                                      <div class="col-xl-6  col-lg-12 col-md-12  inputBox">
                                      
                                            <input type="text" placeholder="Enter your last name", name='ln'>
                                       
                                      </div>
                                   </div>
           
                                   <div class="row d-flex justify-content-center">
                                         <div class="col-xl-6 col-lg-12 col-md-12 inputBox">
                                            
                                               <input type="email" placeholder="Enter your Email", name='email'>
                                        
                                         </div>
                                         <div class="col-xl-6 col-lg-12 col-md-12  inputBox">
                                         
                                               <input type="text" placeholder="phone number with country code", name='phone'>
                                          
                                         </div>
                                      </div>

                                      

                                      <div class="row d-flex justify-content-center">
                                         <div class="col-xl-6 col-lg-12 col-md-12 inputBox">
                                            
                                               <input type="text" placeholder="Address", name='addr'>
                                        
                                         </div>
                                         <div class="col-xl-6 col-lg-12 col-md-12  inputBox">
                                         
                                               <input type="text" placeholder="Car Number Plate", name='car'>
                                          
                                         </div>
                                      </div>


                                 
                                   <div class="row">
                                      

                                      <div class="col-xl-6  col-lg-12 col-md-12 inputBox">
                                                  <input type="text" placeholder="Gender", name='gender'>
                                      
                                      </div>



                       
                                      <div class="col-xl-6  col-lg-12 col-md-12 ">
                                         <div class="inputBox">
                                            <input type="password" placeholder="enter password", name="pass">
                                         </div>
                                      </div>

                                   </div>
                                  
                                        <div class="row mt-4">
                                            <div class="text-center col-12">
                                               <button class="btn-login">Submit</button>
                                            </div>
                                        </div>
                                </form>      
                          </div>
                  </div>
            </div>
      
      
            </section>



     <!-- footer area -->


     <section class="footer">
      <div class="container">
        <div class="row">
              <div class="col-lg-4 col-md-12 col-sm-12">
                  <h4 class="text-center text-uppercase">services</h4>
                  <a class="text-center text-capitalize text-decoration-none" href=""> <p>website Design </p></a>
                  <a class="text-center text-capitalize text-decoration-none" href=""> <p>Wordpress Development</p></a>
                  <a class="text-center text-capitalize text-decoration-none" href=""> <p>Mobile App Development</p></a>
                  <a class="text-center text-capitalize text-decoration-none" href=""> <p>Graphic design</p></a>
                  <a class="text-center text-capitalize text-decoration-none" href=""> <p>Seo Optimization</p></a>
              </div>
              <div class="col-lg-4 col-md-12 col-sm-12">
                  <h4 class="text-center text-uppercase">company</h4>
                    <a class="text-center text-capitalize text-decoration-none" href=""> <p>about us </p></a>
                    <a class="text-center text-capitalize text-decoration-none" href=""> <p>How it works  </p></a>
                    <a class="text-center text-capitalize text-decoration-none" href=""> <p>packages </p></a>
                    <a class="text-center text-capitalize text-decoration-none" href=""> <p>Graphic design </p></a>
                    <a class="text-center text-capitalize text-decoration-none" href=""> <p>Seo Optimization </p></a>
             
              </div>
              <div class="col-lg-4 col-md-12 col-sm-12">
                  <h4 class="text-center text-uppercase">about</h4>
                  <a class="text-center text-capitalize text-decoration-none" href=""> <p>info.romaxdev@gmail.com</p></a>
                  <a class="text-center text-capitalize text-decoration-none" href=""> <p>Address Dhaka United City Madani Avenue</p></a>
                  <a class="text-center text-capitalize text-decoration-none" href=""> <p>Dhaka 1212 </p></a>
                  <h4 class="text-center text-uppercase">Follow Us</h4>
                  <div class="text-center p-2">
                        <a href="">  <i class="fab fa-facebook"></i></a>
                        <a href="">  <i class="fab fa-instagram"></i></a>
                        <a href="">  <i class="fab fa-dribbble"></i></a>
                        <a href="">  <i class="fab fa-twitter"></i></a>
                      
                  </div>
                 
              </div>
        </div>
      <hr>
      
          <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                  <h4 class="text-start text-uppercase mt-5">we accept</h4>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 text-end">
                  <img class="img-fluid" style="width: 100px; height: 100px; margin-top: 10px; padding-right:10px" src="img/bekash.png" alt="">
                  <img class="img-fluid" style="width: 100px; height: 100px; margin-top: 10px; padding-right:10px" src="img/nogod.png" alt="">
                  <img class="img-fluid" style="width: 100px; height: 100px; margin-top: 10px; padding-right:10px" src="img/payonner.png" alt="">
                </div>
          </div>
          <div class="row">
                <div class="col-lg-6 col-md-12 col-xl-6 col-xxl-6 col-sm-12 text-secondary row d-flex align-items-end">
                  <p>all @copyright reserved to Romaxdev</p>
                </div>
                <div class="col-lg-6 col-md-12 col-xl-6 col-xxl-6 col-sm-12 text-secondary text-end">
                  <p>made by <a class="text-capitalize text-decoration-none" href="https://www.facebook.com/rownokmahbub/">Mehbubur Rahman Rownok</a> </p>
                </div>
          </div>
      </div>
      
            </section>
</body>
</html>