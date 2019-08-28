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
function numbers()
{

$n=3;
$base =1;
echo $base."<br>";
 for($i=1;$i<=$n;$i++)
        {
            $c=$i-0;
            for($j=0;$j<(2*$i+1);$j++)
            {
               
                if($i>=$j)
                {
                
                   echo $j+1;
                }
                else
                {
                   echo $c;
                    $c--;
                }
            } echo "<br/>";
        } 
        echo "<br/>";
}

?>
<div style="text-align:center">
   <?php
   numbers();
   ?>
</div>
</body>
</html>