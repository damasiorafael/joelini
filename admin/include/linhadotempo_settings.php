<?php
require_once(getabspath("classes/cipherer.php"));




$tdatalinhadotempo = array();	
	$tdatalinhadotempo[".truncateText"] = true;
	$tdatalinhadotempo[".NumberOfChars"] = 80; 
	$tdatalinhadotempo[".ShortName"] = "linhadotempo";
	$tdatalinhadotempo[".OwnerID"] = "";
	$tdatalinhadotempo[".OriginalTable"] = "linhadotempo";

//	field labels
$fieldLabelslinhadotempo = array();
$fieldToolTipslinhadotempo = array();
$pageTitleslinhadotempo = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelslinhadotempo["Portuguese(Brazil)"] = array();
	$fieldToolTipslinhadotempo["Portuguese(Brazil)"] = array();
	$pageTitleslinhadotempo["Portuguese(Brazil)"] = array();
	$fieldLabelslinhadotempo["Portuguese(Brazil)"]["id"] = "Id";
	$fieldToolTipslinhadotempo["Portuguese(Brazil)"]["id"] = "";
	$fieldLabelslinhadotempo["Portuguese(Brazil)"]["ano"] = "Ano";
	$fieldToolTipslinhadotempo["Portuguese(Brazil)"]["ano"] = "";
	$fieldLabelslinhadotempo["Portuguese(Brazil)"]["texto_por"] = "Texto Por";
	$fieldToolTipslinhadotempo["Portuguese(Brazil)"]["texto_por"] = "";
	$fieldLabelslinhadotempo["Portuguese(Brazil)"]["texto_eng"] = "Texto Eng";
	$fieldToolTipslinhadotempo["Portuguese(Brazil)"]["texto_eng"] = "";
	$fieldLabelslinhadotempo["Portuguese(Brazil)"]["texto_esp"] = "Texto Esp";
	$fieldToolTipslinhadotempo["Portuguese(Brazil)"]["texto_esp"] = "";
	$fieldLabelslinhadotempo["Portuguese(Brazil)"]["imagem_destaque"] = "Imagem Destaque";
	$fieldToolTipslinhadotempo["Portuguese(Brazil)"]["imagem_destaque"] = "";
	$fieldLabelslinhadotempo["Portuguese(Brazil)"]["imagem_principal"] = "Imagem Principal";
	$fieldToolTipslinhadotempo["Portuguese(Brazil)"]["imagem_principal"] = "";
	if (count($fieldToolTipslinhadotempo["Portuguese(Brazil)"]))
		$tdatalinhadotempo[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelslinhadotempo[""] = array();
	$fieldToolTipslinhadotempo[""] = array();
	$pageTitleslinhadotempo[""] = array();
	if (count($fieldToolTipslinhadotempo[""]))
		$tdatalinhadotempo[".isUseToolTips"] = true;
}
	
	
	$tdatalinhadotempo[".NCSearch"] = true;



$tdatalinhadotempo[".shortTableName"] = "linhadotempo";
$tdatalinhadotempo[".nSecOptions"] = 0;
$tdatalinhadotempo[".recsPerRowList"] = 1;
$tdatalinhadotempo[".mainTableOwnerID"] = "";
$tdatalinhadotempo[".moveNext"] = 1;
$tdatalinhadotempo[".nType"] = 0;

$tdatalinhadotempo[".strOriginalTableName"] = "linhadotempo";




$tdatalinhadotempo[".showAddInPopup"] = false;

$tdatalinhadotempo[".showEditInPopup"] = false;

