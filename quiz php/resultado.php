<?php

$nome = $_POST['nome'];

$p1 = $_POST['p1'];
$p2 = $_POST['p2'];
$p3 = $_POST['p3'];
$p4 = $_POST['p4'];
$p5 = $_POST['p5'];

$frontend = 0;
$bug = 0;
$arquiteto = 0;
$algoritmo = 0;

$respostas = [$p1,$p2,$p3,$p4,$p5];

foreach($respostas as $r){

    if($r == "frontend"){
        $frontend++;
    }

    if($r == "bug"){
        $bug++;
    }

    if($r == "arquiteto"){
        $arquiteto++;
    }

    if($r == "algoritmo"){
        $algoritmo++;
    }

}

if($frontend > $bug && $frontend > $arquiteto && $frontend > $algoritmo){
    $perfil = "Ninja do Front-end";
    $img = "img/frontend.png";
    $desc = "Você domina a arte de criar interfaces bonitas e funcionais. Seu foco está na experiência do usuário e no visual das aplicações. Pessoas como você transformam código em arte digital. O mundo da web precisa muito de desenvolvedores criativos como você.";
}

elseif($bug > $frontend && $bug > $arquiteto && $bug > $algoritmo){
    $perfil = "Caçador de Bugs";
    $img = "img/bughunter.png";
    $desc = "Você tem olhos de águia para encontrar erros escondidos no código. Seu talento está em testar, analisar e garantir que tudo funcione perfeitamente. Programadores assim salvam projetos inteiros. Sem você, muitos sistemas simplesmente quebrariam.";
}

elseif($arquiteto > $frontend && $arquiteto > $bug && $arquiteto > $algoritmo){
    $perfil = "Arquiteto do Código";
    $img = "img/arquiteto.png";
    $desc = "Você pensa grande e gosta de planejar sistemas complexos. Seu talento está em estruturar projetos de forma organizada e eficiente. Programadores como você são responsáveis por criar a base de grandes softwares. Sua visão estratégica é essencial.";
}

else{
    $perfil = "Mestre dos Algoritmos";
    $img = "img/algoritmo.png";
    $desc = "Você adora desafios de lógica e problemas difíceis. Seu cérebro funciona como um verdadeiro motor matemático. Desenvolvedores assim são especialistas em resolver problemas complexos. Grandes tecnologias dependem de pessoas com esse talento.";
}

setcookie("jogador",$nome,time()+3600);

?>
<!DOCTYPE html>
<html>
<head>
<title>Resultado</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<h1>🏆 Resultado do Quiz</h1>

<h2>Jogador: <?php echo $nome; ?></h2>

<h2>Seu perfil é: <?php echo $perfil; ?></h2>

<img src="<?php echo $img; ?>" width="300">

<p class="desc"><?php echo $desc; ?></p>

<a class="botao" href="index.php">Voltar</a>

</body>
</html>