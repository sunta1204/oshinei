<?php
include "connect.php";
session_start();
if (empty($_SESSION["emp_id"]) && empty($_SESSION["emp_email"])) {
  header("location:login.html");
}
$stmt = $pdo->prepare("SELECT * FROM department ");
$stmt->execute(); 
?>
<!DOCTYPE html>
<html>
<head>
<title>department</title>
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
      <div class="collapse navbar-collapse" id="navbarNav">
          <br><ul class="navbar-nav">
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
			<div class="carousel-inner" style="max-width: 1920px; max-height: 600px;">
  			<div class="carousel-item active">
    				<img class="d-block w-100" src="imge/1.jpg">
  			</div>
  			<div class="carousel-item">
    				<img class="d-block w-100" src="imge/2.jpg">
  			</div>
  			<div class="carousel-item">
    				<img class="d-block w-100" src="imge/3.jpg">
  			</div>
  			<div class="carousel-item">
    				<img class="d-block w-100" src="imge/4.jpg">
  			</div>
  			<div class="carousel-item">
    				<img class="d-block w-100" src="imge/5.jpg">
  			</div>
        <div class="carousel-item">
            <img class="d-block w-100" src="imge/6.jpg">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="imge/7.jpg">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="imge/8.jpg">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="imge/9.jpg">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="imge/10.jpg">
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

      <div class="container" style="background-color: rgb(180, 180, 180); box-shadow: 0 50px 70px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); height: 550px;box-shadow: 2px 2px 200px red;">  
        <nav style="float: left;width: 200px;height: 400px;margin-top: 20px;margin-bottom: 5px;">
          <nav class="w3-panel w3-border-white w3-leftbar w3-rightbar w3-topbar w3-bottombar" ><br>
            <a href="admin_page.php"><input type="button" value="กลับสู่หน้าหลัก" class="btn btn-primary form-control"></a><br><br>
            <a href="emp_list.php"><input type="button" value="รายชื่อพนักงาน" class="btn btn-primary form-control"></a><br><br>
            <a href="emp_work.php"><input type="button" value="เช็คเวลางานพนักงาน" class="btn btn-primary form-control"></a><br><br>
            <a href="emp_salary.php"><input type="button" value="รายได้พนักงาน" class="btn btn-primary form-control"></a><br><br>
            <a href="work.php"><input type="button" value="ตารางเวลาการทำงาน" class="btn btn-primary form-control"></a><br><br>
            <a href="logout.php"><input type="button" value="ออกจากระบบ" class="btn btn-danger form-control"></a><br><br>
          </nav>
        </nav>

        
        <article style="margin-left: 200px">
          <div style="margin-right: 150px;padding-top: 20px;padding-left: 50px; padding-right: 5px;">
            <h1 style="text-align: left; size: 60px;color: white; text-shadow: 2px 2px 5px red"">ตารางแผนก</h1><br>
            <table class='table table-hover table-dark' style='box-shadow: 2px 2px 50px red;'>
              <tr>
                <th>รหัสแผนก</th>
                <th>ชื่อแผนก</th>
                <th>จำนวนพนักงาน</th>
                <th>เบอร์โทรติดต่อ</th>
              </tr>
              <?php while ($row=$stmt->fetch()) { ?>
              <tr>
                <td><?=$row["dep_id"]?></td>
                <td><?=$row["dep_name"]?></td>
                <td><?=$row["dep_amountemp"]?></td>
                <td><?=$row["dep_tel"]?></td>
              </tr>
              <?php } ?>
            </table>
          </div>
        </article>
      </div>
 

      <footer style="background-color: #3c3d41;padding: 30px 10px;color: rgba(255,255,255,1.00);border-bottom-right-radius: 10px;border-top-left-radius: 10px;border-bottom-left-radius: 10px;border-top-right-radius: 10px;">
          <div class="text-light text-center">Created By GIS VIP Group 2 Section 2 </div>
          <div class="text-light text-center">322336 DATABASE SYSTEM AND DATABASE DESIGN</div>
      </footer>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>