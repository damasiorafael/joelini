<?php
require_once(getabspath("classes/cipherer.php"));




$tdatadownloads = array();	
	$tdatadownloads[".truncateText"] = true;
	$tdatadownloads[".NumberOfChars"] = 80; 
	$tdatadownloads[".ShortName"] = "downloads";
	$tdatadownloads[".OwnerID"] = "";
	$tdatadownloads[".OriginalTable"] = "downloads";

//	field labels
$fieldLabelsdownloads = array();
$fieldToolTipsdownloads = array();
$pageTitlesdownloads = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsdownloads["Portuguese(Brazil)"] = array();
	$fieldToolTipsdownloads["Portuguese(Brazil)"] = array();
	$pageTitlesdownloads["Portuguese(Brazil)"] = array();
	$fieldLabelsdownloads["Portuguese(Brazil)"]["id"] = "Id";
	$fieldToolTipsdownloads["Portuguese(Brazil)"]["id"] = "";
	$fieldLabelsdownloads["Portuguese(Brazil)"]["arquivo"] = "Arquivo";
	$fieldToolTipsdownloads["Portuguese(Brazil)"]["arquivo"] = "";
	$fieldLabelsdownloads["Portuguese(Brazil)"]["nome_por"] = "Nome Português";
	$fieldToolTipsdownloads["Portuguese(Brazil)"]["nome_por"] = "";
	$fieldLabelsdownloads["Portuguese(Brazil)"]["nome_eng"] = "Nome Inglês";
	$fieldToolTipsdownloads["Portuguese(Brazil)"]["nome_eng"] = "";
	$fieldLabelsdownloads["Portuguese(Brazil)"]["nome_esp"] = "Nome Espanhol";
	$fieldToolTipsdownloads["Portuguese(Brazil)"]["nome_esp"] = "";
	if (count($fieldToolTipsdownloads["Portuguese(Brazil)"]))
		$tdatadownloads[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsdownloads[""] = array();
	$fieldToolTipsdownloads[""] = array();
	$pageTitlesdownloads[""] = array();
	$fieldLabelsdownloads[""]["id"] = "Id";
	$fieldToolTipsdownloads[""]["id"] = "";
	$fieldLabelsdownloads[""]["arquivo"] = "Arquivo";
	$fieldToolTipsdownloads[""]["arquivo"] = "";
	$fieldLabelsdownloads[""]["nome_por"] = "Nome Por";
	$fieldToolTipsdownloads[""]["nome_por"] = "";
	$fieldLabelsdownloads[""]["nome_eng"] = "Nome Eng";
	$fieldToolTipsdownloads[""]["nome_eng"] = "";
	$fieldLabelsdownloads[""]["nome_esp"] = "Nome Esp";
	$fieldToolTipsdownloads[""]["nome_esp"] = "";
	if (count($fieldToolTipsdownloads[""]))
		$tdatadownloads[".isUseToolTips"] = true;
}
	
	
	$tdatadownloads[".NCSearch"] = true;



$tdatadownloads[".shortTableName"] = "downloads";
$tdatadownloads[".nSecOptions"] = 0;
$tdatadownloads[".recsPerRowList"] = 1;
$tdatadownloads[".mainTableOwnerID"] = "";
$tdatadownloads[".moveNext"] = 1;
$tdatadownloads[".nType"] = 0;

$tdatadownloads[".strOriginalTableName"] = "downloads";




$tdatadownloads[".showAddInPopup"] = false;

$tdatadownloads[".showEditInPopup"] = false;

