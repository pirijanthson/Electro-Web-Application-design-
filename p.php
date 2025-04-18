<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page - Electro World</title>
    <link rel="Stylesheet" href="header and footer.css">
    <style>
        body {
            background-color: #f5f5f5;
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
        }

        .filters {
            display: flex;
            flex-wrap: wrap;
            padding: 20px;
            gap: 20px;
            justify-content: center;
            background-color: #fff;
        }

        .filter-item {
            display: flex;
            flex-direction: column;
            text-align: center;
        }

        .filter-item label {
            margin-bottom: 5px;
        }

        .filter-item input, .filter-item select {
            padding: 5px;
            width: 200px;
        }

        .product-grid {
            display: flex;
            flex-wrap: wrap;
            padding: 20px;
            gap: 20px;
            justify-content: center;
        }

        .product-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            overflow: hidden;
            width: 300px;
            transition: transform 0.2s;
        }

        .product-card:hover {
            transform: translateY(-5px);
        }

        .product-image {
            /* max-width: 100px; */
            width: 200px;
            border-radius: 5px;
        }

        .product-info {
            padding: 15px;
        }

        .product-info h3 {
            margin: 10px 0;
        }

        .product-info p {
            margin: 5px 0;
            color: #666;
        }

        .product-info .price {
            font-size: 20px;
            color: #000;
            margin: 10px 0;
        }

        .product-info button {
            background-color: #0447ffec;
            bottom: 5px;
            justify-content: center;

            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.2s;
        }

        .product-info button:hover {
            background-color: #003bb5;
        }
    </style>
</head>
<body>
    <header>
        <div class="navbar">
            <div class="logo" style="font-family: 'Brush Script MT', cursive; font-size: 25px;">Electro World</div>
            <div class="nav-links">
                <a href="Home.php">Home</a>
                <a href="#">Products</a>
                <a href="offers.php">Offers</a>
                <a href="Contact-US.php">Contact</a>
                <a href="about.php">About-US</a>
            </div>
            <div class="user-actions">
                <a style="color: #0ceb08; border-radius: 20px; padding: 8px 10px;" href="https://api.whatsapp.com/send?phone=94760256922&text=Hello">WhatsApp</a>
                <a href="Membership.php">Register</a>
                <a href="Login and signup.php">Login</a>
            </div>
        </div>
    </header>

    <div class="filters">
        <div class="filter-item">
            <label for="search">Search</label>
            <input type="text" id="search" oninput="filterProducts()">
        </div>
        <div class="filter-item">
            <label for="max-price">Max Price</label>
            <input type="number" id="max-price" oninput="filterProducts()">
        </div>
        <div class="filter-item">
            <label for="sort">Sort</label>
            <select id="sort" onchange="filterProducts()">
                <option value="default">Default</option>
                <option value="az">A-Z</option>
                <option value="za">Z-A</option>
            </select>
        </div>
        <div class="filter-item">
            <label for="category">Category</label>
            <select id="category" onchange="filterProducts()">
                <option value="all">All</option>
                <option value="phone">Phones</option>
                <option value="tablet">Tablets</option>
                <option value="laptop">Laptops</option>
                <option value="gaming-laptop">Gaming Laptops</option>
                <option value="projector">Projectors</option>
                <option value="monitor">Monitors</option>
                <option value="printer">Printers</option>
                <option value="hard-disk">Hard Disks</option>
                <option value="keyboard">Keyboards</option>
                <option value="mouse">Mouse</option>
                <option value="smart-watch">Smart Watches</option>
            </select>
        </div>
    </div>
      
   
<footer>
    <div class="foot">
        <a href="help.php" style="color: white;">Help</a> | 
        <a href="Privacy Policy.php" style="color: white;">Privacy Policy</a> | 
        <a href="Contact-US.php" style="color: white;">Contact Us</a>
    </div>
</footer>
      
    <script>
        function addToCart(productName) {
            alert(productName + " has been added to your cart!");
        }
        
        function filterProducts() {
            const searchInput = document.getElementById('search').value.toLowerCase();
            const maxPrice = document.getElementById('max-price').value;
            const sort = document.getElementById('sort').value;
            const category = document.getElementById('category').value;
        
            const products = document.querySelectorAll('.product-card');
        
            products.forEach(product => {
            const productName = product.getAttribute('data-name').toLowerCase();
            const productPrice = parseFloat(product.getAttribute('data-price'));
            const productCategory = product.getAttribute('data-category');
        
            let isVisible = true;
        
            if (searchInput && !productName.includes(searchInput)) {
                isVisible = false;
            }
        
            if (maxPrice && productPrice > parseFloat(maxPrice)) {
                isVisible = false;
            }
        
            if (category !== 'all' && productCategory !== category) {
                isVisible = false;
            }
        
            product.style.display = isVisible ? 'block' : 'none';
            });
        
            if (sort === 'az') {
            [...products].sort((a, b) => {
                return a.getAttribute('data-name').localeCompare(b.getAttribute('data-name'));
            }).forEach(product => document.getElementById('product-grid').appendChild(product));
            } else if (sort === 'za') {
            [...products].sort((a, b) => {
                return b.getAttribute('data-name').localeCompare(a.getAttribute('data-name'));
            }).forEach(product => document.getElementById('product-grid').appendChild(product));
            }
        }
        
        filterProducts();
    </script>
      
</body>
</html>