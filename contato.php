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
           <li><a href="gifs.php">Gifs</a></li>
        <li><a href="about.php">Quem Somos</a></li>
          <li><a href="contato.php">Contato</a></li>
        </ul>
        </nav>
        </header>
        <section>
<form name="form" class="form" action="contato2.php" method="POST">
    <section>
        <label for="name">Seu Nome:</label><br />
        <input name="name" type="text" value="" size="30" /><br />
        <label for="email">Seu Email:</label><br />
        <input name="email" type="email" value="" size="30" /><br />
        <label for="message">Sua Mensagem:</label><br />
        <textarea name="message" rows="7" cols="30"></textarea><br />
    </section>
    <input type="submit" value="Enviar"/>
</form>    
        </section>
             <footer>
        <hr>
    Alunos: Lucas Luz, Fernando Raia e Felipe Pasqua </footer>
    </body>

</html>