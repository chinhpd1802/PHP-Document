<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EX8 Check Panlindrome Input String</title>
</head>
<body>
    <?php
        //Kiểm tra đối xứng chuỗi 
        //Tham số truyền vào : string
        //Kết quả: true or false 

        function Panlindrome($string){
            if(strrev($string) === $string){
                return 1;
            }
            else {
                 return 0;
            }
        }

        $test_string = "MOM";
        if (Panlindrome($test_string)) {
            # code...
            echo "$test_string is Panlindrome";
        }
        else {
             echo "$test_string NOT Panlindrome";
        }
    ?>
</body>
</html>