<?php
// Sample data for product items
$products = [
    ["title" => "60", "price" => "₹ 80", "image" => "assets\images\Item_Genesis_Crystal.webp"],
    ["title" => "330", "price" => "₹ 390", "image" => "assets\images\Item_Genesis_Crystal.webp"],
    ["title" => "1090", "price" => "₹ 1140", "image" => "assets\images\Item_Genesis_Crystal.webp"],
    ["title" => "2240", "price" => "₹ 2450", "image" => "assets\images\Item_Genesis_Crystal.webp"],
    ["title" => "3880", "price" => "₹ 3750", "image" => "assets\images\Item_Genesis_Crystal.webp"],
    ["title" => "8080", "price" => "₹ 7500", "image" => "assets\images\Item_Genesis_Crystal.webp"],
    ["title" => "welkin moons", "price" => "₹ 379", "image" => "photo scroll/srnhhu9cip971.webp"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/game page.css">
    <title>Genshin Impact</title>
</head>
<body>
    <div class="nav-container">
      <header>
        <div class="logo">ArconHUB</div>
        <nav>
            <a href="index.php">HOME</a>
        </nav>
        <nav>
            <a href="login.php" class="login-signup">LOGIN / SIGN UP</a>
        </nav>  
      </header>
    </div>

    <div class="container">
        <div class="section">
            <h3>1.) Input Data Game</h3>
            <div class="input-row">
                <input type="number" placeholder="Input User ID" class="input-box">
                <select class="input-box">
                    <option>Select Server</option>
                    <option>Asia</option>
                    <option>Europe</option>
                    <option>America</option>
                    <option>Tw,Hk,Mo</option>
                </select>
                <div class="sidebar">
                    <img src="assets\images\Genshin_Impact.png" alt="Genshin Impact" width="200px" class="game-image">
                    <div class="instructions">
                        <h3>How to Top Up the cheapest Genshin Impact Genesis Crystal:</h3>
                        <ol>
                            <li>Enter ID & Server</li>
                            <li>Select grid-item</li>
                            <li>Select Payment</li>
                            <li>Enter WhatsApp No</li>
                            <li>Click Confirm Top Up & make Payment</li>
                            <li>Genesis Crystal is automatically logged into the game account</li>
                        </ol>
                    </div>
                </div>
            </div>
            <p class="instruction">
                Please enter your User ID & Server and make sure it is correct. Example: 123456789|server-asia.
            </p>
        </div>

        <h3>2.) Select Service Amount</h3>
        
        <div class="Items grid-container">
            <?php foreach ($products as $product): ?>
                <button class="box grid-item">
                    <a href="#" class="Item__link">
                        <div class="product-container" style="display: block;">
                            <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['title']; ?>" class="Image">
                            <span class="Item__title"><?php echo $product['title']; ?></span>
                        </div>
                        <span class="Item__price"><?php echo $product['price']; ?></span>
                    </a>
                </button>
            <?php endforeach; ?>
        </div>
    </div>

    <script>
        document.querySelectorAll('.grid-item').forEach(item => {
            item.addEventListener('click', function() {
                // Remove active class from all grid items
                document.querySelectorAll('.grid-item').forEach(el => el.classList.remove('active'));

                // Add active class to the clicked item
                this.classList.add('active');
            });
        });
    </script>
</body>
</html>