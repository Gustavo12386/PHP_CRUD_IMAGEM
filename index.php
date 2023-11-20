<?php
include('config.php');

if(isset($_POST['upload'])){    

    $foto = $_FILES['imagem']['name'];
   
     $sql = $conn->prepare("INSERT INTO foto(arquivo) VALUES (:arquivo)");
     $sql->bindparam(':arquivo', $foto);
     $sql->execute();

    if($sql){
        move_uploaded_file($_FILES['imagem']['tmp_name'],"upload/".$_FILES['imagem']['name']);
        echo "<h3> Imagem carregada com sucesso</h3>";
    } else{
      echo "<h3>Imagem não carregada</h3>";  
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Adicione uma foto</h3>
    <form method="post" enctype="multipart/form-data">
      <div>
         <label>Adicione aqui:</label><br><br>
         <input type="file" name="imagem" required>
      </div>
      <br>
         <input type="submit" name="upload" value="Adicionar">
    </form>
    <br>
    <a href="visualizacao.php">Visualizar foto</a>
</body>
</html>








