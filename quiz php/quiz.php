<!DOCTYPE html>
<html>
<head>
<title>Quiz Dev</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<h1>Quiz Geek</h1>

<form action="resultado.php" method="POST">

<label>Seu nome:</label>
<br>
<input type="text" name="nome" required>
<br><br>

<h3>1. O que você prefere fazer?</h3>
<input type="radio" name="p1" value="frontend">Criar interfaces bonitas<br>
<input type="radio" name="p1" value="bug">Encontrar erros<br>
<input type="radio" name="p1" value="arquiteto">Planejar sistemas<br>
<input type="radio" name="p1" value="algoritmo">Resolver problemas difíceis<br>

<h3>2. Qual matéria você prefere?</h3>
<input type="radio" name="p2" value="frontend">Artes<br>
<input type="radio" name="p2" value="bug">Informática<br>
<input type="radio" name="p2" value="arquiteto">Engenharia<br>
<input type="radio" name="p2" value="algoritmo">Matemática<br>

<h3>3. O que você faria em um projeto?</h3>
<input type="radio" name="p3" value="frontend">Criaria o visual<br>
<input type="radio" name="p3" value="bug">Testaria tudo<br>
<input type="radio" name="p3" value="arquiteto">Planejaria a estrutura<br>
<input type="radio" name="p3" value="algoritmo">Resolveria a lógica<br>

<h3>4. Qual ferramenta você escolheria?</h3>
<input type="radio" name="p4" value="frontend">Figma<br>
<input type="radio" name="p4" value="bug">Debugger<br>
<input type="radio" name="p4" value="arquiteto">Diagramas<br>
<input type="radio" name="p4" value="algoritmo">Editor de código<br>

<h3>5. O que te deixa mais animado?</h3>
<input type="radio" name="p5" value="frontend">Criar layouts incríveis<br>
<input type="radio" name="p5" value="bug">Caçar bugs<br>
<input type="radio" name="p5" value="arquiteto">Projetar sistemas grandes<br>
<input type="radio" name="p5" value="algoritmo">Resolver desafios complexos<br>

<br><br>

<button type="submit">Descobrir meu perfil</button>

</form>

</body>
</html>