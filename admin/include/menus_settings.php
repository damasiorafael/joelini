<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamenus = array();	
	$tdatamenus[".truncateText"] = true;
	$tdatamenus[".NumberOfChars"] = 80; 
	$tdatamenus[".ShortName"] = "menus";
	$tdatamenus[".OwnerID"] = "";
	$tdatamenus[".OriginalTable"] = "menus";

//	field labels
$fieldLabelsmenus = array();
$fieldToolTipsmenus = array();
$pageTitlesmenus = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsmenus["Portuguese(Brazil)"] = array();
	$fieldToolTipsmenus["Portuguese(Brazil)"] = array();
	$pageTitlesmenus["Portuguese(Brazil)"] = array();
	$fieldLabelsmenus["Portuguese(Brazil)"]["id"] = "Id";
	$fieldToolTipsmenus["Portuguese(Brazil)"]["id"] = "";
	$fieldLabelsmenus["Portuguese(Brazil)"]["nome_por"] = "Nome Português";
	$fieldToolTipsmenus["Portuguese(Brazil)"]["nome_por"] = "";
	$fieldLabelsmenus["Portuguese(Brazil)"]["nome_eng"] = "Nome Inglês";
	$fieldToolTipsmenus["Portuguese(Brazil)"]["nome_eng"] = "";
	$fieldLabelsmenus["Portuguese(Brazil)"]["nome_esp"] = "Nome Espanhol";
	$fieldToolTipsmenus["Portuguese(Brazil)"]["nome_esp"] = "";
	if (count($fieldToolTipsmenus["Portuguese(Brazil)"]))
		$tdatamenus[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmenus[""] = array();
	$fieldToolTipsmenus[""] = array();
	$pageTitlesmenus[""] = array();
	$fieldLabelsmenus[""]["id"] = "Id";
	$fieldToolTipsmenus[""]["id"] = "";
	if (count($fieldToolTipsmenus[""]))
		$tdatamenus[".isUseToolTips"] = true;
}
	
	
	$tdatamenus[".NCSearch"] = true;



$tdatamenus[".shortTableName"] = "menus";
$tdatamenus[".nSecOptions"] = 0;
$tdatamenus[".recsPerRowList"] = 1;
$tdatamenus[".mainTableOwnerID"] = "";
$tdatamenus[".moveNext"] = 1;
$tdatamenus[".nType"] = 0;

$tdatamenus[".strOriginalTableName"] = "menus";




$tdatamenus[".showAddInPopup"] = false;

$tdatamenus[".showEditInPopup"] = false;

