<?php
require_once(getabspath("classes/cipherer.php"));




$tdataemailsformularios = array();	
	$tdataemailsformularios[".truncateText"] = true;
	$tdataemailsformularios[".NumberOfChars"] = 80; 
	$tdataemailsformularios[".ShortName"] = "emailsformularios";
	$tdataemailsformularios[".OwnerID"] = "";
	$tdataemailsformularios[".OriginalTable"] = "emailsformularios";

//	field labels
$fieldLabelsemailsformularios = array();
$fieldToolTipsemailsformularios = array();
$pageTitlesemailsformularios = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsemailsformularios["Portuguese(Brazil)"] = array();
	$fieldToolTipsemailsformularios["Portuguese(Brazil)"] = array();
	$pageTitlesemailsformularios["Portuguese(Brazil)"] = array();
	$fieldLabelsemailsformularios["Portuguese(Brazil)"]["id"] = "Id";
	$fieldToolTipsemailsformularios["Portuguese(Brazil)"]["id"] = "";
	$fieldLabelsemailsformularios["Portuguese(Brazil)"]["nome"] = "Nome";
	$fieldToolTipsemailsformularios["Portuguese(Brazil)"]["nome"] = "";
	$fieldLabelsemailsformularios["Portuguese(Brazil)"]["email"] = "Email";
	$fieldToolTipsemailsformularios["Portuguese(Brazil)"]["email"] = "";
	if (count($fieldToolTipsemailsformularios["Portuguese(Brazil)"]))
		$tdataemailsformularios[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsemailsformularios[""] = array();
	$fieldToolTipsemailsformularios[""] = array();
	$pageTitlesemailsformularios[""] = array();
	$fieldLabelsemailsformularios[""]["id"] = "Id";
	$fieldToolTipsemailsformularios[""]["id"] = "";
	$fieldLabelsemailsformularios[""]["nome"] = "Nome";
	$fieldToolTipsemailsformularios[""]["nome"] = "";
	$fieldLabelsemailsformularios[""]["email"] = "Email";
	$fieldToolTipsemailsformularios[""]["email"] = "";
	if (count($fieldToolTipsemailsformularios[""]))
		$tdataemailsformularios[".isUseToolTips"] = true;
}
	
	
	$tdataemailsformularios[".NCSearch"] = true;



$tdataemailsformularios[".shortTableName"] = "emailsformularios";
$tdataemailsformularios[".nSecOptions"] = 0;
$tdataemailsformularios[".recsPerRowList"] = 1;
$tdataemailsformularios[".mainTableOwnerID"] = "";
$tdataemailsformularios[".moveNext"] = 1;
$tdataemailsformularios[".nType"] = 0;

$tdataemailsformularios[".strOriginalTableName"] = "emailsformularios";




$tdataemailsformularios[".showAddInPopup"] = false;

$tdataemailsformularios[".showEditInPopup"] = false;

