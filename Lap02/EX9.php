<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EX9 Check Lower Case String</title>
    <style>
    #lower_case{
        color:green;
        font-size:25px;
    }
    #not_lower{
        color:red;
        font-size:25px;
    }
    </style>
</head>
<body>
    <?php
        function is_str_lower($str1){
            
          for ($sc=0; $sc < strlen($str1); $sc++) { 
              if (ord($str1[$sc]) >= ord('A')&& ord($str1[$sc]) <= ord('Z')) {
                  # code...
                  return false;
              }
          }
          return true;
        }

        $strinf = array("chinh", "NDE","Vtc","programming");
        foreach ($strinf as $key => $value) {
            if (is_str_lower($value)) {
                echo "<p id="."lower_case".">";
                echo "$value is Lower Case String";
                echo "</p>";
                # code...
            }
            else {
                echo "<p id="."not_lower".">";
                echo "$value is NOT Lower Case String";
                echo "</p>";
            }
            # code...
        }
      
    ?>
</body>
</html>