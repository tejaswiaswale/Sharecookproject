
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url(backGround.png);
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        form {
            background: lavender;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
        }

        fieldset {
            border: none;
        }

        legend {
            text-align: center;
        }

        h2 {
            font-size: 20px;
            color: #333;
        }
        
        label {
            display: block;
            margin: 10px 0 5px;
            font-weight: bold;
            color: #555;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 10px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        button:hover {
            background-color: #0056b3;
        }

        button:active {
            background-color: #004494;
        }
    </style>
</head>
<body>
    
    <form action="#" method="POST">
        <fieldset>
            <legend align-items="center">
                <h2>Admin Login Form </h2>
            </legend>
            <label for="Admin Name">Admin Name</label>
            <input type="text" id="Adminname" name="admin" placeholder="Enter Admin Name" required>
            <label for="Password">Password</label>
            <input type="password" id="AdminPassword" name="password" placeholder="Enter Password">
            <button formaction="admindash1.php" name="login">LOGIN TO DASHBOARD</button>
            <button formaction="admin.html" name="login">LOGIN TO ADD PRODUCTS</button>
        </fieldset>
    </form>
        <?php

include "db.php";
    if(isset($_POST['login']))
    {
        $admin = $_POST['admin'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM admin WHERE admin='$admin' && password = '$password' ";
       
        $total = mysqli_num_rows($conn->query($sql));
        
        if($total == 1)
        {
            header('location:admin.html');
            //echo"login ok";

        }
        else{
            echo "<script>";
            echo "alert('Login Failed');"; 
            echo "</script>";
            
        }        
    }

    ?>
</body>
</html>
