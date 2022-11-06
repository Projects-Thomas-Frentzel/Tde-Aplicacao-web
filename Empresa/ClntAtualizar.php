<!DOCTYPE html>
<!-------------------------------------------------------------------------------
    Desenvolvimento Web
    PUCPR
    Profa. Cristina V. P. B. Souza
    Agosto/2022
---------------------------------------------------------------------------------->
<!-- MedAtualizar.php -->

<html>
	<head>
		<title>Empresa</title>
		<link rel="icon" type="image/png" href="imagens/logoemp.png"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="css/customize.css">
	</head>
<body onload="w3_show_nav('menuCliente')" >
	<!-- Inclui MENU.PHP  -->
	<?php require 'geral/menu.php'; ?>
	<?php require 'bd/conectaBD.php'; ?>

	<!-- Conteúdo Principal: deslocado para direita em 270 pixels quando a sidebar é visível -->
	<div class="w3-main w3-container" style="margin-left:270px;margin-top:117px;">
		<div class="w3-panel w3-padding-large w3-card-4 w3-light-grey">
			<p class="w3-large">
			<div class="w3-code cssHigh notranslate">
				<!-- Acesso em:-->
				<?php

				date_default_timezone_set("America/Sao_Paulo");
				$data = date("d/m/Y H:i:s", time());
				echo "<p class='w3-small' > ";
				echo "Acesso em: ";
				echo $data;
				echo "</p> "
				?>

				<!-- Acesso ao BD-->
				<?php		
				$id = $_GET['id'];

				// Cria conexão
				$conn = mysqli_connect($servername, $username, $password, $database);

				// Verifica conexão
				if (!$conn) {
					die("<strong> Falha de conexão: </strong>" . mysqli_connect_error());
				}
				// Configura para trabalhar com caracteres acentuados do português	 
				mysqli_query($conn, "SET NAMES 'utf8'");
				mysqli_query($conn, 'SET character_set_connection=utf8');
				mysqli_query($conn, 'SET character_set_client=utf8');
				mysqli_query($conn, 'SET character_set_results=utf8');
				
				// Faz Select na Base de Dados
				$sql = "SELECT ID_Cliente, Nome, Data_nasc, ID_Pais FROM Cliente WHERE ID_Cliente = $id";

				//Inicio DIV form
				echo "<div class='w3-responsive w3-card-4'>";
				if ($result = mysqli_query($conn, $sql)) {
					if(mysqli_num_rows($result) == 1){
						$row = mysqli_fetch_assoc($result);
						
						$pais          = $row['ID_Pais'];
						$id_clnt 	   = $row['ID_Cliente'];
						$nome          = $row['Nome'];
						$dtNasc     	= $row['Data_nasc'];
						
						
						// Faz Select na Base de Dados
						$sqlG = "SELECT ID_Pais,Nome_Pais FROM Pais";
							
						$optionsEspec = array();
						
						if ($result = mysqli_query($conn, $sqlG)) {
							while ($row = mysqli_fetch_assoc($result)) {
								$selected = "";
								if ($row['ID_Pais'] == $pais)
									$selected = "selected";
								array_push($optionsEspec, "\t\t\t<option " . $selected . " value='". $row["ID_Pais"]."'>".$row["Nome_Pais"]."</option>\n");
							}
						}
						?>
						<div class="w3-container w3-theme">
							<h2>Altere os dados do Codigo do Cliente
						</div>
						<form class="w3-container" action="ClntAtualizar_exe.php" method="post" enctype="multipart/form-data">
						<table class='w3-table-all'>
						<tr>
							<td style="width:50%;">
							<p>
							<input type="hidden" id="Id" name="Id" value="<?php echo $id_clnt; ?>">
							<p>
							<label class="w3-text-IE"><b>Nome</b></label>
							<input class="w3-input w3-border w3-light-grey " name="Nome" type="text" pattern="[a-zA-Z\u00C0-\u00FF ]{5,15}$"
									title="Nome entre 5 e 15 letras." value="<?php echo $nome; ?>" required></p>
							<p>
							<p>
							<label class="w3-text-IE"><b>Data de Nascimento</b></label>
							<input class="w3-input w3-border w3-light-grey " name="Data_nasc" type="date"
									placeholder="dd/mm/aaaa" title="dd/mm/aaaa"
									title="Formato: dd/mm/aaaa" value="<?php echo $Datanasc; ?>"></p>
							
                                <p><label class="w3-text"><b>Nacionalidade</b>*</label>
							<select name="Nacionalidade" id="Nacionalidade" class="w3-input w3-border w3-light-grey " required>


							<?php
								foreach($optionsEspec as $key => $value){
									echo $value;
								}
							?>
							</select>
							</p>
						
							</td>
							<td>
												
							<td colspan="2" style="text-align:center">
							<p>
							<input type="submit" value="Alterar" class="w3-btn w3-red" >
							<input type="button" value="Cancelar" class="w3-btn w3-theme" onclick="window.location.href='ClntListar.php'"></p>
						</tr>
						</table>
						<br>
						</form>
								<?php
					}else{?>
								<div class="w3-container w3-theme">
								<h2>Cliente inexistente</h2>
								</div>
								<br>
							<?php
							}
				} else {
					echo "<p style='text-align:center'>Erro executando UPDATE: " . mysqli_error($conn) . "</p>";
				}
				echo "</div>"; //Fim form
				mysqli_close($conn);  //Encerra conexao com o BD
				?>
			</div>
			</p>
		</div>

	<?php require 'geral/sobre.php';?>
	<!-- FIM PRINCIPAL -->
	</div>
	<!-- Inclui RODAPE.PHP  -->
	<?php require 'geral/rodape.php';?>

</body>
</html>