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
    <title>Events</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css?v=<?php echo time();?>">

</head>

<body>

    <?php include 'header.php'; ?>



    <section class="products">

        <h1 class="title">all events</h1>

        <div class="box-container">

            <?php  
         $select_products = mysqli_query($conn, "SELECT * FROM `event`") or die('query failed');
         if(mysqli_num_rows($select_products) > 0){
            while($fetch_products = mysqli_fetch_assoc($select_products)){
      ?>
            <form action="" method="post" class="box">
                <img class="image" src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">
                <div style="text-align: initial;padding: 0rem 3rem;">
                    <div class="name"><?php echo $fetch_products['event_name']; ?></div>
                    <div class="host-name"><?php echo $fetch_products['host_name']; ?></div>
                    <div class="description" style="font-size: 1.2rem;text-align: justify;"><?php echo $fetch_products['description']; ?></div>
                    <div class="name" style="font-size:1.5rem;color:var(--red);"><?php echo $fetch_products['date']; ?>
                    </div>
                    <div class="name" style="font-size:1.5rem;color:var(--red);padding-top: 0;">
                        <?php echo $fetch_products['time']; ?></div>
                    <div class="host-name"><?php echo $fetch_products['event_type']; ?></div>
                    <div class="load-more">
                        <a href="register_event.php?id=<?php echo $fetch_products['id']; ?>" style="margin-top:0;" class="option-btn">Register For Event</a>
                    </div>
                </div>
            </form>
            <?php
         }
      }else{
         echo '<p class="empty">no products added yet!</p>';
      }
      ?>
        </div>


    </section>






    <?php include 'footer.php'; ?>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>