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
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>We offer a diverse range of books across various genres, from bestsellers to hidden gems, ensuring there’s something for every reader.</p>
         <p>Discover a world of stories at our bookstore, where every book is a new adventure waiting to be explored. With personalized recommendations and a community-focused approach, we make finding your next favorite read an unforgettable experience. 📚✨</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/jk.png" alt="">
         <p>Renowned for her magical “Harry Potter”,a seven-volume fantasy series published from 1997 to 2007 series, J.K. Rowling has captivated readers worldwide with her imaginative storytelling and richly developed characters.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>JK Rowling</h3>
      </div>

      <div class="box">
         <img src="images/haru.png" alt="">
         <p>Haruki Murakami’s surreal and introspective novels, such as “A Wild Sheep Chase” and “Kafka on the Shore,” blend the mundane with the fantastical, captivating readers with their unique narrative style.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Haruki Murakami</h3>
      </div>

      <div class="box">
         <img src="images/rabi.png" alt="">
         <p>Rabindranath Tagore, the revered Bengali poet and polymath, left an enduring legacy through his profound literary works like "Gitanjanli","Chokher Bali" and became the first non-European Nobel laureate in Literature.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Rabindranath Tagore</h3>
      </div>

      <div class="box">
         <img src="images/agatha.png" alt="">
         <p>The “Queen of Mystery,” Agatha Christie is celebrated for her ingenious detective novels, including classics like “Murder on the Orient Express” and “The Murder of Roger Ackroyd.”</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Agatha Christie</h3>
      </div>

      <div class="box">
         <img src="images/kafka.png" alt="">
         <p>the author of "Metamorphosis",Kafka was a German-language novelist and short-story writer from Prague, renowned for his works that blend realism and the existential anxiety, and absurdity</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Franz Kafka</h3>
      </div>

      <div class="box">
         <img src="images/sylvia.png" alt="">
         <p>Sylvia Plath was an influential American poet, novelist, and short story writer, best known for her works in the genre of confessional poetry like "The Mirror" and "The Bell Jar".</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Sylvia Plath</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">great authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/j-k-rowling.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>JK Rowling</h3>
      </div>

      <div class="box">
         <img src="images/paulo.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Paulo Coelho</h3>
      </div>

      <div class="box">
         <img src="images/stephen.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Stephen King</h3>
      </div>

      <div class="box">
         <img src="images/rupi.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Rupi Kaur</h3>
      </div>

      <div class="box">
         <img src="images/durjoy.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Durjoy Datta</h3>
      </div>

      <div class="box">
         <img src="images/chetan.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Chetan Bhagat</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>