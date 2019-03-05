<?php
  include "connect.php";
	$stmt_se=$pdo->prepare("SELECT * FROM salary WHERE emp_id = ? ");
  	$stmt_se->bindParam(1,$_GET["emp_id"]);
  	$stmt_se->execute();
  	$row=$stmt_se->fetch();

  	$time=$row["salary_time"];
	$add_time= $time+3;
	  
//	  date_default_timezone_set('Asia/Bangkok');
//  	  $start_timeH = date('H.i');
//  	  $set_timeH = 10.00;
//  	  $set_Endtime = 18.00;

  	  
	
	$salary=$row["salary_receive"];
	$increase=150;
  	$new_salary = $salary+$increase;

	$stmt = $pdo->prepare("UPDATE salary SET salary_time = ? , salary_receive = ? WHERE emp_id = ?  ");
	$stmt->bindParam(1,$add_time);
	$stmt->bindParam(2,$new_salary);
	$stmt->bindParam(3,$_GET["emp_id"]);
	$stmt->execute();

header("location: ../emp_work.php");
?>