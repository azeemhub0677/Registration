<?php include("connection.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="style.css">
    <title>PHP CRUD Oprations</title>
</head>
<body>
    <div class="container">
        <form action="#" method="POST">
        <div class="title">
            Registration Form
        </div>

        <div class="form">
            <div class="input_field">
                <label >First Name</label>
                <input type="text" class="input" name="fname" required>
            </div>

            <div class="input_field">
                <label >Last Name</label>
                <input type="text" class="input" name="lname" required>
            </div>

            <div class="input_field">
                <label >Password</label>
                <input type="password" class="input" name="password" required>
            </div>

            <div class="input_field">
                <label >Confirm Password</label>
                <input type="password" class="input" name="conpassword" required>
            </div>

            <div class="input_field">
                <label >Date Of Birth</label>
                <input type="date" class="input" name="dob" required>
            </div>

            <div class="input_field">
                <label >Gender</label>
                <div class="custome_select">
                <select name="gender" required>
                    <option value="">Select</option>
                    <option  >Male</option>
                    <option >Female</option>
                </select>
                </div>
            </div>

            <div class="input_field">
                <label >Email Address</label>
                <input type="email" class="input" name="email" required>
            </div>

            <div class="input_field">
                <label >Phone Number</label>
                <input type="tel" pattern="[6-9]{1}[0-9]{9}"
                title="Please enter valid phone number" 
                class="input" name="phone" required>
            </div>

            <div class="input_field">
                <label >Address</label>
                <textarea class="textarea" name="address"  required></textarea>
            </div>
            
            <div class="input_field terms">
                <label class="check">
                    <input type="checkbox" required>
                    <span class="checkmark"></span>
                </label>
                <p>Agree to term and conditions</p>
            </div>
                <div class="input_field">
                    <input type="submit" value="Register" class="btn" name="register">
                </div>
        </div>
        </form>
    </div>
</body>
</html>


<?php

if(isset($_POST['register'])){
    $fname  =$_POST['fname'];
    $lname  =$_POST['lname'];
    $pwd    =$_POST['password'];
    $cpwd   =$_POST['conpassword'];
    $dob    =$_POST['dob'];
    $gender =$_POST['gender'];
    $email  =$_POST['email'];
    $phone  =$_POST['phone'];
    $address=$_POST['address'];


    // if($fname != "" && $lname != ""&& $pwd != ""&& $cpwd != ""&& $gender != ""&& $email != ""&& $phone != ""&& $address != "")
    // {


        $query="INSERT INTO FORM (fname,lname,`password`,conpassword,dob,gender,email,phone,`address`) VALUES ('$fname','$lname','$pwd','$cpwd','$dob','$gender','$email','$phone','$address')";

        $data = mysqli_query($conn,$query);

        if($data)
        {
            echo "data inserted into database";
        }else{
        "failed";
        }
    // }
    // // else{
    // //     echo"<script>alert('Please fill the form');</script>";
    // // }
}


?>