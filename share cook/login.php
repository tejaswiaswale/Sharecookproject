<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login Form</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="loginstyle.css"/>
    </head>
    <body>
        <div class="log-form">
            <form action="#" method="post">
            <fieldset>
                <legend>
                    <h2>LOGIN FORM</h2>
                </legend>
                <label>Username<input type="text" name="email" placeholder="Valid Email"  required/></label>
              
                <label>Password<input type="password" name="password" placeholder="Valid Password" required /></label>
              
                <a class="login" href=index.html><input type="submit" name="login" value="LOGIN"></a>
              
                <p>Don't have an account? <a class="account" href="Sign.html">Sign In</a></p>
              
                <a class="account" href="#">Forgot Password?</a>
            </fieldset>
            </form>
        </div>
        
    </body>
</html>
<?php

include "db.php";
    if(isset($_POST['login']))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM re WHERE email='$email' && password = '$password' ";
       
        $total = mysqli_num_rows($conn->query($sql));
        
        if($total == 1)
        {
            header('location:recipe.php');
            //echo"login ok";

        }
        else{
            echo "Login Failed";
        }
        // extract($_POST);

        // $email=mysqli_real_escape_string($con,$_POST['email']);
        // $password=mysqli_real_escape_string($con,$_POST['password']);
        
        // $log=mysqli_query($con,"select * from admin where email='$email' and password='$password'") or die (mysqli_error($con));
            
        // if(mysqli_num_rows($log)>0)
        // {
        //     $fetch=mysqli_fetch_array($log);
            
        //     $_SESSION['id']=$fetch['id'];
        //     $_SESSION['email']=$fetch['email'];
            
            
        //     echo "<script>";
        //     echo "alert('Login Successfull');";

        //     echo 'window.location.href="index2.php";';
        //     echo "</script>";
        // }else
        // {
        //     echo "<script>";
        //     echo "alert('Login Fadafdiled');"; 
        //     echo "</script>";
            
        // }
        
    }

?>