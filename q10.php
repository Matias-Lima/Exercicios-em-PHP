<html>
  <head>
    <title>q10</title>
<style>
    body{
	background-color:#363636;
	font-size:20px;
	color:antiquewhite;
	}
	h1{
	text-align:center;
	padding:1px;
  color:#1E90FF;
	}
    img{
	border:5px solid#000000;
	cursor:hand;
    height:200px;
    width:150px;
	}
	img:hover{
	border:10px solid #002366; 
	zoom:150%;
	}  
    #selos {
	text-align:center;
	padding-top:15px;
	}	
	#selos img {
	border:0px;
	margin:0px;
	padding:0px;
	}   	
</style>
 </head>
   <body>
    <fieldset>
                                          <h1>Quest&atilde;o 10</h1><br><br>
 <legend>Formul&aacute;rio</legend><br>
      <form method="POST" action="http://localhost/Atividade_3U/q10.php">
          <?php
              echo" Nome do Jogador 1  : <input type= text name= nome1  required><br> ";   
              echo" Nome do Jogador 2 : <input type=text name= nome2 required> <br>";             
          ?>
	        <input type="SUBMIT" value="Enviar" name="B1">
     </form>
    </fieldset>
<?php
  @$joga1 = $_POST ["nome1"];
  @$joga2 = $_POST ["nome2"];
    // Cria um array de 1 a 10 
    $num = range(1,5);
    $num2 = range(6,10);
    // Mistura os número
    shuffle($num);
    shuffle($num2);
    echo"<div id=selos>";
    echo"<h1>[ CARTAS DO JOGADOR 1: $joga1 ]</h1>";
    for($imagem =0; $imagem<=4; $imagem++): 
    echo"<img src=img/".$num[$imagem].".jpg border=0 alt=carta do duelo/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    endfor;
    echo"<h1>[ CARTAS DO JOGADOR 2: $joga2 ]</h1>";
    for($imagem =0; $imagem<=4; $imagem++): 
    echo"<img src=img/".$num2[$imagem].".jpg border=0 alt=carta do duelo/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    endfor;
    echo"</div>";

      // centralizar
      echo"<center>";

      // Array com os valores para os jogadores

      print '<center><br><br><hr size = 3 color = black>';
      print '<table border = 2><tr>
      <th bgcolor = red>BATALHAS</th>
      <th bgcolor = red colspan = 3>COMBATENTES</th>
      <th bgcolor =red>VENCEDOR</th>
      </tr>';
    
       for($i = 1; $i<=5; $i++):
       $jogador1[$i] = rand(0,5000);	
       $jogador2[$i] = rand(0,5000);

       echo "<tr>";//linha

       //coluna 1
       echo "<td>Batalha $i</td>";
       //coluna 2,3 e 4
       echo"<td><img src=img/".$num[$i-1].".jpg border=0 alt=carta do duelo/></td>";
       echo"<td>VS</td>";
       echo"<td><img src=img/".$num2[$i-1].".jpg border=0 alt=carta do duelo/></td>";

       //coluna 5
        if($jogador1[$i] > $jogador2[$i]){
		  	 echo"<td><font color = red> $joga1 <br></font></td>";
          $vencedor[$i] = $joga1;
          @$a = $a +1;
			  }
	      elseif(($jogador2[$i] > $jogador1[$i])) {
         echo"<td><font color = blue>$joga2 <br></font></td>";
          $vencedor[$i] = $joga2;
          @$b = $b + 1;
		    }else{
         echo"<td><font color = red>Empate<br></font></td>";
        }   
        endfor;  
        echo "</tr>";//final da linha
        print '</table></center>';
        if($a > $b){
         echo"<h1>O jogador 1 venceu o duelo</h1><br>";
        }
        elseif($b > $a){
         echo"<h1>O jogador 2 venceu o duelo</h1><br>";
        }else{
         echo"<h1>Empate</h1><br>";
        }
         echo"</center>";       
      ?>
  </body>
</html>