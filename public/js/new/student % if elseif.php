<?php

    $per = 45;

    if($per >= 80 && $per <= 100){

    	echo "You are merit";
    }elseif($per >= 60 && $per < 80){
    	echo "You are 1st division";
    }elseif($per >= 45 && $per < 60){
    	echo "You are 2nd division";
    }elseif($per >= 33 && $per < 45){
    	echo "You are 3rd division";
    }elseif($per <30){
       echo "You are fail";
    }else{
    	   echo "Undefined";
    }




?>