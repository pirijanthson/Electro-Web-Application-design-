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
      
    <div class="product-grid" id="product-grid">
        <div class="product-card" data-name="IPhone 15 Pro Max" data-price="1264.24" data-category="phone">
            <img src="phone/Iphone15proMax.png" alt="IPhone 15 Pro Max" class="product-image">
            <div class="product-info">
                <h3>IPhone 15 Pro Max</h3>
                <p>Brand - Apple<br>
                Storage - 256GB,512GB,1TB <br>
                Color - Blue titan,Natural titanium,Titanium/Black,White titanium<br>
                Warranty - Apple Care Warranty,Genxt Warranty</p>
                <p class="price">256GB-$1264.24<br>512GB-$1510.58<br>1TB-$1691.23</p>
                <button class="add-cart" onclick="addToCart('Phone')">Add to Cart</button>
            </div>
        </div>
        <div class="product-card" data-name="S24 Ultra" data-price="982.09" data-category="phone">
            <img src="Phone/S24ultra.png" alt="S24 Ultra" class="product-image">
            <div class="product-info">
                <h3>S24 Ultra</h3>
                <p>Brand - Samsung<br>
                Storage - 12GB RAM 256GB <br>
                Color - Gray Titanium,Violet Titanium,Black Titanium<br>
                Warranty - 1 Year Software and 6 Month Hardware Warranty</p>
                <p class="price">$982.09</p>
                <button class="add-cart" onclick="addToCart('Phone')">Add to Cart</button>
            </div>
        </div>
        <div class="product-card" data-name="Tab S9 FE Plus" data-price="652.95" data-category="tablet">
            <img src="Tablet/Tab S9 FE Plus.png" alt="Tab S9 FE Plus" class="product-image">
            <div class="product-info">
                <h3>Tab S9 FE Plus</h3>
                <p>Brand - Samsung<br>
                Storage - 8GB RAM 128GB<br>
                Color - Mint,Sliver<br>
                Warranty - 1 Year Software Warranty.</p>
                <p class="price">$652.95</p>
                <button class="add-cart" onclick="addToCart('Tablet')">Add to Cart</button>
            </div>
        </div>
        <div class="product-card" data-name="HP 15" data-price="823.21" data-category="laptop">
            <img src="Labtop/Hp.png" alt="HP 15" class="product-image">
            <div class="product-info">
                <h3>HP 15</h3>
                <p>Brand - Hp<br>
                Model - 15-fd0105TU<br>
                Processor - Intel® CoreTM i5-1335U<br>
                Internal Storage - 512 GB PCIe® NVMeTM M.2 SSD<br>
                Memory - 8 GB DDR4-3200 MHz RAM (2 x 4 GB)<br>
                Graphics integrated - Intel® Iris® Xe Graphics<br>
                weight - 1.59 kg<br>
                Operating System - Windows 11 Home<br>
                Color - Silver<br>
                Warranty - 2 Years (1 year for Battery & Adaptor)</p>
                <p class="price">$823.21</p>
                <button class="add-cart" onclick="addToCart('Laptop')">Add to Cart</button>
            </div>
        </div>
        <div class="product-card" data-name="Predator" data-price="1959.33" data-category="gaming-laptop">
            <img src="Gaming Labtop/Acer-Predator.png" alt="Predator" class="product-image">
            <div class="product-info">
                <h3>Predator</h3>
                <p>Brand - Acer<br>
                Model - Helios 300<br>
                Processor - 11th Gen Intel Octa-Core i7-11800H, Max Turbo Frequency Up to 4.6GHz<br>
                Internal Storage - 1TB NVMe SSD<br>
                Memory - 16GB DDR4 RAM<br>
                Graphics integrated - IDedicated NVIDIA GeForce RTX 3060 6GB GDDR6 and Integrated Intel UHD Graphics<br>
                weight - 3 kg<br>
                Operating System - Windows 11 Home<br>
                Color - Black<br>
                Warranty - 2 Years and 6 Months Warranty</p>
                <p class="price">$1959.33</p>
                <button class="add-cart" onclick="addToCart('Gaming Laptop')">Add to Cart</button>
            </div>
        </div>
        <div class="product-card" data-name="HP Victus 15" data-price="1020.83" data-category="gaming-laptop">
            <img src="Gaming Labtop/Hp.png" alt="HP Victus 15" class="product-image">
            <div class="product-info">
                <h3>HP Victus 15</h3>
                <p>Brand - Hp<br>
                Model - fb1013dx<br>
                Processor - AMD Ryzen™ 5 7535HS (up to 4.5 GHz max boost clock, 16 MB L3 cache, 6 cores, 12 threads)<br>
                Internal Storage - 512 GB PCIe® Gen4 NVMe™ TLC M.2 SSD<br>
                Memory - 8 GB DDR5-4800 MHz RAM (1 x 8 GB)<br>
                Graphics integrated - NVIDIA RTX 2050 4GB Graphics<br>
                weight - 2.29 kg<br>
                Operating System - Windows 11 Home<br>
                Color - Mica Silver<br>
                Warranty - 1year,2 year service warranty</p>
                <p class="price">$1020.83</p>
                <button class="add-cart" onclick="addToCart('Gaming Laptop')">Add to Cart</button>
            </div>
        </div>
        <div class="product-card" data-name="ACER X1126AH PROJECTOR" data-price="402.76" data-category="projector">
            <img src="Projector/Acer.jpg" alt="ACER X1126AH PROJECTOR" class="product-image">
            <div class="product-info">
                <h3>ACER X1126AH PROJECTOR</h3>
                <p>Brand - ACER<br>
                Light Source - LED<br>
                Resolution(Native) - 800 X 600, SVGA<br>
                Throw Ratio -  1.94 ~ 2.17 (51 "@ 2m)<br>
                Projection Distance - 1.15 ~ 5.7 meters<br>
                Projection Size - 40 ~ 200 inches<br>
                Zoom Ratio - 1.2X<br>
                Splendid - Dynamic Mode,Standard Mode<br>
                3D Support - Yes<br>
                I/O Ports - HDMI: x 1<br>
                Chassis Color Black<br>
                Warranty - 3year<br>
                weight - 3.00 kg</p>
                <p class="price">$402.76</p>
                <button class="add-cart" onclick="addToCart('Projector')">Add to Cart</button>
            </div>
        </div>
        <div class="product-card" data-name="ASUS VZ27EHF 27" data-price="237.70" data-category="monitor">
            <img src="Moniter/Asus.png" alt="ASUS VZ27EHF 27" class="product-image">
            <div class="product-info">
                <h3>ASUS VZ27EHF 27"</h3>
                <p>Brand - ASUS<br>
                Display Panel Size (inch) - 27<br>
                Aspect Ratio - 16:9<br>
                Display Viewing Area (H x V) - 597.89 x 336.31 mm<br>
                Panel Type - IPS<br>
                Viewing Angle (CR≧10, H/V) - 178°/ 178°<br>
                Pixel Pitch - 0.311mm<br>
                Resolution - 1920x1080<br>
                Brightness (Typ.) - 250cd/㎡<br>
                Display Colors - 16.7M<br>
                Response Time - 1ms MPRT<br>
                Refresh Rate (Max) - 100Hz<br>
                I/O Ports - HDMI(v1.4) x 1<br>
                Warranty - 3year<br>
                Weight : 3.5 kg</p>
                <p class="price">$237.70</p>
                <button class="add-cart" onclick="addToCart('Monitor')">Add to Cart</button>
            </div>
        </div>
        <div class="product-card" data-name="Canon PIXMA E560" data-price="17133.98" data-category="printer">
            <img src="Printer/Inkjet.png" alt="Canon PIXMA E560" class="product-image">
            <div class="product-info">
                <h3>Canon PIXMA E560</h3>
                <p>Brand - Canon<br>
                Resolution - 4800 (horizontal)*1 x 1200 (vertical) dpi<br>
                InkType - FINE Cartridge<br>
                Number of Nozzles - Total 1,792 nozzles<br>
                Ink Droplet Size - 2 pl<br>
                Ink Tank - PG-89, CL-99<br>
                Optical Resolution*5 - 1200 x 2400 dpi<br>
                Selectable Resolution*6 - 25 - 19200 dpi<br>
                Weight - approx. 5.4 kg<br>
                Warranty - 1 Year Warranty</p>
                <p class="price">$17133.98</p>
                <button class="add-cart" onclick="addToCart('Inkjet Printer')">Add to Cart</button>
            </div>
        </div>
        <div class="product-card" data-name="Internal Desktop Hard Disk" data-price="243.31" data-category="hard-disk">
            <img src="Hard disk/internalWD.webp" alt="Internal Desktop Hard Disk" class="product-image">
            <div class="product-info">
                <h3>Internal Desktop Hard Disk </h3>
                <p>Brand - WESTERN DIGITAL(WD)<br>
                Storage - 8TB<br>
                label color - Purple<br>
                warranty - 2 year</p>
                <p class="price">$243.31</p>
                <button class="add-cart" onclick="addToCart('Hard Disk')">Add to Cart</button>
            </div>
        </div>
        <div class="product-card" data-name="External Hard Disk" data-price="74.61" data-category="hard-disk">
            <img src="Hard disk/ExternalWD.png" alt="External Hard Disk" class="product-image">
            <div class="product-info">
                <h3>External Hard Disk </h3>
                <p>Brand - WESTERN DIGITAL(WD)<br>
                Model - WX32A315VU4H<br>
                Storage - 1TB<br>
                Speed - Up to 15 MB/s<br>
                USB Type - micro USB to USB Type A<br>
                Operating Temperature - 5°C (41°F) ~ 55°C (131°F)<br>
                Operating Voltage - 5V<br>
                Weight - 275.00GM<br>
                warranty - 2 year</p>
                <p class="price">$74.61</p>
                <button class="add-cart" onclick="addToCart('Hard Disk')">Add to Cart</button>
            </div>
        </div>
        <div class="product-card" data-name="RGB Gaming Keyboard" data-price="11.16" data-category="keyboard">
            <img src="Key bord/Keyboard.webp" alt="RGB Gaming Keyboard" class="product-image">
            <div class="product-info">
                <h3>RGB Gaming Keyboard</h3>
                <p>Brand - FANTECH<br>
                ●︎ LED 3 Color Rainbow Combination<br>
        
                ●︎ There are 12 multimedia buttons.<br>
                
                ●︎ There are a total of 104 keys.<br>
                
                ●︎ Can simultaneously press 19 buttons<br>
                
                ●︎ Size 458 * 187 * 34mm<br>
                
                ●︎ Weight: 645 grams<br>
                
                ●︎ Cable length: 1.6 meters (braided line)<br>
                
                ●︎ Compatible with: Windows Vista, Win7 / 8/10, Mac OS X 10.5 or later, Linux, Chrome OS<br>
                Warranty - 6 Month</p>
                <p class="price">$11.16</p>
                <button class="add-cart" onclick="addToCart('Keyboard')">Add to Cart</button>
            </div>
        </div>
        <div class="product-card" data-name="Smart Watch" data-price="44.57" data-category="smart-watch">
            <img src="SmartWatch/Smartwatch1.png" alt="Smart Watch" class="product-image">
            <div class="product-info">
                <h3>Smart Watch</h3>
                <p>Brand - Haylou<br>
                Color: Black/White<br>
                1.96” AMOLED Screen<br>
                Bluetooth calling<br>
                100+ Workout Modes<br>
                3ATM waterproof<br>
                20 days battery life<br>
                Supports Android/IOS<br>
                warranty - 1 Year</p>
                <p class="price">$44.57</p>
                <button class="add-cart" onclick="addToCart('Smart Watch')">Add to Cart</button>
            </div>
        </div>
        <div class="product-card" data-name="Band" data-price="55.79" data-category="smart-watch">
            <img src="SmartWatch/Band.png" alt="Band" class="product-image">
            <div class="product-info">
                <h3>Band</h3>
                <p> Brand - Honor<br>
                    Model - Band 9<br>
                    Color - Black<br>
                    1.57 inches display<br>
                    magnetic charging<br>
                    5ATM waterproof<br>
                    Supports Android/IOS<br>
                    Warranty - 1 Year</p>
                <p class="price">$55.79</p>
                <button class="add-cart" onclick="addToCart('Smart Watch')">Add to Cart</button>
            </div>
        </div>
        <div class="product-card" data-name="Dell Inspiron 3530" data-price="752.45" data-category="laptop">
            <img src="Labtop/Dell.png" alt="Dell Inspiron 3530" class="product-image">
            <div class="product-info">
                <h3>Dell Inspiron 3530</h3>
                <p>Brand - Dell<br>
                Model -  Inspiron 3530<br>
                Processor - i5-1335U (up to 4.60 GHz) 10 Cores,12MB<br>
                Internal Storage - 512GB SSD<br>
                Memory - 8 GB, 1 x 8 GB, DDR4, 2666 MHz,<br>
                Graphics integrated - Intel® Iris® Xe Graphics<br>
                weight - 1 kg 620 g<br>
                Operating System - Windows 11 Home<br>
                Color - Platinum Silver<br>
                Warranty - 2 year company fully warranty</p>
                <p class="price">$752.45</p>
                <button class="add-cart" onclick="addToCart('Detachable Laptop')">Add to Cart</button>
            </div>
        </div>
            <div class="product-card" data-name="Gaming Mouse" data-price="36.28" data-category="mouse">
                <img src="Mouse/Gaming-Mouse.webp" alt="Gaming Mouse" class="product-image">
                <div class="product-info">
                    <h3>Gaming Mouse</h3>
                    <p>Brand - LOGITECH G402<br>
                    Height - 136 mm<br>
                    Width - 72 mm<br>
                    Depth - 41 mm<br>
                    Weight - 144 grams,mouse plus cable<br>
                    Length Cable - 2.1 m<br>
                    Fusion Engine hybrid sensor<br>
                    8 programmable buttons<br>
                    32-bit ARM processor<br>
                    1 millisecond report<br>
                    High-speed clicking<br>
                    Warranty - 2 Years</p>
                    <p class="price">$36.28</p>
                    <button class="add-cart" onclick="addToCart('Gaming Mouse')">Add to Cart</button>
                </div>
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