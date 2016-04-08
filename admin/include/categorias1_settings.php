<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacategorias1 = array();	
	$tdatacategorias1[".truncateText"] = true;
	$tdatacategorias1[".NumberOfChars"] = 80; 
	$tdatacategorias1[".ShortName"] = "categorias1";
	$tdatacategorias1[".OwnerID"] = "";
	$tdatacategorias1[".OriginalTable"] = "categorias";

//	field labels
$fieldLabelscategorias1 = array();
$fieldToolTipscategorias1 = array();
$pageTitlescategorias1 = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelscategorias1["Portuguese(Brazil)"] = array();
	$fieldToolTipscategorias1["Portuguese(Brazil)"] = array();
	$pageTitlescategorias1["Portuguese(Brazil)"] = array();
	if (count($fieldToolTipscategorias1["Portuguese(Brazil)"]))
		$tdatacategorias1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscategorias1[""] = array();
	$fieldToolTipscategorias1[""] = array();
	$pageTitlescategorias1[""] = array();
	if (count($fieldToolTipscategorias1[""]))
		$tdatacategorias1[".isUseToolTips"] = true;
}
	
	
	$tdatacategorias1[".NCSearch"] = true;



$tdatacategorias1[".shortTableName"] = "categorias1";
$tdatacategorias1[".nSecOptions"] = 0;
$tdatacategorias1[".recsPerRowList"] = 1;
$tdatacategorias1[".mainTableOwnerID"] = "";
$tdatacategorias1[".moveNext"] = 1;
$tdatacategorias1[".nType"] = 1;

$tdatacategorias1[".strOriginalTableName"] = "categorias";




$tdatacategorias1[".showAddInPopup"] = false;

$tdatacategorias1[".showEditInPopup"] = false;

