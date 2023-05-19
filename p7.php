<html>
<head>
<title>CTIT-CEFORES/UFTM</title>
</head>
<body>

<h1> FUNCOES</h1>

<?php
                  function mostraNome ($nome, $qtd) {
                  echo "<br>";
                  for ($x = 0 ; $x < $qtd ; $x++) {
                  echo $nome . "," ;
                  }
                  $qtdLetras = $qtd * strlen ($nome);
                  return $qtdLetras ;
                  }

                  $qtdL = mostraNome ("Ruan", 4);
                  echo "<h1>Pedro: (4) = " . $qtdL;
                  $qtdL= mostraNome ("Lucas", 6);
                  echo "<h1>Lili: (6) = " . $qtdL;
                  $qtdL= mostraNome ("fernandes", 2);
                  echo "<h1>Lua: (2) = " . $qtdL;

?>




</body>
<html>