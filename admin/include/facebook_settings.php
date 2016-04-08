<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafacebook = array();	
	$tdatafacebook[".truncateText"] = true;
	$tdatafacebook[".NumberOfChars"] = 80; 
	$tdatafacebook[".ShortName"] = "facebook";
	$tdatafacebook[".OwnerID"] = "";
	$tdatafacebook[".OriginalTable"] = "facebook";

//	field labels
$fieldLabelsfacebook = array();
$fieldToolTipsfacebook = array();
$pageTitlesfacebook = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsfacebook["Portuguese(Brazil)"] = array();
	$fieldToolTipsfacebook["Portuguese(Brazil)"] = array();
	$pageTitlesfacebook["Portuguese(Brazil)"] = array();
	$fieldLabelsfacebook["Portuguese(Brazil)"]["id"] = "Id";
	$fieldToolTipsfacebook["Portuguese(Brazil)"]["id"] = "";
	$fieldLabelsfacebook["Portuguese(Brazil)"]["link"] = "Link";
	$fieldToolTipsfacebook["Portuguese(Brazil)"]["link"] = "";
	$fieldLabelsfacebook["Portuguese(Brazil)"]["ativo"] = "Ativo";
	$fieldToolTipsfacebook["Portuguese(Brazil)"]["ativo"] = "";
	if (count($fieldToolTipsfacebook["Portuguese(Brazil)"]))
		$tdatafacebook[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfacebook[""] = array();
	$fieldToolTipsfacebook[""] = array();
	$pageTitlesfacebook[""] = array();
	$fieldLabelsfacebook[""]["id"] = "Id";
	$fieldToolTipsfacebook[""]["id"] = "";
	$fieldLabelsfacebook[""]["link"] = "Link";
	$fieldToolTipsfacebook[""]["link"] = "";
	$fieldLabelsfacebook[""]["ativo"] = "Ativo";
	$fieldToolTipsfacebook[""]["ativo"] = "";
	if (count($fieldToolTipsfacebook[""]))
		$tdatafacebook[".isUseToolTips"] = true;
}
	
	
	$tdatafacebook[".NCSearch"] = true;



$tdatafacebook[".shortTableName"] = "facebook";
$tdatafacebook[".nSecOptions"] = 0;
$tdatafacebook[".recsPerRowList"] = 1;
$tdatafacebook[".mainTableOwnerID"] = "";
$tdatafacebook[".moveNext"] = 1;
$tdatafacebook[".nType"] = 0;

$tdatafacebook[".strOriginalTableName"] = "facebook";




$tdatafacebook[".showAddInPopup"] = false;

$tdatafacebook[".showEditInPopup"] = false;

