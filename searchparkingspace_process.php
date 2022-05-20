<?php 
$area = $_POST['area'];
$dbcon = new PDO("mysql:host=localhost:3306;dbname=carparking;","root","");
$dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <!-- bootstrap cdn -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"
      crossorigin="anonymous"
    />
    <!-- font awsome cdn  -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
      integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <script
      src="https://code.jquery.com/jquery-1.12.4.min.js"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"
      crossorigin="anonymous"
    ></script>
    <!-- custom css -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <title>Document</title>
  </head>
  <body>
        
  
      </div>
    </section>

    
    <!-- footer area -->
  <section class="footer">
  <div class="container">
          <div class="row">
              <div class="col-lg-4 col-md-12 col-sm-12">
                  <h4 class="text-center text-uppercase">services</h4>
                  <a class="text-center text-capitalize text-decoration-none" href="">
                      <p>website Design </p>
                  </a>
                  <a class="text-center text-capitalize text-decoration-none" href="">
                      <p>Wordpress Development</p>
                  </a>
                  <a class="text-center text-capitalize text-decoration-none" href="">
                      <p>Mobile App Development</p>
                  </a>
                  <a class="text-center text-capitalize text-decoration-none" href="">
                      <p>Graphic design</p>
                  </a>
                  <a class="text-center text-capitalize text-decoration-none" href="">
                      <p>Seo Optimization</p>
                  </a>
              </div>
              

              </div>
          </div>
          <hr>
    

  </section>
  </body>
</html>
