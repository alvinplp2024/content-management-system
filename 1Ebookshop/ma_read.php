<?php
include('conn.php');
include('functions.php');
session_start();
//error_reporting(0);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Product details</title>
	<!--bootstrap css link -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- font awsome link-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<link rel="stylesheet" type="text/css" href="dashboard.css">
</head>
<body>
  <!--navbar-->
<div class="container-fluid p-0">


  		<!--f1-->
<nav class="navbarz navbar-expand-lg navbar-dark p-0">
  <div class="container-fluid d-flex">
    <img src="upload/kim.jpg" class="kim">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
        <li class="nav-item mx-2">
          <a class="nav-link active" aria-current="page" href="dashboard.php"><h4>Home</h4></a>
        </li>


        <!-- <li class="nav-item mx-2">
          <a class="nav-link" href="#"><h5>News</h5></a>
        </li>
        
        <li class="nav-item mx-2" >
          <a class="nav-link" href="#"><h5>Contact</h5></a>
        </li> -->

               
        <li class="nav-item mx-2">
          <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-shopping"></i><sup><?php cart_number(); ?></sup></a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link nav-justified"><h5>Total price: <?php total_price(); ?>/-</h5></a>
        </li>

        <?php
        if(isset($_SESSION['username'])){
         echo "<li class='nav-item mx-2'>
          <a class='nav-link' href='profile.php'><h5><i class='fa fa-user-circle' aria-hidden='true'></i>
            Account</h5></a>
        </li>";
        } else{
           echo "<li class='nav-item mx-2'>
          <a class='nav-link' href='signup.php'><h5>Register</h5></a>
        </li>";        }

      ?>
      </ul>      
    </div>
  </div>
</nav>




<!--S2-->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary"> 
  <ul class="navbar-nav me-auto">
  	<?php 
     if(!isset($_SESSION['username'])){
      echo "<li class='nav-item'>
          <a class='nav-link' href='#''><h5>Welcome Guest</h5></a>
        </li>";
     }
     else { echo "<li class='nav-item'>
          <a class='nav-link' href='#''><h5>Welcome ".$_SESSION['username']."</h5></a>
        </li>";
     }

     if(!isset($_SESSION['username'])){
      echo "<li class='nav-item'>
          <a class='nav-link' href='login.php'><h5>Login</h5></a>
        </li>";
     }else{ echo "<li class='nav-item'>
          <a class='nav-link' href='logout.php'><h5>Logout</h5></a>
        </li>";
      }


    ?>	
    </ul>
</nav>
<!--f3-->
<div class="bg-light">
  
	<h3 class="text-center">Content Management System</h3>
	<p class="text-center">Knowledge is power</p>
</div>

<div class="dnt"><br>      <!--* type="search"-->
<form class="example" action="search.php" method="get" style="margin:auto;max-width:800px">
  <input type="text" placeholder="title, author..." name="search2" class="srch"> &nbsp;
  <button type="submit" value="search" name="search_product"><i class="fa fa-search"></i></button>
  <!--<input type="submit" value="search" class="btn btn-outline-dark" name="search_product">-->
</form><br>
</div>
  	</div>

  <!--f3-->
  <div class="row">
  	<div class="col-md-2 bg-light p-0">
  	  <ul class="navbar-nav me-auto text-center">
  	    <li class="nav-item bg-secondary"><a class="nav-link text-light" href="#"><h4>COURSES</h4></a></li>

        <?php

        // display all categories in db on sidenav
        getcategories(); 

        add_to_cart();
           
        ?>
        
           </ul>
  		
  	</div>





    <div class="col-md-10 px-3" style="overflow-y: auto; height: 80vh; padding-right: 10px;">
    <div class="row">
        <p>
            <strong>Course Title: Comprehensive Introduction to Mobile App Programming</strong>
        </p>
        <p>
        <strong>Course Overview</strong><br>
            Mobile application development is the process of creating software applications 
            designed to run on mobile devices like smartphones and tablets. It blends creativity 
            and technical skills to produce apps that are functional, user-friendly, 
            and optimized for different platforms like Android and iOS. This course introduces 
            students to the principles of mobile development, focusing on Android using Java or Kotlin, 
            and equips them with the skills to design, build, and deploy high-quality mobile applications.
        </p>
    </div>
    <!-- Button Link Below the Text, Above the Footer -->
    <div class="row" style="margin-top: 250px;">
        <a href="content/mobile_app.php" class="btn btn-primary" style="display: block; margin: 0 auto;">Start Learning Mobile Development</a>
    </div>
</div>

  </div>
<!--  -->
 <div class="footer">
  <p> All Rights Reserved ©- Designed by Alvin(+254700921906)- 2024</p>
</div>


<!-- bootstrap js link-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
