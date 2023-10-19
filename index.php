<!-- 
Name: Sargam Verma
Date: 2023-08-05
Application: Project- Selling it out!
-->
<!DOCTYPE HTML>
<html lang="en">

<!-- Page-level header -->
<head>
  <meta charset="utf-8">
  <meta name="author" content="Sargam Verma">
  <meta name="description" content="Barbie World">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Barbie World</title>
   <!-- Link to the icon image -->
  <link rel="shortcut icon" href="images\logo.jpg" type="image/x-icon">
  <!-- Link to the css style -->
  <link rel="stylesheet" href="css/styles.css" type="text/css">
  <!-- Link to the fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Zilla+Slab:wght@300&display=swap" rel="stylesheet">
</head>
  
<body>
  <header>
     <img src="images\LOGO1.png" class="logo" alt="Barbie">
    <!-- navigation -->
    <?php
      include("includes/global-nav.php");
    ?>
  </header>
<!-- Page-level main -->
  <main>
    <div class="banner">
      <img src="images\image_1.jpg" class="image_1" alt="Barbie">
      <div class="banner-text">
        <h4>Everybody's Watching</h4>
        <p>'The Barbie Movie'</p><br>
        <a href="https://youtu.be/pBk4NYhWNMM">
          <button class="button-content">Watch Trailer Now</button>
        </a>
      </div>
    </div>
    <div>
     <h1 class="welcome-heading">Welcome to Barbie World!</h1>
    </div>
    <section class="recent-products">
      <h2 class="section-heading">Our Recent Products</h2>
      <div class="product-list">
        
        <div class="product-item">
            <img src="images/heel1.jpg" id="image1" alt="Product 1">
          <h3>Barbieslingb </h3>
          <p>Kitten heel, Sling back</p>
        </div>
        <div class="product-item">
             <img src="images/product2.jpeg" id="image2" alt="Product 2">
          <h3>Pink Barbie dunks</h3>
          <p>Multicolor stylish Kicks Retro dunks Shoes</p></div>
        <div class="product-item">
            <img src="images/product3.jpeg" id="image3" alt="Product 3">
          <h3>Leather Dress</h3>
          <p>Faux Patent Leather Barbie</p>
      </div>
    </section>
    
  </main>
<!-- Page-level footer -->
  <footer>
    <div class="newsletter">
      <h3>Sign Up for Our Newsletter</h3>
      <form action="subscribe.php" method="post">
        <input type="email" name="email" placeholder="Enter your email" required>
        <button type="submit">Subscribe</button>
      </form>
    </div>
    <div class="copyright">
      <p>&copy; Barbie World. All rights reserved.</p>
    </div>
  </footer>
        <!-- JavaScript to direct image to webpage -->
         <script>
    const imageElement1 = document.getElementById('image1');
    const imageElement2 = document.getElementById('image2');
    const imageElement3 = document.getElementById('image3');
 imageElement1.addEventListener('click', function() {
      window.location.href = 'aldo.php';
    });
    
    imageElement2.addEventListener('click', function() {
      window.location.href = 'nike.php'; 
    });
    
    imageElement3.addEventListener('click', function() {
      window.location.href = 'zara.php'; 
    });
  </script>
</body>

</html>
