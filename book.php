<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jay Kisan Catering</title>

    <!-- swiper css link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


    <!-- custom css file link -->
    <link rel="stylesheet" href="css/index.css">

</head>
<body>

    <!--header section starts -->
    <section class="header">
        <a href="index.php" class="logo">JK Mandap & Catering.</a>

        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="catering.php">Catering</a>
            <a href="gallery.php">Gallery</a>
            <a href="book.php">Book</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </section>
    <!--header section ends -->

    <div class="heading" style="background:url(images/img/slider1.jpg) no-repeat">
        <h1>Book Now</h1>
    </div>

    <!--booking section starts -->

    <section class="booking">
        <h1 class="heading-title">Feel Free To Contact Us</h1>
        

        <form action="book_form.php"
           method="post" class="book-form">

            <div class="flex">
                <div class="inputBox">
                    <span>Name :</span>
                    <input type="text" placeholder="enter your name" id="name" autocomplete="off" minlength="5"  name="name" required>
                </div>
                
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" placeholder="enter your email" id="email" autocomplete="off" name="email" required>
                </div>

                <div class="inputBox">
                    <span>phone :</span>
                    <input type="number" placeholder="enter your number" id="phone" autocomplete="off" name="phone" minlength="10" required>
                </div>
                
                <div class="inputBox">
                    <span>Message :</span>
                    <input type="text" name="message" id="message" minlength="10" required>
                </div>

                
                
            </div>
            
            <input type="submit" value="submit" onclick="mssg()" class="btn" name="send">
            
            <div class="mssg">
                <div class="success" id="success">
                    Your Message Successfully Sent!
                </div>
                <div class="danger" id="danger">fields can't be Empty</div>
            </div>
            

        </form>
    </section>
    <!--booking section ends -->


    <!--footer section starts-->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>Quick Links</h3>
                <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
                <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
                <a href="gallery.php"> <i class="fas fa-angle-right"></i> gallery</a>
                <a href="catering.php"> <i class="fas fa-angle-right"></i> catering</a>
                <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
            </div>

            <div class="box">
                <h3>Extra Links</h3>
                <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
                <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
                <a href="https://www.freepik.com"> <i class="fas fa-angle-right"></i> image credit:freepik</a>
                <a href="https://unsplash.com"> <i class="fas fa-angle-right"></i> image credit:unsplash</a>
            </div>
            
            <div class="box">
                <h3>Follow us</h3>
                <a href="#"><i class="fab fa-facebook-f"></i> Facebook</a>
                <a href="#"><i class="fab fa-twitter"></i> twitter</a>
                <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
            </div>

            <div class="box">
                <h3>Contact Info</h3>
                <a href="#"> <i class="fa-solid fa-location-dot"></i> Jay kisan mandap,Bhawani Peth,Pune, India-411042 </a>
                <a href="#"> <i class="fas fa-phone"></i> +91 123 324 4321 </a>
                <a href="#"> <i class="fas fa-phone"></i> +91 786 092 0000 </a>
                <a href="#"> <i class="fas fa-envelope"></i> jk@gmail.com </a>
            </div>


        </div>

        <div class="credit">Created by <span>saeed pinjari</span> | all rights reserved! </div>
    </section>

    <!--footer section ends-->


    <!-- swiper js file link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- custom js file link -->
    <script src="js/script.js"></script>

</body>
</html>