<?php
$dalTableprodutos = array();
$dalTableprodutos["id"] = array("type"=>3,"varname"=>"id");
$dalTableprodutos["id_subcategoria"] = array("type"=>3,"varname"=>"id_subcategoria");
$dalTableprodutos["nome_por"] = array("type"=>200,"varname"=>"nome_por");
$dalTableprodutos["nome_eng"] = array("type"=>200,"varname"=>"nome_eng");
$dalTableprodutos["nome_esp"] = array("type"=>200,"varname"=>"nome_esp");
$dalTableprodutos["descricao_por"] = array("type"=>201,"varname"=>"descricao_por");
$dalTableprodutos["descricao_eng"] = array("type"=>201,"varname"=>"descricao_eng");
$dalTableprodutos["descricao_esp"] = array("type"=>201,"varname"=>"descricao_esp");
$dalTableprodutos["video"] = array("type"=>200,"varname"=>"video");
	$dalTableprodutos["id"]["key"]=true;

$dal_info["joelini_at_localhost__produtos"] = &$dalTableprodutos;
?>