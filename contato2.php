<?php
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $erro = 0;
    
    if (empty($name) OR strstr($name, ' ')==FALSE) {
$mensagem = "Favor digitar seu nome corretamente.<br>";
$erro=1;
}
    if (empty($message) OR strstr($message, ' ')==FALSE) {
$mensagem = "Favor digitar sua mensagem corretamente.<br>";
$erro=1;
}
    if (strlen($email) < 8 || strstr($email, '@') == FALSE) {
            $mensagem = "Favor digitar o seu e-mail corretamente.<br>";
            $erro=1;
}
    if ($erro==0) {
        $mensagem = "Mensagem enviada com sucesso.";
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
        <nav>
        <ul class="menu">
          <li><a href="index.php">Home</a></li>
          <li><a href="piadas.php">Piadas</a></li>
          <li><a href="contato.php">Contato</a></li>
        </ul>
        </nav>
        </header>
        <section>
<form name="form" class="form" action="contato2.php" method="POST">
    <section>
        <?php
            echo $mensagem."<br><br>";
        ?>
        <label for="name">Seu Nome:</label><br />
        <input name="name" type="text" value="" size="30" /><br />
    </section>
    <section>
        <label for="email">Seu Email:</label><br />
        <input name="email" type="email" value="" size="30" /><br />
    </section>
    <section>
        <label for="message">Sua Mensagem:</label><br />
        <textarea name="message" rows="7" cols="30"></textarea><br />
    </section>
    <input type="submit" value="Enviar"/>
</form>    
        </section>
    </body>
</html>