$tdatalinhadotempo[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatalinhadotempo[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatalinhadotempo[".fieldsForRegister"] = array();

$tdatalinhadotempo[".listAjax"] = false;

	$tdatalinhadotempo[".audit"] = false;

	$tdatalinhadotempo[".locking"] = false;

$tdatalinhadotempo[".edit"] = true;

$tdatalinhadotempo[".list"] = true;

$tdatalinhadotempo[".inlineEdit"] = true;
$tdatalinhadotempo[".inlineAdd"] = true;
$tdatalinhadotempo[".view"] = true;

$tdatalinhadotempo[".import"] = true;

$tdatalinhadotempo[".exportTo"] = true;

$tdatalinhadotempo[".printFriendly"] = true;

$tdatalinhadotempo[".delete"] = true;

$tdatalinhadotempo[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatalinhadotempo[".searchSaving"] = false;
//

$tdatalinhadotempo[".showSearchPanel"] = true;
		$tdatalinhadotempo[".flexibleSearch"] = true;		

if (isMobile())
	$tdatalinhadotempo[".isUseAjaxSuggest"] = false;
else 
	$tdatalinhadotempo[".isUseAjaxSuggest"] = true;

$tdatalinhadotempo[".rowHighlite"] = true;



$tdatalinhadotempo[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalinhadotempo[".isUseTimeForSearch"] = false;





$tdatalinhadotempo[".allSearchFields"] = array();
$tdatalinhadotempo[".filterFields"] = array();
$tdatalinhadotempo[".requiredSearchFields"] = array();

$tdatalinhadotempo[".allSearchFields"][] = "id";
	$tdatalinhadotempo[".allSearchFields"][] = "ano";
	$tdatalinhadotempo[".allSearchFields"][] = "texto_por";
	$tdatalinhadotempo[".allSearchFields"][] = "texto_eng";
	$tdatalinhadotempo[".allSearchFields"][] = "texto_esp";
	$tdatalinhadotempo[".allSearchFields"][] = "imagem_destaque";
	$tdatalinhadotempo[".allSearchFields"][] = "imagem_principal";
	

$tdatalinhadotempo[".googleLikeFields"] = array();
$tdatalinhadotempo[".googleLikeFields"][] = "id";
$tdatalinhadotempo[".googleLikeFields"][] = "ano";
$tdatalinhadotempo[".googleLikeFields"][] = "texto_por";
$tdatalinhadotempo[".googleLikeFields"][] = "texto_eng";
$tdatalinhadotempo[".googleLikeFields"][] = "texto_esp";
$tdatalinhadotempo[".googleLikeFields"][] = "imagem_destaque";
$tdatalinhadotempo[".googleLikeFields"][] = "imagem_principal";


$tdatalinhadotempo[".advSearchFields"] = array();
$tdatalinhadotempo[".advSearchFields"][] = "id";
$tdatalinhadotempo[".advSearchFields"][] = "ano";
$tdatalinhadotempo[".advSearchFields"][] = "texto_por";
$tdatalinhadotempo[".advSearchFields"][] = "texto_eng";
$tdatalinhadotempo[".advSearchFields"][] = "texto_esp";
$tdatalinhadotempo[".advSearchFields"][] = "imagem_destaque";
$tdatalinhadotempo[".advSearchFields"][] = "imagem_principal";

$tdatalinhadotempo[".tableType"] = "list";

$tdatalinhadotempo[".printerPageOrientation"] = 0;
$tdatalinhadotempo[".nPrinterPageScale"] = 100;

$tdatalinhadotempo[".nPrinterSplitRecords"] = 40;

$tdatalinhadotempo[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdatalinhadotempo[".pageSize"] = 20;

$tdatalinhadotempo[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatalinhadotempo[".strOrderBy"] = $tstrOrderBy;

$tdatalinhadotempo[".orderindexes"] = array();

$tdatalinhadotempo[".sqlHead"] = "SELECT id,  	ano,  	texto_por,  	texto_eng,  	texto_esp,  	imagem_destaque,  	imagem_principal";
$tdatalinhadotempo[".sqlFrom"] = "FROM linhadotempo";
$tdatalinhadotempo[".sqlWhereExpr"] = "";
$tdatalinhadotempo[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalinhadotempo[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalinhadotempo[".arrGroupsPerPage"] = $arrGPP;

$tdatalinhadotempo[".highlightSearchResults"] = true;

$tableKeyslinhadotempo = array();
$tableKeyslinhadotempo[] = "id";
$tdatalinhadotempo[".Keys"] = $tableKeyslinhadotempo;

$tdatalinhadotempo[".listFields"] = array();
$tdatalinhadotempo[".listFields"][] = "id";
$tdatalinhadotempo[".listFields"][] = "ano";
$tdatalinhadotempo[".listFields"][] = "texto_por";
$tdatalinhadotempo[".listFields"][] = "texto_eng";
$tdatalinhadotempo[".listFields"][] = "texto_esp";
$tdatalinhadotempo[".listFields"][] = "imagem_destaque";
$tdatalinhadotempo[".listFields"][] = "imagem_principal";

$tdatalinhadotempo[".hideMobileList"] = array();


$tdatalinhadotempo[".viewFields"] = array();
$tdatalinhadotempo[".viewFields"][] = "id";
$tdatalinhadotempo[".viewFields"][] = "ano";
$tdatalinhadotempo[".viewFields"][] = "texto_por";
$tdatalinhadotempo[".viewFields"][] = "texto_eng";
$tdatalinhadotempo[".viewFields"][] = "texto_esp";
$tdatalinhadotempo[".viewFields"][] = "imagem_destaque";
$tdatalinhadotempo[".viewFields"][] = "imagem_principal";

$tdatalinhadotempo[".addFields"] = array();
$tdatalinhadotempo[".addFields"][] = "ano";
$tdatalinhadotempo[".addFields"][] = "texto_por";
$tdatalinhadotempo[".addFields"][] = "texto_eng";
$tdatalinhadotempo[".addFields"][] = "texto_esp";
$tdatalinhadotempo[".addFields"][] = "imagem_destaque";
$tdatalinhadotempo[".addFields"][] = "imagem_principal";

$tdatalinhadotempo[".inlineAddFields"] = array();
$tdatalinhadotempo[".inlineAddFields"][] = "ano";
$tdatalinhadotempo[".inlineAddFields"][] = "texto_por";
$tdatalinhadotempo[".inlineAddFields"][] = "texto_eng";
$tdatalinhadotempo[".inlineAddFields"][] = "texto_esp";
$tdatalinhadotempo[".inlineAddFields"][] = "imagem_destaque";
$tdatalinhadotempo[".inlineAddFields"][] = "imagem_principal";

$tdatalinhadotempo[".editFields"] = array();
$tdatalinhadotempo[".editFields"][] = "ano";
$tdatalinhadotempo[".editFields"][] = "texto_por";
$tdatalinhadotempo[".editFields"][] = "texto_eng";
$tdatalinhadotempo[".editFields"][] = "texto_esp";
$tdatalinhadotempo[".editFields"][] = "imagem_destaque";
$tdatalinhadotempo[".editFields"][] = "imagem_principal";

$tdatalinhadotempo[".inlineEditFields"] = array();
$tdatalinhadotempo[".inlineEditFields"][] = "ano";
$tdatalinhadotempo[".inlineEditFields"][] = "texto_por";
$tdatalinhadotempo[".inlineEditFields"][] = "texto_eng";
$tdatalinhadotempo[".inlineEditFields"][] = "texto_esp";
$tdatalinhadotempo[".inlineEditFields"][] = "imagem_destaque";
$tdatalinhadotempo[".inlineEditFields"][] = "imagem_principal";

$tdatalinhadotempo[".exportFields"] = array();
$tdatalinhadotempo[".exportFields"][] = "id";
$tdatalinhadotempo[".exportFields"][] = "ano";
$tdatalinhadotempo[".exportFields"][] = "texto_por";
$tdatalinhadotempo[".exportFields"][] = "texto_eng";
$tdatalinhadotempo[".exportFields"][] = "texto_esp";
$tdatalinhadotempo[".exportFields"][] = "imagem_destaque";
$tdatalinhadotempo[".exportFields"][] = "imagem_principal";

$tdatalinhadotempo[".importFields"] = array();
$tdatalinhadotempo[".importFields"][] = "id";
$tdatalinhadotempo[".importFields"][] = "ano";
$tdatalinhadotempo[".importFields"][] = "texto_por";
$tdatalinhadotempo[".importFields"][] = "texto_eng";
$tdatalinhadotempo[".importFields"][] = "texto_esp";
$tdatalinhadotempo[".importFields"][] = "imagem_destaque";
$tdatalinhadotempo[".importFields"][] = "imagem_principal";

$tdatalinhadotempo[".printFields"] = array();
$tdatalinhadotempo[".printFields"][] = "id";
$tdatalinhadotempo[".printFields"][] = "ano";
$tdatalinhadotempo[".printFields"][] = "texto_por";
$tdatalinhadotempo[".printFields"][] = "texto_eng";
$tdatalinhadotempo[".printFields"][] = "texto_esp";
$tdatalinhadotempo[".printFields"][] = "imagem_destaque";
$tdatalinhadotempo[".printFields"][] = "imagem_principal";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "linhadotempo";
	$fdata["Label"] = GetFieldLabel("linhadotempo","id"); 
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

	

	
	$tdatalinhadotempo["id"] = $fdata;
//	ano
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ano";
	$fdata["GoodName"] = "ano";
	$fdata["ownerTable"] = "linhadotempo";
	$fdata["Label"] = GetFieldLabel("linhadotempo","ano"); 
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
	
		$fdata["strField"] = "ano"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ano";
	
		
		
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

	

	
	$tdatalinhadotempo["ano"] = $fdata;
//	texto_por
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "texto_por";
	$fdata["GoodName"] = "texto_por";
	$fdata["ownerTable"] = "linhadotempo";
	$fdata["Label"] = GetFieldLabel("linhadotempo","texto_por"); 
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

	

	
	$tdatalinhadotempo["texto_por"] = $fdata;
//	texto_eng
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "texto_eng";
	$fdata["GoodName"] = "texto_eng";
	$fdata["ownerTable"] = "linhadotempo";
	$fdata["Label"] = GetFieldLabel("linhadotempo","texto_eng"); 
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

	

	
	$tdatalinhadotempo["texto_eng"] = $fdata;
//	texto_esp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "texto_esp";
	$fdata["GoodName"] = "texto_esp";
	$fdata["ownerTable"] = "linhadotempo";
	$fdata["Label"] = GetFieldLabel("linhadotempo","texto_esp"); 
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

	

	
	$tdatalinhadotempo["texto_esp"] = $fdata;
//	imagem_destaque
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "imagem_destaque";
	$fdata["GoodName"] = "imagem_destaque";
	$fdata["ownerTable"] = "linhadotempo";
	$fdata["Label"] = GetFieldLabel("linhadotempo","imagem_destaque"); 
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
	
		$fdata["strField"] = "imagem_destaque"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "imagem_destaque";
	
		
		
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

	

	
	$tdatalinhadotempo["imagem_destaque"] = $fdata;
//	imagem_principal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "imagem_principal";
	$fdata["GoodName"] = "imagem_principal";
	$fdata["ownerTable"] = "linhadotempo";
	$fdata["Label"] = GetFieldLabel("linhadotempo","imagem_principal"); 
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
	
		$fdata["strField"] = "imagem_principal"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "imagem_principal";
	
		
		
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

	

	
	$tdatalinhadotempo["imagem_principal"] = $fdata;

	
$tables_data["linhadotempo"]=&$tdatalinhadotempo;
$field_labels["linhadotempo"] = &$fieldLabelslinhadotempo;
$fieldToolTips["linhadotempo"] = &$fieldToolTipslinhadotempo;
$page_titles["linhadotempo"] = &$pageTitleslinhadotempo;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["linhadotempo"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["linhadotempo"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_linhadotempo()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	ano,  	texto_por,  	texto_eng,  	texto_esp,  	imagem_destaque,  	imagem_principal";
$proto0["m_strFrom"] = "FROM linhadotempo";
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
	"m_strTable" => "linhadotempo",
	"m_srcTableName" => "linhadotempo"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "linhadotempo";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "ano",
	"m_strTable" => "linhadotempo",
	"m_srcTableName" => "linhadotempo"
));

$proto7["m_sql"] = "ano";
$proto7["m_srcTableName"] = "linhadotempo";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "texto_por",
	"m_strTable" => "linhadotempo",
	"m_srcTableName" => "linhadotempo"
));

$proto9["m_sql"] = "texto_por";
$proto9["m_srcTableName"] = "linhadotempo";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "texto_eng",
	"m_strTable" => "linhadotempo",
	"m_srcTableName" => "linhadotempo"
));

$proto11["m_sql"] = "texto_eng";
$proto11["m_srcTableName"] = "linhadotempo";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "texto_esp",
	"m_strTable" => "linhadotempo",
	"m_srcTableName" => "linhadotempo"
));

$proto13["m_sql"] = "texto_esp";
$proto13["m_srcTableName"] = "linhadotempo";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "imagem_destaque",
	"m_strTable" => "linhadotempo",
	"m_srcTableName" => "linhadotempo"
));

