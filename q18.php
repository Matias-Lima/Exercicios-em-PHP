<html>
  <head>
    <title>q18</title>
<style>
            body{
          background-color:#363636;
          font-size:20px;
          color:antiquewhite;
          }
          h1{
          text-align:center;
          padding:1px;
          }	
</style>
   </head>
     <body>
   <?php

echo "18 – Fazer um programa que:
<br>
• Crie um formul&aacute;rio para ler o nome, idade, sexo, altura e peso de uma pessoa. Todos
os itens s&atilde;o obrigat&oacute;rios, logo, se o usu&aacute;rio deixar algum campo em branco o sistema
dever&aacute; solicitar o preenchimento do mesmo.
<br>
• Exiba em uma tabela os dados coletados
<br><br><br>";

?>
     <fieldset>
 <h1>Quest&atilde;o 18</h1>
 <br><br>
 <legend>Formul&aacute;rio</legend>
 <br>
 <form method="POST" action="http://localhost/Atividade_3U/q18.php">
    <?php
		     echo" Nome  : <input type= text name= nome size=10 required><br> ";   
			   echo" Idade em anos  : <input type=number name= ano required> <br>";
         echo" Altura em metros : <input type=name name= altura required> <br>";
         echo" Peso em Kg: <input type=number name= peso required> <br>";
				 echo"<fieldset><legend>Sexo</legend>";
				 echo"<input type=radio value =Homem name = sexo id = masc required>";
				 echo"<label for =masc> Masculino </label><br>";
				 echo"<input type= radio value = Mulher name = sexo  id =fem required>";
				 echo"<label for =fem> Feminino </label>";
				 echo"</fieldset><br>";             
	?>
	 <input type="SUBMIT" value="Enviar" name="B1">
</form>
   </fieldset>
   
    <?php
	@$nome = $_POST ["nome"];
	@$ano= $_POST ["ano"];
	@$sexo = $_POST ["sexo"];
    @$altura = $_POST ["altura"];
	@$peso= $_POST ["peso"];

    // Tabela dos Valores
    print '<center><br>[A] Valores do Formul&aacute;rio<br><hr size = 3 color = black>';
    print '<table border = 2><tr><th colspan = 2 bgcolor = red> Valores do Formul&aacute;rio </th></tr>';
    echo "<tr>";
    echo "<td>Nome</td><td>".$nome."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Idade</td><td>".$ano." Anos</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Sexo</td><td>".$sexo."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Altura</td><td>".$altura." m</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Peso</td><td>".$peso." Kg</td>";
    echo "</tr>";
    print '</table></center>';
    
    ?>
  </body>
</html>
