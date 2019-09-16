<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EX7 Identify the Email</title>
    <style>
        pre{
            font-size:20px;
        }    
    </style>
</head>
<body>
    <?php

    /// Kiểm tra trùng lặp trong mảng
    /// Tham số truyền vào : array
    /// Kết quả: Hiển thị các key cùng giá trị
        function array_not_unique($my_array){
            $sname=array();
            natcasesort($my_array);
            reset($my_array);

            $old_key=NULL;
            $old_value=NULL;

            foreach ($my_array as $key => $value) {
               
                if ($value === NULL) {
                    
                    continue;
                }
                if ($old_value == $value) {
                    
                    $sname[$old_key]    = $old_value;
                    $sname[$key]        = $value;
                   
                }
                $old_value    = $value;
                $old_key    = $key;
            }
          
           return $sname;
        }
        $test_email_array = array();
        $test_email_array[1]    = 'chinh566@vtc.edu.com';
        $test_email_array[2]    = 'wd03@example.com';
        $test_email_array[3]    = 'vtca@gamil.com';
        $test_email_array[4]    = 'chinh566@vtc.edu.com';
        $test_email_array[5]    = 'chinh566@vtc.edu.com';
        $test_email_array[6]    = 'wd03@example.com';
        $test_email_array[7]    = 'wd03@example.com';
        
        echo "<pre>";
            print_r(array_not_unique($test_email_array)); //In mảng 
        echo "</pre>";
    ?>
</body>
</html>