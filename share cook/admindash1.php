<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .sidebar {
            position: fixed; 
            width: 200px; 
            height: 100%; 
            background-color: #343a40; 
            padding-top: 20px;
        }
        .sidebar a {
            padding: 10px 15px; 
            text-decoration: none; 
            font-size: 18px; 
            color: white; 
            display: block; 
        }
        .sidebar a:hover {
            background-color: #495057; 
        }
        .content {
            margin-left: 220px; 
            padding: 20px; 
        }
        .admin-profile {
            text-align: center;
            margin-top: 50px; 
        }
        .admin-profile img {
            width: 150px; 
            height: auto; 
            border-radius: 50%;
        }
    </style>
</head>
<body>

<div class="sidebar">
    <h2 style="color:white; text-align:center;">Dashboard</h2>
    <a href="admin11.php">Admin</a>
    <!-- <a href="#" onclick="showAddProducts()">Add Products</a> -->
    <a href="#" onclick="showShowProducts()">Show Products</a>
</div>

<div class="content" id="content">
    <!-- Default content -->
    <h2>Welcome to the Admin Dashboard</h2>
    <p>This is the main content area where you can manage your products and settings.</p>
</div>

<script>
    function showProfile() {
        
        document.getElementById("content").innerHTML = `
            <div class="admin-profile">
                <img src="admin-logo-icon-18.png" alt="Admin Image"> <!-- Replace with your admin image path -->
                <h3>Admin</h3>
            </div>
        `;
    }

    // function showAddProducts() {
        
    //     document.getElementById("content").innerHTML = `
    //         <h2>Add Products</h2>
    //         <form method="post" enctype="multipart/form-data">
    //             <table class="table table-bordered">
    //                 <thead>
    //                     <tr>
    //                         <th>Image Upload</th>
    //                         <th>Product Name</th>
    //                     </tr>
    //                 </thead>
    //                 <tbody id="add-products-table">
    //                     <?php for ($i = 1; $i <= 5; $i++): ?>
    //                         <tr>
    //                             <td><input type="file" name="product_image_<?php echo $i; ?>"></td>
    //                             <td><input type="text" name="product_name_<?php echo $i; ?>" placeholder="Product Name"></td>
    //                         </tr>
    //                     <?php endfor; ?>
    //                 </tbody>
    //             </table>

    //             <!-- Submit Button -->
    //             <button type="submit" class="btn btn-primary">Save Products</button>
    //         </form>

    //         <?php
            
    //         if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                
    //             $servername = "localhost"; 
    //             $username = "root"; 
    //             $password = ""; 
    //             $dbname = "sharecook_db"; 

                
    //             $conn = new mysqli($servername, $username, $password, $dbname);

                
    //             if ($conn->connect_error) {
    //                 die("Connection failed: " . $conn->connect_error);
    //             }

    //             // product input
    //             for ($i = 1; $i <= 5; $i++) {
    //                 if (isset($_FILES["product_image_$i"]) && $_FILES["product_image_$i"]['error'] == UPLOAD_ERR_OK) {
                        
    //                     $fileTmpPath = $_FILES["product_image_$i"]['tmp_name'];
    //                     $fileName = $_FILES["product_image_$i"]['name'];
                        
                       
    //                     $uploadFileDir = './uploads/';
    //                     if (!is_dir($uploadFileDir)) {
    //                         mkdir($uploadFileDir, 0755, true);
    //                     }

                        
    //                     $dest_path = $uploadFileDir . basename($fileName);
    //                     if (move_uploaded_file($fileTmpPath, $dest_path)) {
                            
    //                         $productName = $_POST["product_name_$i"];
                            
                            
    //                         $stmt = $conn->prepare("INSERT INTO products (name, image) VALUES (?, ?)");
    //                         $stmt->bind_param("ss", $productName, $dest_path);
                            
                            
    //                         if ($stmt->execute()) {
    //                             echo "<div class='alert alert-success'>Product '$productName' added successfully!</div>";
    //                         } else {
    //                             echo "<div class='alert alert-danger'>Error adding product '$productName': " . $stmt->error . "</div>";
    //                         }
                            
                            
    //                         $stmt->close();
    //                     } else {
    //                         echo "<div class='alert alert-danger'>Error uploading file '$fileName'.</div>";
    //                     }
    //                 }
    //             }

                
    //             $conn->close();
    //         }

    //         ?>
    //     `;
    // }

    function showShowProducts() {
        
        document.getElementById("content").innerHTML = `
            <h2>Show Products</h2>
            <p>This section displays all your products.</p>
            <table class="table table-bordered"> <!-- Added Bootstrap table -->
        <thead>
            <tr>
                <th>Product Name</th> <!-- Column for product name -->
                
            </tr>
        </thead>
        <tbody>
            <?php
            // Database connection parameters
            $servername = "localhost"; // Your server name
            $username = "root"; // Your database username
            $password = ""; // Your database password
            $dbname = "sharecook_db"; // Your database name

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Query to fetch products
            $sql = "SELECT name FROM products UNION SELECT name FROM product1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>"; // Start of table row
                    echo "<td>" . htmlspecialchars($row['name']) . "</td>"; // Product name column
                   // echo "<td><img src='" . htmlspecialchars($row['image']) . "' alt='" . htmlspecialchars($row['name']) . "'></td>"; // Image column
                    echo "</tr>"; // End of table row
                }
            } else {
                echo "<tr><td colspan='2'>No products found.</td></tr>"; // Message when no products are found
            }

            // Close connection
            $conn->close();
            ?>
        </tbody>
    </table> 
</div>
            `;
        
    }
</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