$tdatadownloads[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatadownloads[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatadownloads[".fieldsForRegister"] = array();

$tdatadownloads[".listAjax"] = false;

	$tdatadownloads[".audit"] = false;

	$tdatadownloads[".locking"] = false;


$tdatadownloads[".list"] = true;

$tdatadownloads[".inlineEdit"] = true;
$tdatadownloads[".inlineAdd"] = true;




$tdatadownloads[".delete"] = true;

$tdatadownloads[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatadownloads[".searchSaving"] = false;
//

$tdatadownloads[".showSearchPanel"] = true;
		$tdatadownloads[".flexibleSearch"] = true;		

if (isMobile())
	$tdatadownloads[".isUseAjaxSuggest"] = false;
else 
	$tdatadownloads[".isUseAjaxSuggest"] = true;

$tdatadownloads[".rowHighlite"] = true;



$tdatadownloads[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadownloads[".isUseTimeForSearch"] = false;





$tdatadownloads[".allSearchFields"] = array();
$tdatadownloads[".filterFields"] = array();
$tdatadownloads[".requiredSearchFields"] = array();

$tdatadownloads[".allSearchFields"][] = "id";
	$tdatadownloads[".allSearchFields"][] = "nome_por";
	$tdatadownloads[".allSearchFields"][] = "nome_eng";
	$tdatadownloads[".allSearchFields"][] = "nome_esp";
	$tdatadownloads[".allSearchFields"][] = "arquivo";
	

$tdatadownloads[".googleLikeFields"] = array();
$tdatadownloads[".googleLikeFields"][] = "id";
$tdatadownloads[".googleLikeFields"][] = "nome_por";
$tdatadownloads[".googleLikeFields"][] = "nome_eng";
$tdatadownloads[".googleLikeFields"][] = "nome_esp";
$tdatadownloads[".googleLikeFields"][] = "arquivo";


$tdatadownloads[".advSearchFields"] = array();
$tdatadownloads[".advSearchFields"][] = "id";
$tdatadownloads[".advSearchFields"][] = "nome_por";
$tdatadownloads[".advSearchFields"][] = "nome_eng";
$tdatadownloads[".advSearchFields"][] = "nome_esp";
$tdatadownloads[".advSearchFields"][] = "arquivo";

$tdatadownloads[".tableType"] = "list";

$tdatadownloads[".printerPageOrientation"] = 0;
$tdatadownloads[".nPrinterPageScale"] = 100;

$tdatadownloads[".nPrinterSplitRecords"] = 40;

$tdatadownloads[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdatadownloads[".pageSize"] = 20;

$tdatadownloads[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadownloads[".strOrderBy"] = $tstrOrderBy;

$tdatadownloads[".orderindexes"] = array();

$tdatadownloads[".sqlHead"] = "SELECT id,  	nome_por,  	nome_eng,  	nome_esp,  	arquivo";
$tdatadownloads[".sqlFrom"] = "FROM downloads";
$tdatadownloads[".sqlWhereExpr"] = "";
$tdatadownloads[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadownloads[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadownloads[".arrGroupsPerPage"] = $arrGPP;

$tdatadownloads[".highlightSearchResults"] = true;

$tableKeysdownloads = array();
$tableKeysdownloads[] = "id";
$tdatadownloads[".Keys"] = $tableKeysdownloads;

$tdatadownloads[".listFields"] = array();
$tdatadownloads[".listFields"][] = "id";
$tdatadownloads[".listFields"][] = "nome_por";
$tdatadownloads[".listFields"][] = "nome_eng";
$tdatadownloads[".listFields"][] = "nome_esp";
$tdatadownloads[".listFields"][] = "arquivo";

$tdatadownloads[".hideMobileList"] = array();


$tdatadownloads[".viewFields"] = array();

$tdatadownloads[".addFields"] = array();

$tdatadownloads[".inlineAddFields"] = array();
$tdatadownloads[".inlineAddFields"][] = "nome_por";
$tdatadownloads[".inlineAddFields"][] = "nome_eng";
$tdatadownloads[".inlineAddFields"][] = "nome_esp";
$tdatadownloads[".inlineAddFields"][] = "arquivo";

$tdatadownloads[".editFields"] = array();

$tdatadownloads[".inlineEditFields"] = array();
$tdatadownloads[".inlineEditFields"][] = "nome_por";
$tdatadownloads[".inlineEditFields"][] = "nome_eng";
$tdatadownloads[".inlineEditFields"][] = "nome_esp";
$tdatadownloads[".inlineEditFields"][] = "arquivo";

$tdatadownloads[".exportFields"] = array();

$tdatadownloads[".importFields"] = array();

$tdatadownloads[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "downloads";
	$fdata["Label"] = GetFieldLabel("downloads","id"); 
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

	

	
	$tdatadownloads["id"] = $fdata;
//	nome_por
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nome_por";
	$fdata["GoodName"] = "nome_por";
	$fdata["ownerTable"] = "downloads";
	$fdata["Label"] = GetFieldLabel("downloads","nome_por"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatadownloads["nome_por"] = $fdata;
//	nome_eng
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "nome_eng";
	$fdata["GoodName"] = "nome_eng";
	$fdata["ownerTable"] = "downloads";
	$fdata["Label"] = GetFieldLabel("downloads","nome_eng"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatadownloads["nome_eng"] = $fdata;
//	nome_esp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "nome_esp";
	$fdata["GoodName"] = "nome_esp";
	$fdata["ownerTable"] = "downloads";
	$fdata["Label"] = GetFieldLabel("downloads","nome_esp"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatadownloads["nome_esp"] = $fdata;
//	arquivo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "arquivo";
	$fdata["GoodName"] = "arquivo";
	$fdata["ownerTable"] = "downloads";
	$fdata["Label"] = GetFieldLabel("downloads","arquivo"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "arquivo"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "arquivo";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		$fdata["CompatibilityMode"] = true; 
	
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "../downloads/";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Document Download");
	
		
		
		
								$vdata["ShowIcon"] = true; 
			
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Document upload");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	$fdata["Absolute"] = true;
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatadownloads["arquivo"] = $fdata;

	
$tables_data["downloads"]=&$tdatadownloads;
$field_labels["downloads"] = &$fieldLabelsdownloads;
$fieldToolTips["downloads"] = &$fieldToolTipsdownloads;
$page_titles["downloads"] = &$pageTitlesdownloads;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["downloads"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["downloads"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_downloads()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	nome_por,  	nome_eng,  	nome_esp,  	arquivo";
$proto0["m_strFrom"] = "FROM downloads";
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
	"m_strTable" => "downloads",
	"m_srcTableName" => "downloads"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "downloads";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "nome_por",
	"m_strTable" => "downloads",
	"m_srcTableName" => "downloads"
));

$proto7["m_sql"] = "nome_por";
$proto7["m_srcTableName"] = "downloads";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "nome_eng",
	"m_strTable" => "downloads",
	"m_srcTableName" => "downloads"
));

$proto9["m_sql"] = "nome_eng";
$proto9["m_srcTableName"] = "downloads";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "nome_esp",
	"m_strTable" => "downloads",
	"m_srcTableName" => "downloads"
));

$proto11["m_sql"] = "nome_esp";
$proto11["m_srcTableName"] = "downloads";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "arquivo",
	"m_strTable" => "downloads",
	"m_srcTableName" => "downloads"
));

$proto13["m_sql"] = "arquivo";
$proto13["m_srcTableName"] = "downloads";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "downloads";
$proto16["m_srcTableName"] = "downloads";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "id";
$proto16["m_columns"][] = "nome_por";
$proto16["m_columns"][] = "nome_eng";
$proto16["m_columns"][] = "nome_esp";
$proto16["m_columns"][] = "arquivo";
$obj = new SQLTable($proto16);

$proto15["m_table"] = $obj;
$proto15["m_sql"] = "downloads";
$proto15["m_alias"] = "";
$proto15["m_srcTableName"] = "downloads";
$proto17=array();
$proto17["m_sql"] = "";
$proto17["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto17["m_column"]=$obj;
$proto17["m_contained"] = array();
$proto17["m_strCase"] = "";
$proto17["m_havingmode"] = false;
$proto17["m_inBrackets"] = false;
$proto17["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto17);

$proto15["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto15);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="downloads";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_downloads = createSqlQuery_downloads();


	
					
	
$tdatadownloads[".sqlquery"] = $queryData_downloads;

include_once(getabspath("include/downloads_events.php"));
$tableEvents["downloads"] = new eventclass_downloads;
$tdatadownloads[".hasEvents"] = true;

?>