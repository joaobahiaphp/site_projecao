<html>
<head>

	<meta charset="utf-8">
	<title>Resultado</title>
	<link rel=stylesheet href="estilo_layout.css">

	

</head>
<body>

<?php

$nome = $_GET['nome'];
$quest01 = $_GET['quest01'];
$quest02 = $_GET['quest02'];
$quest03 = $_GET['quest03'];
$quest04 = $_GET['quest04'];
$quest05 = $_GET['quest05'];
$quest06 = $_GET['quest06'];
$quest07 = $_GET['quest07'];
$quest08 = $_GET['quest08'];
$quest09 = $_POST['quest09'];

	function preecheTabela($linha,$questao){

		$gab01 = "resp_d";
		$gab02 = "resp_c";
		$gab03 = "resp_b";
		$gab04 = "resp_e";
		$gab05 = "resp_a";
		$gab06 = "resp_d";
		$gab07 = "resp_c";
		$gab08 = "resp_a";
		$gab09 = "resp_c";


		switch ($linha) {
			case 1:
				{
					if($questao == $gab01){

						$imp = $gab01.' Certa';

					}
					else {

						$imp = $questao.' Errada';

					}	
				}
			break;
			
			case 2:
				{
					if($questao == $gab02){

						$imp = $gab02.' Certa';

					}
					else {

						$imp = $questao.' Errada';

					}	
				}
			break;
			case 3:
				{
					if($questao == $gab03){

						$imp = $gab03.' Certa';

					}
					else {

						$imp = $questao.' Errada';

					}	
				}
			break;

			case 4:
				{
					if($questao == $gab04){

						$imp = $gab04.' Certa';

					}
					else {

						$imp = $questao.' Errada';

					}	
				}
			break;

			case 5:
				{
					if($questao == $gab05){

						$imp = $gab05.' Certa';

					}
					else {

						$imp = $questao.' Errada';

					}	
				}
			break;

			case 6:
				{
					if($questao == $gab06){

						$imp = $gab06.' Certa';

					}
					else {

						$imp = $questao.' Errada';

					}	
				}
			break;

			case 7:
				{
					if($questao == $gab07){

						$imp = $gab07.' Certa';

					}
					else {

						$imp = $questao.' Errada';

					}	
				}
			break;

			case 8:
				{
					if($questao == $gab08){

						$imp = $gab08.' Certa';

					}
					else {

						$imp = $questao.' Errada';

					}	
				}
			break;


			case 9:
				{
					if($questao == $gab09){

						$imp = $gab09.' Certa';

					}
					else {

						$imp = $questao.' Errada';

					}	
				}
			break;


		}			

		

		return $imp;
	}

	function preecheTabelaB($linha){

		$gab01 = "resp_d";
		$gab02 = "resp_c";
		$gab03 = "resp_b";
		$gab04 = "resp_e";
		$gab05 = "resp_a";
		$gab06 = "resp_d";
		$gab07 = "resp_c";
		$gab08 = "resp_a";
		$gab09 = "resp_c";


		switch ($linha) {
			case 1:
				{
					$imp = $gab01;
				}
			break;
			
			case 2:
				{
					$imp = $gab02;	
				}
			break;
			case 3:
				{
					$imp = $gab03;
					
				}
			break;

			case 4:
				{
					$imp = $gab04;
				}
			break;

			case 5:
				{
					$imp = $gab05;
				}
			break;

			case 6:
				{
					$imp = $gab06;
				}
			break;

			case 7:
				{
					$imp = $gab07;
				}
			break;

			case 8:
				{
					$imp = $gab08;
				}
			break;


			case 9:
				{
					$imp = $gab09;
				}
			break;


		}			

		

		return $imp;
	}

	function pontTabela($linha,$questao){

		$gab01 = "resp_d";
		$gab02 = "resp_c";
		$gab03 = "resp_b";
		$gab04 = "resp_e";
		$gab05 = "resp_a";
		$gab06 = "resp_d";
		$gab07 = "resp_c";
		$gab08 = "resp_a";
		$gab09 = "resp_c";

		$ponto = 0;

		switch ($linha) {
			case 1:
				{
					if($questao == $gab01){

						$ponto = 30;

					}
					else {

						$ponto = 0;

					}						
				}
			break;
			
			case 2:
				{
					if($questao == $gab02){

						$ponto = 30;

					}
					else {

						$ponto = 0;

					}					
				}
			break;			

			case 3:
				{
					if($questao == $gab03){

						$ponto = 30;

					}
					else {

						$ponto = 0;

					}					
				}
			break;

			case 4:
				{
					if($questao == $gab04){

						$ponto = 30;

					}
					else {

						$ponto = 0;

					}					
				}
			break;

			case 5:
				{
					if($questao == $gab05){

						$ponto = 30;

					}
					else {

						$ponto = 0;

					}					
				}
			break;
			
			case 6:
				{
					if($questao == $gab06){

						$ponto = 30;

					}
					else {

						$ponto = 0;

					}					
				}
			break;

			case 7:
				{

					if($questao == $gab07){

						$ponto = 30;

					}
					else {

						$ponto = 0;

					}
				}
			break;

			case 8:
				{
					if($questao == $gab08){

						$ponto = 30;

					}
					else {

						$ponto = 0;

					}

				}
			break;								

			case 9:
				{
					if($questao == $gab09){

						$ponto = 30;

					}
					else {

						$ponto = 0;

					}

				}
			break;


		}

		return $ponto;

	}

	function somaTotal(){


		$quest[1] = $_GET['quest01'];
		$quest[2] = $_GET['quest02'];
		$quest[3] = $_GET['quest03'];
		$quest[4] = $_GET['quest04'];
		$quest[5] = $_GET['quest05'];
		$quest[6] = $_GET['quest06'];
		$quest[7] = $_GET['quest07'];
		$quest[8] = $_GET['quest08'];
		$quest[9] = $_POST['quest09'];

		$gab01 = "resp_d";
		$gab02 = "resp_c";
		$gab03 = "resp_b";
		$gab04 = "resp_e";
		$gab05 = "resp_a";
		$gab06 = "resp_d";
		$gab07 = "resp_c";
		$gab08 = "resp_a";
		$gab09 = "resp_c";

		$somaTotal = 0;

		for ($cont=1; $cont <= 9; $cont++) { 
			switch ($cont) {
			case 1:
				{
					if($quest[$cont] == $gab01){

						$ponto = 30;

						$somaTotal = $somaTotal + $ponto;

					}
					else {

						$ponto = 0;

						$somaTotal = $somaTotal + $ponto;

					}						
				}
			break;
			
			case 2:
				{
					if($quest[$cont] == $gab02){

						$ponto = 30;

						$somaTotal = $somaTotal + $ponto;

					}
					else {

						$ponto = 0;

						$somaTotal = $somaTotal + $ponto;

					}					
				}
			break;			

			case 3:
				{
					if($quest[$cont] == $gab03){

						$ponto = 30;

						$somaTotal = $somaTotal + $ponto;

					}
					else {

						$ponto = 0;

						$somaTotal = $somaTotal + $ponto;

					}					
				}
			break;

			case 4:
				{
					if($quest[$cont] == $gab04){

						$ponto = 30;

						$somaTotal = $somaTotal + $ponto;

					}
					else {

						$ponto = 0;

						$somaTotal = $somaTotal + $ponto;

					}					
				}
			break;

			case 5:
				{
					if($quest[$cont] == $gab05){

						$ponto = 30;

						$somaTotal = $somaTotal + $ponto;

					}
					else {

						$ponto = 0;

						$somaTotal = $somaTotal + $ponto;

					}					
				}
			break;
			
			case 6:
				{
					if($quest[$cont] == $gab06){

						$ponto = 30;

						$somaTotal = $somaTotal + $ponto;

					}
					else {

						$ponto = 0;

						$somaTotal = $somaTotal + $ponto;

					}					
				}
			break;

			case 7:
				{

					if($quest[$cont] == $gab07){

						$ponto = 30;

						$somaTotal = $somaTotal + $ponto;

					}
					else {

						$ponto = 0;

						$somaTotal = $somaTotal + $ponto;

					}
				}
			break;

			case 8:
				{
					if($quest[$cont] == $gab08){

						$ponto = 30;

						$somaTotal = $somaTotal + $ponto;

					}
					else {

						$ponto = 0;

						$somaTotal = $somaTotal + $ponto;

					}

				}
			break;								

			case 9:
				{
					if($quest[$cont] == $gab09){

						$ponto = 30;

						$somaTotal = $somaTotal + $ponto;

					}
					else {

						$ponto = 0;

						$somaTotal = $somaTotal + $ponto;

					}

				}
			break;


			}	

		}

		return $somaTotal;

	}

