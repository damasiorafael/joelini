<?php
$dalTablecontato = array();
$dalTablecontato["id"] = array("type"=>3,"varname"=>"id");
$dalTablecontato["nome"] = array("type"=>200,"varname"=>"nome");
$dalTablecontato["email"] = array("type"=>200,"varname"=>"email");
$dalTablecontato["cidade"] = array("type"=>200,"varname"=>"cidade");
$dalTablecontato["estado"] = array("type"=>200,"varname"=>"estado");
$dalTablecontato["telefone"] = array("type"=>200,"varname"=>"telefone");
$dalTablecontato["departamento"] = array("type"=>200,"varname"=>"departamento");
$dalTablecontato["mensagem"] = array("type"=>201,"varname"=>"mensagem");
$dalTablecontato["arquivo"] = array("type"=>200,"varname"=>"arquivo");
$dalTablecontato["data_contato"] = array("type"=>135,"varname"=>"data_contato");
	$dalTablecontato["id"]["key"]=true;

$dal_info["joelini_at_localhost__contato"] = &$dalTablecontato;
?>