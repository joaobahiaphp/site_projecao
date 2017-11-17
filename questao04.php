<html>
<head>
	<meta charset="utf-8">
	<title>Quest&atilde;o 4</title>
	<link rel=stylesheet href="estilo_layout.css">

	<script language="JavaScript">

		function validaRadio() {

  			if (document.alt.quest04[0].checked == false && document.alt.quest04[1].checked == false && document.alt.quest04[2].checked == false && document.alt.quest04[3].checked == false && document.alt.quest04[4].checked == false) {
    			
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
$quest03 = $_POST['quest03'];

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

				
				<h1>4&#186; Quest&atilde;o</h1>
				<p>QUAL &Eacute; O TERMO UTILIZADO PARA DESTACAR TRECHO EM UMA CITA&Ccedil;&Atilde;O ?</p>
				
				<form name="alt" onsubmit="return validaRadio(this)" method="post" action="questao05.php?nome=<?php echo $nome ?>&quest01=<?php echo $quest01 ?>&quest02=<?php echo $quest02 ?>&quest03=<?php echo $quest03 ?>">
					<table>

						<tr>
							<td><input type="radio" name="quest04" value="resp_a"></td> <td>A. AJUSTE</td>
						</tr>
							
						<tr>
							<td><input type="radio" name="quest04" value="resp_b"></td> <td>B. M&Oacute;DULO</td>
						</tr>

						<tr>
							<td><input type="radio" name="quest04" value="resp_c"></td> <td>C. SUGEST&Atilde;O</td>
						</tr>

						<tr>
							<td><input type="radio" name="quest04" value="resp_d"></td> <td>D. MARCA&Ccedil;&Atilde;O</td>
						</tr>

						<tr>
							<td><input type="radio" name="quest04" value="resp_e"></td> <td>E. GRIFO NOSSO</td>
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