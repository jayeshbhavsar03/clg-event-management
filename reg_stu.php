<?php

include 'config.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:login.php');
}; 

if(isset($_POST['submit'])){

    $reg_id = mysqli_real_escape_string($conn, $_POST['reg_id']);
    $attendance = $_POST['attendance'];


        $add_event_query = mysqli_query($conn, "UPDATE `reg` SET attendance = '$attendance' WHERE reg_id = '$reg_id'") or die('query failed');
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
    <style>
    select {
        border: 1px solid;
        padding: 5px;
    }

    .input-sub {
        padding: 5px;
        background: var(--red);
        color: #7d22b9;
    }
    </style>
</head>

<body>

    <?php include 'admin_header.php'; ?>

    <!-- product CRUD section starts  -->

    <section class="add-products">

        <h4 style="text-align: center;font-size: 1.5rem;text-transform: capitalize;padding: 1rem;">event name</h4>
        <h1 class="title"><?php echo htmlspecialchars($_GET["name"]); ?></h1>

        <h4 style="text-align: center;font-size: 2rem;color: var(--red);margin: 1rem;">registered student list in this
            event</h4>
        <div class="row2">

            <!-- B.Sc. I.T. -->
            <div class="row22">
                <h2 style="padding: 2rem 0rem 1rem 0rem;">B.Sc. I.T.</h2>
                <table class="table" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Number</th>
                            <th>PRN Number</th>
                            <th>Class</th>
                            <th>Year</th>
                            <th>Attendance</th>
                            <th>submit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
					$i = 1;
					$query="SELECT * FROM `reg` WHERE `id`='" . $_GET['id'] . "' AND `class`='bscit'";
					$result=$conn->query($query);
					while($row = mysqli_fetch_array($result)) { ?>

                        <td><?php echo $i++; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['number']; ?></td>
                        <td><?php echo $row['prn']; ?></td>
                        <td><?php echo $row['class']; ?></td>
                        <td><?php echo $row['year']; ?></td>
                        <form action="" method="post">
                            <input type="hidden" class="" name="reg_id" value="<?php echo $row["reg_id"]; ?>">
                            <td>
                                <select name="attendance" class="form-select">
                                    <option value="" disabled selected>-- select --</option>
                                    <option value="Present">Present</option>
                                    <option value="Absent">Absent</option>
                                </select>
                            </td>
                            <td><input type="submit" class="input-sub" name="submit" value="submit"></td>
                        </form>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

        </div>
        <!-- B.Sc. I.T. -->


        <!-- B.C.A. -->
        <div class="row22">
            <h2 style="padding: 2rem 0rem 1rem 0rem;">B.C.A.</h2>
            <table class="table" style="width: 100%;">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Number</th>
                        <th>PRN Number</th>
                        <th>Class</th>
                        <th>Year</th>
                        <th>Attendance</th>
                        <th>submit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
					$i = 1;
					$query="SELECT * FROM `reg` WHERE `id`='" . $_GET['id'] . "' AND `class`='bca'";
					$result=$conn->query($query);
					while($row = mysqli_fetch_array($result)) { ?>

                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['number']; ?></td>
                    <td><?php echo $row['prn']; ?></td>
                    <td><?php echo $row['class']; ?></td>
                    <td><?php echo $row['year']; ?></td>
                    <form action="" method="post">
                        <input type="hidden" class="" name="reg_id" value="<?php echo $row["reg_id"]; ?>">
                        <td>
                            <select name="attendance" class="form-select">
                                <option value="" disabled selected>-- select --</option>
                                <option value="Present">Present</option>
                                <option value="Absent">Absent</option>
                            </select>
                        </td>
                        <td><input type="submit" class="input-sub" name="submit" value="submit"></td>
                    </form>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        </div>
        <!-- B.C.A. -->


        <!-- B.C.S. -->
        <div class="row22">
            <h2 style="padding: 2rem 0rem 1rem 0rem;">B.C.S.</h2>
            <table class="table" style="width: 100%;">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Number</th>
                        <th>PRN Number</th>
                        <th>Class</th>
                        <th>Year</th>
                        <th>Attendance</th>
                        <th>submit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
					$i = 1;
					$query="SELECT * FROM `reg` WHERE `id`='" . $_GET['id'] . "' AND `class`='bcs'";
					$result=$conn->query($query);
					while($row = mysqli_fetch_array($result)) { ?>

                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['number']; ?></td>
                    <td><?php echo $row['prn']; ?></td>
                    <td><?php echo $row['class']; ?></td>
                    <td><?php echo $row['year']; ?></td>
                    <form action="" method="post">
                        <input type="hidden" class="" name="reg_id" value="<?php echo $row["reg_id"]; ?>">
                        <td>
                            <select name="attendance" class="form-select">
                                <option value="" disabled selected>-- select --</option>
                                <option value="Present">Present</option>
                                <option value="Absent">Absent</option>
                            </select>
                        </td>
                        <td><input type="submit" class="input-sub" name="submit" value="submit"></td>
                    </form>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        </div>
        <!-- B.C.S. -->


        <!-- B.A. -->
        <div class="row22">
            <h2 style="padding: 2rem 0rem 1rem 0rem;">B.A.</h2>
            <table class="table" style="width: 100%;">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Number</th>
                        <th>PRN Number</th>
                        <th>Class</th>
                        <th>Year</th>
                        <th>Attendance</th>
                        <th>submit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
					$i = 1;
					$query="SELECT * FROM `reg` WHERE `id`='" . $_GET['id'] . "' AND `class`='ba'";
					$result=$conn->query($query);
					while($row = mysqli_fetch_array($result)) { ?>

                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['number']; ?></td>
                    <td><?php echo $row['prn']; ?></td>
                    <td><?php echo $row['class']; ?></td>
                    <td><?php echo $row['year']; ?></td>
                    <form action="" method="post">
                        <input type="hidden" class="" name="reg_id" value="<?php echo $row["reg_id"]; ?>">
                        <td>
                            <select name="attendance" class="form-select">
                                <option value="" disabled selected>-- select --</option>
                                <option value="Present">Present</option>
                                <option value="Absent">Absent</option>
                            </select>
                        </td>
                        <td><input type="submit" class="input-sub" name="submit" value="submit"></td>
                    </form>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        </div>
        <!-- B.C.S. -->


        <!-- B.B.A. -->
        <div class="row22">
            <h2 style="padding: 2rem 0rem 1rem 0rem;">B.B.A.</h2>
            <table class="table" style="width: 100%;">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Number</th>
                        <th>PRN Number</th>
                        <th>Class</th>
                        <th>Year</th>
                        <th>Attendance</th>
                        <th>submit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
					$i = 1;
					$query="SELECT * FROM `reg` WHERE `id`='" . $_GET['id'] . "' AND `class`='bba'";
					$result=$conn->query($query);
					while($row = mysqli_fetch_array($result)) { ?>

                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['number']; ?></td>
                    <td><?php echo $row['prn']; ?></td>
                    <td><?php echo $row['class']; ?></td>
                    <td><?php echo $row['year']; ?></td>
                    <form action="" method="post">
                        <input type="hidden" class="" name="reg_id" value="<?php echo $row["reg_id"]; ?>">
                        <td>
                            <select name="attendance" class="form-select">
                                <option value="" disabled selected>-- select --</option>
                                <option value="Present">Present</option>
                                <option value="Absent">Absent</option>
                            </select>
                        </td>
                        <td><input type="submit" class="input-sub" name="submit" value="submit"></td>
                    </form>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        </div>
        <!-- B.A. -->


        <!-- B.Sc. -->
        <div class="row22">
            <h2 style="padding: 2rem 0rem 1rem 0rem;">B.Sc.</h2>
            <table class="table" style="width: 100%;">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Number</th>
                        <th>PRN Number</th>
                        <th>Class</th>
                        <th>Year</th>
                        <th>Attendance</th>
                        <th>submit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
					$i = 1;
					$query="SELECT * FROM `reg` WHERE `id`='" . $_GET['id'] . "' AND `class`='bsc'";
					$result=$conn->query($query);
					while($row = mysqli_fetch_array($result)) { ?>

                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['number']; ?></td>
                    <td><?php echo $row['prn']; ?></td>
                    <td><?php echo $row['class']; ?></td>
                    <td><?php echo $row['year']; ?></td>
                    <form action="" method="post">
                        <input type="hidden" class="" name="reg_id" value="<?php echo $row["reg_id"]; ?>">
                        <td>
                            <select name="attendance" class="form-select">
                                <option value="" disabled selected>-- select --</option>
                                <option value="Present">Present</option>
                                <option value="Absent">Absent</option>
                            </select>
                        </td>
                        <td><input type="submit" class="input-sub" name="submit" value="submit"></td>
                    </form>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        </div>
        <!-- B.Sc. -->
    </section>

    <div style="margin: 5rem;text-align: center;display: flex;flex-direction: column;">
        <a href="download_btn.php?id=<?php echo htmlspecialchars($_GET["id"]); ?>&name=<?php echo htmlspecialchars($_GET["name"]); ?>" style="padding: 1.4rem;font-size: 2rem;background: var(--red);color: #7d22b9;margin: 1rem 30rem;">Download Event Details Report</a>
        <a href="download_btn1.php?id=<?php echo htmlspecialchars($_GET["id"]); ?>" style="padding: 1.4rem;font-size: 2rem;background: var(--red);color: #7d22b9;margin: 1rem 30rem;">Download Student Registration Details Report</a>
        <a href="download_btn2.php?id=<?php echo htmlspecialchars($_GET["id"]); ?>" style="padding: 1.4rem;font-size: 2rem;background: var(--red);color: #7d22b9;margin: 1rem 30rem;">Download Attendances Report</a>
    </div>


    <!-- custom admin js file link  -->
    <script src="js/admin_script.js"></script>

</body>

</html>