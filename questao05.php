<html>
<head>
	<meta charset="utf-8">
	
	<title>Quest&atilde;o 5</title>
	<link rel=stylesheet href="estilo_layout.css">

	<script language="JavaScript">

		function validaRadio() {

  			if (document.alt.quest05[0].checked == false && document.alt.quest05[1].checked == false && document.alt.quest05[2].checked == false && document.alt.quest05[3].checked == false && document.alt.quest05[4].checked == false) {
    			
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
$quest04 = $_POST['quest04'];

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

				
				<h1>5&#186; Quest&atilde;o</h1>
				<p>QUAL &Eacute; O SIGNIFICADO DA SIGLA "A.B.N.T" ?</p>
				
				<form name="alt" onsubmit="return validaRadio(this)" method="post" action="questao06.php?nome=<?php echo $nome ?>&quest01=<?php echo $quest01 ?>&quest02=<?php echo $quest02 ?>&quest03=<?php echo $quest03 ?>&quest04=<?php echo $quest04 ?>">
					<table>

						<tr>
							<td><input type="radio" name="quest05" value="resp_a"></td> <td>A. ASSOCIA&Ccedil;&Atilde;O BRASILEIRA DE NORMAS T&Eacute;CNICAS</td>
						</tr>
							
						<tr>
							<td><input type="radio" name="quest05" value="resp_b"></td> <td>B. ASSOCIA&Ccedil;&Atilde;O BINACIONAL DE NOTA&Ccedil;&Atilde;O T&Eacute;CNICA</td>
						</tr>

						<tr>
							<td><input type="radio" name="quest05" value="resp_c"></td> <td>C. ASSOCIA&Ccedil;&Atilde;O BRASILEIRA DE NOVA&Ccedil;&Atilde;O T&Eacute;CNICA</td>
						</tr>

						<tr>
							<td><input type="radio" name="quest05" value="resp_d"></td> <td>D. ACORDO BRASILEIRO DE NORMAS T&Eacute;CNICAS</td>
						</tr>

						<tr>
							<td><input type="radio" name="quest05" value="resp_e"></td> <td>E. ACORDO BINACIONAL DE NOVA&Ccedil;&Atilde;O T&Eacute;RMICA</td>
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