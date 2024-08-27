<?php
session_start();

include 'config.php';
?>
<h1>View Clint Records</h1>
<table border="1">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile No</th>
        <th>Password</th>
        <th>Action</th>
    </tr>
    <?php
    $query = mysqli_query($conn, "SELECT * FROM users");
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
            <?php echo $row['password']; ?>
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