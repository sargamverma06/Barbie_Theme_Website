<!DOCTYPE HTML>
<html lang="en">
<!-- Page-level header -->
<head>
  <meta charset="utf-8">
  <meta name="author" content="Sargam Verma">
  <meta name="description" content="Barbie World">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Barbie World</title>
  <link rel="shortcut icon" href="images/logo.jpg" type="image/x-icon">
  <link rel="stylesheet" href="css/contact.css" type="text/css">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Zilla+Slab:wght@300&display=swap" rel="stylesheet">
</head>

<body>
  <header>
    <img src="images/LOGO1.png" class="logo" alt="Barbie">
    <?php include("includes/global-nav.php"); ?>
  </header>
<!-- Page-level main -->
  <main>
    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email"];
        echo '<div class="thank-you-message">Thank you for subscribing to our newsletter!</div>';
      }
    ?>
    <section>
      <div class="barbie-feedback">
  <img src="images/BARBIE_COLLECTION.webp" class="gif" alt="Barbie">       
        <h3>Customer Ratings and Reviews</h3>
        <div class="barbie-stars">
          <span class="barbie-star">&#9733;</span>
          <span class="barbie-star">&#9733;</span>
          <span class="barbie-star">&#9733;</span>
          <span class="barbie-star">&#9733;</span>
          <span class="barbie-star">&#9734;</span>
          <span class="barbie-rating">(4.0)</span>
        </div>

        <!-- Reviews -->
        <div class="barbie-review">
          <p><blockquote>Love the Barbie x Zara collaboration! The outfits are <em>stylish and well-made</em>.</blockquote></p>
          <p class="barbie-reviewer">- Sargam Verma</p>
        </div>
        <div class="barbie-review">
          <p><blockquote>Great job on the Barbie x Nike collection! The miniature sneakers are <em>adorable</em> and well-detailed.</blockquote></p>
          <p class="barbie-reviewer">- Srishti Ahuja</p>
        </div>
        <div class="barbie-review-form">
          <!-- Form for customer reviews -->
          <h4>Leave a Review or Question</h4>
          <form id="feedback" action="subscribe.php" method="get">
            <div>
              <label for="barbie-name">Name:</label>
              <input type="text" id="barbie-name" name="barbie-name" required placeholder="Enter Full name" />
            </div>
            <div>
              <label for="barbie-email">Email:</label>
              <input type="email" id="barbie-email" required name="barbie-email" placeholder="Enter Email" />
            </div>
            <div>
              <label for="barbie-rating">Rating:</label>
              <select id="barbie-rating" name="barbie-rating">
                <option value="5">&#9733; &#9733; &#9733; &#9733; &#9733;</option>
                <option value="4">&#9733; &#9733; &#9733; &#9733; &#9734;</option>
                <option value="3">&#9733; &#9733; &#9733; &#9734; &#9734;</option>
                <option value="2">&#9733; &#9733; &#9734; &#9734; &#9734;</option>
                <option value="1">&#9733; &#9734; &#9734; &#9734; &#9734;</option>
              </select>
            </div>
            <div>
              <label for="barbie-review">Review:</label>
              <textarea id="barbie-review" name="barbie-review" required placeholder="Enter your valuable review here."></textarea>
            </div>
            <button type="submit" onclick="confirmSubmit()">Submit Review</button>
          </form>
        </div>
      </div>
    </section>
    <section>
  <div class="address-contact">
    <h3>Address and Contact Us</h3>
    <p>Visit us at our store:</p>
    <address>
      123 Barbie World<br>
      Toronto, L4J 1B3<br>
    </address>
    <p>Email: info@barbieworld.com</p>
    <p>Phone: +1 (123) 456-7890</p>
  </div>
</section>
    <section>
      <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d11517.63668224797!2d-79.43663169999999!3d43.80587154999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sca!4v1691557073914!5m2!1sen!2sca" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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

 <script>
    function confirmSubmit() {
      var confirmation = confirm("Are you sure you want to submit the review?");
      
      if (confirmation) {
        // The user confirmed, so proceed with form submission
        document.getElementById("feedback").submit();
      } else {
        // The user canceled, no action needed
      }
    }
  </script>
</body>

</html>
