<?php

?>

<!DOCTYPE html>
<html>
    <head>
       <meta name="author" content="Lucas Luz, Fernando Raia e Felipe Pasqua">
      <meta name="description" content="Um Blog de Humor">
      <meta name="keywords" content="blog, humor">
      <link rel="stylesheet" type="text/css" href="estilo.css">
      <meta charset="utf-8">
    </head>
    <body>
        <header>
        <img id="imagem" src="imagens/title.png" alt="logo">
        <?php include "menu.inc"; ?>
        </header>
        <H1 style="text-align: center"><a href="admin.php" >Voltar</a></H1>
        <?php
	$operacao = $_POST["operacao"];
	if (strcmp($operacao, "inclusao") == 0 ) {
		echo "Postado com sucesso";
	}
	
	if (strcmp($operacao, "exclusao") == 0 ) {
		echo "Post Excluído";
	}
        
    if (strcmp($operacao, "atualizacao") == 0 ) {
		echo "Post Atualizado";
	}
?>
             <footer>
        <hr>
    Alunos: Lucas Luz, Fernando Raia e Felipe Pasqua </footer>
    </body>

</html>