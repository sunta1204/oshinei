<?php
  include "../connect.php";
  
  session_start();

  $stmt = $pdo->prepare("SELECT * FROM employee,salary WHERE employee.emp_email = ? AND salary.emp_id = ?");
  $stmt->bindParam(1, $_POST["emp_email"]);
  $stmt->bindParam(2, $_POST["emp_id"]);
  $stmt->execute();
  $row = $stmt->fetch();
	
  // หาก username และ password ตรงกัน จะมีข้อมูลในตัวแปร $row
  if (!empty($row)) { 
    // นำข้อมูลผู้ใช้จากฐานข้อมูลเขียนลง session 2 ค่า
    $_SESSION["emp_id"] = $row["emp_id"];
    $_SESSION["emp_email"] = $row["emp_email"];
    $_SESSION["emp_fullname"] = $row["emp_fullname"];
	$_SESSION["emp_year"] = $row["emp_year"]; 
	$_SESSION["emp_sex"] = $row["emp_sex"]; 
	$_SESSION["emp_cardid"] = $row["emp_cardid"]; 
	$_SESSION["emp_rank"] = $row["emp_rank"]; 
	$_SESSION["emp_email"] = $row["emp_email"]; 
	$_SESSION["emp_address"] = $row["emp_address"];
	  $_SESSION["salary_time"] = $row["salary_time"]; 
	   $_SESSION["salary_receive"] = $row["salary_receive"];
	  
    $_SESSION["emp_permission"] = $row["emp_permission"];

    session_write_close();
    if($row["emp_permission"] == 1){
        header("location:../admin_page.php");
      }else{
        header("location:../emp_page.php");
      }
  } else {
    echo "ไม่สำเร็จ ชื่อหรือรหัสผ่านไม่ถูกต้อง";
    echo "<a href='login.html'>เข้าสู่ระบบอีกครั้ง</a>"; 
  }
?>