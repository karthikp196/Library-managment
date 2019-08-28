<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Number pattern</title>
</head>
<body>
<?php 

function myfunction($number)
{
   $sum = 0;
   $x= $number;
   while($x != 0)
   {
       $res = $x % 10;
       $sum = $sum + $res*$res*$res;
       $x = $x/10;
   }
   if($number == $sum)
   {
       return 1;
   }
   else 
   {
       return 0;
   }
}

?>
<div style="text-align:center">
   <?php
   $number = 58;
   $result = myfunction($number);
   if($result==1)
   {
       echo "Its an amstrong number";
   }
   else
   {
       echo "not an amstrong number";
   }
   ?>
</div>
</body>
</html>