$tdatamenus[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamenus[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamenus[".fieldsForRegister"] = array();

$tdatamenus[".listAjax"] = false;

	$tdatamenus[".audit"] = false;

	$tdatamenus[".locking"] = false;


$tdatamenus[".list"] = true;

$tdatamenus[".inlineEdit"] = true;





$tdatamenus[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatamenus[".searchSaving"] = false;
//

$tdatamenus[".showSearchPanel"] = true;
		$tdatamenus[".flexibleSearch"] = true;		

if (isMobile())
	$tdatamenus[".isUseAjaxSuggest"] = false;
else 
	$tdatamenus[".isUseAjaxSuggest"] = true;

$tdatamenus[".rowHighlite"] = true;



$tdatamenus[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamenus[".isUseTimeForSearch"] = false;





$tdatamenus[".allSearchFields"] = array();
$tdatamenus[".filterFields"] = array();
$tdatamenus[".requiredSearchFields"] = array();



$tdatamenus[".googleLikeFields"] = array();
$tdatamenus[".googleLikeFields"][] = "id";
$tdatamenus[".googleLikeFields"][] = "nome_por";
$tdatamenus[".googleLikeFields"][] = "nome_eng";
$tdatamenus[".googleLikeFields"][] = "nome_esp";



$tdatamenus[".tableType"] = "list";

$tdatamenus[".printerPageOrientation"] = 0;
$tdatamenus[".nPrinterPageScale"] = 100;

$tdatamenus[".nPrinterSplitRecords"] = 40;

$tdatamenus[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdatamenus[".pageSize"] = 20;

$tdatamenus[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamenus[".strOrderBy"] = $tstrOrderBy;

$tdatamenus[".orderindexes"] = array();

$tdatamenus[".sqlHead"] = "SELECT id,  nome_por,  nome_eng,  nome_esp";
$tdatamenus[".sqlFrom"] = "FROM menus";
$tdatamenus[".sqlWhereExpr"] = "";
$tdatamenus[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamenus[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamenus[".arrGroupsPerPage"] = $arrGPP;

$tdatamenus[".highlightSearchResults"] = true;

$tableKeysmenus = array();
$tableKeysmenus[] = "id";
$tdatamenus[".Keys"] = $tableKeysmenus;

$tdatamenus[".listFields"] = array();
$tdatamenus[".listFields"][] = "id";
$tdatamenus[".listFields"][] = "nome_por";
$tdatamenus[".listFields"][] = "nome_eng";
$tdatamenus[".listFields"][] = "nome_esp";

$tdatamenus[".hideMobileList"] = array();


$tdatamenus[".viewFields"] = array();

$tdatamenus[".addFields"] = array();

$tdatamenus[".inlineAddFields"] = array();

$tdatamenus[".editFields"] = array();

$tdatamenus[".inlineEditFields"] = array();
$tdatamenus[".inlineEditFields"][] = "nome_por";
$tdatamenus[".inlineEditFields"][] = "nome_eng";
$tdatamenus[".inlineEditFields"][] = "nome_esp";

$tdatamenus[".exportFields"] = array();

$tdatamenus[".importFields"] = array();

$tdatamenus[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "menus";
	$fdata["Label"] = GetFieldLabel("menus","id"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "number";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdatamenus["id"] = $fdata;
//	nome_por
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nome_por";
	$fdata["GoodName"] = "nome_por";
	$fdata["ownerTable"] = "menus";
	$fdata["Label"] = GetFieldLabel("menus","nome_por"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "nome_por"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nome_por";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdatamenus["nome_por"] = $fdata;
//	nome_eng
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "nome_eng";
	$fdata["GoodName"] = "nome_eng";
	$fdata["ownerTable"] = "menus";
	$fdata["Label"] = GetFieldLabel("menus","nome_eng"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "nome_eng"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nome_eng";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdatamenus["nome_eng"] = $fdata;
//	nome_esp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "nome_esp";
	$fdata["GoodName"] = "nome_esp";
	$fdata["ownerTable"] = "menus";
	$fdata["Label"] = GetFieldLabel("menus","nome_esp"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "nome_esp"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nome_esp";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdatamenus["nome_esp"] = $fdata;

	
$tables_data["menus"]=&$tdatamenus;
$field_labels["menus"] = &$fieldLabelsmenus;
$fieldToolTips["menus"] = &$fieldToolTipsmenus;
$page_titles["menus"] = &$pageTitlesmenus;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["menus"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["menus"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_menus()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  nome_por,  nome_eng,  nome_esp";
$proto0["m_strFrom"] = "FROM menus";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = false;
$proto1["m_inBrackets"] = false;
$proto1["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto3=array();
$proto3["m_sql"] = "";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = false;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto5=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "menus",
	"m_srcTableName" => "menus"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "menus";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "nome_por",
	"m_strTable" => "menus",
	"m_srcTableName" => "menus"
));

$proto7["m_sql"] = "nome_por";
$proto7["m_srcTableName"] = "menus";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "nome_eng",
	"m_strTable" => "menus",
	"m_srcTableName" => "menus"
));

$proto9["m_sql"] = "nome_eng";
$proto9["m_srcTableName"] = "menus";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "nome_esp",
	"m_strTable" => "menus",
	"m_srcTableName" => "menus"
));

$proto11["m_sql"] = "nome_esp";
$proto11["m_srcTableName"] = "menus";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "menus";
$proto14["m_srcTableName"] = "menus";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "id";
$proto14["m_columns"][] = "nome_por";
$proto14["m_columns"][] = "nome_eng";
$proto14["m_columns"][] = "nome_esp";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_sql"] = "menus";
$proto13["m_alias"] = "";
$proto13["m_srcTableName"] = "menus";
$proto15=array();
$proto15["m_sql"] = "";
$proto15["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto15["m_column"]=$obj;
$proto15["m_contained"] = array();
$proto15["m_strCase"] = "";
$proto15["m_havingmode"] = false;
$proto15["m_inBrackets"] = false;
$proto15["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto15);

$proto13["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto13);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="menus";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_menus = createSqlQuery_menus();


	
				
	
$tdatamenus[".sqlquery"] = $queryData_menus;

include_once(getabspath("include/menus_events.php"));
$tableEvents["menus"] = new eventclass_menus;
$tdatamenus[".hasEvents"] = true;

?>