$tdatacategorias1[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacategorias1[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacategorias1[".fieldsForRegister"] = array();

$tdatacategorias1[".listAjax"] = false;

	$tdatacategorias1[".audit"] = false;

	$tdatacategorias1[".locking"] = false;


$tdatacategorias1[".list"] = true;

$tdatacategorias1[".inlineAdd"] = true;





$tdatacategorias1[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacategorias1[".searchSaving"] = false;
//

$tdatacategorias1[".showSearchPanel"] = true;
		$tdatacategorias1[".flexibleSearch"] = true;		

if (isMobile())
	$tdatacategorias1[".isUseAjaxSuggest"] = false;
else 
	$tdatacategorias1[".isUseAjaxSuggest"] = true;

$tdatacategorias1[".rowHighlite"] = true;



$tdatacategorias1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacategorias1[".isUseTimeForSearch"] = false;





$tdatacategorias1[".allSearchFields"] = array();
$tdatacategorias1[".filterFields"] = array();
$tdatacategorias1[".requiredSearchFields"] = array();

$tdatacategorias1[".allSearchFields"][] = "nome_por";
	$tdatacategorias1[".allSearchFields"][] = "nome_por1";
	

$tdatacategorias1[".googleLikeFields"] = array();
$tdatacategorias1[".googleLikeFields"][] = "nome_por";
$tdatacategorias1[".googleLikeFields"][] = "nome_por1";


$tdatacategorias1[".advSearchFields"] = array();
$tdatacategorias1[".advSearchFields"][] = "nome_por";
$tdatacategorias1[".advSearchFields"][] = "nome_por1";

$tdatacategorias1[".tableType"] = "list";

$tdatacategorias1[".printerPageOrientation"] = 0;
$tdatacategorias1[".nPrinterPageScale"] = 100;

$tdatacategorias1[".nPrinterSplitRecords"] = 40;

$tdatacategorias1[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdatacategorias1[".pageSize"] = 20;

$tdatacategorias1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacategorias1[".strOrderBy"] = $tstrOrderBy;

$tdatacategorias1[".orderindexes"] = array();

$tdatacategorias1[".sqlHead"] = "SELECT subcategorias.nome_por,  categorias.nome_por AS nome_por1";
$tdatacategorias1[".sqlFrom"] = "FROM categorias  LEFT OUTER JOIN subcategorias ON categorias.id = subcategorias.id_categoria";
$tdatacategorias1[".sqlWhereExpr"] = "";
$tdatacategorias1[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacategorias1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacategorias1[".arrGroupsPerPage"] = $arrGPP;

$tdatacategorias1[".highlightSearchResults"] = true;

$tableKeyscategorias1 = array();
$tdatacategorias1[".Keys"] = $tableKeyscategorias1;

$tdatacategorias1[".listFields"] = array();
$tdatacategorias1[".listFields"][] = "nome_por1";
$tdatacategorias1[".listFields"][] = "nome_por";

$tdatacategorias1[".hideMobileList"] = array();


$tdatacategorias1[".viewFields"] = array();
$tdatacategorias1[".viewFields"][] = "nome_por1";

$tdatacategorias1[".addFields"] = array();

$tdatacategorias1[".inlineAddFields"] = array();
$tdatacategorias1[".inlineAddFields"][] = "nome_por";

$tdatacategorias1[".editFields"] = array();

$tdatacategorias1[".inlineEditFields"] = array();
$tdatacategorias1[".inlineEditFields"][] = "nome_por";

$tdatacategorias1[".exportFields"] = array();
$tdatacategorias1[".exportFields"][] = "nome_por1";

$tdatacategorias1[".importFields"] = array();
$tdatacategorias1[".importFields"][] = "nome_por1";

$tdatacategorias1[".printFields"] = array();
$tdatacategorias1[".printFields"][] = "nome_por1";

//	nome_por
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "nome_por";
	$fdata["GoodName"] = "nome_por";
	$fdata["ownerTable"] = "subcategorias";
	$fdata["Label"] = GetFieldLabel("categorias1","nome_por"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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

	

	
	$tdatacategorias1["nome_por"] = $fdata;
//	nome_por1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nome_por1";
	$fdata["GoodName"] = "nome_por1";
	$fdata["ownerTable"] = "categorias";
	$fdata["Label"] = GetFieldLabel("categorias1","nome_por1"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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

	

	
	$tdatacategorias1["nome_por1"] = $fdata;

	
$tables_data["categorias1"]=&$tdatacategorias1;
$field_labels["categorias1"] = &$fieldLabelscategorias1;
$fieldToolTips["categorias1"] = &$fieldToolTipscategorias1;
$page_titles["categorias1"] = &$pageTitlescategorias1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["categorias1"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["categorias1"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_categorias1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "subcategorias.nome_por,  categorias.nome_por AS nome_por1";
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
	"m_strTable" => "subcategorias",
	"m_srcTableName" => "categorias1"
));

$proto5["m_sql"] = "subcategorias.nome_por";
$proto5["m_srcTableName"] = "categorias1";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "nome_por",
	"m_strTable" => "categorias",
	"m_srcTableName" => "categorias1"
));

$proto7["m_sql"] = "categorias.nome_por";
$proto7["m_srcTableName"] = "categorias1";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "nome_por1";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "categorias";
$proto10["m_srcTableName"] = "categorias1";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "id";
$proto10["m_columns"][] = "nome_por";
$proto10["m_columns"][] = "nome_eng";
$proto10["m_columns"][] = "nome_esp";
$proto10["m_columns"][] = "imagem";
$proto10["m_columns"][] = "ocultar";
$obj = new SQLTable($proto10);

$proto9["m_table"] = $obj;
$proto9["m_sql"] = "categorias";
$proto9["m_alias"] = "";
$proto9["m_srcTableName"] = "categorias1";
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
$proto14["m_srcTableName"] = "categorias1";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "id";
$proto14["m_columns"][] = "id_categoria";
$proto14["m_columns"][] = "nome_por";
$proto14["m_columns"][] = "nome_eng";
$proto14["m_columns"][] = "nome_esp";
$proto14["m_columns"][] = "ocultar";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_sql"] = "LEFT OUTER JOIN subcategorias ON categorias.id = subcategorias.id_categoria";
$proto13["m_alias"] = "";
$proto13["m_srcTableName"] = "categorias1";
$proto15=array();
$proto15["m_sql"] = "categorias.id = subcategorias.id_categoria";
$proto15["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "categorias",
	"m_srcTableName" => "categorias1"
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
$proto0["m_srcTableName"]="categorias1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_categorias1 = createSqlQuery_categorias1();


	
		
	
$tdatacategorias1[".sqlquery"] = $queryData_categorias1;

include_once(getabspath("include/categorias1_events.php"));
$tableEvents["categorias1"] = new eventclass_categorias1;
$tdatacategorias1[".hasEvents"] = true;

?>