<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>table</title>
</head>
<style>
    .container{
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>

<body>
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>name</th>
                    <th>email</th>
                    <th>number</th>
                    <th>text</th>
                </tr>
            </thead>
    </div>

</body>

</html>

<?php
$servername = 'localhost';
$username = 'root';
$password = 'root';
$database = 'simple';
$conn = new mysqli($servername, $username, $password, $database);

$que = "select * from form";
$run = mysqli_query($conn, $que);

while ($row = mysqli_fetch_array($run)) {
    $name = $row['name'];
    $email = $row['email'];
    $number = $row['number'];
    $text = $row['text'];
?>
    <tbody>
        <tr>
            <td>
                <?php echo $name; ?>
            </td>
            <td>
                <?php echo $email; ?>
            </td>
            <td>
                <?php echo $number; ?>
            </td>
            <td>
                <?php echo $text; ?>
            </td>
        </tr>
    </tbody>
<?php } ?>
</table>