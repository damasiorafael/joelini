<?php
require_once(getabspath("classes/cipherer.php"));




$tdataarea_restrita = array();	
	$tdataarea_restrita[".truncateText"] = true;
	$tdataarea_restrita[".NumberOfChars"] = 80; 
	$tdataarea_restrita[".ShortName"] = "area_restrita";
	$tdataarea_restrita[".OwnerID"] = "";
	$tdataarea_restrita[".OriginalTable"] = "area_restrita";

//	field labels
$fieldLabelsarea_restrita = array();
$fieldToolTipsarea_restrita = array();
$pageTitlesarea_restrita = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsarea_restrita["Portuguese(Brazil)"] = array();
	$fieldToolTipsarea_restrita["Portuguese(Brazil)"] = array();
	$pageTitlesarea_restrita["Portuguese(Brazil)"] = array();
	$fieldLabelsarea_restrita["Portuguese(Brazil)"]["id"] = "Id";
	$fieldToolTipsarea_restrita["Portuguese(Brazil)"]["id"] = "";
	$fieldLabelsarea_restrita["Portuguese(Brazil)"]["username"] = "Username";
	$fieldToolTipsarea_restrita["Portuguese(Brazil)"]["username"] = "";
	$fieldLabelsarea_restrita["Portuguese(Brazil)"]["senha"] = "Senha";
	$fieldToolTipsarea_restrita["Portuguese(Brazil)"]["senha"] = "";
	if (count($fieldToolTipsarea_restrita["Portuguese(Brazil)"]))
		$tdataarea_restrita[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsarea_restrita[""] = array();
	$fieldToolTipsarea_restrita[""] = array();
	$pageTitlesarea_restrita[""] = array();
	$fieldLabelsarea_restrita[""]["id"] = "Id";
	$fieldToolTipsarea_restrita[""]["id"] = "";
	$fieldLabelsarea_restrita[""]["username"] = "Username";
	$fieldToolTipsarea_restrita[""]["username"] = "";
	$fieldLabelsarea_restrita[""]["senha"] = "Senha";
	$fieldToolTipsarea_restrita[""]["senha"] = "";
	if (count($fieldToolTipsarea_restrita[""]))
		$tdataarea_restrita[".isUseToolTips"] = true;
}
	
	
	$tdataarea_restrita[".NCSearch"] = true;



$tdataarea_restrita[".shortTableName"] = "area_restrita";
$tdataarea_restrita[".nSecOptions"] = 0;
$tdataarea_restrita[".recsPerRowList"] = 1;
$tdataarea_restrita[".mainTableOwnerID"] = "";
$tdataarea_restrita[".moveNext"] = 1;
$tdataarea_restrita[".nType"] = 0;

$tdataarea_restrita[".strOriginalTableName"] = "area_restrita";




$tdataarea_restrita[".showAddInPopup"] = false;

$tdataarea_restrita[".showEditInPopup"] = false;

