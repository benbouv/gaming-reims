<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="post">
    <input type="mail" name="mail" id="mail" placeholder="exemple@gmail.com">
    <button type="submit" >Submit</button>
</form>

<?php
if (isset($_POST['mail'])){
$mail = $_POST['mail'];
$numbers = range(1, 5);
shuffle($numbers);
$mysqli=mysqli_connect('localhost','root','root','GR');
$i = 0;
foreach (array_slice($numbers,0,5) as $number) {
    $i++;
    if ($sql=mysqli_query($mysqli,"INSERT INTO resultat (addrmail, stand, ordre) value ('$mail', '$number', '$i')")) {
        printf("Record inserted successfully.<br />");
     }else {
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
      }
    echo "$number ";
}
setcookie("addrmail", $mail);
setcookie("ordre", 1);
}
?>
</body>
</html>