<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cup-Cake</title>
    <style>
body {
    font-family: 'Times New Roman', Times, serif;
    background: linear-gradient(to bottom, #aa9b82, #fef5e7); 
    margin: 0;
    padding: 0;
    
}

.container {

    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    padding: 0px 20px 0px 20px;
    gap: 20px;
    border-radius: 15px;
    width: 100%;
    margin: 10px 20px 10px 20px ;
}

.card {
    background-color: #d4c3a8;
    display: flex;
    flex-direction: column;
    width: 260px;
    height: 400px;
    align-items: center;
    text-align: center;
    padding: 10px 20px;;
    gap: 1.5rem;
    border-radius: 3rem;
    margin-right: 3rem;
    box-shadow: 0 16px 16px 0 grey;
}

.card:hover {
    transform: scale(1.1);
    
    
}

.card img {
    width: 100%;
    max-height: 300px;
    border-radius: 15px;
   

}

.card h2 {
    font-size: 20px;
    color: #333;
    text-align: center;
}
h1{
    font-family: 'Times New Roman', Times, serif;
    font-size: 40px;
    text-align: center;
    margin: 20px;

}

    </style>
</head>
<body>
    <h1>All Exclusive Product Is Here </h1>
<div class="container">
    <div class="card">
        <img src="Recipe10.webp" alt="" id="img">
        <h2>Lorem ipsum dolor sit ame</h2>
    </div>
    <div class="card">
        <img src="Recipe9.webp" alt="img">
    </div>
    <div class="card">
        <img src="Recipe5.jpg" alt="img">
    </div>
    <div class="card">
        <img src="Recipe6.jpg" alt="img">
    </div>
    <div class="card">
        <img src="Recipe15.jpg" alt="img">
    </div>
    <div class="card">
        <img src="Recipe7webp" alt="img">
    </div>
    <?php
        $conn = new mysqli("localhost", "root", "", "sharecook_db");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM product2";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div class="card">
                        <img src="' . $row['image'] . '" alt="img">
                        <h2>'.$row['name'].'</h2>
                      </div>';
            }
        } else {
            echo "No images found.";
        }
        $conn->close();
        ?>
</div>
</body>
</html>