<?php

include 'config.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:login.php');
};

if(isset($_POST['add_event'])){

   $event_name = mysqli_real_escape_string($conn, $_POST['event_name']);
   $host_name = $_POST['host_name'];
   $description = $_POST['description'];
   $date = $_POST['date'];
   $time = $_POST['time'];
   $event_type = $_POST['event_type'];
   $image = $_FILES['image']['name'];
   $image_size = $_FILES['image']['size'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folder = 'uploaded_img/'.$image;

   $select_event_name = mysqli_query($conn, "SELECT event_name FROM `event` WHERE event_name = '$event_name'") or die('query failed');

   if(mysqli_num_rows($select_event_name) > 0){
      $message[] = 'event name already added';
   }else{
      $add_event_query = mysqli_query($conn, "INSERT INTO `event`(event_name, host_name, description, date, time, event_type, image) VALUES('$event_name', '$host_name', '$description', '$date', '$time', '$event_type', '$image')") or die('query failed');

      if($add_event_query){
         if($image_size > 2000000){
            $message[] = 'image size is too large';
         }else{
            move_uploaded_file($image_tmp_name, $image_folder);
            $message[] = 'event added successfully!';
         }
      }else{
         $message[] = 'event could not be added!';
      }
   }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>products</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- custom admin css file link  -->
    <link rel="stylesheet" href="css/admin_style.css?v=<?php echo time();?>">

</head>

<body>

    <?php include 'admin_header.php'; ?>

    <!-- product CRUD section starts  -->

    <section class="add-products">
        <form action="" method="post" enctype="multipart/form-data">
            <h1 class="title">ADD EVENTS</h1>
            <input type="text" name="event_name" class="box" placeholder="enter event name" required>
            <input type="text" name="host_name" class="box" placeholder="enter host name" required>
            <input type="textarea" name="description" class="box" placeholder="enter event description" required>
            <input type="date" name="date" class="box" required>
            <input type="time" name="time" class="box" required>
            <select name="event_type" placeholder="Enter type" class="form-control box">
                <option value="seminar">Seminar</option>
                <option value="webinar">Webinar</option>
            </select>
            <input type="file" name="image" accept="image/jpg, image/jpeg, image/png" class="box" required>
            <input type="submit" style="margin-top: 5rem;" value="add product" name="add_event" class="btn">
        </form>

    </section>

    <!-- product CRUD section ends -->



    <!-- custom admin js file link  -->
    <script src="js/admin_script.js"></script>

</body>

</html>