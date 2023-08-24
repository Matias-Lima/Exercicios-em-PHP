<?php
echo "4 – Fazer um programa que:
<br>
● Gere um array com 20 posi&ccedil;&otilde;es preenchidas de forma aleat&oacute;ria com n &uacute;meros
inteiros variando entre 1 e 200.
<br>
● Informe a m&eacute;dia dos n&uacute;meros pares
<br>
● Exiba o array ordenado
<br>
";

    
/*[A] Gere um array com 20 elementos preenchidos de forma aleatória com números
inteiros entre 1 e 200.
*/
  for($i = 1; $i<=20; $i++):
  {$num[$i] = rand(1,200);}
  endfor;

  // Média dos Números pares
  print '<center><br>[A]<br>  M&eacute;dia dos n&uacute;meros pares <br><hr size = 3 color = black>';
  print '<table border = 2><tr><th colspan = 20 bgcolor = red> Array dos n&uacute;meros  </th></tr>';
  echo "<tr>";
  for($i = 1; $i <=20; $i++){
	  if ($num[$i] % 2 == 0){ 
	echo "<td>".$num[$i]."</td>";
        @$m = $num[$i] + $m;
        @$div =$div +1;
	  }
    }
  echo "</tr>";
  echo "<tr><th colspan = 20 bgcolor = red> M&eacute;dia dos N&uacute;meros </th></tr>";
  echo "<tr><td colspan = 20>".$m/$div."</td></tr>";
  print '</table></center>';

 //Bolha  para ordenar
 $fim = 20;
 do{
 $trocou = false;
 for($i = 1; $i<= ($fim - 1); $i++):
    if($num[$i] > $num[$i+1]):
       $temp = $num[$i];
       $num[$i] = $num[$i+1];
       $num[$i+1] = $temp;
       $trocou = true;
    endif;
 endfor;
 $fim = $fim - 1;
}while($trocou);
//Fim da Bolha
  //Mostrar Números ordenados
  print '<center><br>[B]<br> Exiba o array gerado ordenado<br><hr size = 3 color = black>';
  print '<table border = 2><tr><th colspan = 20 bgcolor = blue> Array Ordenado </th></tr>';
  echo "<tr>";
     for($i = 1; $i <=20; $i++)
     {
  echo "<td>".$num[$i]."</td>";
     }
  echo "</tr>";
  print '</table></center>';
     ?>