<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacatalogo = array();	
	$tdatacatalogo[".truncateText"] = true;
	$tdatacatalogo[".NumberOfChars"] = 80; 
	$tdatacatalogo[".ShortName"] = "catalogo";
	$tdatacatalogo[".OwnerID"] = "";
	$tdatacatalogo[".OriginalTable"] = "catalogo";

//	field labels
$fieldLabelscatalogo = array();
$fieldToolTipscatalogo = array();
$pageTitlescatalogo = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelscatalogo["Portuguese(Brazil)"] = array();
	$fieldToolTipscatalogo["Portuguese(Brazil)"] = array();
	$pageTitlescatalogo["Portuguese(Brazil)"] = array();
	$fieldLabelscatalogo["Portuguese(Brazil)"]["id"] = "Id";
	$fieldToolTipscatalogo["Portuguese(Brazil)"]["id"] = "";
	$fieldLabelscatalogo["Portuguese(Brazil)"]["ativo"] = "Ativo";
	$fieldToolTipscatalogo["Portuguese(Brazil)"]["ativo"] = "";
	$fieldLabelscatalogo["Portuguese(Brazil)"]["link"] = "Link";
	$fieldToolTipscatalogo["Portuguese(Brazil)"]["link"] = "";
	if (count($fieldToolTipscatalogo["Portuguese(Brazil)"]))
		$tdatacatalogo[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscatalogo[""] = array();
	$fieldToolTipscatalogo[""] = array();
	$pageTitlescatalogo[""] = array();
	$fieldLabelscatalogo[""]["id"] = "Id";
	$fieldToolTipscatalogo[""]["id"] = "";
	$fieldLabelscatalogo[""]["ativo"] = "Ativo";
	$fieldToolTipscatalogo[""]["ativo"] = "";
	$fieldLabelscatalogo[""]["link"] = "Link";
	$fieldToolTipscatalogo[""]["link"] = "";
	if (count($fieldToolTipscatalogo[""]))
		$tdatacatalogo[".isUseToolTips"] = true;
}
	
	
	$tdatacatalogo[".NCSearch"] = true;



$tdatacatalogo[".shortTableName"] = "catalogo";
$tdatacatalogo[".nSecOptions"] = 0;
$tdatacatalogo[".recsPerRowList"] = 1;
$tdatacatalogo[".mainTableOwnerID"] = "";
$tdatacatalogo[".moveNext"] = 1;
$tdatacatalogo[".nType"] = 0;

$tdatacatalogo[".strOriginalTableName"] = "catalogo";




$tdatacatalogo[".showAddInPopup"] = false;

$tdatacatalogo[".showEditInPopup"] = false;

