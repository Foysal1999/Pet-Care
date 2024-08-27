<?php
session_start();

include 'config.php';
?>
<h1>View Pet Records</h1>
<table border="1">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile No</th>
        <th>Pet Type</th>
        <th>Pet Habit</th>
        <th>Room Type</th>
        <th>Booking From</th>
        <th>Booking To</th>
        <th>Local Gardian Name</th>
        <th>Local Gardian Number</th>
        <th>Additional Comments</th>
        <th>Action</th>
    </tr>
    <?php
    $query = mysqli_query($conn, "SELECT * FROM pets");
    while ($row = mysqli_fetch_array($query)) {
        ?>
    <tr>
        <td>
            <?php echo $row['Id']; ?>
        </td>
        <td>
            <?php echo $row['name']; ?>
        </td>
        <td>
            <?php echo $row['email']; ?>
        </td>
        <td>
            <?php echo $row['mobile']; ?>
        </td>
        <td>
            <?php echo $row['pet_type']; ?>
        </td>
        <td>
            <?php echo $row['pet_habit']; ?>
        </td>
        <td>
            <?php echo $row['room_type']; ?>
        </td>
        <td>
            <?php echo $row['booking_from']; ?>
        </td>
        <td>
            <?php echo $row['booking_to']; ?>
        </td>
        <td>
            <?php echo $row['L_G_Name']; ?>
        </td>
        <td>
            <?php echo $row['L_G_Number']; ?>
        </td>
        <td>
            <?php echo $row['addintonal_comments']; ?>
        </td>
        <td>
            <a href="Delete.php?idno=<?php echo $row['id']; ?>" target="_blank">Delete</a>
        </td>
    </tr>
    <?php
    }
    ?>
</table>

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

<br><a href='logout admin.php' target="_blank" class="button">Logout</a>