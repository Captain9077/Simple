<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table to get data</title>
</head>

<body>
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>fname</th>
                    <th>email</th>
                    <th>number</th>
                    <th>msg</th>
                </tr>
            </thead>
    </div>
</body>

</html>
<?php
$servername = 'localhost';
$username = 'root';
$password = 'root';
$database = 'website1';
$conn = new mysqli($servername, $username, $password, $database);

$que = "select * from form";
$run = mysqli_query($conn, $que);

while ($row =  mysqli_fetch_array($run)) {
    $fname = $row['name'];
    $email = $row['email'];
    $number = $row['number'];
    $msg = $row['msg'];
?>
    <tbody>
        <tr>
            <td>
                <?php echo $fname; ?>
            </td>
            <td>
                <?php echo $email; ?>
            </td>
            <td>
                <?php echo $number; ?>
            </td>
            <td>
                <?php echo $msg; ?>
            </td>
        </tr>
    </tbody>
<?php } ?>

</table>