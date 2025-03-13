<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head> 
<body>
    <section class="header">
        <a href="home.php" class="logo">travel.</a>
        <nav class="navbar">
          <a href="home.php">home</a>
          <a href="about.php">about</a>
          <a href="package.php">packages</a>
          <a href="book.php">booking</a>
        </nav>
       <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    <div class="heading" style="background: url(images/palm-tree-person-sand.jpg) no-repeat">
      <h1>book now</h1>
    </div>
<section class="booking">
    <h1 class="heading-title">Book your trip</h1>
    <form action="book_form.php" method="post" class="book-form">
        <div class="flex">
            <div class="inputBox">
                <span>name : </span>
                <input type="text" placeholder="Enter your name" name="name">
            </div>
            <div class="inputBox">
                <span>email : </span>
                <input type="email" placeholder="Enter your email" name="email">
            </div>
            <div class="inputBox">
                <span>phone : </span>
                <input type="text" placeholder="Enter your number" name="phone">
            </div>
            <div class="inputBox">
                <span>address : </span>
                <input type="text" placeholder="Enter your address" name="address">
            </div>
            <div class="inputBox">
                <span>where to : </span>
                <input type="text" placeholder="place you want to visit" name="location">
            </div>
            <div class="inputBox">
                <span>how many : </span>
                <input type="text" placeholder="number of guests" name="guests">
            </div>
            <div class="inputBox">
                <span>arrivals : </span>
                <input type="date" name="arrivals">
            </div>
            <div class="inputBox">
                <span>leaving : </span>
                <input type="date" name="leaving">
            </div>
        </div>
        <input type="submit" value="submit" class="btn" name="send">
    </form>
</section>
   <section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>quick links</h3>
            <a href="home.php"><i class="fas fa-angle-right"></i> home</a>
            <a href="about.php"><i class="fas fa-angle-right"></i> about</a>
            <a href="package.php"><i class="fas fa-angle-right"></i> packages</a>
            <a href="book.php"><i class="fas fa-angle-right"></i> booking</a>
        </div>
        <div class="box">
            <h3>extra links</h3>
            <a href="#"><i class="fas fa-angle-right"></i> ask questions</a>
            <a href="#"><i class="fas fa-angle-right"></i> about us</a>
            <a href="#"><i class="fas fa-angle-right"></i> privacy policy</a>
            <a href="#"><i class="fas fa-angle-right"></i> terms of use</a>
        </div>
        <div class="box">
            <h3>contact info</h3>
            <a href="#"><i class="fas fa-phone"></i> +123-456-7890</a>
            <a href="#"><i class="fas fa-phone"></i> +111-222-3333</a>
            <a href="#"><i class="fas fa-envelope"></i> tourism@gmail.com</a>
            <a href="#"><i class="fas fa-map"></i> vijayawada, india - 521225</a>
        </div>
        <div class="box">
            <h3>follow us</h3>
            <a href="#"><i class="fab fa-facebook"></i> facebook</a>
            <a href="#"><i class="fab fa-twitter"></i> twitter</a>
            <a href="#"><i class="fab fa-instagram"></i> instagram</a>
            <a href="#"><i class="fab fa-linkedin"></i> linkedin</a>
        </div>
    </div>
    <div class="credit"> created by <span>ms. keerthi</span> | all rights reserved </div>
</section>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
