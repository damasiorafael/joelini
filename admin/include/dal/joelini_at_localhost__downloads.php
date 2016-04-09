<?php
$dalTabledownloads = array();
$dalTabledownloads["id"] = array("type"=>3,"varname"=>"id");
$dalTabledownloads["nome_por"] = array("type"=>200,"varname"=>"nome_por");
$dalTabledownloads["nome_eng"] = array("type"=>200,"varname"=>"nome_eng");
$dalTabledownloads["nome_esp"] = array("type"=>200,"varname"=>"nome_esp");
$dalTabledownloads["arquivo"] = array("type"=>201,"varname"=>"arquivo");
	$dalTabledownloads["id"]["key"]=true;

$dal_info["joelini_at_localhost__downloads"] = &$dalTabledownloads;
?>