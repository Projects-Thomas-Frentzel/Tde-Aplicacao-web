<!DOCTYPE html>

<html>
	<head>
    <title>Empresa</title>
    <link rel="icon" type="image/png" href="imagens/logoemp.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/customize.css">
</head>
<body  onload="w3_show_nav('menuCliente')">
<?php require 'geral/menu.php'; ?>
<?php require 'bd/conectaBD.php'; ?>

<div class="w3-main w3-container" style="margin-left:270px;margin-top:117px;">

    <div class="w3-panel w3-padding-large w3-card-4 w3-light-grey">
        <p class="w3-large">
        <p>
        <div class="w3-code cssHigh notranslate">
            <?php

                date_default_timezone_set("America/Sao_Paulo");
                $data = date("d/m/Y H:i:s", time());
                echo "<p class='w3-small' > ";
                echo "Acesso em: ";
                echo $data;
                echo "</p> "
            ?>
            <div class="w3-container w3-theme">
			<h2>Clientes</h2>
			</div>
            <?php

                $conn = mysqli_connect($servername, $username, $password, $database);
                
                if (!$conn) {
                    echo "</table>";
                    echo "</div>";
                    die("Falha na conexão com o Banco de Dados: " . mysqli_connect_error());
                }
                
                mysqli_query($conn,"SET NAMES 'utf8'");
                mysqli_query($conn,'SET character_set_connection=utf8');
                mysqli_query($conn,'SET character_set_client=utf8');
                mysqli_query($conn,'SET character_set_results=utf8');

                $sql = "SELECT ID_Cliente, Nome,P.Nome_Pais, Data_nasc FROM Cliente AS C ,Pais AS P WHERE C.ID_Pais = P.ID_Pais";
                
                echo "<div class='w3-responsive w3-card-4'>";
                if ($result = mysqli_query($conn, $sql)) {
                    echo "<table class='w3-table-all'>";
                    echo "	<tr>";
                    echo "	  <th width='14%'>ID_Cliente</th>";
                    echo "	  <th width='18%'>Nome</th>";
                    echo "	  <th width='15%'>Nacionalidade</th>";
                    echo "	  <th width='10%'>Nascimento</th>";
                    echo "	  <th width='10%'>Idade</th>";
                    echo "	  <th width='7%'>Editar</th>";
                    echo "	  <th width='14%'>Excluir</th>";


                    echo "	  <th width='7%'> </th>";
                    echo "	  <th width='7%'> </th>";
                    echo "	</tr>";
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $data = $row['Data_nasc'];
                            list($ano, $mes, $dia) = explode('-', $data);
                            $nova_data = $dia . '/' . $mes . '/' . $ano;
                            $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
                            $nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);
                            $idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
                            $cod = $row["ID_Cliente"];
                            echo "<tr>";
                            echo "<td>";
                            echo $cod;
                            echo "</td><td>";
                            
                            echo $row["Nome"];
                            echo "</td><td>";
                            echo $row["Nome_Pais"];
                            echo "</td><td>";
                            echo $nova_data;
                            echo "</td><td>";
                            echo $idade;
                            echo "</td>";
            ?>              <td>       
                            <a href='ClntAtualizar.php?id=<?php echo $cod; ?>'><img src='imagens/Edit.png' title='Editar Cliente' width='32'></a>
                            </td><td>
                            <a href='ClntExcluir.php?id=<?php echo $cod; ?>'><img src='imagens/Delete.png' title='Excluir Cliente' width='32'></a>
                            </td>
                            </tr>
            <?php
                        }
                    }
                        echo "</table>";
                        echo "</div>";
                } else {
                    echo "Erro executando SELECT: " . mysqli_error($conn);
                }

                mysqli_close($conn);

            ?>
        </div>
    </div>
    
	<?php require 'geral/sobre.php';?>
	</div>
	<?php require 'geral/rodape.php';?>

</body>
</html>
