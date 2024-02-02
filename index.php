<?php 
session_start();
include 'connection.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swaqa</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/all.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
</head>

<body>
    

<!-- Home starting -->
<section id="home">
  <div class="home-bgLayer">
    <div class="container h-100 position-relative">
      <header>
        <span class="burgerBtn" onclick="openNav()">&#9776;</span>
        <div class="clearfix"></div>
        <nav id="mySidenav" class="sidenav">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <div class="container">

          
          <a href="#">Home</a>
          <a href="#">About</a>
          <a href="#">Contact Us</a>
        </div>
        </nav>
      </header>
      
      <div class="banner-text">
        <h1>SAWAQA</h1>
        <span>If You want to learn to drive a car so this is the place where you want to go. 
          Also, if you want to teach others how to drive a car,so It's your chance here.<br> LET'S GET STARTED</span>
      
        <div class="login-links my-3">
           <button type="button" class="btn userTypeBtn learnerBtn" data-bs-toggle="modal" data-bs-target="#signInOrUp">
            LEARNER <i class="fas fa-car-side"></i>
          </button>
          <button type="button" class="btn userTypeBtn driverBtn" data-bs-toggle="modal" data-bs-target="#signInOrUp">
          DRIVER <i class="fas fa-car"></i></button>
        </div>
        <div class="download-app mt-5">
          <a href="#"><img src="img/google-play-button.png" alt="google play button" class="img-fluid google-play-button"></a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Home ending -->
<!-- about section start -->
  <section id="about" class="py-5">

    <div class="container">
      <h3 class="text-center my-4">Who Are We?</h3>
      <div class="row justify-content-center align-items-center aboutItem pb-4">
        <div class="col-sm-8 col-md-6 col-xl-5">
          <div class="aboutItemImg my-2">
            <img src="img/learner.jpg" alt="driver" class="img-fluid">
          </div>
        </div>
        <div class="col-sm-8 col-md-6 col-xl-5">
          <div class="aboutItemContent my-2">
            <span>Wanna Drive?</span>
            <p><span>SAWAQA</span> is an application to help people who don't know driving to learn driving. You just have to 
              create an account and search for the nearest trainer to you.<br> That's it <i class="far fa-smile-wink"></i> 
            </p>
          </div>
        </div>
      </div>
      <div class="row justify-content-center align-items-center aboutItem my-2">
        <div class="col-sm-8 col-md-6 col-xl-5">
          <div class="aboutItemContent my-2">
            <span>Wanna train Others?</span>
            <p><span>I</span>t is a place for drivers who have cars. If you want to teach other to drive a car and 
              make money alsoo so this is the right place.<br> Go for it <i class="far fa-smile-wink"></i> 
            </p>
          </div>
        </div>
        <div class="col-sm-8 col-md-6 col-xl-5">
          <div class="aboutItemImg aboutDriverImgs my-2">
            <img src="img/driver.jpg" alt="driver" class="img-fluid">
            <img src="img/driver2.jpg" alt="driver" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </section>
<!--about section end -->


<!-- map banner start -->
<section id="mapBanner" class="my-3">
  <h3>Enable your GPS and find your Trainer <br><i class="fas fa-map-marker-alt"></i>
  </h3>
</section>
<!-- map banner end -->

<!-- driver or learner section start -->
<section id="learnerOrDriver" class="py-5">
  <div class="container">
    <span>You Are</span>
    <div class="row justify-content-center">
      <div class="col-6 col-md-4 col-xl-3">
        <div class="learnerOrDriverSide learnerSide">
          <h3>A Learner</h3>
          <button type="button" class="btn userTypeBtn learnerBtn" data-bs-toggle="modal" data-bs-target="#signInOrUp">Click Here</button>
        </div>
      </div>
      <div class="col-6 col-md-4 col-xl-3">
        <div class="learnerOrDriverSide driverSide">
          <h3>A Driver</h3>
          <button type="button" class="btn userTypeBtn driverBtn" data-bs-toggle="modal" data-bs-target="#signInOrUp">Click Here</button>
        </div>
      </div>
      </div>
  </div>

</section>
<!-- driver or learner section end -->

<!-- footer start -->
<footer id="footer" class="mt-4">
  <div class="container py-5">
    <div class="row align-items-center">
      <div class="col-6 col-md-3 links-side">
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Contact</a>
      </div>
      <div class="col-6 col-md-3">
        <a href="#"><img src="img/google-play-button.png" class="img-fluid google-play-button" alt="google play button"></a>
      </div>
    </div>
  </div>

