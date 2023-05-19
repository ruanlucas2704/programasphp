<html>
  	
      	<body>


<?php
          	define("ESCOLA", "UFTM - CEFORES : CENTRO DE EDUCACAO PROFISSIONAL") ;

          // Cast float to int
$x = 23465.768;  			//variavel tipo float
$saldo = (int) $x; 		//transformou a variavem e integer
echo "<h>) x = " . $x . " saldo = " . $saldo . "</h1>" ;
          
    echo "<h2> PI     = " . pi() . "</h2>";  
          
     $x = $x * -1;
          echo "<h3> x = " . $x . " abs(x) = " . abs($x) . " Raiz = " . sqrt(abs($x) ). 
            " Arredondamento = " . round($x, 0) .	"</h3>";
          echo "<h2>". ESCOLA . "</H2>" ;
            
            $nomeX = "Uberaba legal pra xuxu";
          	$nomeX = "Voce Gosta?";				// $ nome = $nome . "Voce Gosta?");
          
          	echo "<h2>". $nomeX . "</h2>";
            if ($saldo > 22000 ) {
            echo "<h1> Saldo gordo </h1>";}
          else {
            	echo "<h1> Saldo Magrooo </h1>";}
          
          $cor = "red";

                        switch ($cor) {
                          case "red":
                            echo "Your favorite color is red!";
                            break;
                          case "blue":
                            echo "Your favorite color is blue!";
                            break;
                          case "green":
                            echo "Your favorite color is green!";
                            break;
                          default:
                            echo "Your favorite color is neither red, blue, nor green!";
                        }
?>

	</body>
      </html>