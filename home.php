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

       <section class="home">
        <div class="swiper home-slide">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" style="background: url(images/1.jpg) no-repeat">
                  <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>travel around the world</h3>
                    <a href="package.php" class="btn">discover more</a>
                  </div>
                </div>
                <div class="swiper-slide slide" style="background: url(images/2.jpg) no-repeat">
                    <div class="content">
                      <span>explore, discover, travel</span>
                      <h3>discover the new places</h3>
                      <a href="package.php" class="btn">discover more</a>
                    </div>
                  </div>
                  <div class="swiper-slide slide" style="background: url(images/4.jpg) no-repeat">
                    <div class="content">
                      <span>explore, discover, travel</span>
                      <h3>make your tour worthwhile</h3>
                      <a href="package.php" class="btn">discover more</a>
                    </div>
                  </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <section class="services">
        <h1 class="heading-title"> our services</h1>
        <div class="box-container">
            <div class="box">
                <img src="images/adventure.png" alt="">
                <h3>adventure</h3>
            </div>
            <div class="box">
                <img src="images/path.png" alt="">
                <h3>tour guide</h3>
            </div>
            <div class="box">
                <img src="images/backpacking.png" alt="">
                <h3>trekking</h3>
            </div>
            <div class="box">
                <img src="images/fire.png" alt="">
                <h3>camp fire</h3>
            </div>
            <div class="box">
                <img src="images/road-sign.png" alt="">
                <h3>off road</h3>
            </div>
            <div class="box">
                <img src="images/camping.png" alt="">
                <h3>camping</h3>
            </div>
        </div>
    </section>
    <section class="home-about">
        <div class="image">
            <img src="images/3.jpg" alt="" height="500px">
        </div>
        <div class="content">
            <h3>about us</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Blanditiis eligendi itaque fugit tempore. Esse ratione at officiis quod neque. Eum sunt quidem libero qui eligendi perspiciatis eos quae quis deleniti.</p>
            <a href="about.php" class="btn">read more</a>
        </div>
    </section>
    <section class="home-packages">
        <h1 class="heading-title"> our packages</h1>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="images/package1.jpg" alt="" height="400px" width="500px">
                </div>
                <div class="content">
                    <h3>adventures & tour</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo, rem.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/package2.jpg" alt="" height="400px" width="500px">
                </div>
                <div class="content">
                    <h3>adventures & tour</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo, rem.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/package3.jpg" alt="" height="400px" width="500px">
                </div>
                <div class="content">
                    <h3>adventures & tour</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo, rem.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
        </div>
        <div class="load-more"><a href="package.php" class="btn">load more</a></div>
    </section>
    <section class="home-offer">
        <div class="content">
            <h3>upto 50% off</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem vitae eveniet molestiae velit non excepturi, placeat dolor repellendus illo ea?</p>
            <a href="book.php" class="btn">book now</a>
        </div>
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