</footer>
<!-- footer end -->

<!-- start of loading page -->
  <section id="loading-page">
    <div class="sk-chase">
      <div class="sk-chase-dot"></div>
      <div class="sk-chase-dot"></div>
      <div class="sk-chase-dot"></div>
      <div class="sk-chase-dot"></div>
      <div class="sk-chase-dot"></div>
      <div class="sk-chase-dot"></div>
    </div>
    <img src="img/sawaqaLight-logo.png" class="img-fluid" alt="sawaqa logo">
  </section>
<!-- end of loading page -->

 <!-- Modal -->
 <div class="modal fade" id="signInOrUp" tabindex="-1" aria-labelledby="signInOrUpLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header border-0">
        <h5 class="modal-title" id="signInOrUpLabel">Learner</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="signIn-tab" data-bs-toggle="tab" data-bs-target="#signIn" type="button" role="tab" aria-controls="signIn" aria-selected="true">signIn</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="signUp-tab" data-bs-toggle="tab" data-bs-target="#signUp" type="button" role="tab" aria-controls="signUp" aria-selected="false">signUp</button>
          </li>
          
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="signIn" role="tabpanel" aria-labelledby="signIn-tab">
            <form class="my-3" action="handle-login.php" method="POST" enctype="">
              <div class="form-floating mb-3">
                <input type="email" name="email" class="form-control" id="ULoginEmail" placeholder="Enter You EMail">
                <label for="ULoginEmail">Email address</label>
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control" id="ULoginPassword" placeholder="Password">
                <label for="ULoginPassword">Password</label>
              </div>
              <input type="hidden" class="userType" value="hello" name="userType">
              <div class="text-center mt-3">
              <button type="submit" class="btn" name="isLogin">Sign In</button>
              <button type="button" class="btn" data-bs-dismiss="modal">Close</button>
              </div>
            </form>
            
          </div>
          <div class="tab-pane fade" id="signUp" role="tabpanel" aria-labelledby="signUp-tab">
            <form class="my-3" action="handle-signup.php" method="POST" enctype="multipart/form-data">
              <div class="row">
                <div class="col">
                  <div class="form-floating mb-3">
                    <input type="text" name="fname" class="form-control" id="ULogUp1stName" placeholder="First Name" aria-label="First name">
                    <label for="ULogUp1stName">First Name</label>
                  </div>
                </div>
                <div class="col">
                  <div class="form-floating mb-3">
                    <input type="text" name="lname" class="form-control" id="ULogUpLastName" placeholder="Last Name" aria-label="Last name">
                    <label for="ULogUpLastName">Last Name</label>
                  </div>
                </div>
              </div>
              <div class="form-floating mb-3">
                <input type="email" name="email" class="form-control" id="ULogUpEmail" placeholder="Enter You EMail">
                <label for="ULogUpEmail">Email address</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" name="password" class="form-control" id="ULogUpPassword" placeholder="Password">
                <label for="ULogUpPassword">Password</label>
              </div>
              <div class="form-floating mb-3">
                <input type="tel" name="phone" class="form-control" id="ULogUpPhone" placeholder="Phone">
                <label for="ULogUpPhone">Phone</label>
              </div>
              <div class="mb-3">
                <input type="file" name="img" class="form-control" id="ULogUpimg">
              </div>
              <div class="form-check locationCheckWrap">
  <input class="form-check-input" type="checkbox" value="" id="locationCheck" required>
  <label class="form-check-label" for="locationCheck">
    Enable Your Location
  </label>
</div>
              <input type="hidden" class="userType" value="hello" name="userType">
              <input type="hidden" class="userLat" value="hello" name="userLat">
              <input type="hidden" class="userLng" value="hello" name="userLng">
              
              <div class="text-center mt-3">
              <button type="submit" class="btn" name="isSignUp">Sign Up</button>
              <button type="button" class="btn" data-bs-dismiss="modal">Close</button>
              </div>
            </form>
            <?php
                if(isset($_SESSION['errors']))
                    {
                    
                    foreach($_SESSION['errors'] as $value){
                    
                        echo "<P> $value </p>";
                    
                    }
                    
                    }
                    
                    //flashing
                    unset($_SESSION['errors']);
                    
                    ?>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="js/app.js"></script>
    
</body>

</html>