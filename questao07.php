<html>
<head>
	<meta charset="utf-8">
	<title>Quest&atilde;o 7</title>
	<link rel=stylesheet href="estilo_layout.css">

	<script language="JavaScript">

		function validaRadio() {

  			if (document.alt.quest07[0].checked == false && document.alt.quest07[1].checked == false && document.alt.quest07[2].checked == false && document.alt.quest07[3].checked == false && document.alt.quest07[4].checked == false) {
    			
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
$quest05 = $_GET['quest05'];
$quest06 = $_POST['quest06'];

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

				
				<h1>7&#186; Quest&atilde;o</h1>
				<p>QUAL OP&Ccedil;&Atilde;O REPRESENTA EXEMPLO INCORRETO DE SE&Ccedil;&Atilde;O ?</p>
				
				<form name="alt" onsubmit="return validaRadio(this)" method="post" action="questao08.php?nome=<?php echo $nome ?>&quest01=<?php echo $quest01 ?>&quest02=<?php echo $quest02 ?>&quest03=<?php echo $quest03 ?>&quest04=<?php echo $quest04 ?>&quest05=<?php echo $quest05 ?>&quest06=<?php echo $quest06 ?>">
					<table>

						<tr>
							<td><input type="radio" name="quest07" value="resp_a"></td> <td>A. SE&Ccedil;&Atilde;O TERCI&Aacute;RIA 1.1.1</td>
						</tr>
							
						<tr>
							<td><input type="radio" name="quest07" value="resp_b"></td> <td>B. SE&Ccedil;&Atilde;O PRIM&Aacute;RIA 1</td>
						</tr>

						<tr>
							<td><input type="radio" name="quest07" value="resp_c"></td> <td>C. SE&Ccedil;&Atilde;O QUIN&Aacute;RIA 1.1.1.1</td>
						</tr>

						<tr>
							<td><input type="radio" name="quest07" value="resp_d"></td> <td>D. SE&Ccedil;&Atilde;O SECUND&Aacute;RIA 1.1</td>
						</tr>

						<tr>
							<td><input type="radio" name="quest07" value="resp_e"></td> <td>E. SE&Ccedil;&Atilde;O QUATERN&Aacute;RIA 1.1.2.1</td>
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