$tdataemailsformularios[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataemailsformularios[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataemailsformularios[".fieldsForRegister"] = array();

$tdataemailsformularios[".listAjax"] = false;

	$tdataemailsformularios[".audit"] = false;

	$tdataemailsformularios[".locking"] = false;


$tdataemailsformularios[".list"] = true;

$tdataemailsformularios[".inlineEdit"] = true;





$tdataemailsformularios[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataemailsformularios[".searchSaving"] = false;
//

$tdataemailsformularios[".showSearchPanel"] = true;
		$tdataemailsformularios[".flexibleSearch"] = true;		

if (isMobile())
	$tdataemailsformularios[".isUseAjaxSuggest"] = false;
else 
	$tdataemailsformularios[".isUseAjaxSuggest"] = true;

$tdataemailsformularios[".rowHighlite"] = true;



$tdataemailsformularios[".addPageEvents"] = false;

// use timepicker for search panel
$tdataemailsformularios[".isUseTimeForSearch"] = false;





$tdataemailsformularios[".allSearchFields"] = array();
$tdataemailsformularios[".filterFields"] = array();
$tdataemailsformularios[".requiredSearchFields"] = array();

$tdataemailsformularios[".allSearchFields"][] = "id";
	$tdataemailsformularios[".allSearchFields"][] = "nome";
	$tdataemailsformularios[".allSearchFields"][] = "email";
	

$tdataemailsformularios[".googleLikeFields"] = array();
$tdataemailsformularios[".googleLikeFields"][] = "id";
$tdataemailsformularios[".googleLikeFields"][] = "nome";
$tdataemailsformularios[".googleLikeFields"][] = "email";


$tdataemailsformularios[".advSearchFields"] = array();
$tdataemailsformularios[".advSearchFields"][] = "id";
$tdataemailsformularios[".advSearchFields"][] = "nome";
$tdataemailsformularios[".advSearchFields"][] = "email";

$tdataemailsformularios[".tableType"] = "list";

$tdataemailsformularios[".printerPageOrientation"] = 0;
$tdataemailsformularios[".nPrinterPageScale"] = 100;

$tdataemailsformularios[".nPrinterSplitRecords"] = 40;

$tdataemailsformularios[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdataemailsformularios[".pageSize"] = 20;

$tdataemailsformularios[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataemailsformularios[".strOrderBy"] = $tstrOrderBy;

$tdataemailsformularios[".orderindexes"] = array();

$tdataemailsformularios[".sqlHead"] = "SELECT id,  	nome,  	email";
$tdataemailsformularios[".sqlFrom"] = "FROM emailsformularios";
$tdataemailsformularios[".sqlWhereExpr"] = "";
$tdataemailsformularios[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataemailsformularios[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataemailsformularios[".arrGroupsPerPage"] = $arrGPP;

$tdataemailsformularios[".highlightSearchResults"] = true;

$tableKeysemailsformularios = array();
$tableKeysemailsformularios[] = "id";
$tdataemailsformularios[".Keys"] = $tableKeysemailsformularios;

$tdataemailsformularios[".listFields"] = array();
$tdataemailsformularios[".listFields"][] = "id";
$tdataemailsformularios[".listFields"][] = "nome";
$tdataemailsformularios[".listFields"][] = "email";

$tdataemailsformularios[".hideMobileList"] = array();


$tdataemailsformularios[".viewFields"] = array();

$tdataemailsformularios[".addFields"] = array();

$tdataemailsformularios[".inlineAddFields"] = array();

$tdataemailsformularios[".editFields"] = array();

$tdataemailsformularios[".inlineEditFields"] = array();
$tdataemailsformularios[".inlineEditFields"][] = "email";

$tdataemailsformularios[".exportFields"] = array();

$tdataemailsformularios[".importFields"] = array();

$tdataemailsformularios[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "emailsformularios";
	$fdata["Label"] = GetFieldLabel("emailsformularios","id"); 
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

	

	
	$tdataemailsformularios["id"] = $fdata;
//	nome
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nome";
	$fdata["GoodName"] = "nome";
	$fdata["ownerTable"] = "emailsformularios";
	$fdata["Label"] = GetFieldLabel("emailsformularios","nome"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "nome"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nome";
	
		
		
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

	

	
	$tdataemailsformularios["nome"] = $fdata;
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "emailsformularios";
	$fdata["Label"] = GetFieldLabel("emailsformularios","email"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "email"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email";
	
		
		
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
	
		
		
		
		
			$edata["HTML5InuptType"] = "email";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Email");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataemailsformularios["email"] = $fdata;

	
$tables_data["emailsformularios"]=&$tdataemailsformularios;
$field_labels["emailsformularios"] = &$fieldLabelsemailsformularios;
$fieldToolTips["emailsformularios"] = &$fieldToolTipsemailsformularios;
$page_titles["emailsformularios"] = &$pageTitlesemailsformularios;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["emailsformularios"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["emailsformularios"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_emailsformularios()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	nome,  	email";
$proto0["m_strFrom"] = "FROM emailsformularios";
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
	"m_strTable" => "emailsformularios",
	"m_srcTableName" => "emailsformularios"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "emailsformularios";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "nome",
	"m_strTable" => "emailsformularios",
	"m_srcTableName" => "emailsformularios"
));

$proto7["m_sql"] = "nome";
$proto7["m_srcTableName"] = "emailsformularios";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "emailsformularios",
	"m_srcTableName" => "emailsformularios"
));

$proto9["m_sql"] = "email";
$proto9["m_srcTableName"] = "emailsformularios";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "emailsformularios";
$proto12["m_srcTableName"] = "emailsformularios";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "id";
$proto12["m_columns"][] = "nome";
$proto12["m_columns"][] = "email";
$obj = new SQLTable($proto12);

$proto11["m_table"] = $obj;
$proto11["m_sql"] = "emailsformularios";
$proto11["m_alias"] = "";
$proto11["m_srcTableName"] = "emailsformularios";
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
$proto0["m_srcTableName"]="emailsformularios";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_emailsformularios = createSqlQuery_emailsformularios();


	
			
	
$tdataemailsformularios[".sqlquery"] = $queryData_emailsformularios;

include_once(getabspath("include/emailsformularios_events.php"));
$tableEvents["emailsformularios"] = new eventclass_emailsformularios;
$tdataemailsformularios[".hasEvents"] = true;

?>