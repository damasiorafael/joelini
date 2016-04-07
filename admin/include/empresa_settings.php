<?php
require_once(getabspath("classes/cipherer.php"));




$tdataempresa = array();	
	$tdataempresa[".truncateText"] = true;
	$tdataempresa[".NumberOfChars"] = 80; 
	$tdataempresa[".ShortName"] = "empresa";
	$tdataempresa[".OwnerID"] = "";
	$tdataempresa[".OriginalTable"] = "empresa";

//	field labels
$fieldLabelsempresa = array();
$fieldToolTipsempresa = array();
$pageTitlesempresa = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsempresa["Portuguese(Brazil)"] = array();
	$fieldToolTipsempresa["Portuguese(Brazil)"] = array();
	$pageTitlesempresa["Portuguese(Brazil)"] = array();
	$fieldLabelsempresa["Portuguese(Brazil)"]["id"] = "Id";
	$fieldToolTipsempresa["Portuguese(Brazil)"]["id"] = "";
	$fieldLabelsempresa["Portuguese(Brazil)"]["titulo_por"] = "Titulo Por";
	$fieldToolTipsempresa["Portuguese(Brazil)"]["titulo_por"] = "";
	$fieldLabelsempresa["Portuguese(Brazil)"]["titulo_eng"] = "Titulo Eng";
	$fieldToolTipsempresa["Portuguese(Brazil)"]["titulo_eng"] = "";
	$fieldLabelsempresa["Portuguese(Brazil)"]["titulo_esp"] = "Titulo Esp";
	$fieldToolTipsempresa["Portuguese(Brazil)"]["titulo_esp"] = "";
	$fieldLabelsempresa["Portuguese(Brazil)"]["texto_por"] = "Texto Por";
	$fieldToolTipsempresa["Portuguese(Brazil)"]["texto_por"] = "";
	$fieldLabelsempresa["Portuguese(Brazil)"]["texto_eng"] = "Texto Eng";
	$fieldToolTipsempresa["Portuguese(Brazil)"]["texto_eng"] = "";
	$fieldLabelsempresa["Portuguese(Brazil)"]["texto_esp"] = "Texto Esp";
	$fieldToolTipsempresa["Portuguese(Brazil)"]["texto_esp"] = "";
	if (count($fieldToolTipsempresa["Portuguese(Brazil)"]))
		$tdataempresa[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsempresa[""] = array();
	$fieldToolTipsempresa[""] = array();
	$pageTitlesempresa[""] = array();
	if (count($fieldToolTipsempresa[""]))
		$tdataempresa[".isUseToolTips"] = true;
}
	
	
	$tdataempresa[".NCSearch"] = true;



$tdataempresa[".shortTableName"] = "empresa";
$tdataempresa[".nSecOptions"] = 0;
$tdataempresa[".recsPerRowList"] = 1;
$tdataempresa[".mainTableOwnerID"] = "";
$tdataempresa[".moveNext"] = 1;
$tdataempresa[".nType"] = 0;

$tdataempresa[".strOriginalTableName"] = "empresa";




$tdataempresa[".showAddInPopup"] = false;

$tdataempresa[".showEditInPopup"] = false;

