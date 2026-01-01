 <!--<?php

  $pakistan = ["islamabad","karachi","lahore","multan","multan"];
   echo "<ol>";
  for($i =0; $i<5; $i++){
  	echo "<li>$pakistan[$i] </li>";
  }
   echo "<ol>";
 


?> associative arrays-->

<!-- <?php
    $age = [
           
           "noor" => "21",
           "ahmad" => 19.78,
           "ali" => 20
           
    
    
        ];

        $age ["ali"] = true;
         // $age ["ahmad"] = 40;

        echo "<pre>";
        var_dump($age);
         echo "<pre>";
       echo $age["noor"]  . "<br>";
       echo $age["ahmad"] . "<br>";
       echo $age["ali"]   . "<br>";
       

?> -->
<?php

     $age =[

           "noor" => 20,
           "ahmad" =>30,
           "hassan" =>18,
           
     ];
       echo "<ol>";
     foreach ($age as $key=>  $value) {
     	echo  "<li>$key  $value  </li>";
     }
     echo "<ol>";




?>