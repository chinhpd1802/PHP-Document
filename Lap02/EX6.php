<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EX6-Return Sum and Average of 3 INT</title>
</head>
<body>
    <?php
    function Sum($number1,$number2,$number3){
        $sum= $number1 + $number2 + $number3;
        return $sum;
       }
     
      
   echo "SUM: " .Sum(1,2,3) ."<br>";
   echo "AVE: " .Sum(1,2,3)/3;
    
    ?>
</body>
</html>