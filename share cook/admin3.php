<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
     body {
        width: 100%;
        height: auto;
    background: linear-gradient(to right bottom, #aa9b82, #fef5e7); 
    margin-top: 80px;
    margin-left: 300px;
    
    }

   

    .card {
    background-color: #d4c3a8;
    display: flex;
    flex-direction: column;
    width: 50%;
    height: 400px;
    align-items: center;
    text-align: center;
    padding: 10px 20px;;
    gap: 1.5rem;
    border-radius: 3rem;
    margin-right: 3rem;
    box-shadow: 0 16px 16px 0 grey;

    }
    .card h2 {
    font-size: 40px;
    color: #333;
    font-family: Arial, Helvetica, sans-serif;
    text-align: center;
    }
    </style>
</head>
<body>
    
</body>
</html>

<?php

$conn = new mysqli("localhost", "root", "", "sharecook_db");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$name=$_POST['name'];
// $sql1 = "INSERT INTO products (name) VALUES ('$name')";

// if ($conn->query($sql1) === TRUE) {
//     echo "name is also added";
// } else {
//     echo "Error: " . $sql1 . "<br>" . $conn->error;
// }

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is an actual image or fake image
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check === false) {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["image"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $imageFileType != "webp") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            // Insert image path into database
            $conn = new mysqli("localhost", "root", "", "sharecook_db");
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "INSERT INTO product3 (name,image) VALUES ('$name','$target_file')";
            if ($conn->query($sql) === TRUE) {
                echo '<div class="card">
                <h2> The Product   '. htmlspecialchars(basename($_FILES["image"]["name"])).' has been uploaded...</h2>
              </div>';
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            $conn->close();
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>

