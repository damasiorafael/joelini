<?php
require_once(getabspath("classes/cipherer.php"));




$tdataidiomas = array();	
	$tdataidiomas[".truncateText"] = true;
	$tdataidiomas[".NumberOfChars"] = 80; 
	$tdataidiomas[".ShortName"] = "idiomas";
	$tdataidiomas[".OwnerID"] = "";
	$tdataidiomas[".OriginalTable"] = "idiomas";

//	field labels
$fieldLabelsidiomas = array();
$fieldToolTipsidiomas = array();
$pageTitlesidiomas = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsidiomas["Portuguese(Brazil)"] = array();
	$fieldToolTipsidiomas["Portuguese(Brazil)"] = array();
	$pageTitlesidiomas["Portuguese(Brazil)"] = array();
	$fieldLabelsidiomas["Portuguese(Brazil)"]["id"] = "Id";
	$fieldToolTipsidiomas["Portuguese(Brazil)"]["id"] = "";
	$fieldLabelsidiomas["Portuguese(Brazil)"]["nome"] = "Nome";
	$fieldToolTipsidiomas["Portuguese(Brazil)"]["nome"] = "";
	$fieldLabelsidiomas["Portuguese(Brazil)"]["ativo"] = "Ativo";
	$fieldToolTipsidiomas["Portuguese(Brazil)"]["ativo"] = "";
	if (count($fieldToolTipsidiomas["Portuguese(Brazil)"]))
		$tdataidiomas[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsidiomas[""] = array();
	$fieldToolTipsidiomas[""] = array();
	$pageTitlesidiomas[""] = array();
	$fieldLabelsidiomas[""]["id"] = "Id";
	$fieldToolTipsidiomas[""]["id"] = "";
	$fieldLabelsidiomas[""]["nome"] = "Nome";
	$fieldToolTipsidiomas[""]["nome"] = "";
	$fieldLabelsidiomas[""]["ativo"] = "Ativo";
	$fieldToolTipsidiomas[""]["ativo"] = "";
	if (count($fieldToolTipsidiomas[""]))
		$tdataidiomas[".isUseToolTips"] = true;
}
	
	
	$tdataidiomas[".NCSearch"] = true;



$tdataidiomas[".shortTableName"] = "idiomas";
$tdataidiomas[".nSecOptions"] = 0;
$tdataidiomas[".recsPerRowList"] = 1;
$tdataidiomas[".mainTableOwnerID"] = "";
$tdataidiomas[".moveNext"] = 1;
$tdataidiomas[".nType"] = 0;

$tdataidiomas[".strOriginalTableName"] = "idiomas";




$tdataidiomas[".showAddInPopup"] = false;

$tdataidiomas[".showEditInPopup"] = false;

