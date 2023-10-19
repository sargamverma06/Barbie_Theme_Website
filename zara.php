<!DOCTYPE HTML>
<html lang="en">

<!-- Page-level header -->
<head>
  <meta charset="utf-8">
  <meta name="author" content="Sargam Verma">
  <meta name="description" content="Barbie World">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Barbie World - Product Details</title>
  <link rel="shortcut icon" href="images\logo.jpg" type="image/x-icon">
  <link rel="stylesheet" href="css/zara.css" type="text/css">
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
    <div class="product-container">
        <div class="product-images">
            <div class="big-img">
                <img src="images\product3.jpeg">
            </div>
            <div class="images">
                <div class="small-img">
                    <img src="images/p1.jpg" onclick="showImg(this.src)">
                </div>
                <div class="small-img">
                    <img src="images/p2.jpg" onclick="showImg(this.src)">
                </div>
                <div class="small-img">
                    <img src="images/p3.jpeg" onclick="showImg(this.src)">
                </div>
            </div>
        </div>

        <div class="product-details">
            <div class="url">Home > Collection > Zara</div>
            <div class="pname">Leather Dress</div>
            <div class="price">$129.99</div>
            <div class="size">
                <p>Select Color:</p>
                <div class="psize active">Pink</div>
                <div class="psize">Blue</div>
                <div class="psize">Purple</div>
            </div>
            <div class="quantity">
                <p>Quantity:</p>
                <input type="number" min="1" max="5" value="1">
            </div>
            <div class="btn-box">
                <button class="cart-btn">Add to Cart</button>
                <button class="buy-btn">Buy Now</button>
            </div>
        </div>
    </div>
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
  <script>
    document.addEventListener("DOMContentLoaded", function () {
        let bigImg = document.querySelector('.big-img img');
        let smallImgs = document.querySelectorAll('.small-img img');

        function showImg(pic) {
            bigImg.src = pic;
        }

        for (let i = 0; i < smallImgs.length; i++) {
            smallImgs[i].addEventListener("click", function () {
                showImg(smallImgs[i].src);
            });
        }
    });
</script>
</body>

</html>
