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
<?php           $sql2=mysqli_query($mysqli,'SELECT reponse.id_question as ridq, reponse.libelle as rl FROM reponse where reponse.id_question ='.$row['qid'].'');
                while($row2 = $sql2->fetch_assoc()){?>
                <input type="button" name="<?php echo $row2['rl']?>" id="id" value="<?php echo $row2['rl']?>">
                <br>
<?php }}}?>
            </form>

</body>
</html>