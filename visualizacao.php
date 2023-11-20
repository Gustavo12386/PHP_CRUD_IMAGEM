<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include('config.php');
    
    $sql = $conn->prepare("SELECT * FROM foto");
    $sql->execute();

    if($sql->rowCount() > 0){
    ?>
    <?php
     while($row = $sql->fetch(PDO::FETCH_ASSOC)){     
    ?>   
    <?php echo'<img src="upload/'.$row['arquivo'].'" width="500px;" height="500px;" alt="Image">'?>
    <?php
     }
    }     
    ?>


</body>
</html>