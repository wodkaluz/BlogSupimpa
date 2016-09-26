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
        <nav>
        <ul class="menu">
          <li><a href="index.php">Home</a></li>
          <li><a href="piadas.php">Piadas</a></li>
          <li><a href="contato.php">Contato</a></li>
        </ul>
        </nav>
        </header>
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
    </body>
</html>