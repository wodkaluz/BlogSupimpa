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
    <section id="acesso">
        <form id="facesso" action="admin.php">
            <label for="login">Login:</label><br>
            <input type="text" name="login" id="login"><br>
            <label for="senha">Senha:</label><br>
            <input type="password" name="senha" id="senha"><br><br>
            <input type="submit" name="submit">
        </form>
        </section>
    </body>
</html>