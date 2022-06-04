<?php 
    include "config.php";
    include DIR_PATH."./template/header.php";
    include DIR_PATH."./template/nav.php";
    require_once 'mail.php';

?>
 <style>
    <?php include ".\\template\css\style.css";?>
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">




    <title>Document</title>
<body>
<form action="envia.php"
        method="POST" enctype="mulitpart/form-data">
        <div class="mb-3">
          <label>Assunto:</label>
          <input type="text" name="assunto" class="form-control" id="exampleInputEmail1" placeholder="informe o assunto">
        </div>
        <div class="mb-3">
          <label>Nome:</label>
          <input type="text"  name="nome" class="form-control" placeholder="escreva seu nome">
        </div>
        <div class="mb-3">
            <label>Mensagem:</label>
            <input type="text"  name="mensagem" class="form-control" placeholder="escreva sua mensagem">
          </div>
        
        <button type="submit" name="enviar" value="enviar" class="btn btn-primary">Enviar</button>
        
      </form>
      
<?php 
  require "template/footer.php";
?>
</body>


</html>



