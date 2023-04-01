<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];
// $id = $_SESSION['id'];

if(!isset($user_id)){
   header('location:login.php');
}

if(isset($_POST['submit'])){

   $name = $_POST['name'];
   $email = $_POST['email'];
   $number = $_POST['number'];
   $prn = $_POST['prn'];
   $class = $_POST['class'];
   $year = $_POST['year'];
   $id = $_POST['id'];
   $user_id = $_POST['user_id'];

   $check = mysqli_query($conn, "SELECT * FROM `reg` WHERE name = '$name' AND id = '$id'") or die('query failed');

   if(mysqli_num_rows($check) > 0){
      $message[] = 'already registered!';
   }else{
      mysqli_query($conn, "INSERT INTO `reg`(id, user_id, name, email, number, prn, class, year) VALUES('$id', '$user_id', '$name', '$email', '$number', '$prn', '$class', '$year')") or die('query failed');
      $message[] = 'Succesfully register!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css?v=<?php echo time();?>">

</head>

<body>

    <?php include 'header.php'; ?>

    <section class="products" style="padding:0;">
        <div class="form-container">
            <form action="" method="post">
                <h3>register now</h3>
                <input type="text" name="name" value="<?php echo $_SESSION['user_name']; ?>"
                    placeholder="enter your name" required class="box">
                <input type="email" name="email" value="<?php echo $_SESSION['user_email']; ?>"
                    placeholder="enter your email" required class="box">
                <input type="number" name="number" placeholder="enter your mobail number" required class="box">
                <input type="number" name="prn" placeholder="enter your PRN number" required class="box">
                <select name="class" class="box">
                    <option value="bscit">B.Sc. I.T.</option>
                    <option value="bca">B.C.A.</option>
                    <option value="bcs">B.C.S.</option>
                    <option value="ba">B.A.</option>
                    <option value="bba">B.B.A</option>
                    <option value="bsc">B.Sc.</option>
                </select>
                <select name="year" class="box">
                    <option value="first year">First Year</option>
                    <option value="second year">Second Year</option>
                    <option value="third year">Third Year</option>
                </select>
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($_GET["id"]); ?>">
                <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']; ?>">
                <input type="submit" name="submit" value="register now" class="btn">
            </form>
        </div>
    </section>



    <?php include 'footer.php'; ?>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>