<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard with Fixed Sidebar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .sidebar {
            position: fixed; /* Fixed Sidebar */
            width: 200px; /* Width of the sidebar */
            height: 100%; /* Full-height */
            background-color: #343a40; /* Dark background color */
            padding-top: 20px; /* Space at the top */
        }
        .sidebar a {
            padding: 10px 15px; /* Padding for links */
            text-decoration: none; /* No underline */
            font-size: 18px; /* Font size */
            color: white; /* Link color */
            display: block; /* Block display for links */
        }
        .sidebar a:hover {
            background-color: #495057; /* Darker shade on hover */
        }
        .content {
            margin-left: 220px; /* Margin to avoid overlap with sidebar */
            padding: 20px; /* Padding for content area */
        }
        .admin-profile {
            text-align: center; /* Center align contents */
            margin-top: 50px; /* Space from top */
        }
        .admin-profile img {
            width: 150px; /* Image width */
            height: auto; /* Maintain aspect ratio */
            border-radius: 50%; /* Circular image */
        }
    </style>
</head>
<body>

<div class="sidebar">
    <h2 style="color:white; text-align:center;">Dashboard</h2>
    <a href="#" onclick="showProfile()">Admin</a>
    <a href="#" onclick="showAddProducts()">Add Products</a>
    <a href="#" onclick="showShowProducts()">Show Products</a>
</div>

<div class="content" id="content">
    <!-- Default content -->
    <h2>Welcome to the Admin Dashboard</h2>
    <p>This is the main content area where you can manage your products and settings.</p>
</div>

<script>
    function showProfile() {
        // Change content to admin profile
        document.getElementById("content").innerHTML = `
            <div class="admin-profile">
                <img src="admin-logo-icon-18.png" alt="Admin Image"> <!-- Replace with your admin image path -->
                <h3>Admin</h3>
            </div>
        `;
    }

    function showAddProducts() {
        // Change content to add products section
        document.getElementById("content").innerHTML = `
            <h2>Add Products</h2>
            <form method="post" enctype="multipart/form-data">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Image Upload</th>
                            <th>Product Name</th>
                        </tr>
                    </thead>
                    <tbody id="add-products-table">
                        <?php for ($i = 1; $i <= 5; $i++): ?>
                            <tr>
                                <td><input type="file" name="product_image_<?php echo $i; ?>"></td>
                                <td><input type="text" name="product_name_<?php echo $i; ?>" placeholder="Product Name"></td>
                            </tr>
                        <?php endfor; ?>
                    </tbody>
                </table>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary">Save Products</button>
            </form>
        `;
    }

    function showShowProducts() {
        // Change content to show products section (placeholder)
        document.getElementById("content").innerHTML = `
            <h2>Show Products</h2>
            <p>This section displays all your products.</p>
        `;
    }
</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

