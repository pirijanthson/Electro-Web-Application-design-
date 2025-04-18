<?php
session_start();

if(!isset($_SESSION['email'])){
    echo"<script>alert('Please LogIn Again');
    window.location.href = 'Login and signup.php'; 
    </script>";

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>About Us - Electro World</title>
<link rel="Stylesheet" href="header and footer.css">
<style>
  body {
    font-family: Arial, Helvetica, sans-serif;
    margin: 0;
    background-color: #f4f4f4;
  }

  .content {
    padding: 20px;
  }
  .section {
    margin-bottom: 40px;
  }
  .section h2 {
    color: #0447ffec;
    border-bottom: 2px solid #0447ffec;
    padding-bottom: 10px;
  }
  .info-card {
    background: white;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    margin-bottom: 20px;
  }
  .info-card img {
    border-radius: 50%;
    width: 100px;
    height: 100px;
  }
  .info-card h3 {
    margin: 0 0 10px;
  }
  .info-card p {
    margin: 0;
  }
  .team-container {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
  }
  .team-card {
    background: white;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    width: calc(33.333% - 20px);
    box-sizing: border-box;
    text-align: center;
  }
  .team-card img {
    border-radius: 50%;
    width: 100px;
    height: 100px;
    margin-bottom: 10px;
  }
</style>
</head>
<body>

  <header>
    <div class="navbar">
      <div class="logo" style="font-family: 'Brush Script MT', cursive; font-size: 25px;">Electro World</div>
      <div class="nav-links">
          <a href="Home.php">Home</a>
          <a href="products.php">Products</a>
          <a href="offers.php">Offers</a>
          <a href="Contact-US.php">Contact</a>
          <a href="#">About-US</a>
      </div>
      <div class="user-actions">
          <a style="color: #0ceb08; border-radius: 20px; padding: 8px 10px;" href="https://api.whatsapp.com/send?phone=94760256922&text=Hello">WhatsApp</a>
          <a href="Membership.php">Register</a>
          <a href="Logout.php">Logout</a>
      </div>
  </div>
</header>


<div class="content">

  <div class="section">
    <h2>Company Information</h2>
    <div class="info-card">
      <p>Electro World is a leading retailer of electronic products, offering a wide range of high-quality gadgets and accessories. Established in 2020, we have been committed to providing our customers with the latest technology and exceptional customer service.</p>
    </div>
  </div>

  <div class="section">
    <h2>Website Information</h2>
    <div class="info-card">
      <p>Our website offers a seamless shopping experience with detailed product descriptions, customer reviews, and secure payment options. We strive to keep our website up-to-date with the latest products and promotions.</p>
    </div>
  </div>

 <div class="section">
  <h2>Developers</h2>
  <div class="team-container">
    <div class="team-card">
      <img src="about/Jane.png" alt="Developer 1">
      <h3>Abirna</h3>
      <p>Lead Developer</p>
      <p>Jane is the brains behind our website's seamless functionality and user-friendly design.</p>
    </div>
    <div class="team-card">
      <img src="about/John.png" alt="Developer 2">
      <h3>Sajeepan</h3>
      <p>Backend Developer</p>
      <p>John ensures our website runs smoothly and securely with his expertise in server management.</p>
    </div>
    <div class="team-card">
      <img src="about/Emily.png" alt="Developer 3">
      <h3>Tamil mathy</h3>
      <p>Frontend Developer</p>
      <p>Emily brings our website to life with her skills in HTML, CSS, and JavaScript.</p>
    </div>
  </div>
</div>

<div class="section">
  <h2>Our Team</h2>
  <div class="team-container">
    <div class="team-card">
      <img src="about/Machael.png" alt="Team Member 1">
      <h3>Abimaran</h3>
      <p>Product Manager</p>
    </div>
    <div class="team-card">
      <img src="about/Sarah.png" alt="Team Member 2">
      <h3>Bijon</h3>
      <p>Customer Support</p>
    </div>
    <div class="team-card">
      <img src="about/David.png" alt="Team Member 3">
      <h3>Shameenthan</h3>
      <p>Marketing Specialist</p>
    </div>
    <div class="team-card">
      <img src="about/Linda.png" alt="Team Member 4">
      <h3>Saranya</h3>
      <p>Sales Manager</p>
    </div>
    <div class="team-card">
      <img src="about/James.png" alt="Team Member 5">
      <h3>Sinthuyan</h3>
      <p>Logistics Coordinator</p>
    </div>
    <div class="team-card">
      <img src="about/Maria.png" alt="Team Member 6">
      <h3>Dheepika</h3>
      <p>Graphic Designer</p>
    </div>
    <div class="team-card">
      <img src="about/Robert.png" alt="Team Member 7">
      <h3>Pirijanthson</h3>
      <p>SEO Specialist</p>
    </div>
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

</body>
</html>
