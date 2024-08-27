<?php
session_start();


include 'Login-Register/config.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Animal Hotel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta name="Keywords" content="" />
    <meta name="Description" content="" />

    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.7.0/animate.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
</head>

<body>
    <div class="main-container">
        <!-- Header -->
        <div class="header">
            <div class="container">
                <h1><a href="#">J R F Pets Lodge</a></h1>

                <!-- Links -->
                <div class="links">
                    <!-- Main Menu -->
                    <ul class="menu">
                        <li><a href="#services" title="#">services</a></li>
                        <li><a href="#ourteam" title="#">our team</a></li>
                        <li><a href="#gallery" title="#">gallery</a></li>
                        <li><a href="#prices" title="#">prices</a></li>
                        <li><a href="#about" title="#">about us</a></li>
                        <li>
                            <a href="Login-Register/login.php" title="#"><i class="fa fa-user"></i> Log In</a>
                        </li>
                        <li><a href="#contact" title="#">contact</a></li>
                        <li>
                            <a href="https://www.facebook.com/profile.php?id=100089584713794&mibextid=ZbWKwL"><i
                                    class="fa fa-facebook fa-1x"></i></a>
                        </li>
                        <li>
                            <a
                                href="https://twitter.com/JRF_Pet_Lodge?fbclid=IwAR3RBrsUhomiJdhTr6GEhlOzROIwech-_S71iUKgtwSitZqViQ6ZHTkHqb8"><i
                                    class="fa fa-twitter fa-1x"></i></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/jrf_pet_lodge/"><i class="fa fa-instagram fa-1x"></i></a>
                        </li>
                        <li>
                            <?php
                            if (!isset($_SESSION['SESSION_EMAIL'])) {
                                echo "Please Login For Booking.";
                            } else {
                                $query = mysqli_query($conn, "SELECT * FROM users WHERE email='{$_SESSION['SESSION_EMAIL']}'");
                                if (mysqli_num_rows($query) > 0) {
                                    $row = mysqli_fetch_assoc($query);
                                    echo "Welcome " . $row['name'] . " <a href='Login-Register/logout.php'>Logout</a>";
                                    echo " <a href='Login-Register/Feedback.php'>Feedback</a><br>";
                                }
                            } ?>
                        </li>
                    </ul>
                    <!-- Main Menu Ends! -->
                </div>
                <!-- Links Ends! -->
            </div>
        </div>
        <!-- Header ends -->

        <!-- Slider -->
        <div class="slider">
            <div class="container">
                <ul class="slides center-overimage">
                    <li style="background-image: url(images/BG-1.jpg)">
                        <div class="item">
                            <span>Animal Hotel</span><br /><br />
                            <h3 style="
                    font-family: Copperplate, Papyrus, fantasy;
                    color: rgb(204, 255, 255);
                  ">
                                Safe and fun experience
                            </h3>
                        </div>
                    </li>

                    <li style="background-image: url(images/BG-2.jpg)">
                        <div class="item">
                            <span>Pet Boarding</span><br /><br />
                            <h3 style="
                    font-family: Copperplate, Papyrus, fantasy;
                    color: rgb(204, 255, 255);
                  ">
                                Your Pet Our Service
                            </h3>
                        </div>
                    </li>

                    <li style="background-image: url(images/BG-3.jpg)">
                        <div class="item">
                            <span>Pet Boarding</span><br /><br />
                            <h3 style="
                    font-family: Copperplate, Papyrus, fantasy;
                    color: rgb(204, 255, 255);
                  ">
                                Play, Dunce & Have Fun
                            </h3>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Slider Ends! -->

        <!-- page part -->
        <div class="page">
            <div class="container">
                <div class="mission">
                    <a class="anchor" id="services"></a>

                    <p class="title">Our services include</p>
                    <h2>providing your pet with a safe and fun experience</h2>

                    <p>
                        Give your pet a happy and safe boarding experience and enjoy your
                        time away from home knowing that your pet is cared for around the
                        clock in a safe environment. We provide your pet with premium
                        food, lot's of exercise, comfortable boarding rooms, grooming,
                        24/7 vet care.
                    </p>

                    <div class="help">
                        <ul>
                            <li class="home">
                                <p><strong>pet Boarding</strong></p>
                                <p>cat and dog boarding</p>
                            </li>

                            <li class="health">
                                <p><strong>health and wellness</strong></p>
                                <p>24/7 vet access</p>
                            </li>

                            <li class="food">
                                <p><strong>Food, Toys, treats...</strong></p>
                                <p>we provide everything</p>
                            </li>

                            <li class="grooming">
                                <p><strong>pet grooming</strong></p>
                                <p>grooming for all breeds</p>
                            </li>

                            <li class="love">
                                <p><strong>adoptions</strong></p>
                                <p>we foster pets available for adoption</p>
                            </li>

                            <li class="training">
                                <p><strong>pet training</strong></p>
                                <p>huge lush outdoor play areas</p>
                            </li>
                        </ul>
                    </div>
                    <!-- help flexslider ends! -->
                </div>

                <!-- Volunteer -->
                <div class="volunteer">
                    <a class="anchor" id="ourteam"></a>

                    <p class="title">our passionate team</p>
                    <h3>meet professionals who will care for your pet</h3>

                    <p>
                        You can relax as our highly trained team members watch over your
                        pet.
                    </p>

                    <div class="volunteers">
                        <ul>
                            <li>
                                <div>
                                    <img src="images/trainer/Trainer-1.jpg" alt="" />
                                </div>
                                <strong>Md. Foysal Rahman</strong>
                                Founder Chairmain
                            </li>

                            <li>
                                <div>
                                    <img src="images/trainer/Trainer-2.jpg" alt="" />
                                </div>
                                <strong>Nure Jannat Sarmin Lopa</strong>
                                Animal trainer
                            </li>

                            <li>
                                <div>
                                    <img src="images/trainer/Trainer-3.jpg" alt="" />
                                </div>
                                <strong>Rukaiya Yesmin</strong>
                                Animal trainer
                            </li>

                            <li>
                                <div>
                                    <img src="images/trainer/Trainer-4.jpg" alt="" />
                                </div>
                                <strong>Foysal Rahman</strong>
                                Staff member
                            </li>

                            <li>
                                <div>
                                    <img src="images/trainer/Trainer-5.jpg" alt="" />
                                </div>
                                <strong>Abdullah Al Emon</strong>
                                Animal trainer
                            </li>

                            <li>
                                <div>
                                    <img src="images/trainer/Trainer-6.jpg" alt="" />
                                </div>
                                <strong>Jannat Sarmin</strong>
                                Pet Attendent
                            </li>

                            <li>
                                <div>
                                    <img src="images/trainer/Trainer-7.jpg" alt="" />
                                </div>
                                <strong>Foysal Rahman</strong>
                                Pet Attendent
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Volunteer ends -->
            </div>
        </div>
        <!-- page part ends -->

        <!-- testimonials -->
        <div class="success-story testimonials">
            <a class="anchor" id="testimonials"></a>

            <div class="container">
                <p class="title">what our customers say</p>
                <ul><?php
                $query = mysqli_query($conn, "SELECT * FROM feedback");
                while ($row = mysqli_fetch_array($query)) {
                    ?>
                    <li>
                        <h3>Vacation for your pet while you’re on vacation</h3>
                        <p>
                            <?php echo $row['comments']; ?>
                        </p>
                        <span><?php echo $row['name']; ?></span><br><br>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </li>
                    <?php
                }
                ?>
                </ul>
            </div>
        </div>
        <!-- testimonials ends -->

        <!-- page -->
        <div class="page top-pattern">
            <div class="container">
                <div class="adopt">
                    <a class="anchor" id="gallery"></a>

                    <p class="title">browse our gallery</p>
                    <h3>Satisfaction guaranteed</h3>

                    <!-- menu types  -->
                    <ul class="button-group">
                        <li><a href="#" class="active" data-filter="*">Show All</a></li>
                        <li><a href="#" data-filter=".standard">Standard Room</a></li>
                        <li><a href="#" data-filter=".vip">VIP Room</a></li>
                        <li><a href="#" data-filter=".play">Playground</a></li>
                        <li><a href="#" data-filter=".clients">Our Clients</a></li>
                    </ul>
                    <!-- menu types ends -->

                    <!-- pets -->
                    <div class="pets">
                        <!-- Standard Room_1 -->
                        <div class="single" data-group="standard_01" style="display: none">
                            <div class="image">
                                <div>
                                    <img src="images/standard/standard_01.jpg" alt="" />
                                    <a data-imagelightbox="standard_01" href="images/standard/standard_01.jpg"></a>
                                </div>
                                <a href="Login-Register/Pet Details.php" class="button">Book now</a>
                            </div>

                            <p>
                                Our comfortable accommodations & safety-certified associates
                                provide a welcoming place for dogs & cats to stay while you’re
                                away! Guests will feel at home with the around-the-clock care
                                of our pet-loving staff. We offer a safe, clean,
                                temperature-controlled environment, playtime, exercise,
                                healthy meals & more. Book the ultimate staycation destination
                                for your pet now!
                            </p>

                            <table>
                                <tr>
                                    <th>Room type:</th>
                                    <td>Standard</td>
                                </tr>
                                <tr>
                                    <th>Room Fare:</th>
                                    <td>200 Tk Per Day</td>
                                </tr>
                                <tr>
                                    <th>Support:</th>
                                    <td>We Provide 24/7 Support</td>
                                </tr>
                            </table>

                            <a href="#" class="close"><i class="fa fa-times-circle"></i></a>
                        </div>
                        <!-- Standard Room_1 ends -->

                        <!-- Standard Room_2 -->
                        <div class="single" data-group="standard_02" style="display: none">
                            <div class="image">
                                <div>
                                    <img src="images/standard/standard_02.jpg" alt="" />
                                    <a data-imagelightbox="standard_02" href="images/standard/standard_02.jpg"></a>
                                </div>
                                <a href="Login-Register/Pet Details.php" class="button">Book now</a>
                            </div>

                            <p>
                                Our comfortable accommodations & safety-certified associates
                                provide a welcoming place for dogs & cats to stay while you’re
                                away! Guests will feel at home with the around-the-clock care
                                of our pet-loving staff. We offer a safe, clean,
                                temperature-controlled environment, playtime, exercise,
                                healthy meals & more. Book the ultimate staycation destination
                                for your pet now!
                            </p>

                            <table>
                                <tr>
                                    <th>Room type:</th>
                                    <td>Standard</td>
                                </tr>
                                <tr>
                                    <th>Room Fare:</th>
                                    <td>200 Tk Per Day</td>
                                </tr>
                                <tr>
                                    <th>Support:</th>
                                    <td>We Provide 24/7 Support</td>
                                </tr>
                            </table>

                            <a href="#" class="close"><i class="fa fa-times-circle"></i></a>
                        </div>
                        <!-- Standard Room_2 ends -->

                        <!-- Standard Room_3 -->
                        <div class="single" data-group="standard_03" style="display: none">
                            <div class="image">
                                <div>
                                    <img src="images/standard/standard_03.jpg" alt="" />
                                    <a data-imagelightbox="standard_03" href="images/standard/standard_03.jpg"></a>
                                </div>
                                <a href="Login-Register/Pet Details.php" class="button">Book now</a>
                            </div>

                            <p>
                                Our comfortable accommodations & safety-certified associates
                                provide a welcoming place for dogs & cats to stay while you’re
                                away! Guests will feel at home with the around-the-clock care
                                of our pet-loving staff. We offer a safe, clean,
                                temperature-controlled environment, playtime, exercise,
                                healthy meals & more. Book the ultimate staycation destination
                                for your pet now!
                            </p>

                            <table>
                                <tr>
                                    <th>Room type:</th>
                                    <td>Standard</td>
                                </tr>
                                <tr>
                                    <th>Room Fare:</th>
                                    <td>200 Tk Per Day</td>
                                </tr>
                                <tr>
                                    <th>Support:</th>
                                    <td>We Provide 24/7 Support</td>
                                </tr>
                            </table>

                            <a href="#" class="close"><i class="fa fa-times-circle"></i></a>
                        </div>
                        <!-- Standard Room_3 ends -->

                        <!-- Standard Room_4 -->
                        <div class="single" data-group="standard_04" style="display: none">
                            <div class="image">
                                <div>
                                    <img src="images/standard/standard_04.jpg" alt="" />
                                    <a data-imagelightbox="standard_04" href="images/standard/standard_04.jpg"></a>
                                </div>
                                <a href="Login-Register/Pet Details.php" class="button">Book now</a>
                            </div>

                            <p>
                                Our comfortable accommodations & safety-certified associates
                                provide a welcoming place for dogs & cats to stay while you’re
                                away! Guests will feel at home with the around-the-clock care
                                of our pet-loving staff. We offer a safe, clean,
                                temperature-controlled environment, playtime, exercise,
                                healthy meals & more. Book the ultimate staycation destination
                                for your pet now!
                            </p>

                            <table>
                                <tr>
                                    <th>Room type:</th>
                                    <td>Standard</td>
                                </tr>
                                <tr>
                                    <th>Room Fare:</th>
                                    <td>200 Tk Per Day</td>
                                </tr>
                                <tr>
                                    <th>Support:</th>
                                    <td>We Provide 24/7 Support</td>
                                </tr>
                            </table>

                            <a href="#" class="close"><i class="fa fa-times-circle"></i></a>
                        </div>
                        <!-- Standard Room_4 ends -->

                        <!-- Standard Room_5 -->
                        <div class="single" data-group="standard_05" style="display: none">
                            <div class="image">
                                <div>
                                    <img src="images/standard/standard_05.jpg" alt="" />
                                    <a data-imagelightbox="standard_05" href="images/standard/standard_05.jpg"></a>
                                </div>
                                <a href="Login-Register/Pet Details.php" class="button">Book now</a>
                            </div>

                            <p>
                                Our comfortable accommodations & safety-certified associates
                                provide a welcoming place for dogs & cats to stay while you’re
                                away! Guests will feel at home with the around-the-clock care
                                of our pet-loving staff. We offer a safe, clean,
                                temperature-controlled environment, playtime, exercise,
                                healthy meals & more. Book the ultimate staycation destination
                                for your pet now!
                            </p>

                            <table>
                                <tr>
                                    <th>Room type:</th>
                                    <td>Standard</td>
                                </tr>
                                <tr>
                                    <th>Room Fare:</th>
                                    <td>200 Tk Per Day</td>
                                </tr>
                                <tr>
                                    <th>Support:</th>
                                    <td>We Provide 24/7 Support</td>
                                </tr>
                            </table>

                            <a href="#" class="close"><i class="fa fa-times-circle"></i></a>
                        </div>
                        <!-- Standard Room_5 ends -->

                        <!-- Standard Room_6 -->
                        <div class="single" data-group="standard_06" style="display: none">
                            <div class="image">
                                <div>
                                    <img src="images/standard/standard_06.jpg" alt="" />
                                    <a data-imagelightbox="standard_06" href="images/standard/standard_06.jpg"></a>
                                </div>
                                <a href="Login-Register/Pet Details.php" class="button">Book now</a>
                            </div>

                            <p>
                                Our comfortable accommodations & safety-certified associates
                                provide a welcoming place for dogs & cats to stay while you’re
                                away! Guests will feel at home with the around-the-clock care
                                of our pet-loving staff. We offer a safe, clean,
                                temperature-controlled environment, playtime, exercise,
                                healthy meals & more. Book the ultimate staycation destination
                                for your pet now!
                            </p>

                            <table>
                                <tr>
                                    <th>Room type:</th>
                                    <td>Standard</td>
                                </tr>
                                <tr>
                                    <th>Room Fare:</th>
                                    <td>200 Tk Per Day</td>
                                </tr>
                                <tr>
                                    <th>Support:</th>
                                    <td>We Provide 24/7 Support</td>
                                </tr>
                            </table>

                            <a href="#" class="close"><i class="fa fa-times-circle"></i></a>
                        </div>
                        <!-- Standard Room_6 ends -->

                        <!-- Standard Room_7 -->
                        <div class="single" data-group="standard_07" style="display: none">
                            <div class="image">
                                <div>
                                    <img src="images/standard/standard_07.jpg" alt="" />
                                    <a data-imagelightbox="standard_07" href="images/standard/standard_07.jpg"></a>
                                </div>
                                <a href="Login-Register/Pet Details.php" class="button">Book now</a>
                            </div>

                            <p>
                                Our comfortable accommodations & safety-certified associates
                                provide a welcoming place for dogs & cats to stay while you’re
                                away! Guests will feel at home with the around-the-clock care
                                of our pet-loving staff. We offer a safe, clean,
                                temperature-controlled environment, playtime, exercise,
                                healthy meals & more. Book the ultimate staycation destination
                                for your pet now!
                            </p>

                            <table>
                                <tr>
                                    <th>Room type:</th>
                                    <td>Standard</td>
                                </tr>
                                <tr>
                                    <th>Room Fare:</th>
                                    <td>200 Tk Per Day</td>
                                </tr>
                                <tr>
                                    <th>Support:</th>
                                    <td>We Provide 24/7 Support</td>
                                </tr>
                            </table>

                            <a href="#" class="close"><i class="fa fa-times-circle"></i></a>
                        </div>
                        <!-- Standard Room_7 ends -->

                        <!-- Standard Room_8 -->
                        <div class="single" data-group="standard_08" style="display: none">
                            <div class="image">
                                <div>
                                    <img src="images/standard/standard_08.jpg" alt="" />
                                    <a data-imagelightbox="standard_08" href="images/standard/standard_08.jpg"></a>
                                </div>
                                <a href="Login-Register/Pet Details.php" class="button">Book now</a>
                            </div>

                            <p>
                                Our comfortable accommodations & safety-certified associates
                                provide a welcoming place for dogs & cats to stay while you’re
                                away! Guests will feel at home with the around-the-clock care
                                of our pet-loving staff. We offer a safe, clean,
                                temperature-controlled environment, playtime, exercise,
                                healthy meals & more. Book the ultimate staycation destination
                                for your pet now!
                            </p>

                            <table>
                                <tr>
                                    <th>Room type:</th>
                                    <td>Standard</td>
                                </tr>
                                <tr>
                                    <th>Room Fare:</th>
                                    <td>200 Tk Per Day</td>
                                </tr>
                                <tr>
                                    <th>Support:</th>
                                    <td>We Provide 24/7 Support</td>
                                </tr>
                            </table>

                            <a href="#" class="close"><i class="fa fa-times-circle"></i></a>
                        </div>
                        <!-- Standard Room_8 ends -->

                        <!-- Standard Room_9 -->
                        <div class="single" data-group="standard_09" style="display: none">
                            <div class="image">
                                <div>
                                    <img src="images/standard/standard_09.jpg" alt="" />
                                    <a data-imagelightbox="standard_09" href="images/standard/standard_09.jpg"></a>
                                </div>
                                <a href="Login-Register/Pet Details.php" class="button">Book now</a>
                            </div>

                            <p>
                                Our comfortable accommodations & safety-certified associates
                                provide a welcoming place for dogs & cats to stay while you’re
                                away! Guests will feel at home with the around-the-clock care
                                of our pet-loving staff. We offer a safe, clean,
                                temperature-controlled environment, playtime, exercise,
                                healthy meals & more. Book the ultimate staycation destination
                                for your pet now!
                            </p>

                            <table>
                                <tr>
                                    <th>Room type:</th>
                                    <td>Standard</td>
                                </tr>
                                <tr>
                                    <th>Room Fare:</th>
                                    <td>200 Tk Per Day</td>
                                </tr>
                                <tr>
                                    <th>Support:</th>
                                    <td>We Provide 24/7 Support</td>
                                </tr>
                            </table>

                            <a href="#" class="close"><i class="fa fa-times-circle"></i></a>
                        </div>
                        <!-- Standard Room_9 ends -->

                        <!-- Standard Room_10 -->
                        <div class="single" data-group="standard_10" style="display: none">
                            <div class="image">
                                <div>
                                    <img src="images/standard/standard_10.jpg" alt="" />
                                    <a data-imagelightbox="standard_10" href="images/standard/standard_10.jpg"></a>
                                </div>
                                <a href="Login-Register/Pet Details.php" class="button">Book now</a>
                            </div>

                            <p>
                                Our comfortable accommodations & safety-certified associates
                                provide a welcoming place for dogs & cats to stay while you’re
                                away! Guests will feel at home with the around-the-clock care
                                of our pet-loving staff. We offer a safe, clean,
                                temperature-controlled environment, playtime, exercise,
                                healthy meals & more. Book the ultimate staycation destination
                                for your pet now!
                            </p>

                            <table>
                                <tr>
                                    <th>Room type:</th>
                                    <td>Standard</td>
                                </tr>
                                <tr>
                                    <th>Room Fare:</th>
                                    <td>200 Tk Per Day</td>
                                </tr>
                                <tr>
                                    <th>Support:</th>
                                    <td>We Provide 24/7 Support</td>
                                </tr>
                            </table>

                            <a href="#" class="close"><i class="fa fa-times-circle"></i></a>
                        </div>
                        <!-- Standard Room_10 ends -->

                        <!-- Standard Room_11 -->
                        <div class="single" data-group="standard_11" style="display: none">
                            <div class="image">
                                <div>
                                    <img src="images/standard/standard_11.jpg" alt="" />
                                    <a data-imagelightbox="standard_11" href="images/standard/standard_11.jpg"></a>
                                </div>
                                <a href="Login-Register/Pet Details.php" class="button">Book now</a>
                            </div>

                            <p>
                                Our comfortable accommodations & safety-certified associates
                                provide a welcoming place for dogs & cats to stay while you’re
                                away! Guests will feel at home with the around-the-clock care
                                of our pet-loving staff. We offer a safe, clean,
                                temperature-controlled environment, playtime, exercise,
                                healthy meals & more. Book the ultimate staycation destination
                                for your pet now!
                            </p>

                            <table>
                                <tr>
                                    <th>Room type:</th>
                                    <td>Standard</td>
                                </tr>
                                <tr>
                                    <th>Room Fare:</th>
                                    <td>200 Tk Per Day</td>
                                </tr>
                                <tr>
                                    <th>Support:</th>
                                    <td>We Provide 24/7 Support</td>
                                </tr>
                            </table>

                            <a href="#" class="close"><i class="fa fa-times-circle"></i></a>
                        </div>
                        <!-- Standard Room_11 ends -->

                        <!-- Standard Room_12 -->
                        <div class="single" data-group="standard_12" style="display: none">
                            <div class="image">
                                <div>
                                    <img src="images/standard/standard_12.jpg" alt="" />
                                    <a data-imagelightbox="standard_12" href="images/standard/standard_12.jpg"></a>
                                </div>
                                <a href="Login-Register/Pet Details.php" class="button">Book now</a>
                            </div>

                            <p>
                                Our comfortable accommodations & safety-certified associates
                                provide a welcoming place for dogs & cats to stay while you’re
                                away! Guests will feel at home with the around-the-clock care
                                of our pet-loving staff. We offer a safe, clean,
                                temperature-controlled environment, playtime, exercise,
                                healthy meals & more. Book the ultimate staycation destination
                                for your pet now!
                            </p>

                            <table>
                                <tr>
                                    <th>Room type:</th>
                                    <td>Standard</td>
                                </tr>
                                <tr>
                                    <th>Room Fare:</th>
                                    <td>200 Tk Per Day</td>
                                </tr>
                                <tr>
                                    <th>Support:</th>
                                    <td>We Provide 24/7 Support</td>
                                </tr>
                            </table>

                            <a href="#" class="close"><i class="fa fa-times-circle"></i></a>
                        </div>
                        <!-- Standard Room_12 ends -->

                        <!-- Standard Room_13 -->
                        <div class="single" data-group="standard_13" style="display: none">
                            <div class="image">
                                <div>
                                    <img src="images/standard/standard_13.jpg" alt="" />
                                    <a data-imagelightbox="standard_13" href="images/standard/standard_13.jpg"></a>
                                </div>
                                <a href="Login-Register/Pet Details.php" class="button">Book now</a>
                            </div>

                            <p>
                                Our comfortable accommodations & safety-certified associates
                                provide a welcoming place for dogs & cats to stay while you’re
                                away! Guests will feel at home with the around-the-clock care
                                of our pet-loving staff. We offer a safe, clean,
                                temperature-controlled environment, playtime, exercise,
                                healthy meals & more. Book the ultimate staycation destination
                                for your pet now!
                            </p>

                            <table>
                                <tr>
                                    <th>Room type:</th>
                                    <td>Standard</td>
                                </tr>
                                <tr>
                                    <th>Room Fare:</th>
                                    <td>200 Tk Per Day</td>
                                </tr>
                                <tr>
                                    <th>Support:</th>
                                    <td>We Provide 24/7 Support</td>
                                </tr>
                            </table>

                            <a href="#" class="close"><i class="fa fa-times-circle"></i></a>
                        </div>
                        <!-- Standard Room_13 ends -->

                        <!-- Standard Room_14 -->
                        <div class="single" data-group="standard_14" style="display: none">
                            <div class="image">
                                <div>
                                    <img src="images/standard/standard_14.jpg" alt="" />
                                    <a data-imagelightbox="standard_14" href="images/standard/standard_14.jpg"></a>
                                </div>
                                <a href="Login-Register/Pet Details.php" class="button">Book now</a>
                            </div>

                            <p>
                                Our comfortable accommodations & safety-certified associates
                                provide a welcoming place for dogs & cats to stay while you’re
                                away! Guests will feel at home with the around-the-clock care
                                of our pet-loving staff. We offer a safe, clean,
                                temperature-controlled environment, playtime, exercise,
                                healthy meals & more. Book the ultimate staycation destination
                                for your pet now!
                            </p>

                            <table>
                                <tr>
                                    <th>Room type:</th>
                                    <td>Standard</td>
                                </tr>
                                <tr>
                                    <th>Room Fare:</th>
                                    <td>200 Tk Per Day</td>
                                </tr>
                                <tr>
                                    <th>Support:</th>
                                    <td>We Provide 24/7 Support</td>
                                </tr>
                            </table>

                            <a href="#" class="close"><i class="fa fa-times-circle"></i></a>
                        </div>
                        <!-- Standard Room_14 ends -->

                        <!-- Standard Room_15 -->
                        <div class="single" data-group="standard_15" style="display: none">
                            <div class="image">
                                <div>
                                    <img src="images/standard/standard_15.jpg" alt="" />
                                    <a data-imagelightbox="standard_15" href="images/standard/standard_15.jpg"></a>
                                </div>
                                <a href="Login-Register/Pet Details.php" class="button">Book now</a>
                            </div>

                            <p>
                                Our comfortable accommodations & safety-certified associates
                                provide a welcoming place for dogs & cats to stay while you’re
                                away! Guests will feel at home with the around-the-clock care
                                of our pet-loving staff. We offer a safe, clean,
                                temperature-controlled environment, playtime, exercise,
                                healthy meals & more. Book the ultimate staycation destination
                                for your pet now!
                            </p>

                            <table>
                                <tr>
                                    <th>Room type:</th>
                                    <td>Standard</td>
                                </tr>
                                <tr>
                                    <th>Room Fare:</th>
                                    <td>200 Tk Per Day</td>
                                </tr>
                                <tr>
                                    <th>Support:</th>
                                    <td>We Provide 24/7 Support</td>
                                </tr>
                            </table>

                            <a href="#" class="close"><i class="fa fa-times-circle"></i></a>
                        </div>
                        <!-- Standard Room_15 ends -->

                        <!-- Vip Room_1 -->
                        <div class="single" data-group="vip_01" style="display: none">
                            <div class="image">
                                <div>
                                    <img src="images/vip/vip_01.jpg" alt="" />
                                    <a data-imagelightbox="vip_01" href="images/vip/vip_01.jpg"></a>
                                </div>
                                <a href="Login-Register/Pet Details.php" class="button">Book now</a>
                            </div>

                            <p>
                                Our comfortable accommodations & safety-certified associates
                                provide a welcoming place for dogs & cats to stay while you’re
                                away! Guests will feel at home with the around-the-clock care
                                of our pet-loving staff. We offer a safe, clean,
                                temperature-controlled environment, playtime, exercise,
                                healthy meals & more. Book the ultimate staycation destination
                                for your pet now!
                            </p>

                            <table>
                                <tr>
                                    <th>Room type:</th>
                                    <td>Vip</td>
                                </tr>
                                <tr>
                                    <th>Room Fare:</th>
                                    <td>500 Tk Per Day</td>
                                </tr>
                                <tr>
                                    <th>Support:</th>
                                    <td>We Provide 24/7 Support</td>
                                </tr>
                            </table>

                            <a href="#" class="close"><i class="fa fa-times-circle"></i></a>
                        </div>
                        <!-- Vip Room_1 ends -->

                        <!-- Vip Room_2 -->
                        <div class="single" data-group="vip_02" style="display: none">
                            <div class="image">
                                <div>
                                    <img src="images/vip/vip_02.jpg" alt="" />
                                    <a data-imagelightbox="vip_02" href="images/vip/vip_02.jpg"></a>
                                </div>
                                <a href="Login-Register/Pet Details.php" class="button">Book now</a>
                            </div>

                            <p>
                                Our comfortable accommodations & safety-certified associates
                                provide a welcoming place for dogs & cats to stay while you’re
                                away! Guests will feel at home with the around-the-clock care
                                of our pet-loving staff. We offer a safe, clean,
                                temperature-controlled environment, playtime, exercise,
                                healthy meals & more. Book the ultimate staycation destination
                                for your pet now!
                            </p>

                            <table>
                                <tr>
                                    <th>Room type:</th>
                                    <td>Vip</td>
                                </tr>
                                <tr>
                                    <th>Room Fare:</th>
                                    <td>500 Tk Per Day</td>
                                </tr>
                                <tr>
                                    <th>Support:</th>
                                    <td>We Provide 24/7 Support</td>
                                </tr>
                            </table>

                            <a href="#" class="close"><i class="fa fa-times-circle"></i></a>
                        </div>
                        <!-- Vip Room_2 ends -->

                        <!-- Vip Room_3 -->
                        <div class="single" data-group="vip_03" style="display: none">
                            <div class="image">
                                <div>
                                    <img src="images/vip/vip_03.jpg" alt="" />
                                    <a data-imagelightbox="vip_03" href="images/vip/vip_03.jpg"></a>
                                </div>
                                <a href="Login-Register/Pet Details.php" class="button">Book now</a>
                            </div>

                            <p>
                                Our comfortable accommodations & safety-certified associates
                                provide a welcoming place for dogs & cats to stay while you’re
                                away! Guests will feel at home with the around-the-clock care
                                of our pet-loving staff. We offer a safe, clean,
                                temperature-controlled environment, playtime, exercise,
                                healthy meals & more. Book the ultimate staycation destination
                                for your pet now!
                            </p>

                            <table>
                                <tr>
                                    <th>Room type:</th>
                                    <td>Vip</td>
                                </tr>
                                <tr>
                                    <th>Room Fare:</th>
                                    <td>500 Tk Per Day</td>
                                </tr>
                                <tr>
                                    <th>Support:</th>
                                    <td>We Provide 24/7 Support</td>
                                </tr>
                            </table>

                            <a href="#" class="close"><i class="fa fa-times-circle"></i></a>
                        </div>
                        <!-- Vip Room_3 ends -->

                        <!-- Vip Room_4 -->
                        <div class="single" data-group="vip_04" style="display: none">
                            <div class="image">
                                <div>
                                    <img src="images/vip/vip_04.jpg" alt="" />
                                    <a data-imagelightbox="vip_04" href="images/vip/vip_04.jpg"></a>
                                </div>
                                <a href="Login-Register/Pet Details.php" class="button">Book now</a>
                            </div>

                            <p>
                                Our comfortable accommodations & safety-certified associates
                                provide a welcoming place for dogs & cats to stay while you’re
                                away! Guests will feel at home with the around-the-clock care
                                of our pet-loving staff. We offer a safe, clean,
                                temperature-controlled environment, playtime, exercise,
                                healthy meals & more. Book the ultimate staycation destination
                                for your pet now!
                            </p>

                            <table>
                                <tr>
                                    <th>Room type:</th>
                                    <td>Vip</td>
                                </tr>
                                <tr>
                                    <th>Room Fare:</th>
                                    <td>500 Tk Per Day</td>
                                </tr>
                                <tr>
                                    <th>Support:</th>
                                    <td>We Provide 24/7 Support</td>
                                </tr>
                            </table>

                            <a href="#" class="close"><i class="fa fa-times-circle"></i></a>
                        </div>
                        <!-- Vip Room_4 ends -->

                        <!-- Vip Room_5 -->
                        <div class="single" data-group="vip_05" style="display: none">
                            <div class="image">
                                <div>
                                    <img src="images/vip/vip_05.jpg" alt="" />
                                    <a data-imagelightbox="vip_05" href="images/vip/vip_05.jpg"></a>
                                </div>
                                <a href="Login-Register/Pet Details.php" class="button">Book now</a>
                            </div>

                            <p>
                                Our comfortable accommodations & safety-certified associates
                                provide a welcoming place for dogs & cats to stay while you’re
                                away! Guests will feel at home with the around-the-clock care
                                of our pet-loving staff. We offer a safe, clean,
                                temperature-controlled environment, playtime, exercise,
                                healthy meals & more. Book the ultimate staycation destination
                                for your pet now!
                            </p>

                            <table>
                                <tr>
                                    <th>Room type:</th>
                                    <td>Vip</td>
                                </tr>
                                <tr>
                                    <th>Room Fare:</th>
                                    <td>500 Tk Per Day</td>
                                </tr>
                                <tr>
                                    <th>Support:</th>
                                    <td>We Provide 24/7 Support</td>
                                </tr>
                            </table>

                            <a href="#" class="close"><i class="fa fa-times-circle"></i></a>
                        </div>
                        <!-- Vip Room_5 ends -->

                        <!-- Vip Room_6 -->
                        <div class="single" data-group="vip_06" style="display: none">
                            <div class="image">
                                <div>
                                    <img src="images/vip/vip_06.jpg" alt="" />
                                    <a data-imagelightbox="vip_06" href="images/vip/vip_06.jpg"></a>
                                </div>
                                <a href="Login-Register/Pet Details.php" class="button">Book now</a>
                            </div>

                            <p>
                                Our comfortable accommodations & safety-certified associates
                                provide a welcoming place for dogs & cats to stay while you’re
                                away! Guests will feel at home with the around-the-clock care
                                of our pet-loving staff. We offer a safe, clean,
                                temperature-controlled environment, playtime, exercise,
                                healthy meals & more. Book the ultimate staycation destination
                                for your pet now!
                            </p>

                            <table>
                                <tr>
                                    <th>Room type:</th>
                                    <td>Vip</td>
                                </tr>
                                <tr>
                                    <th>Room Fare:</th>
                                    <td>500 Tk Per Day</td>
                                </tr>
                                <tr>
                                    <th>Support:</th>
                                    <td>We Provide 24/7 Support</td>
                                </tr>
                            </table>

                            <a href="#" class="close"><i class="fa fa-times-circle"></i></a>
                        </div>
                        <!-- Vip Room_6 ends -->

                        <!-- Vip Room_7 -->
                        <div class="single" data-group="vip_07" style="display: none">
                            <div class="image">
                                <div>
                                    <img src="images/vip/vip_07.jpg" alt="" />
                                    <a data-imagelightbox="vip_07" href="images/vip/vip_07.jpg"></a>
                                </div>
                                <a href="Login-Register/Pet Details.php" class="button">Book now</a>
                            </div>

                            <p>
                                Our comfortable accommodations & safety-certified associates
                                provide a welcoming place for dogs & cats to stay while you’re
                                away! Guests will feel at home with the around-the-clock care
                                of our pet-loving staff. We offer a safe, clean,
                                temperature-controlled environment, playtime, exercise,
                                healthy meals & more. Book the ultimate staycation destination
                                for your pet now!
                            </p>

                            <table>
                                <tr>
                                    <th>Room type:</th>
                                    <td>Vip</td>
                                </tr>
                                <tr>
                                    <th>Room Fare:</th>
                                    <td>500 Tk Per Day</td>
                                </tr>
                                <tr>
                                    <th>Support:</th>
                                    <td>We Provide 24/7 Support</td>
                                </tr>
                            </table>

                            <a href="#" class="close"><i class="fa fa-times-circle"></i></a>
                        </div>
                        <!-- Vip Room_7 ends -->

                        <!-- Vip Room_8 -->
                        <div class="single" data-group="vip_08" style="display: none">
                            <div class="image">
                                <div>
                                    <img src="images/vip/vip_08.jpg" alt="" />
                                    <a data-imagelightbox="vip_08" href="images/vip/vip_08.jpg"></a>
                                </div>
                                <a href="Login-Register/Pet Details.php" class="button">Book now</a>
                            </div>

                            <p>
                                Our comfortable accommodations & safety-certified associates
                                provide a welcoming place for dogs & cats to stay while you’re
                                away! Guests will feel at home with the around-the-clock care
                                of our pet-loving staff. We offer a safe, clean,
                                temperature-controlled environment, playtime, exercise,
                                healthy meals & more. Book the ultimate staycation destination
                                for your pet now!
                            </p>

                            <table>
                                <tr>
                                    <th>Room type:</th>
                                    <td>Vip</td>
                                </tr>
                                <tr>
                                    <th>Room Fare:</th>
                                    <td>500 Tk Per Day</td>
                                </tr>
                                <tr>
                                    <th>Support:</th>
                                    <td>We Provide 24/7 Support</td>
                                </tr>
                            </table>

                            <a href="#" class="close"><i class="fa fa-times-circle"></i></a>
                        </div>
                        <!-- Vip Room_8 ends -->

                        <!-- Vip Room_9 -->
                        <div class="single" data-group="vip_09" style="display: none">
                            <div class="image">
                                <div>
                                    <img src="images/vip/vip_09.jpg" alt="" />
                                    <a data-imagelightbox="vip_09" href="images/vip/vip_09.jpg"></a>
                                </div>
                                <a href="Login-Register/Pet Details.php" class="button">Book now</a>
                            </div>

                            <p>
                                Our comfortable accommodations & safety-certified associates
                                provide a welcoming place for dogs & cats to stay while you’re
                                away! Guests will feel at home with the around-the-clock care
                                of our pet-loving staff. We offer a safe, clean,
                                temperature-controlled environment, playtime, exercise,
                                healthy meals & more. Book the ultimate staycation destination
                                for your pet now!
                            </p>

                            <table>
                                <tr>
                                    <th>Room type:</th>
                                    <td>Vip</td>
                                </tr>
                                <tr>
                                    <th>Room Fare:</th>
                                    <td>500 Tk Per Day</td>
                                </tr>
                                <tr>
                                    <th>Support:</th>
                                    <td>We Provide 24/7 Support</td>
                                </tr>
                            </table>

                            <a href="#" class="close"><i class="fa fa-times-circle"></i></a>
                        </div>
                        <!-- Vip Room_9 ends -->

                        <!-- Vip Room_10 -->
                        <div class="single" data-group="vip_10" style="display: none">
                            <div class="image">
                                <div>
                                    <img src="images/vip/vip_10.jpg" alt="" />
                                    <a data-imagelightbox="vip_10" href="images/vip/vip_10.jpg"></a>
                                </div>
                                <a href="Login-Register/Pet Details.php" class="button">Book now</a>
                            </div>

                            <p>
                                Our comfortable accommodations & safety-certified associates
                                provide a welcoming place for dogs & cats to stay while you’re
                                away! Guests will feel at home with the around-the-clock care
                                of our pet-loving staff. We offer a safe, clean,
                                temperature-controlled environment, playtime, exercise,
                                healthy meals & more. Book the ultimate staycation destination
                                for your pet now!
                            </p>

                            <table>
                                <tr>
                                    <th>Room type:</th>
                                    <td>Vip</td>
                                </tr>
                                <tr>
                                    <th>Room Fare:</th>
                                    <td>500 Tk Per Day</td>
                                </tr>
                                <tr>
                                    <th>Support:</th>
                                    <td>We Provide 24/7 Support</td>
                                </tr>
                            </table>

                            <a href="#" class="close"><i class="fa fa-times-circle"></i></a>
                        </div>
                        <!-- Vip Room_10 ends -->

                        <!-- Vip Room_11 -->
                        <div class="single" data-group="vip_11" style="display: none">
                            <div class="image">
                                <div>
                                    <img src="images/vip/vip_11.jpg" alt="" />
                                    <a data-imagelightbox="vip_11" href="images/vip/vip_11.jpg"></a>
                                </div>
                                <a href="Login-Register/Pet Details.php" class="button">Book now</a>
                            </div>

                            <p>
                                Our comfortable accommodations & safety-certified associates
                                provide a welcoming place for dogs & cats to stay while you’re
                                away! Guests will feel at home with the around-the-clock care
                                of our pet-loving staff. We offer a safe, clean,
                                temperature-controlled environment, playtime, exercise,
                                healthy meals & more. Book the ultimate staycation destination
                                for your pet now!
                            </p>

                            <table>
                                <tr>
                                    <th>Room type:</th>
                                    <td>Vip</td>
                                </tr>
                                <tr>
                                    <th>Room Fare:</th>
                                    <td>500 Tk Per Day</td>
                                </tr>
                                <tr>
                                    <th>Support:</th>
                                    <td>We Provide 24/7 Support</td>
                                </tr>
                            </table>

                            <a href="#" class="close"><i class="fa fa-times-circle"></i></a>
                        </div>
                        <!-- Vip Room_11 ends -->

                        <!-- Vip Room_12 -->
                        <div class="single" data-group="vip_12" style="display: none">
                            <div class="image">
                                <div>
                                    <img src="images/vip/vip_12.jpg" alt="" />
                                    <a data-imagelightbox="vip_12" href="images/vip/vip_12.jpg"></a>
                                </div>
                                <a href="Login-Register/Pet Details.php" class="button">Book now</a>
                            </div>

                            <p>
                                Our comfortable accommodations & safety-certified associates
                                provide a welcoming place for dogs & cats to stay while you’re
                                away! Guests will feel at home with the around-the-clock care
                                of our pet-loving staff. We offer a safe, clean,
                                temperature-controlled environment, playtime, exercise,
                                healthy meals & more. Book the ultimate staycation destination
                                for your pet now!
                            </p>

                            <table>
                                <tr>
                                    <th>Room type:</th>
                                    <td>Vip</td>
                                </tr>
                                <tr>
                                    <th>Room Fare:</th>
                                    <td>500 Tk Per Day</td>
                                </tr>
                                <tr>
                                    <th>Support:</th>
                                    <td>We Provide 24/7 Support</td>
                                </tr>
                            </table>

                            <a href="#" class="close"><i class="fa fa-times-circle"></i></a>
                        </div>
                        <!-- Vip Room_12 ends -->

                        <!-- Play Ground_01 -->
                        <div class="single" data-group="play_01" style="display: none">
                            <div class="image">
                                <div>
                                    <img src="images/play/play_01.jpg" alt="" />
                                    <a data-imagelightbox="play_01" href="images/play/play_01.jpg"></a>
                                </div>
                                <a href="Login-Register/Pet Details.php" class="button">Book now</a>
                            </div>

                            <p>
                                Our comfortable accommodations & safety-certified associates
                                provide a welcoming place for dogs & cats to stay while you’re
                                away! Guests will feel at home with the around-the-clock care
                                of our pet-loving staff. We offer a safe, clean,
                                temperature-controlled environment, playtime, exercise,
                                healthy meals & more. Book the ultimate staycation destination
                                for your pet now!
                            </p>

                            <table>
                                <tr>
                                    <th>Room type:</th>
                                    <td>Vip</td>
                                </tr>
                                <tr>
                                    <th>Room Fare:</th>
                                    <td>100 Tk Per Day</td>
                                </tr>
                                <tr>
                                    <th>Support:</th>
                                    <td>We Provide 9 AM To 5 PM Support</td>
                                </tr>
                            </table>

                            <a href="#" class="close"><i class="fa fa-times-circle"></i></a>
                        </div>
                        <!-- Play Ground_01 ends -->

                        <!-- Play Ground_02 -->
                        <div class="single" data-group="play_02" style="display: none">
                            <div class="image">
                                <div>
                                    <img src="images/play/play_02.jpg" alt="" />
                                    <a data-imagelightbox="play_02" href="images/play/play_02.jpg"></a>
                                </div>
                                <a href="Login-Register/Pet Details.php" class="button">Book now</a>
                            </div>

                            <p>
                                Our comfortable accommodations & safety-certified associates
                                provide a welcoming place for dogs & cats to stay while you’re
                                away! Guests will feel at home with the around-the-clock care
                                of our pet-loving staff. We offer a safe, clean,
                                temperature-controlled environment, playtime, exercise,
                                healthy meals & more. Book the ultimate staycation destination
                                for your pet now!
                            </p>

                            <table>
                                <tr>
                                    <th>Room type:</th>
                                    <td>Standard</td>
                                </tr>
                                <tr>
                                    <th>Room Fare:</th>
                                    <td>100 Tk Per Day</td>
                                </tr>
                                <tr>
                                    <th>Support:</th>
                                    <td>We Provide 9 AM To 5 PM Support</td>
                                </tr>
                            </table>

                            <a href="#" class="close"><i class="fa fa-times-circle"></i></a>
                        </div>
                        <!-- Play Ground_02 ends -->

                        <!-- Play Ground_03 -->
                        <div class="single" data-group="play_03" style="display: none">
                            <div class="image">
                                <div>
                                    <img src="images/play/play_03.jpg" alt="" />
                                    <a data-imagelightbox="play_03" href="images/play/play_03.jpg"></a>
                                </div>
                                <a href="Login-Register/Pet Details.php" class="button">Book now</a>
                            </div>

                            <p>
                                Our comfortable accommodations & safety-certified associates
                                provide a welcoming place for dogs & cats to stay while you’re
                                away! Guests will feel at home with the around-the-clock care
                                of our pet-loving staff. We offer a safe, clean,
                                temperature-controlled environment, playtime, exercise,
                                healthy meals & more. Book the ultimate staycation destination
                                for your pet now!
                            </p>

                            <table>
                                <tr>
                                    <th>Room type:</th>
                                    <td>Standard</td>
                                </tr>
                                <tr>
                                    <th>Room Fare:</th>
                                    <td>100 Tk Per Day</td>
                                </tr>
                                <tr>
                                    <th>Support:</th>
                                    <td>We Provide 9 AM To 5 PM Support</td>
                                </tr>
                            </table>

                            <a href="#" class="close"><i class="fa fa-times-circle"></i></a>
                        </div>
                        <!-- Play Ground_03 ends -->

                        <!-- Play Ground_04 -->
                        <div class="single" data-group="play_04" style="display: none">
                            <div class="image">
                                <div>
                                    <img src="images/play/play_04.jpg" alt="" />
                                    <a data-imagelightbox="play_04" href="images/play/play_04.jpg"></a>
                                </div>
                                <a href="Login-Register/Pet Details.php" class="button">Book now</a>
                            </div>

                            <p>
                                Our comfortable accommodations & safety-certified associates
                                provide a welcoming place for dogs & cats to stay while you’re
                                away! Guests will feel at home with the around-the-clock care
                                of our pet-loving staff. We offer a safe, clean,
                                temperature-controlled environment, playtime, exercise,
                                healthy meals & more. Book the ultimate staycation destination
                                for your pet now!
                            </p>

                            <table>
                                <tr>
                                    <th>Room type:</th>
                                    <td>Vip</td>
                                </tr>
                                <tr>
                                    <th>Room Fare:</th>
                                    <td>100 Tk Per Day</td>
                                </tr>
                                <tr>
                                    <th>Support:</th>
                                    <td>We Provide 9 AM To 5 PM Support</td>
                                </tr>
                            </table>

                            <a href="#" class="close"><i class="fa fa-times-circle"></i></a>
                        </div>
                        <!-- Play Ground_04 ends -->

                        <!-- Play Ground_05 -->
                        <div class="single" data-group="play_05" style="display: none">
                            <div class="image">
                                <div>
                                    <img src="images/play/play_05.jpg" alt="" />
                                    <a data-imagelightbox="play_05" href="images/play/play_05.jpg"></a>
                                </div>
                                <a href="Login-Register/Pet Details.php" class="button">Book now</a>
                            </div>

                            <p>
                                Our comfortable accommodations & safety-certified associates
                                provide a welcoming place for dogs & cats to stay while you’re
                                away! Guests will feel at home with the around-the-clock care
                                of our pet-loving staff. We offer a safe, clean,
                                temperature-controlled environment, playtime, exercise,
                                healthy meals & more. Book the ultimate staycation destination
                                for your pet now!
                            </p>

                            <table>
                                <tr>
                                    <th>Room type:</th>
                                    <td>Standard</td>
                                </tr>
                                <tr>
                                    <th>Room Fare:</th>
                                    <td>100 Tk Per Day</td>
                                </tr>
                                <tr>
                                    <th>Support:</th>
                                    <td>We Provide 9 AM To 5 PM Support</td>
                                </tr>
                            </table>

                            <a href="#" class="close"><i class="fa fa-times-circle"></i></a>
                        </div>
                        <!-- Play Ground_05 ends -->

                        <!-- Play Ground_06 -->
                        <div class="single" data-group="play_06" style="display: none">
                            <div class="image">
                                <div>
                                    <img src="images/play/play_06.jpg" alt="" />
                                    <a data-imagelightbox="play_06" href="images/play/play_06.jpg"></a>
                                </div>
                                <a href="Login-Register/Pet Details.php" class="button">Book now</a>
                            </div>

                            <p>
                                Our comfortable accommodations & safety-certified associates
                                provide a welcoming place for dogs & cats to stay while you’re
                                away! Guests will feel at home with the around-the-clock care
                                of our pet-loving staff. We offer a safe, clean,
                                temperature-controlled environment, playtime, exercise,
                                healthy meals & more. Book the ultimate staycation destination
                                for your pet now!
                            </p>

                            <table>
                                <tr>
                                    <th>Room type:</th>
                                    <td>Standard</td>
                                </tr>
                                <tr>
                                    <th>Room Fare:</th>
                                    <td>100 Tk Per Day</td>
                                </tr>
                                <tr>
                                    <th>Support:</th>
                                    <td>We Provide 9 AM To 5 PM Support</td>
                                </tr>
                            </table>

                            <a href="#" class="close"><i class="fa fa-times-circle"></i></a>
                        </div>
                        <!-- Play Ground_06 ends -->

                        <!-- single paws_1 -->
                        <div class="single" data-group="paws_1" style="display: none">
                            <div class="image">
                                <div>
                                    <img src="images/paws/paws_1.jpg" alt="" />
                                    <a data-imagelightbox="paws_1" href="images/paws/paws_1.jpg"></a>
                                </div>
                                <a href="#gallery" data-filter=".clients" class="button">Show More</a>
                            </div>

                            <p>
                                Max is a lovely 6 months old mixed breed puppy waiting for
                                someone to give him forever loving home. He is well behaved
                                and learning quickly, loves spending time with children and
                                adults.
                            </p>

                            <table>
                                <tr>
                                    <th>Room type:</th>
                                    <td>Standard</td>
                                </tr>
                                <tr>
                                    <th>Gender:</th>
                                    <td>Male</td>
                                </tr>
                                <tr>
                                    <th>Breed:</th>
                                    <td>Mixed Breed</td>
                                </tr>
                            </table>

                            <a href="#" class="close"><i class="fa fa-times-circle"></i></a>
                        </div>
                        <!-- single paws_1 ends -->

                        <!-- single paws_2 -->
                        <div class="single" data-group="paws_2" style="display: none">
                            <div class="image">
                                <div>
                                    <img src="images/paws/paws_2.jpg" alt="" />
                                    <a data-imagelightbox="paws_2" href="images/paws/paws_2.jpg"></a>
                                </div>
                                <a href="#gallery" data-filter=".clients" class="button">Show More</a>
                            </div>

                            <p>
                                Teddy is still a baby, has a lovely nature and loves to cuddle
                                and play with other cats.
                            </p>

                            <table>
                                <tr>
                                    <th>Room type:</th>
                                    <td>Standard</td>
                                </tr>
                                <tr>
                                    <th>Gender:</th>
                                    <td>Male</td>
                                </tr>
                                <tr>
                                    <th>Breed:</th>
                                    <td>Mixed Breed</td>
                                </tr>
                            </table>

                            <a href="#" class="close"><i class="fa fa-times-circle"></i></a>
                        </div>
                        <!-- single paws_2 ends -->

                        <!-- single paws_3 -->
                        <div class="single" data-group="paws_3" style="display: none">
                            <div class="image">
                                <div>
                                    <img src="images/paws/paws_3.jpg" alt="" />
                                    <a data-imagelightbox="paws_3" href="images/paws/paws_3.jpg"></a>
                                </div>
                                <a href="#gallery" data-filter=".clients" class="button">Show More</a>
                            </div>

                            <p>
                                Jerry is looking for a quiet home, he is indoor rabit, he
                                enjoys company of people.
                            </p>

                            <table>
                                <tr>
                                    <th>Room type:</th>
                                    <td>Vip</td>
                                </tr>
                                <tr>
                                    <th>Gender:</th>
                                    <td>Female</td>
                                </tr>
                                <tr>
                                    <th>Breed:</th>
                                    <td>Mixed Breed</td>
                                </tr>
                            </table>

                            <a href="#" class="close"><i class="fa fa-times-circle"></i></a>
                        </div>
                        <!-- single paws_3 ends -->

                        <!-- single paws_4 -->
                        <div class="single" data-group="paws_4" style="display: none">
                            <div class="image">
                                <div>
                                    <img src="images/paws/paws_4.jpg" alt="" />
                                    <a data-imagelightbox="paws_4" href="images/paws/paws_4.jpg"></a>
                                </div>
                                <a href="#gallery" data-filter=".clients" class="button">Show More</a>
                            </div>

                            <p>
                                Daisy is a little shy when you first meet her but after some
                                time her loving nature shines.
                            </p>

                            <table>
                                <tr>
                                    <th>Room type:</th>
                                    <td>Standard</td>
                                </tr>
                                <tr>
                                    <th>Gender:</th>
                                    <td>Male</td>
                                </tr>
                                <tr>
                                    <th>Breed:</th>
                                    <td>Mixed Breed</td>
                                </tr>
                            </table>

                            <a href="#" class="close"><i class="fa fa-times-circle"></i></a>
                        </div>
                        <!-- single paws_4 ends -->

                        <!-- single paws_5 -->
                        <div class="single" data-group="paws_5" style="display: none">
                            <div class="image">
                                <div>
                                    <img src="images/paws/paws_5.jpg" alt="" />
                                    <a data-imagelightbox="paws_5" href="images/paws/paws_5.jpg"></a>
                                </div>
                                <a href="#gallery" data-filter=".clients" class="button">Show More</a>
                            </div>

                            <p>
                                Bonbon is a shy 1 year old mixed breed. she loves quiet walks
                                and napping, she is a great match for any family.
                            </p>

                            <table>
                                <tr>
                                    <th>Room type:</th>
                                    <td>Standard</td>
                                </tr>
                                <tr>
                                    <th>Gender:</th>
                                    <td>Male</td>
                                </tr>
                                <tr>
                                    <th>Breed:</th>
                                    <td>Mixed Breed</td>
                                </tr>
                            </table>

                            <a href="#" class="close"><i class="fa fa-times-circle"></i></a>
                        </div>
                        <!-- single paws_5 ends -->

                        <!-- single paws_6 -->
                        <div class="single" data-group="paws_6" style="display: none">
                            <div class="image">
                                <div>
                                    <img src="images/paws/paws_6.jpg" alt="" />
                                    <a data-imagelightbox="paws_6" href="images/paws/paws_6.jpg"></a>
                                </div>
                                <a href="#gallery" data-filter=".clients" class="button">Show More</a>
                            </div>

                            <p>
                                Mack is 1 year old. there is great diversity among these
                                birds, there are similarities as well. All parrots have curved
                                beaks and all are zygodactyls, meaning they have four toes on
                                each foot, two pointing forward and two projecting backward.
                                Most parrots eat fruit, flowers, buds, nuts, seeds, and some
                                small creatures such as insects.
                            </p>

                            <table>
                                <tr>
                                    <th>Room type:</th>
                                    <td>Standard</td>
                                </tr>
                                <tr>
                                    <th>Gender:</th>
                                    <td>Male</td>
                                </tr>
                                <tr>
                                    <th>Breed:</th>
                                    <td>Mixed Breed</td>
                                </tr>
                            </table>

                            <a href="#" class="close"><i class="fa fa-times-circle"></i></a>
                        </div>
                        <!-- single paws_6 ends -->

                        <!-- single paws_7 -->
                        <div class="single" data-group="paws_7" style="display: none">
                            <div class="image">
                                <div>
                                    <img src="images/paws/paws_7.jpg" alt="" />
                                    <a data-imagelightbox="paws_7" href="images/paws/paws_7.jpg"></a>
                                </div>
                                <a href="#gallery" data-filter=".clients" class="button">Show More</a>
                            </div>

                            <p>
                                Rover is intelligent and loyal 8 year old senior, he loves
                                belly rubs and laying around in the grass. He is ready to find
                                his forever loving home.
                            </p>

                            <table>
                                <tr>
                                    <th>Room type:</th>
                                    <td>Standard</td>
                                </tr>
                                <tr>
                                    <th>Gender:</th>
                                    <td>Male</td>
                                </tr>
                                <tr>
                                    <th>Breed:</th>
                                    <td>Mixed Breed</td>
                                </tr>
                            </table>

                            <a href="#" class="close"><i class="fa fa-times-circle"></i></a>
                        </div>
                        <!-- single paws_7 ends -->

                        <!-- single paws_8 -->
                        <div class="single" data-group="paws_8" style="display: none">
                            <div class="image">
                                <div>
                                    <img src="images/paws/paws_8.jpg" alt="" />
                                    <a data-imagelightbox="paws_8" href="images/paws/paws_8.jpg"></a>
                                </div>
                                <a href="#gallery" data-filter=".clients" class="button">Show More</a>
                            </div>

                            <p>
                                Chocolate is a sweet brown Labrador boy, very affectionate and
                                playful. Loves to be center of attention. Would be best for
                                family without children.
                            </p>

                            <table>
                                <tr>
                                    <th>Room type:</th>
                                    <td>Standard</td>
                                </tr>
                                <tr>
                                    <th>Gender:</th>
                                    <td>Male</td>
                                </tr>
                                <tr>
                                    <th>Breed:</th>
                                    <td>Mixed Breed</td>
                                </tr>
                            </table>

                            <a href="#" class="close"><i class="fa fa-times-circle"></i></a>
                        </div>
                        <!-- single paws_8 ends -->

                        <!-- single paws_9 -->
                        <div class="single" data-group="paws_9" style="display: none">
                            <div class="image">
                                <div>
                                    <img src="images/paws/paws_9.jpg" alt="" />
                                    <a data-imagelightbox="paws_9" href="images/paws/paws_9.jpg"></a>
                                </div>
                                <a href="#gallery" data-filter=".clients" class="button">Show More</a>
                            </div>

                            <p>
                                Klara is outdoor cat, she really doesn't love other cats so
                                need to be only cat. She loves people, and is very smart.
                            </p>

                            <table>
                                <tr>
                                    <th>Room type:</th>
                                    <td>Standard</td>
                                </tr>
                                <tr>
                                    <th>Gender:</th>
                                    <td>Female</td>
                                </tr>
                                <tr>
                                    <th>Breed:</th>
                                    <td>Mixed Breed</td>
                                </tr>
                            </table>

                            <a href="#" class="close"><i class="fa fa-times-circle"></i></a>
                        </div>
                        <!-- single paws_9 ends -->

                        <!-- single paws_10 -->
                        <div class="single" data-group="paws_10" style="display: none">
                            <div class="image">
                                <div>
                                    <img src="images/paws/paws_10.jpg" alt="" />
                                    <a data-imagelightbox="paws_10" href="images/paws/paws_10.jpg"></a>
                                </div>
                                <a href="#gallery" data-filter=".clients" class="button">Show More</a>
                            </div>

                            <p>
                                Cockatoos do not make good pets for a first-time bird owner
                                because of their constant need for attention, need for large
                                amounts of time outside of their cages and tendency to squawk
                                and scream.
                            </p>

                            <table>
                                <tr>
                                    <th>Room type:</th>
                                    <td>Standard</td>
                                </tr>
                                <tr>
                                    <th>Gender:</th>
                                    <td>Female</td>
                                </tr>
                                <tr>
                                    <th>Breed:</th>
                                    <td>Mixed Breed</td>
                                </tr>
                            </table>

                            <a href="#" class="close"><i class="fa fa-times-circle"></i></a>
                        </div>
                        <!-- single paws_10 ends -->

                        <!-- single paws11 -->
                        <div class="single" data-group="paws_11" style="display: none">
                            <div class="image">
                                <div>
                                    <img src="images/paws/paws_11.jpg" alt="" />
                                    <a data-imagelightbox="paws_11" href="images/paws/paws_11.jpg"></a>
                                </div>
                                <a href="#gallery" data-filter=".clients" class="button">Show More</a>
                            </div>

                            <p>
                                Mack is 1 year old. there is great diversity among these
                                birds, there are similarities as well. All parrots have curved
                                beaks and all are zygodactyls, meaning they have four toes on
                                each foot, two pointing forward and two projecting backward.
                                Most parrots eat fruit, flowers, buds, nuts, seeds, and some
                                small creatures such as insects.
                            </p>

                            <table>
                                <tr>
                                    <th>Room type:</th>
                                    <td>Vip</td>
                                </tr>
                                <tr>
                                    <th>Gender:</th>
                                    <td>Female</td>
                                </tr>
                                <tr>
                                    <th>Breed:</th>
                                    <td>Mixed Breed</td>
                                </tr>
                            </table>

                            <a href="#" class="close"><i class="fa fa-times-circle"></i></a>
                        </div>
                        <!-- single paws_11 ends -->

                        <!-- single paws_12 -->
                        <div class="single" data-group="paws_12" style="display: none">
                            <div class="image">
                                <div>
                                    <img src="images/paws/paws_12.jpg" alt="" />
                                    <a data-imagelightbox="paws_12" href="images/paws/paws_12.jpg"></a>
                                </div>
                                <a href="#gallery" data-filter=".clients" class="button">Show More</a>
                            </div>

                            <p>
                                Klara is outdoor cat, she really doesn't love other cats so
                                need to be only cat. She loves people, and is very smart.
                            </p>

                            <table>
                                <tr>
                                    <th>Room type:</th>
                                    <td>Standard</td>
                                </tr>
                                <tr>
                                    <th>Gender:</th>
                                    <td>Female</td>
                                </tr>
                                <tr>
                                    <th>Breed:</th>
                                    <td>Mixed Breed</td>
                                </tr>
                            </table>

                            <a href="#" class="close"><i class="fa fa-times-circle"></i></a>
                        </div>
                        <!-- single paws_12 ends -->

                        <!-- single paws_9 -->
                        <div class="single" data-group="paws_13" style="display: none">
                            <div class="image">
                                <div>
                                    <img src="images/paws/paws_13.jpg" alt="" />
                                    <a data-imagelightbox="paws_13" href="images/paws/paws_13.jpg"></a>
                                </div>
                                <a href="#gallery" data-filter=".clients" class="button">Show More</a>
                            </div>

                            <p>
                                Cockatoos do not make good pets for a first-time bird owner
                                because of their constant need for attention, need for large
                                amounts of time outside of their cages and tendency to squawk
                                and scream.
                            </p>

                            <table>
                                <tr>
                                    <th>Room type:</th>
                                    <td>Vip</td>
                                </tr>
                                <tr>
                                    <th>Gender:</th>
                                    <td>Female</td>
                                </tr>
                                <tr>
                                    <th>Breed:</th>
                                    <td>Mixed Breed</td>
                                </tr>
                            </table>

                            <a href="#" class="close"><i class="fa fa-times-circle"></i></a>
                        </div>
                        <!-- single paws_13 ends -->

                        <!-- single paws_14 -->
                        <div class="single" data-group="paws_14" style="display: none">
                            <div class="image">
                                <div>
                                    <img src="images/paws/paws_14.jpg" alt="" />
                                    <a data-imagelightbox="paws_14" href="images/paws/paws_14.jpg"></a>
                                </div>
                                <a href="#gallery" data-filter=".clients" class="button">Show More</a>
                            </div>

                            <p>
                                Klara is outdoor cat, she really doesn't love other cats so
                                need to be only cat. She loves people, and is very smart.
                            </p>

                            <table>
                                <tr>
                                    <th>Room type:</th>
                                    <td>Standard</td>
                                </tr>
                                <tr>
                                    <th>Gender:</th>
                                    <td>Female</td>
                                </tr>
                                <tr>
                                    <th>Breed:</th>
                                    <td>Mixed Breed</td>
                                </tr>
                            </table>

                            <a href="#" class="close"><i class="fa fa-times-circle"></i></a>
                        </div>
                        <!-- single paws_14 ends -->

                        <!-- single paws_15 -->
                        <div class="single" data-group="paws_15" style="display: none">
                            <div class="image">
                                <div>
                                    <img src="images/paws/paws_15.jpg" alt="" />
                                    <a data-imagelightbox="paws_15" href="images/paws/paws_15.jpg"></a>
                                </div>
                                <a href="#gallery" data-filter=".clients" class="button">Show More</a>
                            </div>

                            <p>
                                Cockatoos do not make good pets for a first-time bird owner
                                because of their constant need for attention, need for large
                                amounts of time outside of their cages and tendency to squawk
                                and scream.
                            </p>

                            <table>
                                <tr>
                                    <th>Room type:</th>
                                    <td>Standard</td>
                                </tr>
                                <tr>
                                    <th>Gender:</th>
                                    <td>Male</td>
                                </tr>
                                <tr>
                                    <th>Breed:</th>
                                    <td>Mixed Breed</td>
                                </tr>
                            </table>

                            <a href="#" class="close"><i class="fa fa-times-circle"></i></a>
                        </div>
                        <!-- single paws_15 ends -->

                        <!-- single paws_16 -->
                        <div class="single" data-group="paws_16" style="display: none">
                            <div class="image">
                                <div>
                                    <img src="images/paws/paws_16.jpg" alt="" />
                                    <a data-imagelightbox="paws_16" href="images/paws/paws_16.jpg"></a>
                                </div>
                                <a href="#gallery" data-filter=".clients" class="button">Show More</a>
                            </div>

                            <p>
                                Jerry is looking for a quiet home, he is indoor rabit, he
                                enjoys company of people.
                            </p>

                            <table>
                                <tr>
                                    <th>Room type:</th>
                                    <td>Standard</td>
                                </tr>
                                <tr>
                                    <th>Gender:</th>
                                    <td>Male</td>
                                </tr>
                                <tr>
                                    <th>Breed:</th>
                                    <td>Mixed Breed</td>
                                </tr>
                            </table>

                            <a href="#" class="close"><i class="fa fa-times-circle"></i></a>
                        </div>
                        <!-- single paws_16 ends -->

                        <!-- single paws_17 -->
                        <div class="single" data-group="paws_17" style="display: none">
                            <div class="image">
                                <div>
                                    <img src="images/paws/paws_17.jpg" alt="" />
                                    <a data-imagelightbox="paws_17" href="images/paws/paws_17.jpg"></a>
                                </div>
                                <a href="#gallery" data-filter=".clients" class="button">Show More</a>
                            </div>

                            <p>
                                Teddy is still a baby, has a lovely nature and loves to cuddle
                                and play with other cats.
                            </p>

                            <table>
                                <tr>
                                    <th>Room type:</th>
                                    <td>Standard</td>
                                </tr>
                                <tr>
                                    <th>Gender:</th>
                                    <td>Male</td>
                                </tr>
                                <tr>
                                    <th>Breed:</th>
                                    <td>Mixed Breed</td>
                                </tr>
                            </table>

                            <a href="#" class="close"><i class="fa fa-times-circle"></i></a>
                        </div>
                        <!-- single paws_17 ends -->

                        <!-- single paws_18 -->
                        <div class="single" data-group="paws_18" style="display: none">
                            <div class="image">
                                <div>
                                    <img src="images/paws/paws_18.jpg" alt="" />
                                    <a data-imagelightbox="paws_18" href="images/paws/paws_18.jpg"></a>
                                </div>
                                <a href="#gallery" data-filter=".clients" class="button">Show More</a>
                            </div>

                            <p>
                                Jerry is looking for a quiet home, he is indoor cat, he enjoys
                                company of people.
                            </p>

                            <table>
                                <tr>
                                    <th>Room type:</th>
                                    <td>Standard</td>
                                </tr>
                                <tr>
                                    <th>Gender:</th>
                                    <td>Male</td>
                                </tr>
                                <tr>
                                    <th>Breed:</th>
                                    <td>Mixed Breed</td>
                                </tr>
                            </table>

                            <a href="#" class="close"><i class="fa fa-times-circle"></i></a>
                        </div>
                        <!-- single paws_18 ends -->

                        <!-- single paws_19 -->
                        <div class="single" data-group="paws_19" style="display: none">
                            <div class="image">
                                <div>
                                    <img src="images/paws/paws_19.jpg" alt="" />
                                    <a data-imagelightbox="paws_19" href="images/paws/paws_19.jpg"></a>
                                </div>
                                <a href="#gallery" data-filter=".clients" class="button">Show More</a>
                            </div>

                            <p>
                                Daisy is a little shy when you first meet her but after some
                                time her loving nature shines.
                            </p>

                            <table>
                                <tr>
                                    <th>Room type:</th>
                                    <td>Standard</td>
                                </tr>
                                <tr>
                                    <th>Gender:</th>
                                    <td>Female</td>
                                </tr>
                                <tr>
                                    <th>Breed:</th>
                                    <td>Mixed Breed</td>
                                </tr>
                            </table>

                            <a href="#" class="close"><i class="fa fa-times-circle"></i></a>
                        </div>
                        <!-- single paws_19 ends -->

                        <!-- single paws_20 -->
                        <div class="single" data-group="paws_20" style="display: none">
                            <div class="image">
                                <div>
                                    <img src="images/paws/paws_20.jpg" alt="" />
                                    <a data-imagelightbox="paws_20" href="images/paws/paws_20.jpg"></a>
                                </div>
                                <a href="#gallery" data-filter=".clients" class="button">Show More</a>
                            </div>

                            <p>
                                Kingfishers or Alcedinidae are a family of small to
                                medium-sized, brightly colored birds in the order
                                Coraciiformes. They have a cosmopolitan distribution, with
                                most species found in the tropical regions of Africa, Asia,
                                and Oceania but also can be seen in Europe.
                            </p>

                            <table>
                                <tr>
                                    <th>Room type:</th>
                                    <td>Standard</td>
                                </tr>
                                <tr>
                                    <th>Gender:</th>
                                    <td>Male</td>
                                </tr>
                                <tr>
                                    <th>Breed:</th>
                                    <td>Mixed Breed</td>
                                </tr>
                            </table>

                            <a href="#" class="close"><i class="fa fa-times-circle"></i></a>
                        </div>
                        <!-- single paws_20 ends -->
                    </div>
                    <!-- pets ends -->

                    <!-- Projects List -->
                    <div class="group">
                        <div class="standard">
                            <img src="images/standard/standard_01.jpg" alt="" />
                            <a href="#" data-group="standard_01"><span>find out more</span></a>
                        </div>

                        <div class="standard">
                            <img src="images/standard/standard_02.jpg" alt="" />
                            <a href="#" data-group="standard_02"><span>find out more</span></a>
                        </div>

                        <div class="standard">
                            <img src="images/standard/standard_03.jpg" alt="" />
                            <a href="#" data-group="standard_03"><span>find out more</span></a>
                        </div>

                        <div class="standard">
                            <img src="images/standard/standard_04.jpg" alt="" />
                            <a href="#" data-group="standard_04"><span>find out more</span></a>
                        </div>

                        <div class="standard">
                            <img src="images/standard/standard_05.jpg" alt="" />
                            <a href="#" data-group="standard_05"><span>find out more</span></a>
                        </div>

                        <div class="standard">
                            <img src="images/standard/standard_06.jpg" alt="" />
                            <a href="#" data-group="standard_06"><span>find out more</span></a>
                        </div>

                        <div class="standard">
                            <img src="images/standard/standard_07.jpg" alt="" />
                            <a href="#" data-group="standard_07"><span>find out more</span></a>
                        </div>

                        <div class="standard">
                            <img src="images/standard/standard_08.jpg" alt="" />
                            <a href="#" data-group="standard_08"><span>find out more</span></a>
                        </div>

                        <div class="standard">
                            <img src="images/standard/standard_09.jpg" alt="" />
                            <a href="#" data-group="standard_09"><span>find out more</span></a>
                        </div>

                        <div class="standard">
                            <img src="images/standard/standard_10.jpg" alt="" />
                            <a href="#" data-group="standard_10"><span>find out more</span></a>
                        </div>

                        <div class="standard">
                            <img src="images/standard/standard_11.jpg" alt="" />
                            <a href="#" data-group="standard_11"><span>find out more</span></a>
                        </div>

                        <div class="standard">
                            <img src="images/standard/standard_12.jpg" alt="" />
                            <a href="#" data-group="standard_12"><span>find out more</span></a>
                        </div>

                        <div class="standard">
                            <img src="images/standard/standard_13.jpg" alt="" />
                            <a href="#" data-group="standard_13"><span>find out more</span></a>
                        </div>

                        <div class="standard">
                            <img src="images/standard/standard_14.jpg" alt="" />
                            <a href="#" data-group="standard_14"><span>find out more</span></a>
                        </div>

                        <div class="standard">
                            <img src="images/standard/standard_15.jpg" alt="" />
                            <a href="#" data-group="standard_15"><span>find out more</span></a>
                        </div>

                        <div class="vip">
                            <img src="images/vip/vip_01.jpg" alt="" />
                            <a href="#" data-group="vip_01"><span>find out more</span></a>
                        </div>

                        <div class="vip">
                            <img src="images/vip/vip_02.jpg" alt="" />
                            <a href="#" data-group="vip_02"><span>find out more</span></a>
                        </div>

                        <div class="vip">
                            <img src="images/vip/vip_03.jpg" alt="" />
                            <a href="#" data-group="vip_03"><span>find out more</span></a>
                        </div>

                        <div class="vip">
                            <img src="images/vip/vip_04.jpg" alt="" />
                            <a href="#" data-group="vip_04"><span>find out more</span></a>
                        </div>

                        <div class="vip">
                            <img src="images/vip/vip_05.jpg" alt="" />
                            <a href="#" data-group="vip_05"><span>find out more</span></a>
                        </div>

                        <div class="vip">
                            <img src="images/vip/vip_06.jpg" alt="" />
                            <a href="#" data-group="vip_06"><span>find out more</span></a>
                        </div>

                        <div class="vip">
                            <img src="images/vip/vip_07.jpg" alt="" />
                            <a href="#" data-group="vip_07"><span>find out more</span></a>
                        </div>

                        <div class="vip">
                            <img src="images/vip/vip_08.jpg" alt="" />
                            <a href="#" data-group="vip_08"><span>find out more</span></a>
                        </div>

                        <div class="vip">
                            <img src="images/vip/vip_09.jpg" alt="" />
                            <a href="#" data-group="vip_09"><span>find out more</span></a>
                        </div>

                        <div class="vip">
                            <img src="images/vip/vip_10.jpg" alt="" />
                            <a href="#" data-group="vip_10"><span>find out more</span></a>
                        </div>

                        <div class="vip">
                            <img src="images/vip/vip_11.jpg" alt="" />
                            <a href="#" data-group="vip_11"><span>find out more</span></a>
                        </div>

                        <div class="vip">
                            <img src="images/vip/vip_12.jpg" alt="" />
                            <a href="#" data-group="vip_12"><span>find out more</span></a>
                        </div>

                        <div class="play">
                            <img src="images/play/play_01.jpg" alt="" />
                            <a href="#" data-group="play_01"><span>find out more</span></a>
                        </div>

                        <div class="play">
                            <img src="images/play/play_02.jpg" alt="" />
                            <a href="#" data-group="play_02"><span>find out more</span></a>
                        </div>

                        <div class="play">
                            <img src="images/play/play_04.jpg" alt="" />
                            <a href="#" data-group="play_04"><span>find out more</span></a>
                        </div>
                        <div class="play">
                            <img src="images/play/play_05.jpg" alt="" />
                            <a href="#" data-group="play_05"><span>find out more</span></a>
                        </div>

                        <div class="play">
                            <img src="images/play/play_06.jpg" alt="" />
                            <a href="#" data-group="play_06"><span>find out more</span></a>
                        </div>

                        <div class="play">
                            <img src="images/play/play_03.jpg" alt="" />
                            <a href="#" data-group="play_03"><span>find out more</span></a>
                        </div>

                        <div class="clients">
                            <img src="images/paws/paws_1.jpg" alt="" />
                            <a href="#" data-group="paws_1"><span>find out more</span></a>
                        </div>

                        <div class="clients">
                            <img src="images/paws/paws_2.jpg" alt="" />
                            <a href="#" data-group="paws_2"><span>find out more</span></a>
                        </div>

                        <div class="clients">
                            <img src="images/paws/paws_3.jpg" alt="" />
                            <a href="#" data-group="paws_3"><span>find out more</span></a>
                        </div>

                        <div class="clients">
                            <img src="images/paws/paws_4.jpg" alt="" />
                            <a href="#" data-group="paws_4"><span>find out more</span></a>
                        </div>

                        <div class="clients">
                            <img src="images/paws/paws_5.jpg" alt="" />
                            <a href="#" data-group="paws_5"><span>find out more</span></a>
                        </div>

                        <div class="clients">
                            <img src="images/paws/paws_6.jpg" alt="" />
                            <a href="#" data-group="paws_6"><span>find out more</span></a>
                        </div>

                        <div class="clients">
                            <img src="images/paws/paws_7.jpg" alt="" />
                            <a href="#" data-group="paws_7"><span>find out more</span></a>
                        </div>

                        <div class="clients">
                            <img src="images/paws/paws_8.jpg" alt="" />
                            <a href="#" data-group="paws_8"><span>find out more</span></a>
                        </div>

                        <div class="clients">
                            <img src="images/paws/paws_9.jpg" alt="" />
                            <a href="#" data-group="paws_9"><span>find out more</span></a>
                        </div>

                        <div class="clients">
                            <img src="images/paws/paws_10.jpg" alt="" />
                            <a href="#" data-group="paws_10"><span>find out more</span></a>
                        </div>

                        <div class="clients">
                            <img src="images/paws/paws_11.jpg" alt="" />
                            <a href="#" data-group="paws_11"><span>find out more</span></a>
                        </div>

                        <div class="clients">
                            <img src="images/paws/paws_12.jpg" alt="" />
                            <a href="#" data-group="paws_12"><span>find out more</span></a>
                        </div>

                        <div class="clients">
                            <img src="images/paws/paws_13.jpg" alt="" />
                            <a href="#" data-group="paws_13"><span>find out more</span></a>
                        </div>

                        <div class="clients">
                            <img src="images/paws/paws_14.jpg" alt="" />
                            <a href="#" data-group="paws_14"><span>find out more</span></a>
                        </div>

                        <div class="clients">
                            <img src="images/paws/paws_15.jpg" alt="" />
                            <a href="#" data-group="paws_15"><span>find out more</span></a>
                        </div>

                        <div class="clients">
                            <img src="images/paws/paws_16.jpg" alt="" />
                            <a href="#" data-group="paws_16"><span>find out more</span></a>
                        </div>

                        <div class="clients">
                            <img src="images/paws/paws_17.jpg" alt="" />
                            <a href="#" data-group="paws_17"><span>find out more</span></a>
                        </div>

                        <div class="clients">
                            <img src="images/paws/paws_18.jpg" alt="" />
                            <a href="#" data-group="paws_18"><span>find out more</span></a>
                        </div>

                        <div class="clients">
                            <img src="images/paws/paws_19.jpg" alt="" />
                            <a href="#" data-group="paws_19"><span>find out more</span></a>
                        </div>

                        <div class="clients">
                            <img src="images/paws/paws_20.jpg" alt="" />
                            <a href="#" data-group="paws_20"><span>find out more</span></a>
                        </div>
                    </div>
                    <!-- Projects List Ends! -->
                </div>
                <!-- adopt Ends! -->
            </div>
        </div>

        <!-- Donate -->
        <div class="donate">
            <!-- Price List -->

            <a class="anchor" id="prices"></a>
            <div class="price-box">
                <div class="container">
                    <p class="title">pricing and registration</p>
                    <h2>So what does it all costs?</h2>

                    <!-- Price Block -->
                    <div class="block promo">
                        <p><span>Standard Room</span> 200 Tk per day</p>
                        <ul>
                            <li>Dry/wet food included</li>
                            <li>Standard room</li>
                            <li>Cage free</li>
                            <li>Social interaction</li>
                            <li>Exercise and activity</li>
                        </ul>
                        <div class="button-holder">
                            <a href="Login-Register/Pet Details.php" class="button">book now</a>
                        </div>
                    </div>
                    <!-- Price Block Ends! -->

                    <!-- Price Block -->
                    <div class="block">
                        <p><span>Vip Room</span> 500 Tk per day</p>
                        <ul>
                            <li>Dry/wet food included</li>
                            <li>VIP room</li>
                            <li>Webcam</li>
                            <li>Social interaction</li>
                            <li>Exercise and activity</li>
                        </ul>
                        <div class="button-holder">
                            <a href="Login-Register/Pet Details.php" class="button">book now</a>
                        </div>
                    </div>
                    <!-- Price Block Ends! -->

                    <!-- Price Block -->
                    <div class="block">
                        <p><span>Playground</span> 100 Tk per day</p>
                        <ul>
                            <li>VIP Playground</li>
                            <li>Webcam</li>
                            <li>Dry/wet food included</li>
                            <li>Social interaction</li>
                            <li>Exercise and activity</li>
                        </ul>
                        <div class="button-holder">
                            <a href="Login-Register/Pet Details.php" class="button">book now</a>
                        </div>
                    </div>
                    <!-- Price Block Ends! -->
                </div>
            </div>
            <!-- Price List ends! -->

            <!-- Types -->
            <div class="types">
                <div class="container">
                    <h4>Getting started</h4>

                    <p>
                        All animals entering boarding facility need to meet certain
                        requirements, see the list bellow. You need to fill out and sign
                        application form.
                    </p>

                    <!-- Types of Donation -->
                    <div class="section float-left">
                        <h4>Boarding Admission Requirements</h4>

                        <dl>
                            <dt>All pets must be sprayed/neutered</dt>
                            <dd>Applies to animals older then six months</dd>
                            <dt>proof of up-to-date vaccinations</dt>
                            <dd>
                                All dogs must have current vaccination records on file with
                                us.
                            </dd>
                            <dt>nametag and collar</dt>
                            <dd>
                                We also require that your pet wears a secure collar with a
                                name tag.
                            </dd>
                        </dl>
                    </div>
                    <!-- Types of Donation Ends! -->

                    <!-- Wish list -->
                    <div class="section float-right">
                        <h4>Our facilities include</h4>

                        <ul>
                            <li>One-acre fenced-in play area</li>
                            <li>Temperature-controlled, clean, and spacious kennels</li>
                            <li>Basic grooming services available upon request</li>
                            <li>
                                Individual attention and play with other dogs if requested
                            </li>
                            <li>Multi-pet discounts available</li>
                            <li>Separate accomodations for cats</li>
                        </ul>
                    </div>
                    <!-- Wish list Ends! -->

                    <div class="button-holder">
                        <a href="Login-Register/Pet Details.php" class="button">Fill out application form</a>
                    </div>
                </div>
            </div>
            <!-- Types Ends! -->

            <!-- Types II -->
            <div class="types">
                <div class="container">
                    <h4>What you shoud know</h4>

                    <p>
                        If you have any concerns or questions not answered in our FAQ
                        please contact us we will be happy to help.
                    </p>

                    <dl class="accordion">
                        <dt>Collection and delivery times</dt>
                        <dd>
                            We provide collection and delivery services during work days
                            from 9am to 11am
                        </dd>
                        <dt>Do I need to make an appointment?</dt>
                        <dd>
                            We welcome you to drop by and look around, meet the staff and
                            see the facilities, ask any questions... If you want to reserve
                            boarding space, you need to make an appointment by phone or
                            email.
                        </dd>
                        <dt>Can I bring my own food?</dt>
                        <dd>
                            Top quality food is included in your pet's stay but if you want
                            us to feed your pet with the food you provide we ask you to make
                            daily portions packages.
                        </dd>
                    </dl>
                </div>
            </div>
            <!-- Types II Ends! -->

            <img src="images/paws_1.png" class="volunteer-image" alt="" />
        </div>
        <!-- Donate Ends! -->

        <!-- educate -->
        <div class="educate">
            <div class="container">
                <a class="anchor" id="about"></a>

                <p class="title">about us</p>
                <h3>Our mission, providing a home away from</h3>

                <!-- info -->
                <div class="section float-left info">
                    <p>
                        Our small business started back in 2021. We cared and welcomed
                        pets to our home, provided exercise, grooming and love. Since then
                        we've grown and built special facility designed to give your pet
                        everything it will need to feel happy and safe while you are away.
                    </p>

                    <h4>
                        We encourage you to learn more about the local animal rescue and
                        adoption organizations we support.
                    </h4>

                    <ul>
                        <li>
                            <a href="https://en.wikipedia.org/wiki/Society_for_the_Prevention_of_Cruelty_to_Animals">SPCA,
                                non-profit animal welfare organizations around the
                                world</a>
                        </li>
                        <li>
                            <a href="http://www.peta.org/about-peta/">PETA People for the Ethical Treatment of
                                Animals</a>
                        </li>
                    </ul>
                </div>
                <!-- info ends -->

                <!-- news -->
                <div class="section float-right news">
                    <h4>Business Hours</h4>

                    <div>
                        <p><strong>Winter hours</strong></p>
                        <p>January - March: Everyday 24 Hours</p>
                        <p>Boarding drop off hours continue to run until 8 p.m.</p>
                        <p>Check out times are between 9:00 a.m. - 11:00 a.m.</p>
                    </div>

                    <div>
                        <p><strong>Regular season</strong></p>
                        <p>April - December: Everyday 24 Hours</p>
                        <p>Boarding drop off hours continue to run until 10 p.m.</p>
                        <p>Check out times are between 9:00 a.m. - 11:00 a.m.</p>
                    </div>

                    <div class="cancelation-policy">
                        <p><strong>Cancelation Policy:</strong></p>
                        <p>Please give 24 Hour Notice of cancelation.</p>
                        <p>Thanks!</p>
                    </div>
                </div>
                <!-- news ends -->
            </div>
        </div>
        <!-- educate ends -->

        <!-- contact -->
        <div class="contact">
            <div class="container">
                <a class="anchor" id="contact"></a>

                <p class="title">Contact us</p>
                <h3>Have questions or comments?</h3>

                <p>
                    <i class="fa fa-map-marker"></i> J R F Pets Lodge, 248, Posu
                    hospital road, Raninagar, Boalia, Rajshahi.
                </p>
                <p>
                    <i class="fa fa-phone"></i> + 088 01764 992209 &nbsp; + 088 01733 942735
                </p>

                <!-- Form -->
                <form action="contact.php" method="post">
                    <input type="text" name="name" placeholder="Your Name *" />
                    <input type="text" name="email" placeholder="Your Email *" />
                    <textarea name="message" placeholder="Your Message *"></textarea>

                    <button name="submit" type="submit">Send us a message</button>
                </form>
                <!-- Form Ends! -->

                <!-- Do Not Remove! -->
                <p class="error"></p>
                <p class="message"></p>
                <!-- Do Not Remove! Ends! -->
            </div>
        </div>
        <!-- contact ends -->

        <!-- footer -->
        <div class="footer">
            <div class="container">
                <p>copyright 2022. <a href=" ">JRF Pet Lodge</a></p>
            </div>
        </div>
        <!-- footer ends -->

        <!-- back to top -->
        <div class="back">
            <div class="container">
                <a href="#top"><button>Back To Top <i class="fa fa-angle-up"></i></button></a>
            </div>
        </div>
        <!-- back to top ends -->
    </div>

    <!-- Scripts -->

    <script src="scripts/jquery-1.11.0.min.js"></script>
    <script src="scripts/flexslider/jquery.flexslider-min.js"></script>
    <script src="scripts/isotope.pkgd.min.js"></script>
    <script src="scripts/imagelightbox.min.js"></script>
    <script src="scripts/theme.js"></script>
    <script src="scripts/jquery.inview.min.js"></script>
    <script src="scripts/form.js"></script>
    <!-- Scripts Ends! -->
</body>

</html>