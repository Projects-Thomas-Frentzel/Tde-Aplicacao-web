<!DOCTYPE html>
<html>
<head>

    <title>Empresa</title>
    <link rel="icon" type="image/png" href="imagens/IE_favicon.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/customize.css">
	
</head>
<body  onload="w3_show_nav('MenuCliente')">

<?php require 'geral/menu.php';?>
<?php require 'bd/conectaBD.php'; ?>

<div class="w3-main w3-container" style="margin-left:270px;margin-top:117px;">

    <div class="w3-panel w3-padding-large w3-card-4 w3-light-grey">
        <p class="w3-large">
            <div class="w3-code cssHigh notranslate">
                <?php

                date_default_timezone_set("America/Sao_Paulo");
                $data = date("d/m/Y H:i:s", time());
                echo "<p class='w3-small' > ";
                echo "Acesso em: ";
                echo $data;
                echo "</p> "
                ?>
				<?php
				
				$conn = mysqli_connect($servername, $username, $password, $database);
				if (!$conn) {
					die("<strong> Falha de conexão: </strong>" . mysqli_connect_error());
				}
				mysqli_query($conn,"SET NAMES 'utf8'");
				mysqli_query($conn,'SET character_set_connection=utf8');
				mysqli_query($conn,'SET character_set_client=utf8');
				mysqli_query($conn,'SET character_set_results=utf8');

				$sqlG = "SELECT ID_pais,nome_pais FROM Pais";
				
				$optionsEspec = array();
				
				if ($result = mysqli_query($conn, $sqlG)) {
					while ($row = mysqli_fetch_assoc($result)) {
                       array_push($optionsEspec, "\t\t\t<option value='". $row["ID_pais"]."'>".$row["nome_pais"]."</option>\n");
					}
				}

				?>

                <div class="w3-responsive w3-card-4">
                    <div class="w3-container w3-theme">
                        <h2>Informe os dados do novo do Cliente</h2>
                    </div>
                    <form class="w3-container" action="ClntIncluir_exe.php" method="post" enctype="multipart/form-data">
					<table class='w3-table-all'>
					<tr>
                        <td style="width:50%;">


						<input type="hidden" id="Id" name="Id" value="<?php echo $Id_cliente; ?>">
							<p>
							<label class="w3-text"><b>Nome</b></label>
							<input class="w3-input w3-border w3-light-grey " name="Nome" type="text" pattern="[a-zA-Z\u00C0-\u00FF ]{10,100}$"
									title="Nome entre 10 e 100 letras." value="<?php echo $nome; ?>" required></p>
							<p>
							<label class="w3-text"><b>telefone</b>*</label>
							<input class="w3-input w3-border w3-light-grey " name="Telefone" id="Telefone"  type="text" maxlength="15"
						       placeholder="((XX)XXXXX-XXXX)" title="((XX)XXXXX-XXXX)"  pattern="Telefone\/([A-Z]{2}) [0-9]{4}-[0-9]{2}$" required></p>
							<p>
							<label class="w3-text"><b>Data de Nascimento</b></label>
							<input class="w3-input w3-border w3-light-grey " name="DataNasc" type="date"
									placeholder="dd/mm/aaaa" title="dd/mm/aaaa"
									title="Formato: dd/mm/aaaa" value="<?php echo $datNasc; ?>"></p>
							
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
						<p style="text-align:center"><label class="w3-text-IE"><b>Minha Imagem para Identificação: </b></label></p>
						<p style="text-align:center"><img id="imagemSelecionada" src="imagens/pessoa.jpg"    /></p>
						<p style="text-align:center"><label class="w3-btn w3-theme">Selecione uma Imagem 
							<input type="hidden" name="MAX_FILE_SIZE" value="16777215" />
							<input type="file" id="Imagem" name="Imagem" accept="imagem/*" onchange="validaImagem(this);"></label>
						</p>
						</td>
					</tr>
					<tr>
						<td colspan="2" style="text-align:center">
						<p>
						<input type="submit" value="Salvar" class="w3-btn w3-theme" >
						<input type="button" value="Cancelar" class="w3-btn w3-theme" onclick="window.location.href='ClntListar.php'">
						</p>
						</td>
					</tr>
					</table>	
					</form>
					<br>
				</div>
			</div>
		</p>
	</div>

	<?php require 'geral/sobre.php';?>
	</div>
	<?php require 'geral/rodape.php';?>

</body>
</html>