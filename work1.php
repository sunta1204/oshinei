<?php
	$result=array();
	$s=(date('s')%3)+1;
	$m=256;
	$d=13;
	$n=100;
	for($i=1;$i<=$n;$i++){
		$x=((($d*$i)+$s)%$m)/($m-1);
		$result[$i-1]=$x;
}
	for ($i=0; $i < 100 ; $i++) { 
		echo $result[$i] ,"<br>";
	}
?>
