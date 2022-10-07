<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
<?php
//if (isset($_GET["id"])){
if (isset($_GET["id"]) && $_GET["id"] == $_COOKIE["ordre"]) {
    try {
        $mysqli=mysqli_connect('localhost','root','root','GR');
        $sql=mysqli_query($mysqli,'SELECT question.libelle as ql, question.id as qid FROM question ORDER BY RAND () limit 4');}
        catch(Exception $e) {
}
?>
           <form method="post" action="form.php">
<?php
            if($sql->num_rows > 0){ 
                while($row = $sql->fetch_assoc()){
?>
                <label for="id"><?php echo $row['ql']?></label>
                <br>
<?php           $sql2=mysqli_query($mysqli,'SELECT reponse.id_question as ridq, reponse.libelle as rl, reponse.jugement as rj FROM reponse where reponse.id_question ='.$row['qid'].'');
                while($row2 = $sql2->fetch_assoc()){?>
                <label><?php echo $row2['rl']?></label>
                <input type="radio" name="<?php echo $row['ql']?>" id="id" value="<?php echo $row2['rl']?>">
                <br>
<?php }}}?>
                <input type="submit" >
            </form>
<?php 
}else{
if(isset($_POST)){
$i=0;
foreach ($_POST as $key => $value) {
try{
$mysqli=mysqli_connect('localhost','root','root','GR');
$sql3=mysqli_query($mysqli,"SELECT * FROM reponse where libelle = '$value' and jugement=1");
}catch(Exception $e){
    mysqli_error($sql3);
}
    if ($sql3 !== false &&$sql3->num_rows > 0){
    $i++;
}} 
echo $i;
if (mysqli_query($mysqli,"UPDATE resultat SET note = '$i' where addrmail = '$_COOKIE[addrmail]' AND ordre = '$_COOKIE[ordre]'")) {
    echo("Record inserted successfully.<br />");
 }

}}
?>
</body>
</html>