$tdataidiomas[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataidiomas[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataidiomas[".fieldsForRegister"] = array();

$tdataidiomas[".listAjax"] = false;

	$tdataidiomas[".audit"] = false;

	$tdataidiomas[".locking"] = false;


$tdataidiomas[".list"] = true;

$tdataidiomas[".inlineEdit"] = true;





$tdataidiomas[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataidiomas[".searchSaving"] = false;
//

$tdataidiomas[".showSearchPanel"] = true;
		$tdataidiomas[".flexibleSearch"] = true;		

if (isMobile())
	$tdataidiomas[".isUseAjaxSuggest"] = false;
else 
	$tdataidiomas[".isUseAjaxSuggest"] = true;

$tdataidiomas[".rowHighlite"] = true;



$tdataidiomas[".addPageEvents"] = false;

// use timepicker for search panel
$tdataidiomas[".isUseTimeForSearch"] = false;





$tdataidiomas[".allSearchFields"] = array();
$tdataidiomas[".filterFields"] = array();
$tdataidiomas[".requiredSearchFields"] = array();

$tdataidiomas[".allSearchFields"][] = "id";
	$tdataidiomas[".allSearchFields"][] = "nome";
	$tdataidiomas[".allSearchFields"][] = "ativo";
	

$tdataidiomas[".googleLikeFields"] = array();
$tdataidiomas[".googleLikeFields"][] = "id";
$tdataidiomas[".googleLikeFields"][] = "nome";
$tdataidiomas[".googleLikeFields"][] = "ativo";


$tdataidiomas[".advSearchFields"] = array();
$tdataidiomas[".advSearchFields"][] = "id";
$tdataidiomas[".advSearchFields"][] = "nome";
$tdataidiomas[".advSearchFields"][] = "ativo";

$tdataidiomas[".tableType"] = "list";

$tdataidiomas[".printerPageOrientation"] = 0;
$tdataidiomas[".nPrinterPageScale"] = 100;

$tdataidiomas[".nPrinterSplitRecords"] = 40;

$tdataidiomas[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdataidiomas[".pageSize"] = 20;

$tdataidiomas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataidiomas[".strOrderBy"] = $tstrOrderBy;

$tdataidiomas[".orderindexes"] = array();

$tdataidiomas[".sqlHead"] = "SELECT id,  	nome,  	ativo";
$tdataidiomas[".sqlFrom"] = "FROM idiomas";
$tdataidiomas[".sqlWhereExpr"] = "";
$tdataidiomas[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataidiomas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataidiomas[".arrGroupsPerPage"] = $arrGPP;

$tdataidiomas[".highlightSearchResults"] = true;

$tableKeysidiomas = array();
$tableKeysidiomas[] = "id";
$tdataidiomas[".Keys"] = $tableKeysidiomas;

$tdataidiomas[".listFields"] = array();
$tdataidiomas[".listFields"][] = "id";
$tdataidiomas[".listFields"][] = "nome";
$tdataidiomas[".listFields"][] = "ativo";

$tdataidiomas[".hideMobileList"] = array();


$tdataidiomas[".viewFields"] = array();

$tdataidiomas[".addFields"] = array();

$tdataidiomas[".inlineAddFields"] = array();

$tdataidiomas[".editFields"] = array();

$tdataidiomas[".inlineEditFields"] = array();
$tdataidiomas[".inlineEditFields"][] = "ativo";

$tdataidiomas[".exportFields"] = array();

$tdataidiomas[".importFields"] = array();

$tdataidiomas[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "idiomas";
	$fdata["Label"] = GetFieldLabel("idiomas","id"); 
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

	

	
	$tdataidiomas["id"] = $fdata;
//	nome
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nome";
	$fdata["GoodName"] = "nome";
	$fdata["ownerTable"] = "idiomas";
	$fdata["Label"] = GetFieldLabel("idiomas","nome"); 
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

	

	
	$tdataidiomas["nome"] = $fdata;
//	ativo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ativo";
	$fdata["GoodName"] = "ativo";
	$fdata["ownerTable"] = "idiomas";
	$fdata["Label"] = GetFieldLabel("idiomas","ativo"); 
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

	

	
	$tdataidiomas["ativo"] = $fdata;

	
$tables_data["idiomas"]=&$tdataidiomas;
$field_labels["idiomas"] = &$fieldLabelsidiomas;
$fieldToolTips["idiomas"] = &$fieldToolTipsidiomas;
$page_titles["idiomas"] = &$pageTitlesidiomas;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["idiomas"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["idiomas"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_idiomas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	nome,  	ativo";
$proto0["m_strFrom"] = "FROM idiomas";
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
	"m_strTable" => "idiomas",
	"m_srcTableName" => "idiomas"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "idiomas";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "nome",
	"m_strTable" => "idiomas",
	"m_srcTableName" => "idiomas"
));

$proto7["m_sql"] = "nome";
$proto7["m_srcTableName"] = "idiomas";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "ativo",
	"m_strTable" => "idiomas",
	"m_srcTableName" => "idiomas"
));

$proto9["m_sql"] = "ativo";
$proto9["m_srcTableName"] = "idiomas";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "idiomas";
$proto12["m_srcTableName"] = "idiomas";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "id";
$proto12["m_columns"][] = "nome";
$proto12["m_columns"][] = "ativo";
$obj = new SQLTable($proto12);

$proto11["m_table"] = $obj;
$proto11["m_sql"] = "idiomas";
$proto11["m_alias"] = "";
$proto11["m_srcTableName"] = "idiomas";
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
$proto0["m_srcTableName"]="idiomas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_idiomas = createSqlQuery_idiomas();


	
			
	
$tdataidiomas[".sqlquery"] = $queryData_idiomas;

include_once(getabspath("include/idiomas_events.php"));
$tableEvents["idiomas"] = new eventclass_idiomas;
$tdataidiomas[".hasEvents"] = true;

?>