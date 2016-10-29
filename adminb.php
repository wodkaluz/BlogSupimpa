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
        <H1 style="text-align: center"><a href="admin.php" >PAGINA DE POSTS</a></H1>
        <H1 style="text-align: center"><a href="adminc.php" >PAGINA DE PIADAS</a></H1>
        <h3> Adicionar Gif </h3>
		<form method="POST" action="admin2b.php">
			<fieldset>
				<legend>Postar Gif</legend>
				<input type="hidden" name="operacao" value="inclusao">
				<label> Numero do Gif <input type="text" name="numero_gif" size="5"> </label><br>
				<label> Titulo do Gif <input type="text" name="titulo_gif" size="20"> </label>
                <br>
                <label> Foto do Gif <input type="file" name="foto_gif" size="20"> </label>
                <br>
                <label> Descricao do Gif <input type="text" name="descricao_gif" size="20"> </label>
                <input type="submit" value="Inserir" name="Inserir">
			</fieldset>
		</form>
        <br>
		<h3> Excluir Gif </h3>
		<form method="POST" action="admin2b.php">
			<fieldset>
				<legend>Excluir Gif</legend>
				<input type="hidden" name="operacao" value="exclusao">
				<label> Numero do Gif <input type="text" name="numero_gif" size="5"> </label>
				<input type="submit" value="Excluir" name="Excluir">
			</fieldset>
		</form>
        <br>
        <h3> Atualizar Gif </h3>
		<form method="POST" action="admin2b.php">
			<fieldset>
				<legend>Atualizar Gif</legend>
				<input type="hidden" name="operacao" value="atualizacao">
				<label> Numero do Gif <input type="text" name="numero_gif" size="5"> </label><br>
				<label> Novo Titulo do Gif <input type="text" name="novo_titulo_gif" size="20"> </label>
                <br>
                <label> Nova Foto do Gif <input type="file" name="nova_foto_gif" size="20"> </label>
                <br>
                <label> Nova Descricao do Gif <input type="text" name="nova_descricao_gif" size="20"> </label>
                <input type="submit" value="Atualizar" name="Atualizar">
			</fieldset>
		</form>
                 <footer>
        <hr>
    Alunos: Lucas Luz, Fernando Raia e Felipe Pasqua </footer>
    </body>
</html>