$tdataempresa[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataempresa[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataempresa[".fieldsForRegister"] = array();

$tdataempresa[".listAjax"] = false;

	$tdataempresa[".audit"] = false;

	$tdataempresa[".locking"] = false;

$tdataempresa[".edit"] = true;

$tdataempresa[".list"] = true;

$tdataempresa[".inlineEdit"] = true;
$tdataempresa[".inlineAdd"] = true;
$tdataempresa[".view"] = true;

$tdataempresa[".import"] = true;

$tdataempresa[".exportTo"] = true;

$tdataempresa[".printFriendly"] = true;

$tdataempresa[".delete"] = true;

$tdataempresa[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataempresa[".searchSaving"] = false;
//

$tdataempresa[".showSearchPanel"] = true;
		$tdataempresa[".flexibleSearch"] = true;		

if (isMobile())
	$tdataempresa[".isUseAjaxSuggest"] = false;
else 
	$tdataempresa[".isUseAjaxSuggest"] = true;

$tdataempresa[".rowHighlite"] = true;



$tdataempresa[".addPageEvents"] = false;

// use timepicker for search panel
$tdataempresa[".isUseTimeForSearch"] = false;





$tdataempresa[".allSearchFields"] = array();
$tdataempresa[".filterFields"] = array();
$tdataempresa[".requiredSearchFields"] = array();

$tdataempresa[".allSearchFields"][] = "id";
	$tdataempresa[".allSearchFields"][] = "titulo_por";
	$tdataempresa[".allSearchFields"][] = "titulo_eng";
	$tdataempresa[".allSearchFields"][] = "titulo_esp";
	$tdataempresa[".allSearchFields"][] = "texto_por";
	$tdataempresa[".allSearchFields"][] = "texto_eng";
	$tdataempresa[".allSearchFields"][] = "texto_esp";
	

$tdataempresa[".googleLikeFields"] = array();
$tdataempresa[".googleLikeFields"][] = "id";
$tdataempresa[".googleLikeFields"][] = "titulo_por";
$tdataempresa[".googleLikeFields"][] = "titulo_eng";
$tdataempresa[".googleLikeFields"][] = "titulo_esp";
$tdataempresa[".googleLikeFields"][] = "texto_por";
$tdataempresa[".googleLikeFields"][] = "texto_eng";
$tdataempresa[".googleLikeFields"][] = "texto_esp";


$tdataempresa[".advSearchFields"] = array();
$tdataempresa[".advSearchFields"][] = "id";
$tdataempresa[".advSearchFields"][] = "titulo_por";
$tdataempresa[".advSearchFields"][] = "titulo_eng";
$tdataempresa[".advSearchFields"][] = "titulo_esp";
$tdataempresa[".advSearchFields"][] = "texto_por";
$tdataempresa[".advSearchFields"][] = "texto_eng";
$tdataempresa[".advSearchFields"][] = "texto_esp";

$tdataempresa[".tableType"] = "list";

$tdataempresa[".printerPageOrientation"] = 0;
$tdataempresa[".nPrinterPageScale"] = 100;

$tdataempresa[".nPrinterSplitRecords"] = 40;

$tdataempresa[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdataempresa[".pageSize"] = 20;

$tdataempresa[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataempresa[".strOrderBy"] = $tstrOrderBy;

$tdataempresa[".orderindexes"] = array();

$tdataempresa[".sqlHead"] = "SELECT id,  	titulo_por,  	titulo_eng,  	titulo_esp,  	texto_por,  	texto_eng,  	texto_esp";
$tdataempresa[".sqlFrom"] = "FROM empresa";
$tdataempresa[".sqlWhereExpr"] = "";
$tdataempresa[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataempresa[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataempresa[".arrGroupsPerPage"] = $arrGPP;

$tdataempresa[".highlightSearchResults"] = true;

$tableKeysempresa = array();
$tableKeysempresa[] = "id";
$tdataempresa[".Keys"] = $tableKeysempresa;

$tdataempresa[".listFields"] = array();
$tdataempresa[".listFields"][] = "id";
$tdataempresa[".listFields"][] = "titulo_por";
$tdataempresa[".listFields"][] = "titulo_eng";
$tdataempresa[".listFields"][] = "titulo_esp";
$tdataempresa[".listFields"][] = "texto_por";
$tdataempresa[".listFields"][] = "texto_eng";
$tdataempresa[".listFields"][] = "texto_esp";

$tdataempresa[".hideMobileList"] = array();


$tdataempresa[".viewFields"] = array();
$tdataempresa[".viewFields"][] = "id";
$tdataempresa[".viewFields"][] = "titulo_por";
$tdataempresa[".viewFields"][] = "titulo_eng";
$tdataempresa[".viewFields"][] = "titulo_esp";
$tdataempresa[".viewFields"][] = "texto_por";
$tdataempresa[".viewFields"][] = "texto_eng";
$tdataempresa[".viewFields"][] = "texto_esp";

$tdataempresa[".addFields"] = array();
$tdataempresa[".addFields"][] = "titulo_por";
$tdataempresa[".addFields"][] = "titulo_eng";
$tdataempresa[".addFields"][] = "titulo_esp";
$tdataempresa[".addFields"][] = "texto_por";
$tdataempresa[".addFields"][] = "texto_eng";
$tdataempresa[".addFields"][] = "texto_esp";

$tdataempresa[".inlineAddFields"] = array();
$tdataempresa[".inlineAddFields"][] = "titulo_por";
$tdataempresa[".inlineAddFields"][] = "titulo_eng";
$tdataempresa[".inlineAddFields"][] = "titulo_esp";
$tdataempresa[".inlineAddFields"][] = "texto_por";
$tdataempresa[".inlineAddFields"][] = "texto_eng";
$tdataempresa[".inlineAddFields"][] = "texto_esp";

$tdataempresa[".editFields"] = array();
$tdataempresa[".editFields"][] = "titulo_por";
$tdataempresa[".editFields"][] = "titulo_eng";
$tdataempresa[".editFields"][] = "titulo_esp";
$tdataempresa[".editFields"][] = "texto_por";
$tdataempresa[".editFields"][] = "texto_eng";
$tdataempresa[".editFields"][] = "texto_esp";

$tdataempresa[".inlineEditFields"] = array();
$tdataempresa[".inlineEditFields"][] = "titulo_por";
$tdataempresa[".inlineEditFields"][] = "titulo_eng";
$tdataempresa[".inlineEditFields"][] = "titulo_esp";
$tdataempresa[".inlineEditFields"][] = "texto_por";
$tdataempresa[".inlineEditFields"][] = "texto_eng";
$tdataempresa[".inlineEditFields"][] = "texto_esp";

$tdataempresa[".exportFields"] = array();
$tdataempresa[".exportFields"][] = "id";
$tdataempresa[".exportFields"][] = "titulo_por";
$tdataempresa[".exportFields"][] = "titulo_eng";
$tdataempresa[".exportFields"][] = "titulo_esp";
$tdataempresa[".exportFields"][] = "texto_por";
$tdataempresa[".exportFields"][] = "texto_eng";
$tdataempresa[".exportFields"][] = "texto_esp";

$tdataempresa[".importFields"] = array();
$tdataempresa[".importFields"][] = "id";
$tdataempresa[".importFields"][] = "titulo_por";
$tdataempresa[".importFields"][] = "titulo_eng";
$tdataempresa[".importFields"][] = "titulo_esp";
$tdataempresa[".importFields"][] = "texto_por";
$tdataempresa[".importFields"][] = "texto_eng";
$tdataempresa[".importFields"][] = "texto_esp";

$tdataempresa[".printFields"] = array();
$tdataempresa[".printFields"][] = "id";
$tdataempresa[".printFields"][] = "titulo_por";
$tdataempresa[".printFields"][] = "titulo_eng";
$tdataempresa[".printFields"][] = "titulo_esp";
$tdataempresa[".printFields"][] = "texto_por";
$tdataempresa[".printFields"][] = "texto_eng";
$tdataempresa[".printFields"][] = "texto_esp";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "empresa";
	$fdata["Label"] = GetFieldLabel("empresa","id"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
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

	

	
	$tdataempresa["id"] = $fdata;
//	titulo_por
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "titulo_por";
	$fdata["GoodName"] = "titulo_por";
	$fdata["ownerTable"] = "empresa";
	$fdata["Label"] = GetFieldLabel("empresa","titulo_por"); 
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
	
		$fdata["strField"] = "titulo_por"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "titulo_por";
	
		
		
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
			$edata["EditParams"].= " maxlength=55";
	
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

	

	
	$tdataempresa["titulo_por"] = $fdata;
//	titulo_eng
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "titulo_eng";
	$fdata["GoodName"] = "titulo_eng";
	$fdata["ownerTable"] = "empresa";
	$fdata["Label"] = GetFieldLabel("empresa","titulo_eng"); 
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
	
		$fdata["strField"] = "titulo_eng"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "titulo_eng";
	
		
		
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
			$edata["EditParams"].= " maxlength=55";
	
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

	

	
	$tdataempresa["titulo_eng"] = $fdata;
//	titulo_esp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "titulo_esp";
	$fdata["GoodName"] = "titulo_esp";
	$fdata["ownerTable"] = "empresa";
	$fdata["Label"] = GetFieldLabel("empresa","titulo_esp"); 
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
	
		$fdata["strField"] = "titulo_esp"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "titulo_esp";
	
		
		
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
			$edata["EditParams"].= " maxlength=55";
	
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

	

	
	$tdataempresa["titulo_esp"] = $fdata;
//	texto_por
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "texto_por";
	$fdata["GoodName"] = "texto_por";
	$fdata["ownerTable"] = "empresa";
	$fdata["Label"] = GetFieldLabel("empresa","texto_por"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "texto_por"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "texto_por";
	
		
		
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
	
	$edata = array("EditFormat" => "Text area");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
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

	

	
	$tdataempresa["texto_por"] = $fdata;
//	texto_eng
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "texto_eng";
	$fdata["GoodName"] = "texto_eng";
	$fdata["ownerTable"] = "empresa";
	$fdata["Label"] = GetFieldLabel("empresa","texto_eng"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "texto_eng"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "texto_eng";
	
		
		
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
	
	$edata = array("EditFormat" => "Text area");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
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

	

	
	$tdataempresa["texto_eng"] = $fdata;
//	texto_esp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "texto_esp";
	$fdata["GoodName"] = "texto_esp";
	$fdata["ownerTable"] = "empresa";
	$fdata["Label"] = GetFieldLabel("empresa","texto_esp"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "texto_esp"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "texto_esp";
	
		
		
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
	
	$edata = array("EditFormat" => "Text area");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
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

	

	
	$tdataempresa["texto_esp"] = $fdata;

	
$tables_data["empresa"]=&$tdataempresa;
$field_labels["empresa"] = &$fieldLabelsempresa;
$fieldToolTips["empresa"] = &$fieldToolTipsempresa;
$page_titles["empresa"] = &$pageTitlesempresa;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["empresa"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["empresa"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_empresa()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	titulo_por,  	titulo_eng,  	titulo_esp,  	texto_por,  	texto_eng,  	texto_esp";
$proto0["m_strFrom"] = "FROM empresa";
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
	"m_strTable" => "empresa",
	"m_srcTableName" => "empresa"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "empresa";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "titulo_por",
	"m_strTable" => "empresa",
	"m_srcTableName" => "empresa"
));

$proto7["m_sql"] = "titulo_por";
$proto7["m_srcTableName"] = "empresa";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "titulo_eng",
	"m_strTable" => "empresa",
	"m_srcTableName" => "empresa"
));

$proto9["m_sql"] = "titulo_eng";
$proto9["m_srcTableName"] = "empresa";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "titulo_esp",
	"m_strTable" => "empresa",
	"m_srcTableName" => "empresa"
));

$proto11["m_sql"] = "titulo_esp";
$proto11["m_srcTableName"] = "empresa";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "texto_por",
	"m_strTable" => "empresa",
	"m_srcTableName" => "empresa"
));

$proto13["m_sql"] = "texto_por";
$proto13["m_srcTableName"] = "empresa";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "texto_eng",
	"m_strTable" => "empresa",
	"m_srcTableName" => "empresa"
));

$proto15["m_sql"] = "texto_eng";
$proto15["m_srcTableName"] = "empresa";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "texto_esp",
	"m_strTable" => "empresa",
	"m_srcTableName" => "empresa"
));

$proto17["m_sql"] = "texto_esp";
$proto17["m_srcTableName"] = "empresa";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "empresa";
$proto20["m_srcTableName"] = "empresa";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "id";
$proto20["m_columns"][] = "titulo_por";
$proto20["m_columns"][] = "titulo_eng";
$proto20["m_columns"][] = "titulo_esp";
$proto20["m_columns"][] = "texto_por";
$proto20["m_columns"][] = "texto_eng";
$proto20["m_columns"][] = "texto_esp";
$obj = new SQLTable($proto20);

$proto19["m_table"] = $obj;
$proto19["m_sql"] = "empresa";
$proto19["m_alias"] = "";
$proto19["m_srcTableName"] = "empresa";
$proto21=array();
$proto21["m_sql"] = "";
$proto21["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto21["m_column"]=$obj;
$proto21["m_contained"] = array();
$proto21["m_strCase"] = "";
$proto21["m_havingmode"] = false;
$proto21["m_inBrackets"] = false;
$proto21["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto21);

$proto19["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto19);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="empresa";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_empresa = createSqlQuery_empresa();


	
							
	
$tdataempresa[".sqlquery"] = $queryData_empresa;

$tableEvents["empresa"] = new eventsBase;
$tdataempresa[".hasEvents"] = false;

?>