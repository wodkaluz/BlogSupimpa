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
        
    <section id="acesso">
        <form id="facesso" action="admin.php">
            <label for="login">Login:</label><br>
            <input type="text" name="login" id="login"><br>
            <label for="senha">Senha:</label><br>
            <input type="password" name="senha" id="senha"><br><br>
            <input type="submit" name="submit">
            <a href="cadastrar.php">Cadastrar</a>
            
        </form>
        </section>
        <section>
            <img src="imagens/arrow-up.png" class="mark" style="margin-left: 142px;">
        </section>
        <section>
            <img class="post" src="imagens/posts/post1.jpg">
            <br>
            <a href="#"><img src="imagens/avatar.png" class="avatar"></a>
            <text>Muito bacana! Gostei mesmo!</text>
            <form class="comment">
            <label for="comentario">Comentario:</label><br>
            <textarea cols="50" rows="3" name="comentario" id="comentario"></textarea>
            <input type="submit" name="submit">
            
        </form>    
        </section>
         <footer>
        <hr>
    Alunos: Lucas Luz, Fernando Raia e Felipe Pasqua </footer>
    </body>
   
</html>