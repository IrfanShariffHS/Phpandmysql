<?php
if(isset($_POST['name'])){
    
    $server="localhost";
    $username="root";
    $password="";

    $con=mysqli_connect($server,$username,$password);

    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    echo "Success connection to the db";

    $name=$_POST['name'];
    $father_name=$_POST['father_name'];
    $age=$_POST['age'];
    $phone_number=$_POST['phone_number'];
    $Email=$_POST['Email'];
    $gender=$_POST['gender'];
    $adhar_number=$_POST['adhar_number'];
    $file=$_POST['file'];
    $nomi_name=$_POST['nomi_name'];
    $adress=$_POST['adress'];

    $sql="insert into `customer`.`customer_info` (`name`, `father_name`, `age`, `phone_number`, `Email`, `gender`, `adhar_number`, `file`, `nomi_name`, `adress`) 
    values ('$name', '$father','$age','$phone_number','$Email','$gender', '$adhar_number', '$file', '$nomi_name', '$adress')";

    if($con->query($sql) == true){
        echo "Sucessfully inserted";
        $insert= true;
    }
    else{
        echo"Error: $sql <br> .$con->error";
    }

    $con->close();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sri Vighneshwara MSCP LTD</title>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    
    <nav>
        <div class="nav_bar">
            <img src="logo.png" alt="logo" >
            <div class="text_ailgn">
                <h1 class="title">Sri Vighneshwara MSCP LTD</h1>
                <p class="title address"> 1st Main, Channapatna Housing Board Colony<br> Hassan Rural, Karnataka 573201</p>
            </div>
            <div class="profile_img">
                <i class="fa fa-user user_profile" aria-hidden="true"></i>
                <a href="#" class="user_profile">Logout</a>
            </div>
        </div>
    </nav>
    

    <div class="container">
        <h2>Pigmy Deposit Scheme</h2>
        <p>Enter ustomer basic information details </p>

        <p class="submitMsg">Thanks for submiting the form.we are happy to see you joining to our family </p>

        <form action="index.php" method="post">
            <b for="name">Name:</b>
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <b for="name">Name:</b>
            <input type="text" name="name" id="name" placeholder="Enter your father or husband name">
            <b for="name">age:</b>
            <input type="text" name="age" id="name" placeholder="Enter your age">
            <b for="name">Phone Number:</b>
            <input type="number" name="Phone_number" placeholder="Enter your Phone number">
            <b for="name">Email</b>
            <input type="email" name="email" placeholder="enter your email">

            <b for="male">Gender</b>
            <input type="text" id="male" name="gender" value="male" required>
            
            
            <b for="adhar_number">adhar_number</b>
            <input type="text" name="adhar" placeholder="enter your adhar number">
            <input type="file" name="file"  class="file">
            <b for="name">Name:</b>
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <b for="address">Address</b>
            <textarea name="address" id="address" cols="30" rows="10" placeholder="Enter your address here"></textarea>
            <button class="btn">Submit</button>
        
        </form>
    </div>
    <script src="script.js"></script>
    <!--insert into `customer`.`customer_info` (`name`, `father_name`, `age`, `phone_number`, `Email`, `gender`, `adhar_number`, `file`, `nomi_name`, `adress`) 
        values ('irfan', 'sami', 26, 9380230141, irfanshariff0234@gmail.com, male, 1234567891145, ��    , imran, bestra beddi 2nd crooss near vallbai road hassan);--->
</body>
</html>