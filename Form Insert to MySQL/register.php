<?php 
try {
    //code...
    require 'MySqliConnect.php';

    //checkn connection

    if ($conn->connect_error) {
        # code...
        die("connection failed: " . $conn->connect_error);
    }
    
} catch (Exception $th) {
    //throw $th;
    echo 'Caught Exception: ', $th->getMessage(),"\n";
}
if (isset($_POST['submit'])) {
    # code...






$sql = "insert into"  ;
$sql .="`user`( userid, first_name, last_name, email, passwords, registration_date, user_level)
VALUES (3, ?, ?, ?, ?, '2019-09-20', 1);";
$stmt = $conn->prepare($sql);
$firname= $_POST["fname"];
$lasname= $_POST["lname"];
$email= $_POST["email"];
$pass= $_POST["password"];
$stmt->bind_param('ssss',$firname,$lasname,$email,$pass);
if($stmt->execute()) {
    header('Location: /SS5/Successfully.php');
    exit();
} else {
    echo "Problem in Adding New Record";
}
$stmt->close();
$conn->close();
} 
?>