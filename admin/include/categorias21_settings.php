<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacategorias21 = array();	
	$tdatacategorias21[".truncateText"] = true;
	$tdatacategorias21[".NumberOfChars"] = 80; 
	$tdatacategorias21[".ShortName"] = "categorias21";
	$tdatacategorias21[".OwnerID"] = "";
	$tdatacategorias21[".OriginalTable"] = "categorias";

//	field labels
$fieldLabelscategorias21 = array();
$fieldToolTipscategorias21 = array();
$pageTitlescategorias21 = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelscategorias21["Portuguese(Brazil)"] = array();
	$fieldToolTipscategorias21["Portuguese(Brazil)"] = array();
	$pageTitlescategorias21["Portuguese(Brazil)"] = array();
	if (count($fieldToolTipscategorias21["Portuguese(Brazil)"]))
		$tdatacategorias21[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscategorias21[""] = array();
	$fieldToolTipscategorias21[""] = array();
	$pageTitlescategorias21[""] = array();
	if (count($fieldToolTipscategorias21[""]))
		$tdatacategorias21[".isUseToolTips"] = true;
}
	
	
	$tdatacategorias21[".NCSearch"] = true;



$tdatacategorias21[".shortTableName"] = "categorias21";
$tdatacategorias21[".nSecOptions"] = 0;
$tdatacategorias21[".recsPerRowList"] = 1;
$tdatacategorias21[".mainTableOwnerID"] = "";
$tdatacategorias21[".moveNext"] = 1;
$tdatacategorias21[".nType"] = 1;

$tdatacategorias21[".strOriginalTableName"] = "categorias";




$tdatacategorias21[".showAddInPopup"] = false;

$tdatacategorias21[".showEditInPopup"] = false;

