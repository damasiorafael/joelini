<?php
$dalTableempresa = array();
$dalTableempresa["id"] = array("type"=>3,"varname"=>"id");
$dalTableempresa["titulo_por"] = array("type"=>200,"varname"=>"titulo_por");
$dalTableempresa["titulo_eng"] = array("type"=>200,"varname"=>"titulo_eng");
$dalTableempresa["titulo_esp"] = array("type"=>200,"varname"=>"titulo_esp");
$dalTableempresa["texto_por"] = array("type"=>201,"varname"=>"texto_por");
$dalTableempresa["texto_eng"] = array("type"=>201,"varname"=>"texto_eng");
$dalTableempresa["texto_esp"] = array("type"=>201,"varname"=>"texto_esp");
	$dalTableempresa["id"]["key"]=true;

$dal_info["joelini_at_localhost__empresa"] = &$dalTableempresa;
?>