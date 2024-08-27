<?php
session_start();

include 'config.php';

$query = mysqli_query($conn, "SELECT * FROM admins WHERE email='{$_SESSION['SESSION_EMAIL']}'");

if (mysqli_num_rows($query) > 0) {
    $row = mysqli_fetch_assoc($query);

    echo "<h2>Welcome " . $row['email'] . "</h2>";
}
?>

<br><a href='View clint record.php' class="button">
    <h3>View Clint Record</h3>
</a>
<a href='view pet record.php' class="button">
    <h3>View Pet Record</h3>
</a>
<a href='view Admin record.php' class="button">
    <h3>View Admin Record</h3>
</a>
<a href='view Reset Password record.php' class="button">
    <h3>View Reset Password Request</h3>
</a>
<br><a href='logout admin.php' target="_blank" class="button">Logout</a>

<style>
.button {
    background-color: #f56042;
    border: none;
    color: white;
    padding: 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 15px;
    margin: 2px;
    cursor: pointer;
}
</style>