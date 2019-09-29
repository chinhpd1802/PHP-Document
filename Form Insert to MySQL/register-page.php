<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Register Page </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>


    <style>
        h1 {
            text-align: center;

        }

        form {
            margin: 40px 200px 20px 200px;
        }
        input[type="submit"]{
            float:left;
        }
    </style>
</head>

<body>

    <?php

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $fnameErr = $emailErr =$lnameErr = $passErr = $cfpassErr =  "";
    $name = $email = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["fname"])) {
            $nameErr = "First Name is required";
        } else {
            $name = test_input($_POST["fname"]);
        }
        if (empty($_POST["lname"])) {
            $nameErr = "Last Name is required";
        } else {
            $name = test_input($_POST["lname"]);
        }
        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
        }
        if (empty($_POST["password"])) {
            $emailErr = "Password is required";
        } else {
            $email = test_input($_POST["password"]);
        }
        if (empty($_POST["cfpassword"]) || $_POST["cfpassword"] !== $_POST["password"]) {
            $emailErr = "Password is not math";
        } else {
            $email = test_input($_POST["cfpassword"]);
        }
       
    }
    ?>
    <h1> Register Form</h1>
    <form action="register.php" method="POST">
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">First Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="fname" placeholder="First name">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Last Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="lname" placeholder="Last name">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" name="email" placeholder="Email">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Confirm Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" name="cfpassword" placeholder="Confirm Password">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-10">
                <input type="submit" name="submit" value="submit" class="btn btn-primary">
        </div>
    </form>
</body>

</html>