$proto15["m_sql"] = "imagem_destaque";
$proto15["m_srcTableName"] = "linhadotempo";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "imagem_principal",
	"m_strTable" => "linhadotempo",
	"m_srcTableName" => "linhadotempo"
));

$proto17["m_sql"] = "imagem_principal";
$proto17["m_srcTableName"] = "linhadotempo";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "linhadotempo";
$proto20["m_srcTableName"] = "linhadotempo";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "id";
$proto20["m_columns"][] = "ano";
$proto20["m_columns"][] = "texto_por";
$proto20["m_columns"][] = "texto_eng";
$proto20["m_columns"][] = "texto_esp";
$proto20["m_columns"][] = "imagem_destaque";
$proto20["m_columns"][] = "imagem_principal";
$obj = new SQLTable($proto20);

$proto19["m_table"] = $obj;
$proto19["m_sql"] = "linhadotempo";
$proto19["m_alias"] = "";
$proto19["m_srcTableName"] = "linhadotempo";
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
$proto0["m_srcTableName"]="linhadotempo";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_linhadotempo = createSqlQuery_linhadotempo();


	
							
	
$tdatalinhadotempo[".sqlquery"] = $queryData_linhadotempo;

$tableEvents["linhadotempo"] = new eventsBase;
$tdatalinhadotempo[".hasEvents"] = false;

?>