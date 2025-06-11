<?php
    include("db.php");

?>
<?php
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $confirm=$_POST['confirm'];
    $sql="INSERT INTO re VALUES ('?','$name','$phone','$email','$password','$confirm')";


    if($conn->query($sql)===true)
    {
        echo "successfully inserted";
    }
    $conn->close();
?>


