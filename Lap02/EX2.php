<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EX2-IF/ESLS</title>
</head>
<body>
    <?php
    $t =date("H");
    echo "<p>The hour (of the server) is " . $t;
    echo ", and wwill give the folowwing message: </p>";

    if (4 <"10"){
        echo "have a good morning !";

    }
    elseif ($t<"20") {
        # code...
        echo "Have a good day !";
    }
    else{
        echo "Have a good night !";
    }

    ?>
</body>
</html>