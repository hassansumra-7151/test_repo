<!--?php
  function call($name){

  	echo $name . " NOOR HASSAN";
  }

  $func ="call";
  $func("My name is");

?-->
<!--?php
  function display($number){
  	/*if($number <=5){
  		echo $number . "<br>";
  		display($number + 1);
  	}*/

  	for($number= 0; $number <=10; $number++){
  		echo $number . "<br>";
  	}
    /* $number=10;
  	while($number <=3){
  		echo $number;
  		$number= $number++;
  	}*/
  }
  display(0);
?-->

<?php

 $x = 100;
 $y = 70;
 function call(){
 	global $x , $y;
 	$y = $x + $y;
 }
 call();
 echo $y;

?>