<html>
<head>
	<meta charset="utf-8">
	<title>Quest&atilde;o 9</title>
	<link rel=stylesheet href="estilo_layout.css">

	<script language="JavaScript">

		function validaRadio() {

  			if (document.alt.quest09[0].checked == false && document.alt.quest09[1].checked == false && document.alt.quest09[2].checked == false && document.alt.quest09[3].checked == false && document.alt.quest09[4].checked == false) {
    			
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
$quest06 = $_GET['quest06'];
$quest07 = $_GET['quest07'];
$quest08 = $_POST['quest08'];

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

				
				<h1>9&#186; Quest&atilde;o</h1>
				<p>ESCOLHA A OP&Ccedil;&Atilde;O QUE REPRESENTA A REFER&Ecirc;NCIA DE PUBLICA&Ccedil;&Atilde;O EM REVISTA:</p>
				
				<form name="alt" onsubmit="return validaRadio(this)" method="post" action="resul01.php?nome=<?php echo $nome ?>&quest01=<?php echo $quest01 ?>&quest02=<?php echo $quest02 ?>&quest03=<?php echo $quest03 ?>&quest04=<?php echo $quest04 ?>&quest05=<?php echo $quest05 ?>&quest06=<?php echo $quest06 ?>&quest07=<?php echo $quest07 ?>&quest08=<?php echo $quest08 ?>">
					<table>

						<tr>
							<td><input type="radio" name="quest09" value="resp_a"></td> <td>A. MORFOLOGIA dos artr&oacute;podes.In:ENCICLOP&Eacute;DIA multim&iacute;dia dos seres vivos.[S.l.]:Planeta DeAgostini,c1998.CD-ROM 9.</td>
						</tr>
							
						<tr>
							<td><input type="radio" name="quest09" value="resp_b"></td> <td>B. SANTOS, F. R. dos. A coloniza&ccedil;&atilde;o da terra do Tucuj&uacute;s. In: ______. <b>Hist&oacute;ria do Amap&aacute;, 1o grau.</b> 2. ed. Macap&acute;: Valcan, 1994. cap. 3.</td>
						</tr>

						<tr>
							<td><input type="radio" name="quest09" value="resp_c"></td> <td>C. DINHEIRO:revista  semanal  de  neg&oacute;cios. S&atilde;o Paulo:Ed. Tr&Aacute;s,n. 148,28 jun. 2000. 98 p.</td>
						</tr>

						<tr>
							<td><input type="radio" name="quest09" value="resp_d"></td> <td>D. NAVES,P. Lagos andinos d&atilde;o banho de beleza.<b>Folha de S. Paulo</b>,S&atilde;o Paulo, 28 jun.1999.Folha Turismo,Caderno 8,p.13.</td>
						</tr>

						<tr>
							<td><input type="radio" name="quest09" value="resp_e"></td> <td>E. PAIVA, Anabela. Trincheira musical: m&uacute;sico d&aacute; li&ccedil;&ctilde;es de cidadania em forma de samba para crian&ccedil;as e adolescentes.<b>Jornal do Brasil</b>, Rio de Janeiro, p. 2, 12 jan. 2002.</td>
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
		<address><center>CENTRO UNIVERSITARIO PROJE&Ccedil;&Atilde;O - CAMPUS II - TAGUATINGA/DF</center></address>
	</div>



</div>

</body>
</html>