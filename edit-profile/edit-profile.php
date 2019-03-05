<?php
	include "../connect.php";
	
$stmt=$pdo->prepare("UPDATE employee SET emp_email = ? , emp_fullname = ?,emp_year = ?,emp_sex = ?,emp_cardid = ?,emp_address = ? WHERE emp_id = ?");

$stmt->bindParam(1,$_POST["emp_email"]);
$stmt->bindParam(2,$_POST["emp_fullname"]);
$stmt->bindParam(3,$_POST["emp_year"]);
$stmt->bindParam(4,$_POST["emp_sex"]);
$stmt->bindParam(5,$_POST["emp_cardid"]);
$stmt->bindParam(6,$_POST["emp_address"]);
$stmt->bindParam(7,$_POST["emp_id"]);

if($stmt->execute()){
	header("location:../login.html");
}else{
	echo "แก้ไขข้อมูลส่วนตัวไม่สำเร็จ" ;
	echo "<a href='../edit-form.php></a>'";
}
?>