<?php
 //display
 echo "<p><center>MONICA DANIELLE E. LAZARTE</center></p>";
 echo "</br>";
 echo "<p><center>BSIT-1</center></p>";
 echo "</br>";
 echo '_________________________________________________________________________________________________________________________________________________________________________';
 
 //data types
 var_dump('Alpha');
 
 //defines 
 define ('MESSAGE', 'Thank You!');
 echo "</br>";
 echo MESSAGE;
 echo "</br>";
 define ('INTEGER', 3);
 echo INTEGER;
 
 //array
 $array1 = ['Monica', 'Andrea', 'Adrrean'];
 echo "</br>";
 echo $array1[0];

 //operations + - * /

 //functions 
 echo "</br>";
 function showMessage ($message){
     return "Your message: $message";
 }
 echo showMessage ("ASIA PACIFIC COLLEGE OF ADVANCED STUDIES");
 echo "</br>";
 function showName ($fullname){
     return "Your name: $fullname";
 }
 echo showName ("MONICA DANIELLE E. LAZARTE");
 echo "</br>";

 //if else and else if
 $grade = 21;
  
 if ($grade >= 1 && $grade <= 10 )
    echo "True";
 elseif ($grade >=11 && $grade <= 20 )
    echo "True";
 else   
 {
     echo "FALSE";
 }
 echo "</br>";
 //switch

 switch ($grade){
     case 1:
        echo "One"; break;
     case 2;
        echo "Two"; break;  
     case 21:
        echo "Twenty-one"; break;  
     default:
        echo "wrong Input";      
 }
 ?>