<?php
session_start();

include 'config.php';
?>
<h1>View Reset Password Request</h1>
<table border="1">
    <tr>
        <th>Email</th>
        <th>Action</th>
    </tr>
    <?php
    $query = mysqli_query($conn, "SELECT * FROM reset_password");
    while ($row = mysqli_fetch_array($query)) {
        ?>
    <tr>
        <td>
            <?php echo $row['email']; ?>
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