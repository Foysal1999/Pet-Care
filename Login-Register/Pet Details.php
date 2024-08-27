<?php

include 'config.php';
$msg = "";

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
    $pet_type = mysqli_real_escape_string($conn, $_POST['pet_type']);
    $pet_habit = mysqli_real_escape_string($conn, $_POST['pet_habit']);
    $room_type = mysqli_real_escape_string($conn, $_POST['room_type']);
    $booking_from = mysqli_real_escape_string($conn, $_POST['booking_from']);
    $booking_to = mysqli_real_escape_string($conn, $_POST['booking_to']);
    $L_G_Name = mysqli_real_escape_string($conn, $_POST['L_G_Name']);
    $L_G_Number = mysqli_real_escape_string($conn, $_POST['L_G_Number']);
    $addintonal_comments = mysqli_real_escape_string($conn, $_POST['addintonal_comments']);


    $sql = "INSERT INTO pets (name, email, mobile, pet_type, pet_habit, room_type,booking_from, booking_to, L_G_Name, L_G_Number, addintonal_comments) VALUES ('{$name}', '{$email}','{$mobile}', '{$pet_type}','{$pet_habit}','{$room_type}','{$booking_from}','{$booking_to}','{$L_G_Name}','{$L_G_Number}','{$addintonal_comments}')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<div style='display: none;'>";
        //Create an instance; passing `true` enables exceptions
        echo "</div>";
        $msg = "<div class='alert alert-info'>Booking Complited.</div>";
    } else {
        $msg = "<div class='alert alert-danger'>Something wrong went.</div>";
    }

}
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Pet Details</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Login Form" />
    <!-- //Meta tag Keywords -->

    <link href="//fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!--/Style-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!--//Style-CSS -->

    <script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>

</head>

<body>

    <!-- form section start -->
    <section class="w3l-mockup-form">
        <div class="container">
            <!-- /form -->
            <div class="workinghny-form-grid">
                <div>
                    <div>
                        <h2>Pet Details</h2>
                        <p>Please Fill The Form Carefully</p>
                        <?php echo $msg; ?>
                        <form action="" method="post">
                            <h3>Full Name:</h3>
                            <input type="text" class="name" name="name" placeholder="Enter Your Name" value="<?php if (isset($_POST['submit'])) {
                                echo $name;
                            } ?>" required>
                            <h3>Email Address:</h3>
                            <input type="email" class="email" name="email" placeholder="Enter Your Email" value="<?php if (isset($_POST['submit'])) {
                                echo $email;
                            } ?>" required>
                            <h3>Mobile Number:</h3>
                            <input type="number" class="mobile" name="mobile" placeholder="Enter Your Mobile Number"
                                value="<?php if (isset($_POST['submit'])) {
                                    echo $mobile;
                                } ?>" required>
                            <h3>Pet Type:</h3>
                            <input type="text" class="pet_type" name="pet_type" placeholder="Enter Your Pet Type" value="<?php if (isset($_POST['submit'])) {
                                echo $pet_type;
                            } ?>" required>
                            <h3>Pet Habit:</h3>
                            <input type="text" class="pet_habit" name="pet_habit" placeholder="Enter Your Pet Habit"
                                value="<?php if (isset($_POST['submit'])) {
                                    echo $pet_habit;
                                } ?>" required>
                            <h3>Room Type:</h3>
                            <input type="text" class="room_type" name="room_type" placeholder="Enter Your Room Type"
                                value="<?php if (isset($_POST['submit'])) {
                                    echo $room_type;
                                } ?>" required>
                            <h3>Booking From:</h3>
                            <input type="date" class="booking_from" name="booking_from" placeholder="Booking From: "
                                value="<?php if (isset($_POST['submit'])) {
                                    echo $booking_from;
                                } ?>" required>
                            <h3>Booking To:</h3>
                            <input type="date" class="booking_to" name="booking_to" placeholder="Booking To: " value="<?php if (isset($_POST['submit'])) {
                                echo $booking_to;
                            } ?>" required>
                            <h3>Local Gardian Name:</h3>
                            <input type="textarea" class="L_G_Name" name="L_G_Name"
                                placeholder="Enter Your Local Gardian Name " value="<?php if (isset($_POST['submit'])) {
                                    echo $L_G_Name;
                                } ?>" required>
                            <h3>Local Gardian Phone Number:</h3>
                            <input type="number" class="L_G_Number" name="L_G_Number"
                                placeholder="Enter Your Local Gardian Phone Number " value="<?php if (isset($_POST['submit'])) {
                                    echo $L_G_Number;
                                } ?>" required>
                            <h3>Additional Comments:</h3>
                            <input type="textarea" class="addintonal_comments" name="addintonal_comments"
                                placeholder="Enter Your Additional Comments " value="<?php if (isset($_POST['submit'])) {
                                    echo $addintonal_comments;
                                } ?>">
                            <button name="submit" class="btn" type="submit">Book</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- //form -->
        </div>
    </section>
    <!-- //form section start -->

    <script src="js/jquery.min.js"></script>
    <script>
    $(document).ready(function(c) {
        $('.alert-close').on('click', function(c) {
            $('.main-mockup').fadeOut('slow', function(c) {
                $('.main-mockup').remove();
            });
        });
    });
    </script>

</body>

</html>