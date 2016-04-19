<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacategorias2 = array();	
	$tdatacategorias2[".truncateText"] = true;
	$tdatacategorias2[".NumberOfChars"] = 80; 
	$tdatacategorias2[".ShortName"] = "categorias2";
	$tdatacategorias2[".OwnerID"] = "";
	$tdatacategorias2[".OriginalTable"] = "categorias";

//	field labels
$fieldLabelscategorias2 = array();
$fieldToolTipscategorias2 = array();
$pageTitlescategorias2 = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelscategorias2["Portuguese(Brazil)"] = array();
	$fieldToolTipscategorias2["Portuguese(Brazil)"] = array();
	$pageTitlescategorias2["Portuguese(Brazil)"] = array();
	if (count($fieldToolTipscategorias2["Portuguese(Brazil)"]))
		$tdatacategorias2[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscategorias2[""] = array();
	$fieldToolTipscategorias2[""] = array();
	$pageTitlescategorias2[""] = array();
	if (count($fieldToolTipscategorias2[""]))
		$tdatacategorias2[".isUseToolTips"] = true;
}
	
	
	$tdatacategorias2[".NCSearch"] = true;



$tdatacategorias2[".shortTableName"] = "categorias2";
$tdatacategorias2[".nSecOptions"] = 0;
$tdatacategorias2[".recsPerRowList"] = 1;
$tdatacategorias2[".mainTableOwnerID"] = "";
$tdatacategorias2[".moveNext"] = 1;
$tdatacategorias2[".nType"] = 1;

$tdatacategorias2[".strOriginalTableName"] = "categorias";




$tdatacategorias2[".showAddInPopup"] = false;

$tdatacategorias2[".showEditInPopup"] = false;