$tdatafacebook[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafacebook[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafacebook[".fieldsForRegister"] = array();

$tdatafacebook[".listAjax"] = false;

	$tdatafacebook[".audit"] = false;

	$tdatafacebook[".locking"] = false;


$tdatafacebook[".list"] = true;

$tdatafacebook[".inlineEdit"] = true;





$tdatafacebook[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatafacebook[".searchSaving"] = false;
//

$tdatafacebook[".showSearchPanel"] = true;
		$tdatafacebook[".flexibleSearch"] = true;		

if (isMobile())
	$tdatafacebook[".isUseAjaxSuggest"] = false;
else 
	$tdatafacebook[".isUseAjaxSuggest"] = true;

$tdatafacebook[".rowHighlite"] = true;



$tdatafacebook[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafacebook[".isUseTimeForSearch"] = false;





$tdatafacebook[".allSearchFields"] = array();
$tdatafacebook[".filterFields"] = array();
$tdatafacebook[".requiredSearchFields"] = array();

$tdatafacebook[".allSearchFields"][] = "id";
	$tdatafacebook[".allSearchFields"][] = "link";
	$tdatafacebook[".allSearchFields"][] = "ativo";
	

$tdatafacebook[".googleLikeFields"] = array();
$tdatafacebook[".googleLikeFields"][] = "id";
$tdatafacebook[".googleLikeFields"][] = "link";
$tdatafacebook[".googleLikeFields"][] = "ativo";


$tdatafacebook[".advSearchFields"] = array();
$tdatafacebook[".advSearchFields"][] = "id";
$tdatafacebook[".advSearchFields"][] = "link";
$tdatafacebook[".advSearchFields"][] = "ativo";

$tdatafacebook[".tableType"] = "list";

$tdatafacebook[".printerPageOrientation"] = 0;
$tdatafacebook[".nPrinterPageScale"] = 100;

$tdatafacebook[".nPrinterSplitRecords"] = 40;

$tdatafacebook[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdatafacebook[".pageSize"] = 20;

$tdatafacebook[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafacebook[".strOrderBy"] = $tstrOrderBy;

$tdatafacebook[".orderindexes"] = array();

$tdatafacebook[".sqlHead"] = "SELECT id,  	link,  	ativo";
$tdatafacebook[".sqlFrom"] = "FROM facebook";
$tdatafacebook[".sqlWhereExpr"] = "";
$tdatafacebook[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafacebook[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafacebook[".arrGroupsPerPage"] = $arrGPP;

$tdatafacebook[".highlightSearchResults"] = true;

$tableKeysfacebook = array();
$tableKeysfacebook[] = "id";
$tdatafacebook[".Keys"] = $tableKeysfacebook;

$tdatafacebook[".listFields"] = array();
$tdatafacebook[".listFields"][] = "id";
$tdatafacebook[".listFields"][] = "link";
$tdatafacebook[".listFields"][] = "ativo";

$tdatafacebook[".hideMobileList"] = array();


$tdatafacebook[".viewFields"] = array();

$tdatafacebook[".addFields"] = array();

$tdatafacebook[".inlineAddFields"] = array();

$tdatafacebook[".editFields"] = array();

$tdatafacebook[".inlineEditFields"] = array();
$tdatafacebook[".inlineEditFields"][] = "link";
$tdatafacebook[".inlineEditFields"][] = "ativo";

$tdatafacebook[".exportFields"] = array();

$tdatafacebook[".importFields"] = array();

$tdatafacebook[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "facebook";
	$fdata["Label"] = GetFieldLabel("facebook","id"); 
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

	

	
	$tdatafacebook["id"] = $fdata;
//	link
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "link";
	$fdata["GoodName"] = "link";
	$fdata["ownerTable"] = "facebook";
	$fdata["Label"] = GetFieldLabel("facebook","link"); 
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

	

	
	$tdatafacebook["link"] = $fdata;
//	ativo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ativo";
	$fdata["GoodName"] = "ativo";
	$fdata["ownerTable"] = "facebook";
	$fdata["Label"] = GetFieldLabel("facebook","ativo"); 
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

	

	
	$tdatafacebook["ativo"] = $fdata;

	
$tables_data["facebook"]=&$tdatafacebook;
$field_labels["facebook"] = &$fieldLabelsfacebook;
$fieldToolTips["facebook"] = &$fieldToolTipsfacebook;
$page_titles["facebook"] = &$pageTitlesfacebook;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["facebook"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["facebook"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_facebook()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	link,  	ativo";
$proto0["m_strFrom"] = "FROM facebook";
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
	"m_strTable" => "facebook",
	"m_srcTableName" => "facebook"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "facebook";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "link",
	"m_strTable" => "facebook",
	"m_srcTableName" => "facebook"
));

$proto7["m_sql"] = "link";
$proto7["m_srcTableName"] = "facebook";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "ativo",
	"m_strTable" => "facebook",
	"m_srcTableName" => "facebook"
));

$proto9["m_sql"] = "ativo";
$proto9["m_srcTableName"] = "facebook";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "facebook";
$proto12["m_srcTableName"] = "facebook";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "id";
$proto12["m_columns"][] = "link";
$proto12["m_columns"][] = "ativo";
$obj = new SQLTable($proto12);

$proto11["m_table"] = $obj;
$proto11["m_sql"] = "facebook";
$proto11["m_alias"] = "";
$proto11["m_srcTableName"] = "facebook";
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
$proto0["m_srcTableName"]="facebook";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_facebook = createSqlQuery_facebook();


	
			
	
$tdatafacebook[".sqlquery"] = $queryData_facebook;

$tableEvents["facebook"] = new eventsBase;
$tdatafacebook[".hasEvents"] = false;

?>