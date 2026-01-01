<?php

      $marks = [

        "NOOR" => [
           "math" => 80,
           "physics" => 85,
           "english" => 80
        ],
        "AHMAD" => [
           "math" => 50,
           "physics" => 95,
           "english" => 60



        ],
        "ALI" => [
           "math" => 87,
           "physics" => 65,
           "english" => 80

         ],
         
   

       ];
       echo "<table border='1px' cellspacing=0  width='50%'>";

       echo "<tr>
            <th>Student Name</th>
            <th>Math</th>
            <th>Physics</th>
            <th>English</th>

       </tr>";
        foreach($marks as $key=>$v1){
        	
        	echo "<tr><td>$key</td>";

        	foreach($v1 as $v2){
        		echo "<td>$v2</td>";
        		
        	}
        	 echo " </tr> ";

        	 
        };
        echo "</table>";

?>