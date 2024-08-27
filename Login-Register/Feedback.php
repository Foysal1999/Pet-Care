<?php

include 'config.php';
$msg = "";

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $comments = mysqli_real_escape_string($conn, $_POST['comments']);
    $rate = mysqli_real_escape_string($conn, $_POST['rate']);


    $sql = "INSERT INTO feedback (name, comments, rate) VALUES ('{$name}','{$comments}','{$rate}')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<div style='display: none;'>";
        //Create an instance; passing `true` enables exceptions
        echo "</div>";
        $msg = "<div class='alert alert-info'>Feedback Complited.</div>";
    } else {
        $msg = "<div class='alert alert-danger'>Something wrong went.</div>";
    }

}
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Feedback</title>
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
                        <h2>Feedback</h2>
                        <p>Please write somthing about our services.</p>
                        <?php echo $msg; ?>
                        <form action="" method="post">
                            <h3>Full Name:</h3>
                            <input type="text" class="name" name="name" placeholder="Enter Your Name" value="<?php if (isset($_POST['submit'])) {
                                echo $name;
                            } ?>" required>
                            <h3>Comments:</h3>
                            <input type="textarea" class="comments" name="comments" placeholder="Enter Your Feedback"
                                value="<?php if (isset($_POST['submit'])) {
                                    echo $comments;
                                } ?>">
                            <h3>Ratting:</h3>
                            <div class="rate">
                                <input type="radio" id="star5" name="rate" value="5" />
                                <label for="star5" title="text">5 stars</label>
                                <input type="radio" id="star4" name="rate" value="4" />
                                <label for="star4" title="text">4 stars</label>
                                <input type="radio" id="star3" name="rate" value="3" />
                                <label for="star3" title="text">3 stars</label>
                                <input type="radio" id="star2" name="rate" value="2" />
                                <label for="star2" title="text">2 stars</label>
                                <input type="radio" id="star1" name="rate" value="1" />
                                <label for="star1" title="text">1 star</label>
                            </div>
                            <button name="submit" class="btn" type="submit">Submit</button>
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
<style>
.rate {
    float: left;
    height: 46px;
    padding: 0 10px;
}

.rate:not(:checked)>input {
    position: absolute;
    top: -9999px;
}

.rate:not(:checked)>label {
    float: right;
    width: 1em;
    overflow: hidden;
    white-space: nowrap;
    cursor: pointer;
    font-size: 30px;
    color: #ccc;
}

.rate:not(:checked)>label:before {
    content: '★ ';
}

.rate>input:checked~label {
    color: #ffc700;
}

.rate:not(:checked)>label:hover,
.rate:not(:checked)>label:hover~label {
    color: #deb217;
}

.rate>input:checked+label:hover,
.rate>input:checked+label:hover~label,
.rate>input:checked~label:hover,
.rate>input:checked~label:hover~label,
.rate>label:hover~input:checked~label {
    color: #c59b08;
}
</style>