$tdatacategorias21[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacategorias21[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacategorias21[".fieldsForRegister"] = array();

$tdatacategorias21[".listAjax"] = false;

	$tdatacategorias21[".audit"] = false;

	$tdatacategorias21[".locking"] = false;


$tdatacategorias21[".list"] = true;

$tdatacategorias21[".inlineAdd"] = true;

$tdatacategorias21[".import"] = true;

$tdatacategorias21[".exportTo"] = true;

$tdatacategorias21[".printFriendly"] = true;


$tdatacategorias21[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacategorias21[".searchSaving"] = false;
//

$tdatacategorias21[".showSearchPanel"] = true;
		$tdatacategorias21[".flexibleSearch"] = true;		

if (isMobile())
	$tdatacategorias21[".isUseAjaxSuggest"] = false;
else 
	$tdatacategorias21[".isUseAjaxSuggest"] = true;

$tdatacategorias21[".rowHighlite"] = true;



$tdatacategorias21[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacategorias21[".isUseTimeForSearch"] = false;





$tdatacategorias21[".allSearchFields"] = array();
$tdatacategorias21[".filterFields"] = array();
$tdatacategorias21[".requiredSearchFields"] = array();

$tdatacategorias21[".allSearchFields"][] = "nome_por";
	$tdatacategorias21[".allSearchFields"][] = "nome_por1";
	$tdatacategorias21[".allSearchFields"][] = "id";
	

$tdatacategorias21[".googleLikeFields"] = array();
$tdatacategorias21[".googleLikeFields"][] = "nome_por";
$tdatacategorias21[".googleLikeFields"][] = "nome_por1";
$tdatacategorias21[".googleLikeFields"][] = "id";


$tdatacategorias21[".advSearchFields"] = array();
$tdatacategorias21[".advSearchFields"][] = "nome_por";
$tdatacategorias21[".advSearchFields"][] = "nome_por1";
$tdatacategorias21[".advSearchFields"][] = "id";

$tdatacategorias21[".tableType"] = "list";

$tdatacategorias21[".printerPageOrientation"] = 0;
$tdatacategorias21[".nPrinterPageScale"] = 100;

$tdatacategorias21[".nPrinterSplitRecords"] = 40;

$tdatacategorias21[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdatacategorias21[".pageSize"] = 20;

$tdatacategorias21[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacategorias21[".strOrderBy"] = $tstrOrderBy;

$tdatacategorias21[".orderindexes"] = array();

$tdatacategorias21[".sqlHead"] = "SELECT categorias.nome_por,  subcategorias.nome_por AS nome_por1,  subcategorias.id";
$tdatacategorias21[".sqlFrom"] = "FROM categorias  LEFT OUTER JOIN subcategorias ON categorias.id = subcategorias.id_categoria";
$tdatacategorias21[".sqlWhereExpr"] = "";
$tdatacategorias21[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacategorias21[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacategorias21[".arrGroupsPerPage"] = $arrGPP;

$tdatacategorias21[".highlightSearchResults"] = true;

$tableKeyscategorias21 = array();
$tdatacategorias21[".Keys"] = $tableKeyscategorias21;

$tdatacategorias21[".listFields"] = array();
$tdatacategorias21[".listFields"][] = "nome_por";
$tdatacategorias21[".listFields"][] = "nome_por1";
$tdatacategorias21[".listFields"][] = "id";

$tdatacategorias21[".hideMobileList"] = array();


$tdatacategorias21[".viewFields"] = array();
$tdatacategorias21[".viewFields"][] = "nome_por";
$tdatacategorias21[".viewFields"][] = "nome_por1";
$tdatacategorias21[".viewFields"][] = "id";

$tdatacategorias21[".addFields"] = array();
$tdatacategorias21[".addFields"][] = "nome_por";

$tdatacategorias21[".inlineAddFields"] = array();
$tdatacategorias21[".inlineAddFields"][] = "nome_por";

$tdatacategorias21[".editFields"] = array();
$tdatacategorias21[".editFields"][] = "nome_por";

$tdatacategorias21[".inlineEditFields"] = array();
$tdatacategorias21[".inlineEditFields"][] = "nome_por";

$tdatacategorias21[".exportFields"] = array();
$tdatacategorias21[".exportFields"][] = "nome_por";
$tdatacategorias21[".exportFields"][] = "nome_por1";
$tdatacategorias21[".exportFields"][] = "id";

$tdatacategorias21[".importFields"] = array();
$tdatacategorias21[".importFields"][] = "nome_por";
$tdatacategorias21[".importFields"][] = "nome_por1";
$tdatacategorias21[".importFields"][] = "id";

$tdatacategorias21[".printFields"] = array();
$tdatacategorias21[".printFields"][] = "nome_por";
$tdatacategorias21[".printFields"][] = "nome_por1";
$tdatacategorias21[".printFields"][] = "id";

//	nome_por
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "nome_por";
	$fdata["GoodName"] = "nome_por";
	$fdata["ownerTable"] = "categorias";
	$fdata["Label"] = GetFieldLabel("categorias21","nome_por"); 
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

	

	
	$tdatacategorias21["nome_por"] = $fdata;
//	nome_por1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nome_por1";
	$fdata["GoodName"] = "nome_por1";
	$fdata["ownerTable"] = "subcategorias";
	$fdata["Label"] = GetFieldLabel("categorias21","nome_por1"); 
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

	

	
	$tdatacategorias21["nome_por1"] = $fdata;
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "subcategorias";
	$fdata["Label"] = GetFieldLabel("categorias21","id"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "subcategorias.id";
	
		
		
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
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatacategorias21["id"] = $fdata;

	
$tables_data["categorias21"]=&$tdatacategorias21;
$field_labels["categorias21"] = &$fieldLabelscategorias21;
$fieldToolTips["categorias21"] = &$fieldToolTipscategorias21;
$page_titles["categorias21"] = &$pageTitlescategorias21;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["categorias21"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["categorias21"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_categorias21()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "categorias.nome_por,  subcategorias.nome_por AS nome_por1,  subcategorias.id";
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
	"m_srcTableName" => "categorias21"
));

$proto5["m_sql"] = "categorias.nome_por";
$proto5["m_srcTableName"] = "categorias21";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "nome_por",
	"m_strTable" => "subcategorias",
	"m_srcTableName" => "categorias21"
));

$proto7["m_sql"] = "subcategorias.nome_por";
$proto7["m_srcTableName"] = "categorias21";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "nome_por1";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "subcategorias",
	"m_srcTableName" => "categorias21"
));

$proto9["m_sql"] = "subcategorias.id";
$proto9["m_srcTableName"] = "categorias21";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "categorias";
$proto12["m_srcTableName"] = "categorias21";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "id";
$proto12["m_columns"][] = "nome_por";
$proto12["m_columns"][] = "nome_eng";
$proto12["m_columns"][] = "nome_esp";
$proto12["m_columns"][] = "imagem";
$proto12["m_columns"][] = "ocultar";
$obj = new SQLTable($proto12);

$proto11["m_table"] = $obj;
$proto11["m_sql"] = "categorias";
$proto11["m_alias"] = "";
$proto11["m_srcTableName"] = "categorias21";
$proto13=array();
$proto13["m_sql"] = "";
$proto13["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto13["m_column"]=$obj;
$proto13["m_contained"] = array();
$proto13["m_strCase"] = "";
$proto13["m_havingmode"] = false;
$proto13["m_inBrackets"] = false;
$proto13["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto13);

$proto11["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto11);

$proto0["m_fromlist"][]=$obj;
												$proto15=array();
$proto15["m_link"] = "SQLL_LEFTJOIN";
			$proto16=array();
$proto16["m_strName"] = "subcategorias";
$proto16["m_srcTableName"] = "categorias21";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "id";
$proto16["m_columns"][] = "id_categoria";
$proto16["m_columns"][] = "nome_por";
$proto16["m_columns"][] = "nome_eng";
$proto16["m_columns"][] = "nome_esp";
$proto16["m_columns"][] = "ocultar";
$obj = new SQLTable($proto16);

$proto15["m_table"] = $obj;
$proto15["m_sql"] = "LEFT OUTER JOIN subcategorias ON categorias.id = subcategorias.id_categoria";
$proto15["m_alias"] = "";
$proto15["m_srcTableName"] = "categorias21";
$proto17=array();
$proto17["m_sql"] = "categorias.id = subcategorias.id_categoria";
$proto17["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "categorias",
	"m_srcTableName" => "categorias21"
));

$proto17["m_column"]=$obj;
$proto17["m_contained"] = array();
$proto17["m_strCase"] = "= subcategorias.id_categoria";
$proto17["m_havingmode"] = false;
$proto17["m_inBrackets"] = false;
$proto17["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto17);

$proto15["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto15);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="categorias21";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_categorias21 = createSqlQuery_categorias21();


	
			
	
$tdatacategorias21[".sqlquery"] = $queryData_categorias21;

$tableEvents["categorias21"] = new eventsBase;
$tdatacategorias21[".hasEvents"] = false;

?>