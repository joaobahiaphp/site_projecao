<html>
<head>

	<meta charset="utf-8">
	<title>Quest&atilde;o 3</title>
	<link rel=stylesheet href="estilo_layout.css">

	<script language="JavaScript">

		function validaRadio() {

  			if (document.alt.quest03[0].checked == false && document.alt.quest03[1].checked == false && document.alt.quest03[2].checked == false && document.alt.quest03[3].checked == false && document.alt.quest03[4].checked == false) {
    			
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
$quest02 = $_POST['quest02'];

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

				
				<h1>3&#186; Quest&atilde;o</h1>
				<p>AUTOR QUE FAZ MEN&Ccedil;&Atilde;O EXTRA&Iacute;DA DE OUTRA FONTE SEM A DEVIDA CITA&Ccedil;&Atilde;O &Eacute; ?</p>
				
				<form name="alt" onsubmit="return validaRadio(this)" method="POST" action="questao04.php?nome=<?php echo $nome ?>&quest01=<?php echo $quest01 ?>&quest02=<?php echo $quest02 ?>">
					<table>

						<tr>
							<td><input type="radio" name="quest03" value="resp_a"></td> <td>A. REFER&Ecirc;NCIA</td>
						</tr>
							
						<tr>
							<td><input type="radio" name="quest03" value="resp_b"></td> <td>B. PL&Aacute;GIO</td>
						</tr>

						<tr>
							<td><input type="radio" name="quest03" value="resp_c"></td> <td>C. INDICA&Ccedil;&Atilde;O</td>
						</tr>

						<tr>
							<td><input type="radio" name="quest03" value="resp_d"></td> <td>D. LIGA&Ccedil;&Atilde;O</td>
						</tr>

						<tr>
							<td><input type="radio" name="quest03" value="resp_e"></td> <td>E. MARCO TE&Oacute;RICO</td>
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