?>

<div id="tudo">

	<div id="topo">
		
	</div>

	<div id="conteudos">

		<table border=0 cellpadding=10 width=100%>

			<tr>

				<td bgcolor="#f0f8ff" align=center valign=top width=17%>

				</td>

				<td bgcolor="#f0f8ff" align=left valign=top width=83%>
					
					<h1>Resultado</h1>
					<p>Segue abaixo sua pontua&ccedil;&atilde;o.</p>
					<table border=1 align="center" valign="middle">
					
						<tr align="center">
							<td>Quest&atilde;o</td> <td>Op&ccedil;&atilde;o marcada</td> <td>Op&ccedil;&atilde;o correta</td> <td>Pontua&ccedil;&atilde;o</td>
						</tr>

						<tr align="center">
							<td>1</td> <td><?php echo preecheTabela(1,$quest01); ?></td> <td><?php echo preecheTabelaB(1); ?></td> <td><?php echo pontTabela(1,$quest01); ?></td>
						</tr>

						<tr align="center">
							<td>2</td> <td><?php echo preecheTabela(2,$quest02); ?></td> <td><?php echo preecheTabelaB(2); ?></td> <td><?php echo pontTabela(2,$quest02); ?></td>
						</tr>

						<tr align="center">
							<td>3</td> <td><?php echo preecheTabela(3,$quest03); ?></td> <td><?php echo preecheTabelaB(3); ?></td> <td><?php echo pontTabela(3,$quest03); ?></td>
						</tr>

						<tr align="center">
							<td>4</td> <td><?php echo preecheTabela(4,$quest04); ?></td> <td><?php echo preecheTabelaB(4); ?></td> <td><?php echo pontTabela(4,$quest04); ?></td>
						</tr>

						<tr align="center">
							<td>5</td> <td><?php echo preecheTabela(5,$quest05); ?></td> <td><?php echo preecheTabelaB(5); ?></td> <td><?php echo pontTabela(5,$quest05); ?></td>
						</tr>

						<tr align="center">
							<td>6</td> <td><?php echo preecheTabela(6,$quest06); ?></td> <td><?php echo preecheTabelaB(6); ?></td> <td><?php echo pontTabela(6,$quest06); ?></td>
						</tr>

						<tr align="center">
							<td>7</td> <td><?php echo preecheTabela(7,$quest07); ?></td> <td><?php echo preecheTabelaB(7); ?></td> <td><?php echo pontTabela(7,$quest07); ?></td>
						</tr>

						<tr align="center">
							<td>8</td> <td><?php echo preecheTabela(8,$quest08); ?></td> <td><?php echo preecheTabelaB(8); ?></td> <td><?php echo pontTabela(8,$quest08); ?></td>
						</tr>

						<tr align="center">
							<td>9</td> <td><?php echo preecheTabela(9,$quest09); ?></td> <td><?php echo preecheTabelaB(9); ?></td> <td><?php echo pontTabela(9,$quest09); ?></td>
						</tr>

						<tr align="center">
							<td colspan=3>PONTUA&Ccedil;&Atilde;O TOTAL :</td>  <td><?php echo somaTotal(); ?></td>
						</tr>

					</table>
					
					<p>Para reiniciar o jogo, clique abaixo:</p>
					<a href="index.html">P&aacute;gina Principal</a>
					
				</td>
			</tr>

		</table>

	</div>
	
	

	<div id="rodape">
		<address><center><b>Centro Universit&aacute;rio Proje&ccedil;&atilde;o - CAMPUS II - Taguatinga/DF</b></center></address>
	</div>



</div>

</body>
</html>