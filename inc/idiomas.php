<?php

$lang = "";

if(isset($_REQUEST["lang"])){
	$_SESSION["lang"] = $_REQUEST["lang"];
} else if(!isset($_SESSION["lang"])){
	$_SESSION["lang"] = "por";
}

/* MENUS */

/* por */
$empresa["por"] = "Empresa";
$produtos["por"] = "Produtos";
$vendas["por"] = "Vendas";
$contato["por"] = "Contato";
$arearestrita["por"] = "Acesso Restrito";

/* eng */
$empresa["eng"] = "Company";
$produtos["eng"] = "Products";
$vendas["eng"] = "Sales";
$contato["eng"] = "Contact";
$arearestrita["eng"] = "Restricted Access";

/* esp */
$empresa["esp"] = "Negocios";
$produtos["esp"] = "Productos";
$vendas["esp"] = "Venta";
$contato["esp"] = "Contacto";
$arearestrita["esp"] = "Acceso Restringido";
/* MENUS */


/* LINHA DO TEMPO */

/* por */
$linhadotempo["por"] = "Linha do Tempo";

/* emg */
$linhadotempo["eng"] = "Timeline";

/* esp */
$linhadotempo["esp"] = "Linea del Tiempo";

/* LINHA DO TEMPO */


/* BOTOES */

/* enviar */
/* por */
$enviar["por"] = "Enviar";

/* eng */
$enviar["eng"] = "Send";

/* esp */
$enviar["esp"] = "Enviar";
/* BOTOES */


/* TITLE JOELINI */
/* por */
$address_joelini["por"] = "
					<p>Joelini - Componentes para Móveis</p>
                    <span>Rua Arapaçu-Listrado, 260 - Parque Industrial</span>
                    <span>CEP: 86703-295</span>
                    <span>Arapongas - PR - Brasil</span>";

/* eng */
$address_joelini["eng"] = "
					<p>Joelini - Components for Mobile</p>
                    <span>Street Arapaçu-Listrado, 260 - Industrial Park</span>
                    <span>ZIP: 86703-295</span>
                    <span>Arapongas - PR - Brasil</span>";

/* esp */
$address_joelini["esp"] = "
					<p>Joelini - Componentes para Móviles</p>
                    <span>Calle Arapaçu-Listrado, 260 - Parque Industrial</span>
                    <span>Código Postal: 86703-295</span>
                    <span>Arapongas - PR - Brasil</span>";
/* TITLE JOELINI */


/* SUBTITLE VENDAS */

/* por */
$sub_vendas["por"] = "Nos envie uma mensagem, e indicaremos nosso representante mais próximo de você!";

/* eng */
$sub_vendas["eng"] = "Send us a message, and indicate our nearest representative of you";

/* esp */
$sub_vendas["esp"] = "Envíenos un mensaje , e indicar nuestro representante más cercano de ti";

/* SUBTITLE VENDAS */


/* LABEL FORMULARIO */

/* por */
$nome["por"] 			= "Nome";
$email["por"] 			= "E-mail";
$telefone["por"]		= "Telefone";
$cidade["por"]			= "Cidade";
$estado["por"] 			= "Estado";
$cep["por"] 			= "CEP";
$mensagem["por"] 		= "Mensagem";
$departamento["por"] 	= "Escolha o Departamento";
$arquivo["por"] 		= "Anexar Arquivo";
$selecione["por"] 		= "Selecione";

/* eng */
$nome["eng"] 			= "Name";
$email["eng"] 			= "E-mail";
$telefone["eng"]		= "Phone";
$cidade["eng"]			= "City";
$estado["eng"] 			= "State";
$cep["eng"] 			= "ZIP";
$mensagem["eng"] 		= "Message";
$departamento["eng"] 	= "Choose Department";
$arquivo["eng"] 		= "Attach File";
$selecione["eng"] 		= "Select";

/* esp */
$nome["esp"] 			= "Nombre";
$email["esp"] 			= "E-mail";
$telefone["esp"]		= "Teléfono";
$cidade["esp"]			= "Ciudad";
$estado["esp"] 			= "State";
$cep["esp"] 			= "Código Postal";
$mensagem["esp"] 		= "Mensaje";
$departamento["esp"] 	= "Elija Departamento";
$arquivo["esp"] 		= "Adjuntar Archivos";
$selecione["esp"] 		= "Seleccionar";


/* CAMPOS FORMULARIO */


?>