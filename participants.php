<?php
$conn = mysqli_connect('localhost', 'root', '', 'form');

if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$query = "select * from part";
$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Fuggles&family=Zen+Tokyo+Zoo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Participants</title>
</head>
<body>
<div id="navbar">
    <ul class="navi">
        <li><a href="index.html">Home</a></li>
        <li><a href="form.html">Join</a></li>
        <li><a id="current" href="participants.php">Participants</a></li>
    </ul>
</div>
<div id="tablediv">
    <table class="marks-table">
        <thead>
            <tr>
                <th>FirstName</th>
                <th>LastName</th>
                <th>ProjectName</th>
            </tr>
        </thead>
        <?php
            while($rows= mysqli_fetch_assoc($result)){
        ?>
                <tr>
                    <td><?php echo $rows['first_name']?></td>
                    <td><?php echo $rows['last_name']?></td>
                    <td><?php echo $rows['projectlink']?></td>
                </tr>
        <?php
            }
        ?>

    </table>
</div>
<footer id="my-footer">
    <div>
        <h1>Pages designed and developed by Mandar Junnarkar</h1>
        <a class="social twitter" href="https://twitter.com/MaNdAr38781805" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);"></a>
        <a class="social github" href="https://github.com/MandarJunnarkar" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);"></a>
        <a class="social linkedin" href="https://www.linkedin.com/in/mandar-junnarkar-65a86b206/" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);"></a>
        <a class="social instagram" href="https://www.instagram.com/mandar______/" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);"></a>
    </div>
</footer>
</body>
</html>