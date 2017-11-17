<html>
<head>
	<meta charset="utf-8">
	<title>Quest&atilde;o 6</title>
	<link rel=stylesheet href="estilo_layout.css">

	<script language="JavaScript">

		function validaRadio() {

  			if (document.alt.quest06[0].checked == false && document.alt.quest06[1].checked == false && document.alt.quest06[2].checked == false && document.alt.quest06[3].checked == false && document.alt.quest06[4].checked == false) {
    			
				alert('Por favor, escolha uma alternativa.');
    			return false;

  			}

  			return true;

		}

	</script>

</head>
<body>

<?php

$nome = $_GET['nome'];
$quest01 = $_GET['quest01'];
$quest02 = $_GET['quest02'];
$quest03 = $_GET['quest03'];
$quest04 = $_GET['quest04'];
$quest05 = $_POST['quest05'];

?>

<div id="tudo">

	<div id="topo">
		<h1></h1>
	</div>

	<div id="conteudos">

		<table>

		<tr>

			<td bgcolor="#f0f8ff" align=center valign=top width=150></td>
		
			<td bgcolor="#ffffff" align=left valign=top width=83%>

				
				<h1>6&#186; Quest&atilde;o</h1>
				<p>QUAL &Eacute; A NORMA UTILIZADA PARA PADRONIZAR REFER&Ecirc;NCIAS MENCIONADAS EM TRABALHOS E ARTIGOS ACAD&Ecirc;MICOS ?</p>
				
				<form name="alt" onsubmit="return validaRadio(this)" method="post" action="questao07.php?nome=<?php echo $nome ?>&quest01=<?php echo $quest01 ?>&quest02=<?php echo $quest02 ?>&quest03=<?php echo $quest03 ?>&quest04=<?php echo $quest04 ?>&quest05=<?php echo $quest05 ?>">
					<table>

						<tr>
							<td><input type="radio" name="quest06" value="resp_a"></td> <td>A. NBR 8112:1990</td>
						</tr>
							
						<tr>
							<td><input type="radio" name="quest06" value="resp_b"></td> <td>B. NBR 14000:2008</td>
						</tr>

						<tr>
							<td><input type="radio" name="quest06" value="resp_c"></td> <td>C. NBR 8000:2014</td>
						</tr>

						<tr>
							<td><input type="radio" name="quest06" value="resp_d"></td> <td>D. NBR 6023:2002</td>
						</tr>

						<tr>
							<td><input type="radio" name="quest06" value="resp_e"></td> <td>E. NBR 200:1965</td>
						</tr>

						<tr>
							<td>&nbsp;</td>
						</tr>

						<tr>
							<td><input type="submit" value="Enviar"></td>
						</tr>

					</table>
				</form>

			</td>

		</tr>

	</table>

	</div>
	
	

	<div id="rodape">
		<address><center>CENTRO UNIVERSIT&Aacute;RIO PROJE&Ccedil;&Atilde;O - CAMPUS II - TAGUATINGA/DF</center></address>
	</div>



</div>

</body>
</html>