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
        <H1 style="text-align: center"><a href="adminb.php" >PAGINA DE GIFS</a></H1>
        <H1 style="text-align: center"><a href="adminc.php" >PAGINA DE PIADA</a></H1>
        <h3> Adicionar Post </h3>
		<form method="POST" action="admin2.php">
			<fieldset>
				<legend>Criar Post</legend>
				<input type="hidden" name="operacao" value="inclusao">
				<label> Numero do Post <input type="text" name="numero_post" size="5"> </label><br>
				<label> Titulo do Post <input type="text" name="titulo_post" size="20"> </label>
                <br>
                <label> Foto do Post <input type="file" name="foto_post" size="20"> </label>
                <br>
                <label> Descricao do Post <input type="text" name="descricao_post" size="20"> </label>
                <input type="submit" value="Inserir" name="Inserir">
			</fieldset>
		</form>
        <br>
		<h3> Excluir Post </h3>
		<form method="POST" action="admin2.php">
			<fieldset>
				<legend>Excluir Post</legend>
				<input type="hidden" name="operacao" value="exclusao">
				<label> Numero do Post <input type="text" name="numero_post" size="5"> </label>
				<input type="submit" value="Excluir" name="Excluir">
			</fieldset>
		</form>
        <br>
        <h3> Atualizar Post </h3>
		<form method="POST" action="admin2.php">
			<fieldset>
				<legend>Excluir Post</legend>
				<input type="hidden" name="operacao" value="atualizacao">
				<label> Numero do Post <input type="text" name="numero_post" size="5"> </label><br>
				<label> Novo Titulo do Post <input type="text" name="novo_titulo_post" size="20"> </label>
                <br>
                <label> Nova Foto do Post <input type="file" name="nova_foto_post" size="20"> </label>
                <br>
                <label> Nova Descricao do Post <input type="text" name="nova_descricao_post" size="20"> </label>
                <input type="submit" value="Atualizar" name="Atualizar">
			</fieldset>
		</form>
             <footer>
        <hr>
    Alunos: Lucas Luz, Fernando Raia e Felipe Pasqua </footer>
    </body>

</html>