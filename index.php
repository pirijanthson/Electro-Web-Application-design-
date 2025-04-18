<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Electro World</title>
    <style>
        .logo {
            display: flex;
            justify-content: center;
            align-items: center;

        }

        .logo h1 {
            margin: 0;
        }

        .logo img {
            max-width: 100px; 
            height: auto; 
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            height: 100%;
        }
        .background-video {
            position: fixed;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }

        .welcome-message {
            background: transparent;
            padding: 20px;
            /*border-radius: 5px;*/
            /*box-shadow: 0 2px 4px rgba(0,0,0,0.1);*/
            max-width: 800px;
            margin: 20px auto;
        }

        .welcome-message h2 {
            text-align: center;
            margin-top: 0;
            font-size: 2.5em;
            color: #FFFFFF;
            font-weight: bold;
        }

        .welcome-message p {
            font-size: 1.2em;
            line-height: 1.6;
            color: #FFFFFF;
        }

        .world{
            cursor: pointer;
            border-radius: 20px;
            border: none;
            background-color: #6582ca;
            color: #FFFFFF;
            font-size: 12px;
            font-weight: bold;
            padding: 12px 45px;
            /*transition: transform 0.5s ease-in-out;*/ 
        }

    </style>
</head>
<body>
    <video class="background-video" autoplay loop muted>
    <source src="background1.mp4" type="video/mp4">
    </video>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="logo">
        <h1><img src="logo.png" alt="Electro World Logo"></h1>
    </div> 

    <main>
        <br>
        <br>
        <div class="welcome-message">

            <h2>Welcome to Electro World</h2>
            <p>
                Discover the latest in electronics and technology at Electro World. 
                We offer a wide range of products from top brands, ensuring you 
                get the best quality and performance. Whether you're looking for 
                the newest gadgets, home appliances, or office equipment, we have 
                it all. Explore our extensive collection and experience the future 
                of technology today.
            </p>
        </div>
    </main>
    <center>
         <a href="Login and signup.php"><button class="world">World</button></a>
    </center>
</body>
</html>
