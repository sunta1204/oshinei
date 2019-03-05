<?php
  include "connect.php";
  session_start();
  if (empty($_SESSION["emp_id"]) && empty($_SESSION["emp_email"])) {
    header("location:login.html");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>admin_page</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script type="text/javascript">
    function facebook() {
      window.open("https://www.facebook.com/oshineikhonkaen/");
    }
  </script>
</head>
<body>
  <!-- navbar -->
	<nav class="navbar navbar-dark bg-dark" style="background-color: rgb(0, 93, 255); border: 5px solid #41434B;">
    <button class="btn btn-outline-primary " type="button" onclick="window.location.href='admin_page.php'" style="font-size: 26px;">Oshinei KhonKaen</button> 
    <h3 style="color: white; margin-right:50px; margin-left: auto;">สวัสดีคุณ <?=$_SESSION["emp_fullname"]?></h3>
    <button class="navbar-toggler btn btn-outline-primary" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarNav"><br>
          <ul class="navbar-nav">
            <li class="nav-item">
              <button class="btn btn-sm btn-outline-primary form-control" type="button" onclick="window.location.href='emp_list.php'" style="font-size: 24px;">รายชื่อพนักงาน</button>
            </li><br>
            <li class="nav-item">
              <button class="btn btn-sm btn-outline-primary form-control" type="button" onclick="window.location.href='emp_work.php'" style="font-size: 24px;">เช็คเวลางานพนักงาน</button>
            </li><br>
            <li class="nav-item">
              <button class="btn btn-sm btn-outline-primary form-control" type="button" onclick="window.location.href='emp_salary.php'" style="font-size: 24px;">รายได้พนักงาน</button>
            </li><br>
            <li class="nav-item">
              <button class="btn btn-sm btn-outline-primary form-control" type="button" onclick="window.location.href='department.php'" style="font-size: 24px;">รายชื่อแผนก</button>
            </li><br>
            <li class="nav-item">
              <button class="btn btn-sm btn-outline-primary form-control" type="button" onclick="window.location.href='work.php'" style="font-size: 24px;">ตารางเวลาการทำงาน</button>
            </li><br>
            <li class="nav-item">
              <button class="btn btn-sm btn-outline-info form-control" type="button" onclick="facebook()" style="font-size: 24px;">Facebook page</button>
            </li><br>
            <li class="nav-item">
              <button class="btn btn-sm btn-outline-danger form-control" type="button" onclick="window.location.href='logout.php'" style="font-size: 24px;">ออกจากระบบ</button>
            </li><br>
          </ul>
        </div>
  </nav>
	<!-- navbar -->
  		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="border-style: solid; border-color: #696969; border-width: 6px;">
  			<ol class="carousel-indicators">
    			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    			<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    			<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
  			</ol>
  			<div class="carousel-inner" style="max-width: 1920px; max-height: 885px;">
    			<div class="carousel-item active">
      				<img class="d-block w-100" src="img/1.jpg">
    			</div>
    			<div class="carousel-item">
      				<img class="d-block w-100" src="img/2.jpg">
    			</div>
    			<div class="carousel-item">
      				<img class="d-block w-100" src="img/3.jpg">
    			</div>
    			<div class="carousel-item">
      				<img class="d-block w-100" src="img/4.jpg">
    			</div>
    			<div class="carousel-item">
      				<img class="d-block w-100" src="img/5.jpg">
    			</div>
          <div class="carousel-item">
              <img class="d-block w-100" src="img/6.jpg">
          </div>
          <div class="carousel-item">
              <img class="d-block w-100" src="img/7.jpg">
          </div>
          <div class="carousel-item">
              <img class="d-block w-100" src="img/8.jpg">
          </div>
          <div class="carousel-item">
              <img class="d-block w-100" src="img/9.jpg">
          </div>
          <div class="carousel-item">
              <img class="d-block w-100" src="img/10.jpg">
          </div>
  			</div>
  			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    			<span class="sr-only">Previous</span>
  			</a>
  			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    			<span class="carousel-control-next-icon" aria-hidden="true"></span>
    			<span class="sr-only">Next</span>
  			</a>
  		</div>
	
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
</body>
</html>