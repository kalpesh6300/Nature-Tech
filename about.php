<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">Home</a> / About </p>
</div>

<!------------------------ABOUT US START---------------------------------------->
<div class="about">
        <div class="inner-section">
            <h1>About<span style="color:#3D52A0; margin-left:13px;">Us</span></h1>
            <p class="text">
            We have over 4000+ unbiased reviews and our customers trust our plant process and delivery service every time.<br><br>
            
            Our knowledgeable staff provides expert guidance, helping you choose the right plants or products to meet your needs and preferences, ensuring you make informed decisions every step of the way.<br><br>
            
            Nature Tech Store is committed to providing excellent service to our customers. From prompt assistance with inquiries to efficient handling of orders and deliveries, we prioritize your satisfaction every step of the way.
            </p>
            <div class="skills">
                <button>Contact Us</button>
            </div>
        </div>
    </div>
 <!------------------------ABOUT US ---------------------------------------->
<section class="reviews">

   <h1 class="title">Our<span style="color:#3D52A0; margin-left:13px;">Services</span></h1>

   <div class="box-container">

      <div class="box">
         <img src="images/service_1.jpg" alt="">
         <h3>Plant Supplying Services</h3>
         <p>Offer a wide range of plants, including annuals, perennials, shrubs, trees,designing ideas, succulents, and houseplants.
         Provide gardening supplies like soil, fertilizers, pots, and gardening tools.
         Often offer expert advice and tips on plant care and gardening.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
        
      </div>

      <div class="box">
         <img src="images/service_2.jpg" alt="">
         <h3>Nursery services</h3>
         <p>Nursery services play a crucial role in supporting gardeners and landscapers by providing high-quality plants, expert advice, and a range of products and services tailored to various needs. Whether you're a home gardener looking to beautify your space or a professional landscaper.  </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
        
      </div>

      <div class="box">
         <img src="images/service_3.jpg" alt="">
         <h3>Landscape Design</h3>
         <p>Landscape design is the art of arranging or modifying the features of a yard, garden, or other outdoor space for aesthetic or practical reasons. Plants play a crucial role in landscape design, contributing to the visual appeal, functionality, and environmental health of the space. </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         
      </div>

      <div class="box">
         <img src="images/service_4.jpg" alt="">
         <h3>Garden Maintenance</h3>
         <p>Garden maintenance is essential for creating and sustaining a beautiful, healthy garden. Whether done personally or with the help of professionals, it involves a combination of lawn care, plant care, weed control, pest management, soil care, and seasonal tasks. Regular and consistent maintenance ensures that gardens thrive and remain attractive throughout the year.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>     
      </div>     
   </div>

</section>

<section class="gallary">

   <h1 class="title">Our<span style="color:#3D52A0; margin-left:13px;">Gallary</span></h1>

   <div class="box-container">

      <div class="box">
         <img src="images/gallary_1.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>   
      </div>

      <div class="box">
         <img src="images/gallary_2.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>   
      </div>

      <div class="box">
         <img src="images/gallary_7.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>   
      </div>

      <div class="box">
         <img src="images/gallary_4.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>   
      </div>

      <div class="box">
         <img src="images/gallary_5.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>   
      </div>

      <div class="box">
         <img src="images/gallary_6.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>   
      </div>
   </div>

</section>

<!-------------------------VIDEO PLAYLIST START------------------------------------------------------------>
<h1 class="title">Plantation<span style="color:#3D52A0; margin-left:13px;">Videos</span></h1>
<div class="container">
		<div class="main-video-container">
			<video src="images/vid-9.mp4" loop controls class="main-video"></video>
			<h3 class="main-vid-title">Plantation Videos</h3>
		</div>
		<div class="video-list-container" id="videosList"></div>
	</div><br><br>

<!-------------------------VIDEO PLAYLIST START---------------------------------------------------------->





<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>