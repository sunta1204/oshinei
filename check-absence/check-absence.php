<?php
  include "../connect.php";
	$stmt_se=$pdo->prepare("SELECT * FROM salary WHERE emp_id = ? ");
  	$stmt_se->bindParam(1,$_GET["emp_id"]);
  	$stmt_se->execute();
  	$row=$stmt_se->fetch();

//  	  $time=$row["salary_time"];
//	  
//	  date_default_timezone_set('Asia/Bangkok');
//  	  $start_timeH = date('H.i');
//  	  $set_timeH = 10.00;
//  	  $set_Endtime = 18.00;
//
//  	  $add_time= $time+8;

//  	  $new_salary = $row["salary_perH"]*$add_time;
	$reduce_salary = 900 ;
	$new_salary = $row["salary_receive"]-$reduce_salary;

	$stmt = $pdo->prepare("UPDATE salary SET salary_receive = ? WHERE emp_id = ?  ");
	$stmt->bindParam(1,$new_salary);
	$stmt->bindParam(2,$_GET["emp_id"]);
	$stmt->execute();


 header("location: ../emp_work.php");
?>