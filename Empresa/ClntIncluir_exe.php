<!DOCTYPE html>

<html>
	<head>

	  <title>Empresa</title>
	  <link rel="icon" type="image/png" href="imagens/favicon.png" />
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	  <link rel="stylesheet" href="css/customize.css">
	</head>
<body onload="w3_show_nav('menuCliente')">

<?php require 'geral/menu.php';?>
<?php require 'bd/conectaBD.php'; ?>

<div class="w3-main w3-container" style="margin-left:270px;margin-top:117px;">

<div class="w3-panel w3-padding-large w3-card-4 w3-light-grey">
  <p class="w3-large">
  <div class="w3-code cssHigh notranslate">
	<?php

	date_default_timezone_set("America/Sao_Paulo");
	$data = date("d/m/Y H:i:s",time());
	echo "<p class='w3-small' > ";
	echo "Acesso em: ";
	echo $data;
	echo "</p> "
	?>
	<?php
			$id      = $_POST['Id_Cliente'];
			$iD      = $_POST['ID_pais'];
			$nome    = $_POST['Nome'];
			$dtNasc  = $_POST['Data_nasc'];
			$tel     = $_POST['Telefone'];
			$nascio = $_POST['Nacionalidade'];
		 
		$conn = mysqli_connect($servername, $username, $password, $database);
		if (!$conn) {
			die("<strong> Falha de conexão: </strong>" . mysqli_connect_error());
		}
		mysqli_query($conn,"SET NAMES 'utf8'");
		mysqli_query($conn,'SET character_set_connection=utf8');
		mysqli_query($conn,'SET character_set_client=utf8');
		mysqli_query($conn,'SET character_set_results=utf8');


		if ($_FILES['Imagem']['size'] == 0) { 
			$sql = "INSERT INTO Cliente (Nome,ID_pais,Id_Cliente,Data_nasc,Telefone,Foto,Nacionalidade) VALUES ('$nome','$Id','$ID','$dtNasc','$tel','$imagem','$nascio')";
		} else {
			$imagem = addslashes(file_get_contents($_FILES['Imagem']['tmp_name']));
			$sql = "INSERT INTO ClientE(Nome,ID_pais,Id_Cliente,Data_nasc,Telefone,Foto,Nacionalidade) VALUES ('$nome','$Id','$ID','$dtNasc','$tel','$imagem','$nascio')";
		}
		?>
		<div class='w3-responsive w3-card-4'>
		<div class="w3-container w3-theme">
		<h2>Inclusão de Novo Cliente</h2>
		</div>
		<?php
		if ($result = mysqli_query($conn, $sql)) {
			echo "<p>&nbsp;Registro cadastrado com sucesso! </p>";
		} else {
			echo "<p>&nbsp;Erro executando INSERT: " . mysqli_error($conn . "</p>");
		}
        echo "</div>";
		mysqli_close($conn); 

	?>
  </div>
</div>


	<?php require 'geral/sobre.php';?>

	</div>

	<?php require 'geral/rodape.php';?>
	
</body>
</html>