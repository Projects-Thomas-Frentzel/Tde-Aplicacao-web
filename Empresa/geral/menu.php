	<div class="w3-top"   > 
		<div class="w3-row w3-white w3-padding" >
			<div class="w3-half" style="margin:0 0 0 0">
			</div>
			<div class="w3-half w3-margin-top w3-wide w3-hide-medium w3-hide-small">
				<div class="w3-right"> 
				</div >
			</div>
		</div>
		<div class="w3-bar w3-theme w3-large" style="z-index:-1">
			<a class="w3-bar-item w3-button w3-left w3-hide-large w3-hover-black w3-large w3-theme w3-padding-16" href="javascript:void(0)"☰>
			<a class="w3-bar-item w3-button w3-hide-medium w3-hide-small w3-hover-black w3-padding-16" href="ClntListar.php" onclick="w3_show_nav('MenuCliente')">Empresa</a>
		</div>
	</div>


	<div class="w3-sidebar w3-bar-block w3-collapse w3-animate-left" style="z-index:3;width:270px" id="mySidebar" >
		<div class="w3-bar w3-hide-large w3-large">
			<a href="javascript:void(0)" onclick="w3_show_nav('menuCliente')"
			   class="w3-bar-item w3-button w3-theme w3-hover-light-gray w3-padding-16" style="width:50%">Clientes</a>

			   
		</div>
		<a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-right w3-xlarge w3-hide-large"
		   title="Close Menu">x</a>
		<div id="menuCliente" class="myMenu">
			<div class="w3-container">
				<h3>Menu Cliente</h3>
			</div>
			<a class="w3-bar-item w3-button" href="ClntListar.php">Lista de Clientes</a>
			<a class="w3-bar-item w3-button" href="ClntIncluir.php">Cadastro de Clientes</a>


		</div>
		
	</div>


	<script type="text/javascript" src="js/myScriptClinic.js"></script>
