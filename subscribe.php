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
     <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email"];
        echo '<div class="thank-you-message">Thank you for subscribing to our newsletter!</div>';
      }
    ?><br>
        <img src="images\movie.jpg" alt="movie" class="movie">
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
