<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `message` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');

   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'message sent already!';
   }else{
      mysqli_query($conn, "INSERT INTO `message`(user_id, name, email, number, message) VALUES('$user_id', '$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'message sent successfully!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Feedback</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css?v=<?php echo time();?>">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>Feedback us</h3>
</div>

<section class="contact" style="display: flex;justify-content: space-around;">

<div>
   <form action="" method="post">
      <h3>say something!</h3>
      <input type="text" name="name" required value="<?php echo $_SESSION['user_name']; ?>" class="box">
      <input type="email" name="email" required value="<?php echo $_SESSION['user_email']; ?>" class="box">
      <input type="number" name="number" required placeholder="enter your number" class="box">
      <textarea name="message" class="box" placeholder="enter your message" id="" cols="30" rows="10"></textarea>
      <input type="submit" value="send message" name="send" class="btn">
   </form>
   </div>

   <div>
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1876.2093230145651!2d75.31910052484356!3d19.864536671049326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdb99c3c92b612d%3A0x4421c855188247fb!2sDeogiri%20College%2C%20Aurangabad!5e0!3m2!1sen!2sin!4v1673630678908!5m2!1sen!2sin" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      <div class="box" style="padding: 5rem 0rem;font-size: 1.5rem;color: var(--black);">
         <h3 style="font-size: 3rem;padding: 1rem 0rem;">contact info</h3>
         <p style="padding: 0.5rem 0rem;"> <i class="fas fa-phone"></i>&nbsp; 111-1111-111 </p>
         <p style="padding: 0.5rem 0rem;"> <i class="fas fa-envelope"></i>&nbsp; bookdepo@gmail.com </p>
         <p style="padding: 0.5rem 0rem;"> <i class="fas fa-map-marker-alt"></i>&nbsp; Deogiri College, <br>&nbsp;&nbsp;&nbsp;&nbsp; Aurangabad, Maharashtra</p>
      </div>
   </div>
</section>








<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>