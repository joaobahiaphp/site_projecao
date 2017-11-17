<html>
<head>
	<meta charset="utf-8">
	<title>Quest&atilde;o 8</title>
	<link rel=stylesheet href="estilo_layout.css">

	<script language="JavaScript">

		function validaRadio() {

  			if (document.alt.quest08[0].checked == false && document.alt.quest08[1].checked == false && document.alt.quest08[2].checked == false && document.alt.quest08[3].checked == false && document.alt.quest08[4].checked == false) {
    			
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
$quest07 = $_POST['quest07'];

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

				
				<h1>8&#186; Quest&atilde;o</h1>
				<p>ESCOLHA A OP&Ccedil;&Atilde;O QUE REPRESENTA A DEFINI&Ccedil;&Atilde;O DE SUM&Aacute;RIO :</p>
				
				<form name="alt" onsubmit="return validaRadio(this)" method="post" action="questao09.php?nome=<?php echo $nome ?>&quest01=<?php echo $quest01 ?>&quest02=<?php echo $quest02 ?>&quest03=<?php echo $quest03 ?>&quest04=<?php echo $quest04 ?>&quest05=<?php echo $quest05 ?>&quest06=<?php echo $quest06 ?>&quest07=<?php echo $quest07 ?>">
					<table>

						<tr>
							<td><input type="radio" name="quest08" value="resp_a"></td> <td>A. ENUMERA&Ccedil;&Atilde;O DAS DIVIS&Otilde;ES E OUTRAS PARTES DO TRABALHO, NA MESMA ORDEM EM QUE SUCEDE.</td>
						</tr>
							
						<tr>
							<td><input type="radio" name="quest08" value="resp_b"></td> <td>B. PARTE EM QUE &Eacute; EXPOSTO O CONTE&Uacute;DO DO TRABALHO</td>
						</tr>

						<tr>
							<td><input type="radio" name="quest08" value="resp_c"></td> <td>C. REGISTRO DE INFORMA&Ccedil;&Otilde;ES QUE IDENTIFICAM A PUBLICA&Ccedil;&Atilde;O NA SUA SITUA&Ccedil;&Atilde;O ATUAL.</td>
						</tr>

						<tr>
							<td><input type="radio" name="quest08" value="resp_d"></td> <td>D. RELA&Ccedil;&Atilde;O DE PALAVRAS OU EXPRESS&Otilde;ES T&Eacute;CNICAS DE USO RESTRITO</td>
						</tr>

						<tr>
							<td><input type="radio" name="quest08" value="resp_e"></td> <td>E. FOLHA QUE CONT&Ecirc;M OS ELEMENTOS ESSENCIAIS &Eacute; IDENTIFICA&Ccedil;&Atilde;O DO TRABALHO</td>
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