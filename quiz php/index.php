<!DOCTYPE html>
<html>
<head>
<title>Descubra Seu Dev Interior</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<h1>🧠 Descubra Seu Dev Interior</h1>

<p>Responda algumas perguntas e descubra qual é o seu verdadeiro perfil no mundo da tecnologia!</p>

<?php
if(isset($_COOKIE['jogador'])){
    echo "<p class='welcome'>Bem-vindo de volta, ".$_COOKIE['jogador']."! 😎</p>";
}
?>

<a class="botao" href="quiz.php">Começar Quiz</a>

</body>
</html>