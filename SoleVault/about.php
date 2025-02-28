<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Solevault | About</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="icon" href="images/solevault_logo.png">
</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/solevault_logo.png" alt="solevaultlogo">
      </div>

      <div class="content">
         <h3>Why Choose SoleVault?</h3>
         <p>At SoleVault, we pride ourselves on delivering an exceptional online shoe shopping experience. We offer a wide selection of premium shoes from top brands, ensuring you find the perfect pair for any occasion. 
            <br><br>Our commitment to quality means that every shoe we sell meets our high standards for durability and comfort. With competitive prices, regular discounts, and exclusive deals, you get great value for your money. 
            <br><br>Our user-friendly website makes it easy to browse and shop, while our fast and reliable shipping ensures your shoes arrive quickly and in perfect condition. 
            <br><br>Our excellent customer service team is always ready to assist you with any questions or concerns, and our secure shopping environment protects your personal information. Plus, our easy return and exchange policy ensures you are completely satisfied with your purchase. Choose SoleVault for a trusted, enjoyable, and rewarding shoe shopping experience.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">
   
   <h1 class="heading">Meet the Developers</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <img src="images/Ram.jpg" alt="Ram Amper">
         <h3>Ram Fredcien C. Amper</h3>
         <p>Frontend Developer,
            responsible for implementing visual elements that users see and interact with in a web application. 
            Expertise in HTML, CSS, and JavaScript.
            Contributed creative ideas to improve user experience.</p>
         
      </div>

      <div class="swiper-slide slide">
         <img src="images/Santi.jpg" alt="Santi Ramirez">
         <h3>Santi Robin G. Ramirez</h3>
         <p>Lead Frontend Developer, 
            responsible for designing and implementing the user interface. 
            Expertise in HTML, CSS, and JavaScript. 
            Contributed creative ideas to improve user experience.</p>
         
         
      </div>

      <div class="swiper-slide slide">
         <img src="images/Rosh.png" alt="Rosh Rodriguez">
         <h3>Jehezkel Rosh T. Rodriguez</h3>
         <p>Backend Developer, 
            focused on server-side logic and database management. 
            Skilled in PHP and MySQL. 
            Ensured smooth functionality of the website's backend.
            Implemented various features to enhance the website's performance.</p>
         
      </div>
   </div>
</section>

<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>