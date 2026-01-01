<!-- <?php

     $ary =["orange","mango","apple","bnana"];

      echo array_search('bnana', $ary);
     // if(in_array('bnana',$ary)){

     // 	echo "<h1>Find successfully</h1>";
     // }else{
     // 	echo "<h1>can't find</h1>";
     // }


?> -->
<!-- <?php
#array pop-push function...
 $ary =["apple","bnana","mango","orange"];

 //array_pop($ary);
 array_push($ary,"grapes","orate");

 echo "<pre>";
 print_r($ary);
 echo "</pre>";

?> -->
<!-- <?php
#array shift-unshift function...
 $ary =["apple","bnana","mango","orange"];


 //array_shift($ary,);
 array_unshift($ary,"grapes","emli");

 echo "<pre>";
 print_r($ary);
 echo "</pre>";

?> -->
<!-- <?php
#array marge-combine function...
 $ary =["a"=>"apple","b"=>"bnana","c"=>"mango","d"=>"orange"];
 $ary2=["e"=>"tmato","e"=>"ptato",44,56];

//$both =array_merge($ary,$ary2);

 $both = $ary + $ary2;

 echo "<pre>";
 print_r($both);
 echo "</pre>";
 ?> -->
 <?php
 $ary =["first"=>"apple","second"=>"bnana","third"=>"mango","fourth"=>"orange"];

   $ary1 =array_key_last($ary);

   echo "<pre>";
   print_r($ary1);
   echo "</pre>";


 ?>