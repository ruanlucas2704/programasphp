<html>
  <head>
    <title>CTIT-CEFORES/UFTM</title>
  </head>
  <body>
    <h2>Form html + php </h2>
   <?php
     
    if (isset( $_REQUEST["inome"] )) {
      echo "<h2>".$_REQUEST["inome"]. " ; " . 
        $_REQUEST["icarro"]." ; " . 
        $_REQUEST["isenha"]." ; " . 
        $_REQUEST["iSexo"]." ; " . 
        $_REQUEST["iNasceu"]." ; " . 
        $_REQUEST["iEmail"]." ; " . 
        $_REQUEST["iSalário"] . " </h2> ";
    } else {
      echo "<h2>Informe seus dados para cadastro</h2>";
    }
    ?>
    
    
    
    <form action= "p11.php" method = "post">
	  <label for="inome">Nome:</label><input type="text" id="inome" name="inome"><br>
  		<label for="icarro">Qual seu veiculo:</label>
		<select id="icarro" name="icarro">
 		 <option value="f">Fiat</option>
	  <option value="v">VW</option>
  	<option value="g">GM</option>
 	 <option value="b">BMW</option>
       <option value="o">Outros</option>
	</select><br>
      <label for="isenha">Senha:</label><input type="password" id="isenha" name="isenha"><br>
      Sexo:
      <label for="iMasc">Masculino</label><input type="radio" id="iMasc" name="iSexo" value="Masculino">
       <label for="iFem">Feminino</label><input type="radio" id="iFem" name="iSexo" value="Feminino"><br>
          <label for="iNasceu">Data de Nascimento:</label><input type="date" id="iNasceu" name="iNasceu"><br>
        <label for="iEmail">E-mail:</label><input type="email" id="iEmail" name="iEmail"><br>
       <label for="iSalario">Salário:</label><input type="number" id="iSalário" name="iSalário" min= "1200" max = "99999">
      <br>
      <input type="submit" value="Cadastrar">
</form>    
  </body>
</html>