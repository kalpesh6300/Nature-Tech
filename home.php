<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = $_POST['product_quantity'];

   $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

   if(mysqli_num_rows($check_cart_numbers) > 0){
      $message[] = 'already added to cart!';
   }else{
      mysqli_query($conn, "INSERT INTO `cart`(user_id, name, price, quantity, image) VALUES('$user_id', '$product_name', '$product_price', '$product_quantity', '$product_image')") or die('query failed');
      $message[] = 'product added to cart!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Nature Store</title>

   <!-- font awesome cdn link  -->
   <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

   <!----------Bootstrap cdn link------------------->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
   
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="home">

   <div class="content">
      <h3><span style="color:#41ffcc">Welcome</span> To Nature Tech!</h3>
      <p>Create incredible plant design for your offices or apastaments. Add fresness to your new ideas.</p>
      <a href="about.php" class="white-btn"><i class="animation"></i>discover more<i class="animation"></i></a>
   </div>

</section>

<section class="products">

   <h1 class="title">Latest<span style="color:#3D52A0; margin-left:13px;">Products</span></h1>

   <div class="box-container">

      <?php  
         $select_products = mysqli_query($conn, "SELECT * FROM `products` LIMIT 6") or die('query failed');
         if(mysqli_num_rows($select_products) > 0){
            while($fetch_products = mysqli_fetch_assoc($select_products)){
      ?>
     <form action="" method="post" class="box">
      <img class="image" src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">
      <div class="name"><?php echo $fetch_products['name']; ?></div>
      <div class="price">₹<?php echo $fetch_products['price']; ?>/-</div>
      <input type="number" min="1" name="product_quantity" value="1" class="qty">
      <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
      <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
      <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
      <input type="submit" value="add to cart" name="add_to_cart" class="btn">
     </form>
      <?php
         }
      }else{
         echo '<p class="empty">no products added yet!</p>';
      }
      ?>
   </div>

   <div class="load-more" style="margin-top: 2rem; text-align:center">
      <a href="shop.php" class="option-btn">load more</a>
   </div>

</section>
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

 <!------------------------ABOUT US END ---------------------------------------->

 <!--------------------------CATEGORIES START------------------------------->

 <section id="team" class="pb-5">
    <div class="container-fluid">
        <h5 class="section-title h1">Our<span style="color:#3D52A0; margin-left:13px;">Plants</span></h5>
        <div class="row">
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" >
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="./images/card_1.jpg" alt="card image"></p>
                                    <h4 class="card-title">Succulent Plants</h4>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Succulent Plants</h4>
                                    <p class="card-text">Succulent plants are a diverse group of plants known for their ability to store water in their leaves, stems, or roots, allowing them to survive in arid environments..</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="./images/card_2.jpg" alt="card image"></p>
                                    <h4 class="card-title">Bonsai Plants</h4>    
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Bonsai Plants</h4>
                                    <p class="card-text">Bonsai trees can be made from a wide range of tree species, including juniper, pine, maple, ficus, elm, and many others. Each species has its own unique characteristics, growth habits, and care requirements.</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="./images/card_3.jpg" alt="card image"></p>
                                    <h4 class="card-title">Flowering Plants</h4>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Flowering Plants</h4>
                                    <p class="card-text">Flowering plants come in countless varieties, including annuals, perennials, shrubs, and trees. Some popular flowering plants include roses, lilies, orchids, tulips, daisies, petunias, hydrangeas, and many more. Each variety has its own distinct colors, shapes, sizes, and blooming seasons.</p>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="./images/card_4.jpg" alt="card image"></p>
                                    <h4 class="card-title">Creeper plants</h4>
                                    
                                    
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Creeper plants</h4>
                                    <p class="card-text">Creeper plants, also known as creeping plants or vines, are a diverse group of plants characterized by their growth habit of spreading across the ground or climbing structures.</p>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="./images/card_5.jpeg" alt="card image"></p>
                                    <h4 class="card-title">Snake Plants</h4>
                                                                      
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Snake Plants</h4>
                                    <p class="card-text">Snake plants are excellent indoor plants due to their minimal care requirements and air-purifying abilities. They are ideal for people looking for a durable and aesthetically pleasing plant that can adapt to a variety of indoor conditions.</p>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="./images/card_6.jpg" alt="card image"></p>
                                    <h4 class="card-title">Caladium Plants</h4>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Caladium Plants</h4>
                                    <p class="card-text">Caladiums are a stunning addition to any garden or indoor space, prized for their colorful and decorative foliage. While they require specific care, particularly regarding light and humidity, their visual impact makes them well worth the effort.</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->

        </div>
    </div>
</section>
<!--------------------------CATEGORIES END--------------------------------->
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