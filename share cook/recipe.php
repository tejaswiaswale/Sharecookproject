<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Recipe Finder</title>
  <link rel="stylesheet" href="recipe.css">
</head>
<body>
  <section class="recipe" id="recipe">
    <!-- <div class="heading">
        <h3>Find Meals For Your Ingredient</h3>
        <p>“Real food doesn't have ingredients, real food is ingredients.” </p>
      </div> -->
    
      <!-- <section class="search-section">
        <form>
          <input type="text" placeholder="Enter an ingredient..." />
          <button type="submit"><img src="search.png" alt="" width="15px"></button>
        </form>
      </section> -->
    
      <section class="results-section">
        
        <div class="recipes">
          <div class="recipe-card">
            <div class="img">
                <img src="Recipe1.jpg" alt="chocolatecake" />
            </div>
            <h3>chocolatecake</h3>
            <a href="viewrecipe.html"><button>Get Recipe</button></a>
          </div>
          <div class="recipe-card">
            <img src="Recipe2.jpg" alt="Cranbeerycofee cake " />
            <h3>Cranbeerycoffe cake </h3>
            <a href="viewrecipe.html"><button>Get Recipe</button></a>
          </div>
          <div class="recipe-card">
            <img src="Recipe3.jpg" alt="lemoncrumb cake ">
            <h3>lemoncrumb cake </h3>
            <a href="viewrecipe.html"><button>Get Recipe</button></a>
          </div>
          <div class="recipe-card">
            <img src="Recipe4.jpg" alt="Ganache cake ">
            <h3>Ganache cake </h3>
            <a href="viewrecipe.html"><button>Get Recipe</button></a>
          </div>
          <div class="recipe-card">
            <img src="Recipe5.jpg" alt="Hot-Fudge-Pudding-Cake" />
            <h3>Hot Fudge Pudding Cake</h3>
            <a href="viewrecipe.html"><button>Get Recipe</button></a>
          </div>
          <div class="recipe-card">
            <img src="Recipe6.jpg"  alt="red velvet cake" />
            <h3>Red velvet Cake</h3>
            <a href="viewrecipe.html"><button>Get Recipe</button></a>
          </div>
          <div class="recipe-card">
            <img src="Recipe7.webp"  alt="Stwabery Short Cake" />
            <h3>Stwabery Short Cake </h3>
            <a href="viewrecipe.html"><button>Get Recipe</button></a>
          </div>
          <div class="recipe-card">
            <img src="Recipe8.webp"  alt="Oreo cake" />
            <h3>Oreo Cake</h3>
            <a href="viewrecipe.html"><button>Get Recipe</button></a>
          </div>
          <div class="recipe-card">
            <img src="Recipe9.webp"  alt="Coffee Tres leches cake" />
            <h3>Coffee Tres leches Cake</h3>
            <a href="viewrecipe.html"><button>Get Recipe</button></a>
          </div>
          <div class="recipe-card">
            <img src="Recipe10.webp"  alt="Coconut cake" />
            <h3>Coconut Cake</h3>
            <a href="viewrecipe.html"><button>Get Recipe</button></a>
          </div>
          <div class="recipe-card">
            <img src="Recipe10.webp"  alt=" Dark Chocolate Mousse Cake" />
            <h3>Dark Chocolate Cake</h3>
            <a href="viewrecipe.html"><button>Get Recipe</button></a>
          </div>
          <div class="recipe-card">
            <img src="Recipe1.jpg"  alt="Chocolate Magic Cake" />
            <h3>Chocolate Magic Cake</h3>
            <a href="viewrecipe.html"><button>Get Recipe</button></a>
          </div>
          <div class="recipe-card">
            <img src="Recipe13.webp"  alt="Raspberry Tiramisu Cake " />
            <h3>Raspberry Tiramisu Cake</h3>
            <a href="viewrecipe.html"><button>Get Recipe</button></a>
          </div>
          <div class="recipe-card">
            <img src="Recipe14.webp"  alt="  Strawberry Dark Chocolate Truffle Cake " />
            <h3>Strawberry Dark Chocolate Truffle Cake</h3>
            <a href="viewrecipe.html"><button>Get Recipe</button></a>
          </div>
          <div class="recipe-card">
            <img src="Recipe15.jpg" alt="lemoncrumb Cake">
            <h3>Lemon Crumb Cake </h3>
            <a href="viewrecipe.html"><button>Get Recipe</button></a>
          </div>
        </div>
        <?php
        $conn = new mysqli("localhost", "root", "", "sharecook_db");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT title,summary,img FROM recipe";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div class="recipe-card">
            <img src="'. $row['img'] .'" alt="lemoncrumb Cake">
            <h3>'.$row['title'].'</h3>
            <a href="viewrecipe.html"><button>Get Recipe</button></a>
          </div>';
            }
        } else {
            echo "No images found.";
        }
        $conn->close();
        ?>
        
      
      </section>
</body>
</html>
