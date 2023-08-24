
<html>
  <head>
    <title>q11</title>
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
    echo "11 - Fazer um programa para calcular e escrever a seguinte soma:
    <br>
    s = 37*38/1 + 36 * 37 / 2 + 35 * 36/3 + ... + 1 * 2 /37";
   ?>
 <br><br>
 <h1>Quest&atilde;o 11</h1>
 <br><br>
    <?php
     print '<center><br>[A]<br>  Tabela com os valores a serem somados <br><hr size = 3 color = black>';
     print '<table border = 2>';
     echo "<tr>";
        for($i = 38; $i >=1; $i--){
          @$valor = $valor + 1;
          $s = $i * ($i - 1) / $valor;
          @$t = $t + $s;
          }     
      echo "</tr>";
      echo "<tr><th colspan = 38 bgcolor = red> Soma dos N&uacute;meros </th></tr>";
      echo "<tr><td colspan = 38> ".$t."</td></tr>";
      print '</table></center>';
    ?>   
  </body>
</html>
