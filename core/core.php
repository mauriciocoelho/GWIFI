<?php
/* Adiciona a conecção a base de dados*/
require_once "config/database.php";
/* Chama a funcion que contém os formatos da data */
require_once "config/date_format.php";

//função para comprovar o estado do usuario conectado
// se o usuario estive conectado, muda a página de inicio da seção
if (empty($_SESSION['USU_LOGIN']) && empty($_SESSION['USU_SENHA'])){
	echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}
// se usuario ya ha iniciado sesión, a continuación, ejecutar el script para chama el contenido del archivo de paginación
else {
	// se o conteudo for home chama a página correpondente
	if ($_GET['view'] == 'home') {
		include "views/home/view.php";
	}

	// se o conteudo for usuarios chama a página correpondente
	elseif ($_GET['view'] == 'usuarios') {
		include "views/usuarios/view.php";
	}
	// -----------------------------------------------------------------------------
	
	// se o conteudo for corporativa chama a página correpondente
	elseif ($_GET['view'] == 'corporativa') {
		include "views/corporativa/view.php";
	}
	// -----------------------------------------------------------------------------
	
	// se o conteudo for professores chama a página correpondente
	elseif ($_GET['view'] == 'professores') {
		include "views/professores/view.php";
	}

	// se o conteudo for academicos chama a página correpondente
	elseif ($_GET['view'] == 'academicos') {
		include "views/academicos/view.php";
	}

	// se o conteudo for visitantes chama a página correpondente
	elseif ($_GET['view'] == 'visitantes') {
		include "views/visitantes/view.php";
	}
}
?>