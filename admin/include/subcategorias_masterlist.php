<?php
function DisplayMasterTableInfo_subcategorias($params)
{
	global $cman;
	
	$detailtable = $params["detailtable"];
	$keys = $params["keys"];
	
	$xt = new Xtempl();
	$tName = "subcategorias";
	$xt->eventsObject = getEventObject($tName);
	
	$settings = new ProjectSettings($tName, PAGE_LIST);
	$cipherer = new RunnerCipherer( $tName );
	$connection = $cman->byTable( $tName );
	
	$masterQuery = $settings->getSQLQuery();
	
	$viewControls = new ViewControlsContainer($settings, PAGE_LIST);

	$where = "";
	$keysAssoc = array();
	$showKeys = "";


	if($detailtable == "produtos")
	{
		$keysAssoc["id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("id", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("subcategorias","id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}
	if( !$where )
		return;
	
	$str = SecuritySQL("Search", $tName);
	if( strlen($str) )
		$where.= " and ".$str;

	$strWhere = whereAdd( $masterQuery->WhereToSql(), $where );
	if( strlen($strWhere) )
		$strWhere = " where ".$strWhere." ";
		
	$strSQL = $masterQuery->HeadToSql().' '.$masterQuery->FromToSql().$strWhere.$masterQuery->TailToSql();
	LogInfo($strSQL);
	
	$data = $cipherer->DecryptFetchedArray( $connection->query( $strSQL )->fetchAssoc() );
	if( !$data )
		return;
	
	// reassign pagetitlelabel function adding extra params
	$xt->assign_function("pagetitlelabel", "xt_pagetitlelabel", array("record" => $data, "settings" => $settings));
	
	$keylink = "";
	$keylink.= "&key1=".runner_htmlspecialchars(rawurlencode(@$data["id"]));
	
	$xt->assign("id_mastervalue", $viewControls->showDBValue("id", $data, $keylink));
	$format = $settings->getViewFormat("id");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("id")))
		$class = ' rnr-field-number';
		
	$xt->assign("id_class", $class); // add class for field header as field value
	$xt->assign("id_categoria_mastervalue", $viewControls->showDBValue("id_categoria", $data, $keylink));
	$format = $settings->getViewFormat("id_categoria");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("id_categoria")))
		$class = ' rnr-field-number';
		
	$xt->assign("id_categoria_class", $class); // add class for field header as field value
	$xt->assign("nome_por_mastervalue", $viewControls->showDBValue("nome_por", $data, $keylink));
	$format = $settings->getViewFormat("nome_por");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("nome_por")))
		$class = ' rnr-field-number';
		
	$xt->assign("nome_por_class", $class); // add class for field header as field value
	$xt->assign("nome_eng_mastervalue", $viewControls->showDBValue("nome_eng", $data, $keylink));
	$format = $settings->getViewFormat("nome_eng");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("nome_eng")))
		$class = ' rnr-field-number';
		
	$xt->assign("nome_eng_class", $class); // add class for field header as field value
	$xt->assign("nome_esp_mastervalue", $viewControls->showDBValue("nome_esp", $data, $keylink));
	$format = $settings->getViewFormat("nome_esp");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("nome_esp")))
		$class = ' rnr-field-number';
		
	$xt->assign("nome_esp_class", $class); // add class for field header as field value
	$xt->assign("ocultar_mastervalue", $viewControls->showDBValue("ocultar", $data, $keylink));
	$format = $settings->getViewFormat("ocultar");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("ocultar")))
		$class = ' rnr-field-number';
		
	$xt->assign("ocultar_class", $class); // add class for field header as field value
	$xt->assign("ordem_mastervalue", $viewControls->showDBValue("ordem", $data, $keylink));
	$format = $settings->getViewFormat("ordem");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("ordem")))
		$class = ' rnr-field-number';
		
	$xt->assign("ordem_class", $class); // add class for field header as field value

	$layout = GetPageLayout("subcategorias", 'masterlist');
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');
	
	$xt->displayPartial(GetTemplateName("subcategorias", "masterlist"));
}

?>