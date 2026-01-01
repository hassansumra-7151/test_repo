<?php

   $first=[

     
       [1,"noor","manager",50000],
       [2,"ahmad","pm",40000],
       [3,"sabir","cm",30000],
       [4,"fizan","ceo",60000],
       [5,"shyd","ceo",60000],
       [6,"ali","ceo",60000],
       [7,"asher","ceo",60000],
       [8,"noman","ceo",60000]

       



   ];
     echo "<table border='2px' cellpadding='5px' cellspacing='0' width='50%' height='70%'>"; 
    	echo "<tr>

        <th>Emp ID</th>
        <th>Emp Name</th>
        <th>Designation</th>
        <th>Salery</th>


   	   </tr>";

     
   foreach ($first as $v1) {
   
   	foreach ($v1 as $v2){
   	echo "<td> $v2 </td>";
   }
   echo "<tr>";
   }
   echo "</table>";

   // for($row = 0; $row<4; $row++){
   // 	for($col = 0; $col <4; $col++){
   // 		echo $first[$row][$col] . " ";
   // 	}
   // 	echo "<br> ";
   // }
  

?>