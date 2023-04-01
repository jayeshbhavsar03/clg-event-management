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
   <link rel="stylesheet" href="css/style.css?v=<?php echo time();?>">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about.svg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>The purpose of AskForEventReport is to automate the existing manual system by the
                help of computerized equipments and full-fledged computer software, fulfilling their
                requirements, so that their valuable data/information can be stored for a longer period with
                easy accessing and manipulation of the same. The required software and hardware are easily
                available and easy to work with.</p>
            <p>AskForEventReport, as described above, can lead to error free, secure, reliable and fast
                management system. It can assist the user to concentrate on their other activities rather to
                concentrate on the record keeping. Thus it will help organization in better utilization of
                resources. The organization can maintain computerized records without redundant entries.
                That means that one need not be distracted by information that is not relevant, while being
                able to reach the information.
            </p>
            <p>The aim is to automate its existing manual system by the help of computerized
                equipments and full-fledged computer software, fulfilling their requirements, so that their
                valuable data/information can be stored for a longer period with easy accessing and
                manipulation of the same. Basically the project describes how to manage for good
                performance and better services for the clients.
            </p>
      </div>

   </div>

</section>

<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>