$tdataarea_restrita[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataarea_restrita[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataarea_restrita[".fieldsForRegister"] = array();

$tdataarea_restrita[".listAjax"] = false;

	$tdataarea_restrita[".audit"] = false;

	$tdataarea_restrita[".locking"] = false;


$tdataarea_restrita[".list"] = true;

$tdataarea_restrita[".inlineEdit"] = true;





$tdataarea_restrita[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataarea_restrita[".searchSaving"] = false;
//

$tdataarea_restrita[".showSearchPanel"] = true;
		$tdataarea_restrita[".flexibleSearch"] = true;		

if (isMobile())
	$tdataarea_restrita[".isUseAjaxSuggest"] = false;
else 
	$tdataarea_restrita[".isUseAjaxSuggest"] = true;

$tdataarea_restrita[".rowHighlite"] = true;



$tdataarea_restrita[".addPageEvents"] = false;

// use timepicker for search panel
$tdataarea_restrita[".isUseTimeForSearch"] = false;





$tdataarea_restrita[".allSearchFields"] = array();
$tdataarea_restrita[".filterFields"] = array();
$tdataarea_restrita[".requiredSearchFields"] = array();

$tdataarea_restrita[".allSearchFields"][] = "id";
	$tdataarea_restrita[".allSearchFields"][] = "username";
	$tdataarea_restrita[".allSearchFields"][] = "senha";
	

$tdataarea_restrita[".googleLikeFields"] = array();
$tdataarea_restrita[".googleLikeFields"][] = "id";
$tdataarea_restrita[".googleLikeFields"][] = "username";
$tdataarea_restrita[".googleLikeFields"][] = "senha";


$tdataarea_restrita[".advSearchFields"] = array();
$tdataarea_restrita[".advSearchFields"][] = "id";
$tdataarea_restrita[".advSearchFields"][] = "username";
$tdataarea_restrita[".advSearchFields"][] = "senha";

$tdataarea_restrita[".tableType"] = "list";

$tdataarea_restrita[".printerPageOrientation"] = 0;
$tdataarea_restrita[".nPrinterPageScale"] = 100;

$tdataarea_restrita[".nPrinterSplitRecords"] = 40;

$tdataarea_restrita[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdataarea_restrita[".pageSize"] = 20;

$tdataarea_restrita[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataarea_restrita[".strOrderBy"] = $tstrOrderBy;

$tdataarea_restrita[".orderindexes"] = array();

$tdataarea_restrita[".sqlHead"] = "SELECT id,  	username,  	senha";
$tdataarea_restrita[".sqlFrom"] = "FROM area_restrita";
$tdataarea_restrita[".sqlWhereExpr"] = "";
$tdataarea_restrita[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataarea_restrita[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataarea_restrita[".arrGroupsPerPage"] = $arrGPP;

$tdataarea_restrita[".highlightSearchResults"] = true;

$tableKeysarea_restrita = array();
$tableKeysarea_restrita[] = "id";
$tdataarea_restrita[".Keys"] = $tableKeysarea_restrita;

$tdataarea_restrita[".listFields"] = array();
$tdataarea_restrita[".listFields"][] = "id";
$tdataarea_restrita[".listFields"][] = "username";
$tdataarea_restrita[".listFields"][] = "senha";

$tdataarea_restrita[".hideMobileList"] = array();


$tdataarea_restrita[".viewFields"] = array();

$tdataarea_restrita[".addFields"] = array();

$tdataarea_restrita[".inlineAddFields"] = array();

$tdataarea_restrita[".editFields"] = array();

$tdataarea_restrita[".inlineEditFields"] = array();
$tdataarea_restrita[".inlineEditFields"][] = "username";
$tdataarea_restrita[".inlineEditFields"][] = "senha";

$tdataarea_restrita[".exportFields"] = array();

$tdataarea_restrita[".importFields"] = array();

$tdataarea_restrita[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "area_restrita";
	$fdata["Label"] = GetFieldLabel("area_restrita","id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
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

	

	
	$tdataarea_restrita["id"] = $fdata;
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "area_restrita";
	$fdata["Label"] = GetFieldLabel("area_restrita","username"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "username"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "username";
	
		
		
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

	

	
	$tdataarea_restrita["username"] = $fdata;
//	senha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "senha";
	$fdata["GoodName"] = "senha";
	$fdata["ownerTable"] = "area_restrita";
	$fdata["Label"] = GetFieldLabel("area_restrita","senha"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "senha"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "senha";
	
		
		
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

	

	
	$tdataarea_restrita["senha"] = $fdata;

	
$tables_data["area_restrita"]=&$tdataarea_restrita;
$field_labels["area_restrita"] = &$fieldLabelsarea_restrita;
$fieldToolTips["area_restrita"] = &$fieldToolTipsarea_restrita;
$page_titles["area_restrita"] = &$pageTitlesarea_restrita;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["area_restrita"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["area_restrita"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_area_restrita()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	username,  	senha";
$proto0["m_strFrom"] = "FROM area_restrita";
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
	"m_strTable" => "area_restrita",
	"m_srcTableName" => "area_restrita"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "area_restrita";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "area_restrita",
	"m_srcTableName" => "area_restrita"
));

$proto7["m_sql"] = "username";
$proto7["m_srcTableName"] = "area_restrita";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "senha",
	"m_strTable" => "area_restrita",
	"m_srcTableName" => "area_restrita"
));

$proto9["m_sql"] = "senha";
$proto9["m_srcTableName"] = "area_restrita";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "area_restrita";
$proto12["m_srcTableName"] = "area_restrita";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "id";
$proto12["m_columns"][] = "username";
$proto12["m_columns"][] = "senha";
$obj = new SQLTable($proto12);

$proto11["m_table"] = $obj;
$proto11["m_sql"] = "area_restrita";
$proto11["m_alias"] = "";
$proto11["m_srcTableName"] = "area_restrita";
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
$proto0["m_srcTableName"]="area_restrita";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_area_restrita = createSqlQuery_area_restrita();


	
			
	
$tdataarea_restrita[".sqlquery"] = $queryData_area_restrita;

include_once(getabspath("include/area_restrita_events.php"));
$tableEvents["area_restrita"] = new eventclass_area_restrita;
$tdataarea_restrita[".hasEvents"] = true;

?>