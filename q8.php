
<html>
  <head>
    <title>q8</title>
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
    echo "8 – Fazer um programa para escrever o valor de S:
    <br>
    S = 2 elevado 1/50 + 2 elevado 2/49 + 2 elevado 3/48 + ...+ 2 elevado 50/1";
   ?>
 <br><br>
 <h1>Quest&atilde;o 8</h1>
 <br><br>
    <?php
     print '<center><br>[A]<br>  Tabela com os valores a serem somados <br><hr size = 3 color = black>';
     print '<table border = 2>';
     echo "<tr>";
        for($i = 50; $i >=1; $i--){
          @$valor = $valor + 1;
          $s = pow(2, $valor)/$i;
         // echo "".$s."<br>";
          @$t = $t + $s;
          }     
      echo "</tr>";
      echo "<tr><th colspan = 38 bgcolor = red> Soma dos N&uacute;meros </th></tr>";
      echo "<tr><td colspan = 38> ".$t."</td></tr>";
      print '</table></center>';
    ?>   
  </body>
</html>
