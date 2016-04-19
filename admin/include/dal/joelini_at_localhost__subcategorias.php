<?php
$dalTablesubcategorias = array();
$dalTablesubcategorias["id"] = array("type"=>3,"varname"=>"id");
$dalTablesubcategorias["id_categoria"] = array("type"=>3,"varname"=>"id_categoria");
$dalTablesubcategorias["nome_por"] = array("type"=>200,"varname"=>"nome_por");
$dalTablesubcategorias["nome_eng"] = array("type"=>200,"varname"=>"nome_eng");
$dalTablesubcategorias["nome_esp"] = array("type"=>200,"varname"=>"nome_esp");
$dalTablesubcategorias["ocultar"] = array("type"=>3,"varname"=>"ocultar");
$dalTablesubcategorias["ordem"] = array("type"=>3,"varname"=>"ordem");
	$dalTablesubcategorias["id"]["key"]=true;

$dal_info["joelini_at_localhost__subcategorias"] = &$dalTablesubcategorias;
?>