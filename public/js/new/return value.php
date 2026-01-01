<!--?php

 function sum($math,$eng, $sc){

 	$s = $math + $eng + $sc;
 	return $s;
 }

 function percentage($st){

 	$per = $st / 3;
 	echo $per;
 }
 $total =sum(150,50,50);

 //echo $total;
 percentage($total);

?-->
<!--?php
 function call($fname,$lname){
 	$v = "$fname $lname";

 	return $v;
 }

 $result= call("noor","hassan sumra");

 echo "well $result";


?-->
<?php

 function sum($math,$eng,$it,$phy){
 	$s = $math + $eng + $it;
 	return $s;
 }
 function percentage($st){
 	$per = $st / 4;
 	echo $per . "%";
 }

 $total =sum(50,50,150,60);
 //echo $total;
 percentage ($total);
?>