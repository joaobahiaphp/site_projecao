<html>
<head>

	<meta charset="utf-8">
	<title>Quest&atilde;o 1</title>
	<link rel=stylesheet href="estilo_layout.css">

	<script language="JavaScript">

		function validaRadio() {

  			if (document.alt.quest01[0].checked == false && document.alt.quest01[1].checked == false && document.alt.quest01[2].checked == false && document.alt.quest01[3].checked == false && document.alt.quest01[4].checked == false) {
    			
				alert('Por favor, escolha uma alternativa.');
    			return false;

  			}

  			return true;

		}

	</script>


</head>
<body>

<?php

$nome = $_POST['nome'];

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

				
				<h1>1&#186; Quest&atilde;o</h1>
				<p>QUAL EXPRESS&Atilde;O &Eacute; UTILIZADA PARA INDICAR OBRA UTILIZADA EM CITA&Ccedil;&Atilde;O DE CITA&Ccedil;&Atilde;O ?</p>
				
				<form name="alt" onsubmit="return validaRadio(this)" method="post" action="questao02.php?nome=<?php echo $nome ?>">
					<table>

						<tr>
							<td><input type="radio" name="quest01" value="resp_a"></td> <td>A.  MAIN  </td>
						</tr>
							
						<tr>
							<td><input type="radio" name="quest01" value="resp_b"> <td>B.  VOID  </td>
						</tr>

						<tr>
							<td><input type="radio" name="quest01" value="resp_c"></td> <td>C.  STREAM  </td>
						</tr>

						<tr>
							<td><input type="radio" name="quest01" value="resp_d"> <td>D.  APUD  </td>
						</tr>

						<tr>
							<td><input type="radio" name="quest01" value="resp_e"></td> <td>E.  SUN  </td>
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