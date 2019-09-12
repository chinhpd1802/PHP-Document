<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EX5</title>
</head>
<style>
    h1{
        text-align: center;
    }
</style>
<body>
    
    <h1>This is heading in the center</h1>
    <?php
    $head ="This is paragraph one and should be on top";
    echo "<p>" . $head ."</p>";
    echo "<hr>";
    $body = "Hello"."<br>" ."You delivered your assigment ontime" ."<br>". "Thanks"."<br>" ."Mahnaz"."<br>";
    define("body",$body,true);
    echo body;
    echo "<hr>";
    $end="This is paragraph one and should be on bottom";
    echo "<p>". $end ."</p>";
    ?>
</body>
</html>