$tdatacategorias2[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacategorias2[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacategorias2[".fieldsForRegister"] = array();

$tdatacategorias2[".listAjax"] = false;

	$tdatacategorias2[".audit"] = false;

	$tdatacategorias2[".locking"] = false;


$tdatacategorias2[".list"] = true;

$tdatacategorias2[".inlineAdd"] = true;

$tdatacategorias2[".import"] = true;

$tdatacategorias2[".exportTo"] = true;

$tdatacategorias2[".printFriendly"] = true;


$tdatacategorias2[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacategorias2[".searchSaving"] = false;
//

$tdatacategorias2[".showSearchPanel"] = true;
		$tdatacategorias2[".flexibleSearch"] = true;		

if (isMobile())
	$tdatacategorias2[".isUseAjaxSuggest"] = false;
else 
	$tdatacategorias2[".isUseAjaxSuggest"] = true;

$tdatacategorias2[".rowHighlite"] = true;



$tdatacategorias2[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacategorias2[".isUseTimeForSearch"] = false;





$tdatacategorias2[".allSearchFields"] = array();
$tdatacategorias2[".filterFields"] = array();
$tdatacategorias2[".requiredSearchFields"] = array();

$tdatacategorias2[".allSearchFields"][] = "nome_por";
	$tdatacategorias2[".allSearchFields"][] = "nome_por1";
	

$tdatacategorias2[".googleLikeFields"] = array();
$tdatacategorias2[".googleLikeFields"][] = "nome_por";
$tdatacategorias2[".googleLikeFields"][] = "nome_por1";


$tdatacategorias2[".advSearchFields"] = array();
$tdatacategorias2[".advSearchFields"][] = "nome_por";
$tdatacategorias2[".advSearchFields"][] = "nome_por1";

$tdatacategorias2[".tableType"] = "list";

$tdatacategorias2[".printerPageOrientation"] = 0;
$tdatacategorias2[".nPrinterPageScale"] = 100;

$tdatacategorias2[".nPrinterSplitRecords"] = 40;

$tdatacategorias2[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdatacategorias2[".pageSize"] = 20;

$tdatacategorias2[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacategorias2[".strOrderBy"] = $tstrOrderBy;

$tdatacategorias2[".orderindexes"] = array();

$tdatacategorias2[".sqlHead"] = "SELECT categorias.nome_por,  subcategorias.nome_por AS nome_por1";
$tdatacategorias2[".sqlFrom"] = "FROM categorias  LEFT OUTER JOIN subcategorias ON categorias.id = subcategorias.id_categoria";
$tdatacategorias2[".sqlWhereExpr"] = "";
$tdatacategorias2[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacategorias2[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacategorias2[".arrGroupsPerPage"] = $arrGPP;

$tdatacategorias2[".highlightSearchResults"] = true;

$tableKeyscategorias2 = array();
$tdatacategorias2[".Keys"] = $tableKeyscategorias2;

$tdatacategorias2[".listFields"] = array();
$tdatacategorias2[".listFields"][] = "nome_por";
$tdatacategorias2[".listFields"][] = "nome_por1";

$tdatacategorias2[".hideMobileList"] = array();


$tdatacategorias2[".viewFields"] = array();
$tdatacategorias2[".viewFields"][] = "nome_por";
$tdatacategorias2[".viewFields"][] = "nome_por1";

$tdatacategorias2[".addFields"] = array();
$tdatacategorias2[".addFields"][] = "nome_por";

$tdatacategorias2[".inlineAddFields"] = array();
$tdatacategorias2[".inlineAddFields"][] = "nome_por";

$tdatacategorias2[".editFields"] = array();
$tdatacategorias2[".editFields"][] = "nome_por";

$tdatacategorias2[".inlineEditFields"] = array();
$tdatacategorias2[".inlineEditFields"][] = "nome_por";

$tdatacategorias2[".exportFields"] = array();
$tdatacategorias2[".exportFields"][] = "nome_por";
$tdatacategorias2[".exportFields"][] = "nome_por1";

$tdatacategorias2[".importFields"] = array();
$tdatacategorias2[".importFields"][] = "nome_por";
$tdatacategorias2[".importFields"][] = "nome_por1";

$tdatacategorias2[".printFields"] = array();
$tdatacategorias2[".printFields"][] = "nome_por";
$tdatacategorias2[".printFields"][] = "nome_por1";

//	nome_por
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "nome_por";
	$fdata["GoodName"] = "nome_por";
	$fdata["ownerTable"] = "categorias";
	$fdata["Label"] = GetFieldLabel("categorias2","nome_por"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "nome_por"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "categorias.nome_por";
	
		
		
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
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatacategorias2["nome_por"] = $fdata;
//	nome_por1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nome_por1";
	$fdata["GoodName"] = "nome_por1";
	$fdata["ownerTable"] = "subcategorias";
	$fdata["Label"] = GetFieldLabel("categorias2","nome_por1"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "nome_por"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "subcategorias.nome_por";
	
		
		
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
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatacategorias2["nome_por1"] = $fdata;

	
$tables_data["categorias2"]=&$tdatacategorias2;
$field_labels["categorias2"] = &$fieldLabelscategorias2;
$fieldToolTips["categorias2"] = &$fieldToolTipscategorias2;
$page_titles["categorias2"] = &$pageTitlescategorias2;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["categorias2"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["categorias2"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_categorias2()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "categorias.nome_por,  subcategorias.nome_por AS nome_por1";
$proto0["m_strFrom"] = "FROM categorias  LEFT OUTER JOIN subcategorias ON categorias.id = subcategorias.id_categoria";
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
	"m_strName" => "nome_por",
	"m_strTable" => "categorias",
	"m_srcTableName" => "categorias2"
));

$proto5["m_sql"] = "categorias.nome_por";
$proto5["m_srcTableName"] = "categorias2";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "nome_por",
	"m_strTable" => "subcategorias",
	"m_srcTableName" => "categorias2"
));

$proto7["m_sql"] = "subcategorias.nome_por";
$proto7["m_srcTableName"] = "categorias2";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "nome_por1";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "categorias";
$proto10["m_srcTableName"] = "categorias2";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "id";
$proto10["m_columns"][] = "nome_por";
$proto10["m_columns"][] = "nome_eng";
$proto10["m_columns"][] = "nome_esp";
$proto10["m_columns"][] = "imagem";
$proto10["m_columns"][] = "ocultar";
$proto10["m_columns"][] = "ordem";
$obj = new SQLTable($proto10);

$proto9["m_table"] = $obj;
$proto9["m_sql"] = "categorias";
$proto9["m_alias"] = "";
$proto9["m_srcTableName"] = "categorias2";
$proto11=array();
$proto11["m_sql"] = "";
$proto11["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto11["m_column"]=$obj;
$proto11["m_contained"] = array();
$proto11["m_strCase"] = "";
$proto11["m_havingmode"] = false;
$proto11["m_inBrackets"] = false;
$proto11["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto11);

$proto9["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto9);

$proto0["m_fromlist"][]=$obj;
												$proto13=array();
$proto13["m_link"] = "SQLL_LEFTJOIN";
			$proto14=array();
$proto14["m_strName"] = "subcategorias";
$proto14["m_srcTableName"] = "categorias2";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "id";
$proto14["m_columns"][] = "id_categoria";
$proto14["m_columns"][] = "nome_por";
$proto14["m_columns"][] = "nome_eng";
$proto14["m_columns"][] = "nome_esp";
$proto14["m_columns"][] = "ocultar";
$proto14["m_columns"][] = "ordem";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_sql"] = "LEFT OUTER JOIN subcategorias ON categorias.id = subcategorias.id_categoria";
$proto13["m_alias"] = "";
$proto13["m_srcTableName"] = "categorias2";
$proto15=array();
$proto15["m_sql"] = "categorias.id = subcategorias.id_categoria";
$proto15["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "categorias",
	"m_srcTableName" => "categorias2"
));

$proto15["m_column"]=$obj;
$proto15["m_contained"] = array();
$proto15["m_strCase"] = "= subcategorias.id_categoria";
$proto15["m_havingmode"] = false;
$proto15["m_inBrackets"] = false;
$proto15["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto15);

$proto13["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto13);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="categorias2";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_categorias2 = createSqlQuery_categorias2();


	
		
	
$tdatacategorias2[".sqlquery"] = $queryData_categorias2;

$tableEvents["categorias2"] = new eventsBase;
$tdatacategorias2[".hasEvents"] = false;

?>