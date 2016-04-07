<?php
$dalTableusuarios = array();
$dalTableusuarios["id"] = array("type"=>3,"varname"=>"id");
$dalTableusuarios["nome"] = array("type"=>200,"varname"=>"nome");
$dalTableusuarios["email"] = array("type"=>200,"varname"=>"email");
$dalTableusuarios["senha"] = array("type"=>200,"varname"=>"senha");
	$dalTableusuarios["id"]["key"]=true;

$dal_info["joelini_at_localhost__usuarios"] = &$dalTableusuarios;
?>