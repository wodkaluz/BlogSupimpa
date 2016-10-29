<?php
    $name = $_POST["name"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $erro = 0;
    
    if (empty($name) OR strstr($name, ' ')==FALSE) {
$mensagem = "Favor digitar seu nome corretamente.<br>";
$erro=1;
}
    if (empty($pass) == FALSE) {
$mensagem = "Favor digitar uma senha.<br>";
$erro=1;
}
    if (strlen($email) < 8 || strstr($email, '@') == FALSE) {
            $mensagem = "Favor digitar o seu e-mail corretamente.<br>";
            $erro=1;
}
    if ($erro==0) {
        $mensagem = "Cadastro Realizado com sucesso.";
    }
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
        </header><form name="form" class="form" action="cadastrar2.php" method="POST">
    <section>
        <label for="name">Seu Nome:</label><br />
        <input name="name" type="text" value="" size="30" /><br />
        <label for="email">Seu Email:</label><br />
        <input name="email" type="email" value="" size="30" /><br />
        <label for="pass">Sua senha:</label><br />
        <input name="pass" type="password" id="pass" size="30"><br />
    </section>
    <input type="submit" value="Enviar"/>
</form>    
        </section>
             <footer style="bottom:0;">
        <hr>
    Alunos: Lucas Luz, Fernando Raia e Felipe Pasqua </footer>
    </body>
</html>