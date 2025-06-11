<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Recipe</title>
    <link rel="stylesheet" href="addrecipe.css">
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
    $title=$_POST['title'];
    $summary=$_POST['summary'];


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["img"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is an actual image or fake image
    $check = getimagesize($_FILES["img"]["tmp_name"]);
    if ($check === false) {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["img"]["size"] > 500000) {
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
        if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
            // Insert image path into database
            $conn = new mysqli("localhost", "root", "", "sharecook_db");
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "INSERT INTO recipe (name,title,summary,img) VALUES ('$name','$title','$summary','$target_file')";
            if ($conn->query($sql) === TRUE) {

                echo '<div class="card">
                <h2> The recipe   '. htmlspecialchars(basename($_POST['title'])).' has been uploaded...</h2>
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