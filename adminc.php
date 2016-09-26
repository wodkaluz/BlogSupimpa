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
        <H1 style="text-align: center"><a href="adminb.php" >PAGINA DE POSTS</a></H1>
        <H1 style="text-align: center"><a href="adminb.php" >PAGINA DE GIFS</a></H1>
        <h3> Adicionar Piada </h3>
		<form method="POST" action="admin2c.php">
			<fieldset>
				<legend>Postar Piada</legend>
				<input type="hidden" name="operacao" value="inclusao">
				<label> Numero da Piada <input type="text" name="numero_piada" size="5"> </label><br>
				<label> Titulo da Piada <input type="text" name="titulo_piada" size="20"> </label>
                <br>
                <label> Foto da Piada <input type="file" name="foto_piada" size="20"> </label>
                <br>
                <label> Descricao da Piada <input type="text" name="descricao_piada" size="20"> </label>
                <input type="submit" value="Inserir" name="Inserir">
			</fieldset>
		</form>
        <br>
		<h3> Excluir Post </h3>
		<form method="POST" action="admin2c.php">
			<fieldset>
				<legend>Excluir Piada</legend>
				<input type="hidden" name="operacao" value="exclusao">
				<label> Numero da Piada <input type="text" name="numero_piada" size="5"> </label>
				<input type="submit" value="Excluir" name="Excluir">
			</fieldset>
		</form>
        <br>
        <h3> Atualizar Piada </h3>
		<form method="POST" action="admin2c.php">
			<fieldset>
				<legend>Atualizar Piada</legend>
				<input type="hidden" name="operacao" value="atualizacao">
				<label> Numero da Piada <input type="text" name="numero_piada" size="5"> </label><br>
				<label> Novo Titulo da Piada <input type="text" name="novo_titulo_piada" size="20"> </label>
                <br>
                <label> Nova Foto da piada <input type="file" name="nova_foto_piada" size="20"> </label>
                <br>
                <label> Nova Piada <textarea rows="4" cols="50" name="nova_piada">
</textarea></label>
                
                <input type="submit" value="Atualizar" name="Atualizar">
			</fieldset>
		</form>
    </body>
</html>