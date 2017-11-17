<html>
<head>

	
	<meta charset="utf-8">		
	<title>Quest&atilde;o 2</title>
	<link rel=stylesheet href="estilo_layout.css">

	<script language="JavaScript">

		function validaRadio() {

  			if (document.alt.quest02[0].checked == false && document.alt.quest02[1].checked == false && document.alt.quest02[2].checked == false && document.alt.quest02[3].checked == false && document.alt.quest02[4].checked == false) {
    			
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
$quest01 = $_POST['quest01'];

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

				
				<h1>2&#186; Quest&atilde;o</h1>
				<p>QUAL EXPRESS&Atilde;O REPRESENTA QUE O ERRO GRAMATICAL EST&Aacute; NO TEXTO DO AUTOR CITADO ?</p>
				
				<form name="alt" onsubmit="return validaRadio(this)" method="post" action="questao03.php?nome=<?php echo $nome ?>&quest01=<?php echo $quest01 ?>">
					<table>

						<tr>
							<td><input type="radio" name="quest02" value="resp_a"></td><td>A. NET</td>
						</tr>
							
						<tr>
							<td><input type="radio" name="quest02" value="resp_b"></td> <td>B. JOB</td>
						</tr>

						<tr>
							<td><input type="radio" name="quest02" value="resp_c"></td> <td>C. SIC</td>
						</tr>

						<tr>
							<td><input type="radio" name="quest02" value="resp_d"></td> <td>D. END</td>
						</tr>

						<tr>
							<td><input type="radio" name="quest02" value="resp_e"></td> <td>E. RUP</td>
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