$tdatacatalogo[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacatalogo[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacatalogo[".fieldsForRegister"] = array();

$tdatacatalogo[".listAjax"] = false;

	$tdatacatalogo[".audit"] = false;

	$tdatacatalogo[".locking"] = false;


$tdatacatalogo[".list"] = true;

$tdatacatalogo[".inlineEdit"] = true;





$tdatacatalogo[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacatalogo[".searchSaving"] = false;
//

$tdatacatalogo[".showSearchPanel"] = true;
		$tdatacatalogo[".flexibleSearch"] = true;		

if (isMobile())
	$tdatacatalogo[".isUseAjaxSuggest"] = false;
else 
	$tdatacatalogo[".isUseAjaxSuggest"] = true;

$tdatacatalogo[".rowHighlite"] = true;



$tdatacatalogo[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacatalogo[".isUseTimeForSearch"] = false;





$tdatacatalogo[".allSearchFields"] = array();
$tdatacatalogo[".filterFields"] = array();
$tdatacatalogo[".requiredSearchFields"] = array();

$tdatacatalogo[".allSearchFields"][] = "link";
	$tdatacatalogo[".allSearchFields"][] = "id";
	$tdatacatalogo[".allSearchFields"][] = "ativo";
	

$tdatacatalogo[".googleLikeFields"] = array();
$tdatacatalogo[".googleLikeFields"][] = "id";
$tdatacatalogo[".googleLikeFields"][] = "link";
$tdatacatalogo[".googleLikeFields"][] = "ativo";


$tdatacatalogo[".advSearchFields"] = array();
$tdatacatalogo[".advSearchFields"][] = "link";
$tdatacatalogo[".advSearchFields"][] = "id";
$tdatacatalogo[".advSearchFields"][] = "ativo";

$tdatacatalogo[".tableType"] = "list";

$tdatacatalogo[".printerPageOrientation"] = 0;
$tdatacatalogo[".nPrinterPageScale"] = 100;

$tdatacatalogo[".nPrinterSplitRecords"] = 40;

$tdatacatalogo[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdatacatalogo[".pageSize"] = 20;

$tdatacatalogo[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacatalogo[".strOrderBy"] = $tstrOrderBy;

$tdatacatalogo[".orderindexes"] = array();

$tdatacatalogo[".sqlHead"] = "SELECT id,  	link,  	ativo";
$tdatacatalogo[".sqlFrom"] = "FROM catalogo";
$tdatacatalogo[".sqlWhereExpr"] = "";
$tdatacatalogo[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacatalogo[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacatalogo[".arrGroupsPerPage"] = $arrGPP;

$tdatacatalogo[".highlightSearchResults"] = true;

$tableKeyscatalogo = array();
$tableKeyscatalogo[] = "id";
$tdatacatalogo[".Keys"] = $tableKeyscatalogo;

$tdatacatalogo[".listFields"] = array();
$tdatacatalogo[".listFields"][] = "id";
$tdatacatalogo[".listFields"][] = "link";
$tdatacatalogo[".listFields"][] = "ativo";

$tdatacatalogo[".hideMobileList"] = array();


$tdatacatalogo[".viewFields"] = array();

$tdatacatalogo[".addFields"] = array();

$tdatacatalogo[".inlineAddFields"] = array();

$tdatacatalogo[".editFields"] = array();

$tdatacatalogo[".inlineEditFields"] = array();
$tdatacatalogo[".inlineEditFields"][] = "link";
$tdatacatalogo[".inlineEditFields"][] = "ativo";

$tdatacatalogo[".exportFields"] = array();

$tdatacatalogo[".importFields"] = array();

$tdatacatalogo[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "catalogo";
	$fdata["Label"] = GetFieldLabel("catalogo","id"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatacatalogo["id"] = $fdata;
//	link
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "link";
	$fdata["GoodName"] = "link";
	$fdata["ownerTable"] = "catalogo";
	$fdata["Label"] = GetFieldLabel("catalogo","link"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "link"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "link";
	
		
		
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

	

	
	$tdatacatalogo["link"] = $fdata;
//	ativo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ativo";
	$fdata["GoodName"] = "ativo";
	$fdata["ownerTable"] = "catalogo";
	$fdata["Label"] = GetFieldLabel("catalogo","ativo"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "ativo"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ativo";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Checkbox");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Checkbox");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatacatalogo["ativo"] = $fdata;

	
$tables_data["catalogo"]=&$tdatacatalogo;
$field_labels["catalogo"] = &$fieldLabelscatalogo;
$fieldToolTips["catalogo"] = &$fieldToolTipscatalogo;
$page_titles["catalogo"] = &$pageTitlescatalogo;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["catalogo"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["catalogo"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_catalogo()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	link,  	ativo";
$proto0["m_strFrom"] = "FROM catalogo";
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
	"m_strTable" => "catalogo",
	"m_srcTableName" => "catalogo"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "catalogo";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "link",
	"m_strTable" => "catalogo",
	"m_srcTableName" => "catalogo"
));

$proto7["m_sql"] = "link";
$proto7["m_srcTableName"] = "catalogo";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "ativo",
	"m_strTable" => "catalogo",
	"m_srcTableName" => "catalogo"
));

$proto9["m_sql"] = "ativo";
$proto9["m_srcTableName"] = "catalogo";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "catalogo";
$proto12["m_srcTableName"] = "catalogo";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "id";
$proto12["m_columns"][] = "link";
$proto12["m_columns"][] = "ativo";
$obj = new SQLTable($proto12);

$proto11["m_table"] = $obj;
$proto11["m_sql"] = "catalogo";
$proto11["m_alias"] = "";
$proto11["m_srcTableName"] = "catalogo";
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
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="catalogo";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_catalogo = createSqlQuery_catalogo();


	
			
	
$tdatacatalogo[".sqlquery"] = $queryData_catalogo;

include_once(getabspath("include/catalogo_events.php"));
$tableEvents["catalogo"] = new eventclass_catalogo;
$tdatacatalogo[".hasEvents"] = true;

?>