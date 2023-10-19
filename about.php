<!DOCTYPE HTML>
<html lang="en">

<!-- Page-level header -->
<head>
  <meta charset="utf-8">
  <meta name="autor" content="Sargam Verma">
  <meta name="description" content="Barbie World">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Barbie World</title>
  <link rel="shortcut icon" href="images\logo.jpg" type="image/x-icon">
  <link rel="stylesheet" href="css/about.css" type="text/css">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Zilla+Slab:wght@300&display=swap" rel="stylesheet">
</head>
  
<body>
  <header>
     <img src="images\LOGO1.png" class="logo" alt="Barbie">
    
    <?php
      include("includes/global-nav.php");
    ?>
  </header>
  <!-- Page-level main -->
  <main>

    <section>
      <h1>About Barbie World</h1>
      <p>Welcome to Barbie World, where dreams come to life! Our mission is to inspire imagination and creativity through our wide range of Barbie products. With a legacy spanning decades, Barbie continues to empower and bring joy to people of all ages.</p>
      <p>From the iconic Barbie dolls to collaborations with leading brands, we offer a world of possibilities for self-expression and play. Our commitment to diversity and inclusivity ensures that everyone can find a Barbie that reflects their unique identity.</p>
    </section>

    <section>
      <h2>Our Collaborations</h2>
      <p>We take pride in partnering with esteemed brands to bring you unique and stylish Barbie products. Check out some of our featured collaborations:</p>

      <ul>
        <li class="collaboration">
          <strong>Barbie x Zara:</strong> Discover the fusion of fashion and fun with our Barbie x Zara collection, featuring trendy outfits and accessories.
        </li>
        <li class="collaboration">
          <strong>Barbie x Nike:</strong> Step into the world of sporty style with the Barbie x Nike collaboration, offering a range of activewear and sneakers.
        </li>
        <li class="collaboration">
          <strong>Barbie x Aldo:</strong> Elevate Barbie's shoe game with the Barbie x Aldo collection, featuring a stunning assortment of footwear for every occasion.
        </li>
      </ul>
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
</body>

</html>