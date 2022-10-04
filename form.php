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
      /*  $dbh = new PDO('mysql:host=localhost;dbname=GR', 'root', 'root');
        foreach($dbh->query('SELECT *
                                FROM question AS r1 JOIN
                                    (SELECT CEIL(RAND() *
                                                (SELECT MAX(id)
                                                    FROM question)) AS id)
                                    AS r2
                            WHERE r1.id >= r2.id
                            ORDER BY r1.id ASC
                            LIMIT 5') as $row) {
                                        }
                                        $dbh = null;
                                    } catch (PDOException $e) {
                                        print "Erreur !: " . $e->getMessage() . "<br/>";
                                        die();
                                    }*/
        $mysqli=mysqli_connect('localhost','root','root','GR');
        $sql=mysqli_query($mysqli,'SELECT * FROM question inner join reponse on question.id = reponse.id_question ORDER BY RAND () limit 2');} catch(Exception $e) {
}
?>
           <form method="post" action="form.php">
<?php 
            if($sql->num_rows > 0){ 
                while($row = $sql->fetch_assoc()){ 
?>
                <label for="id"><?php echo $row['question.libelle']?></label>
                <input name="id" id="id" value="<?php echo $row['reponse.libelle']?>">
           </form>
<?php }}?>

</body>
</html>