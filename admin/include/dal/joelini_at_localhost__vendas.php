<?php
$dalTablevendas = array();
$dalTablevendas["id"] = array("type"=>3,"varname"=>"id");
$dalTablevendas["nome"] = array("type"=>200,"varname"=>"nome");
$dalTablevendas["email"] = array("type"=>200,"varname"=>"email");
$dalTablevendas["telefone"] = array("type"=>200,"varname"=>"telefone");
$dalTablevendas["cidade"] = array("type"=>200,"varname"=>"cidade");
$dalTablevendas["estado"] = array("type"=>200,"varname"=>"estado");
$dalTablevendas["cep"] = array("type"=>200,"varname"=>"cep");
$dalTablevendas["mensagem"] = array("type"=>201,"varname"=>"mensagem");
$dalTablevendas["data_contato"] = array("type"=>135,"varname"=>"data_contato");
	$dalTablevendas["id"]["key"]=true;

$dal_info["joelini_at_localhost__vendas"] = &$dalTablevendas;
?>