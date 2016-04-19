<?php
require_once(getabspath("classes/cipherer.php"));




$tdatasubcategorias11 = array();	
	$tdatasubcategorias11[".truncateText"] = true;
	$tdatasubcategorias11[".NumberOfChars"] = 80; 
	$tdatasubcategorias11[".ShortName"] = "subcategorias11";
	$tdatasubcategorias11[".OwnerID"] = "";
	$tdatasubcategorias11[".OriginalTable"] = "subcategorias";

//	field labels
$fieldLabelssubcategorias11 = array();
$fieldToolTipssubcategorias11 = array();
$pageTitlessubcategorias11 = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelssubcategorias11["Portuguese(Brazil)"] = array();
	$fieldToolTipssubcategorias11["Portuguese(Brazil)"] = array();
	$pageTitlessubcategorias11["Portuguese(Brazil)"] = array();
	$fieldLabelssubcategorias11["Portuguese(Brazil)"]["id"] = "Id";
	$fieldToolTipssubcategorias11["Portuguese(Brazil)"]["id"] = "";
	$fieldLabelssubcategorias11["Portuguese(Brazil)"]["id_categoria"] = "Id Categoria";
	$fieldToolTipssubcategorias11["Portuguese(Brazil)"]["id_categoria"] = "";
	$fieldLabelssubcategorias11["Portuguese(Brazil)"]["nome_por"] = "Nome Por";
	$fieldToolTipssubcategorias11["Portuguese(Brazil)"]["nome_por"] = "";
	$fieldLabelssubcategorias11["Portuguese(Brazil)"]["nome_eng"] = "Nome Eng";
	$fieldToolTipssubcategorias11["Portuguese(Brazil)"]["nome_eng"] = "";
	$fieldLabelssubcategorias11["Portuguese(Brazil)"]["nome_esp"] = "Nome Esp";
	$fieldToolTipssubcategorias11["Portuguese(Brazil)"]["nome_esp"] = "";
	$fieldLabelssubcategorias11["Portuguese(Brazil)"]["ocultar"] = "Ocultar";
	$fieldToolTipssubcategorias11["Portuguese(Brazil)"]["ocultar"] = "";
	$fieldLabelssubcategorias11["Portuguese(Brazil)"]["ordem"] = "Ordem";
	$fieldToolTipssubcategorias11["Portuguese(Brazil)"]["ordem"] = "";
	if (count($fieldToolTipssubcategorias11["Portuguese(Brazil)"]))
		$tdatasubcategorias11[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelssubcategorias11[""] = array();
	$fieldToolTipssubcategorias11[""] = array();
	$pageTitlessubcategorias11[""] = array();
	if (count($fieldToolTipssubcategorias11[""]))
		$tdatasubcategorias11[".isUseToolTips"] = true;
}
	
	
	$tdatasubcategorias11[".NCSearch"] = true;



$tdatasubcategorias11[".shortTableName"] = "subcategorias11";
$tdatasubcategorias11[".nSecOptions"] = 0;
$tdatasubcategorias11[".recsPerRowList"] = 1;
$tdatasubcategorias11[".mainTableOwnerID"] = "";
$tdatasubcategorias11[".moveNext"] = 1;
$tdatasubcategorias11[".nType"] = 1;

$tdatasubcategorias11[".strOriginalTableName"] = "subcategorias";




$tdatasubcategorias11[".showAddInPopup"] = false;

$tdatasubcategorias11[".showEditInPopup"] = false;

$tdatasubcategorias11[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatasubcategorias11[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatasubcategorias11[".fieldsForRegister"] = array();

$tdatasubcategorias11[".listAjax"] = false;

	$tdatasubcategorias11[".audit"] = false;

	$tdatasubcategorias11[".locking"] = false;


$tdatasubcategorias11[".list"] = true;

$tdatasubcategorias11[".inlineEdit"] = true;
$tdatasubcategorias11[".inlineAdd"] = true;




$tdatasubcategorias11[".delete"] = true;

$tdatasubcategorias11[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatasubcategorias11[".searchSaving"] = false;
//

$tdatasubcategorias11[".showSearchPanel"] = true;
		$tdatasubcategorias11[".flexibleSearch"] = true;		

if (isMobile())
	$tdatasubcategorias11[".isUseAjaxSuggest"] = false;
else 
	$tdatasubcategorias11[".isUseAjaxSuggest"] = true;

$tdatasubcategorias11[".rowHighlite"] = true;



$tdatasubcategorias11[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasubcategorias11[".isUseTimeForSearch"] = false;





$tdatasubcategorias11[".allSearchFields"] = array();
$tdatasubcategorias11[".filterFields"] = array();
$tdatasubcategorias11[".requiredSearchFields"] = array();

$tdatasubcategorias11[".allSearchFields"][] = "id";
	$tdatasubcategorias11[".allSearchFields"][] = "id_categoria";
	$tdatasubcategorias11[".allSearchFields"][] = "nome_por";
	$tdatasubcategorias11[".allSearchFields"][] = "nome_eng";
	$tdatasubcategorias11[".allSearchFields"][] = "nome_esp";
	$tdatasubcategorias11[".allSearchFields"][] = "ocultar";
	$tdatasubcategorias11[".allSearchFields"][] = "ordem";
	

$tdatasubcategorias11[".googleLikeFields"] = array();
$tdatasubcategorias11[".googleLikeFields"][] = "id";
$tdatasubcategorias11[".googleLikeFields"][] = "id_categoria";
$tdatasubcategorias11[".googleLikeFields"][] = "nome_por";
$tdatasubcategorias11[".googleLikeFields"][] = "nome_eng";
$tdatasubcategorias11[".googleLikeFields"][] = "nome_esp";
$tdatasubcategorias11[".googleLikeFields"][] = "ocultar";
$tdatasubcategorias11[".googleLikeFields"][] = "ordem";


$tdatasubcategorias11[".advSearchFields"] = array();
$tdatasubcategorias11[".advSearchFields"][] = "id";
$tdatasubcategorias11[".advSearchFields"][] = "id_categoria";
$tdatasubcategorias11[".advSearchFields"][] = "nome_por";
$tdatasubcategorias11[".advSearchFields"][] = "nome_eng";
$tdatasubcategorias11[".advSearchFields"][] = "nome_esp";
$tdatasubcategorias11[".advSearchFields"][] = "ocultar";
$tdatasubcategorias11[".advSearchFields"][] = "ordem";

$tdatasubcategorias11[".tableType"] = "list";

$tdatasubcategorias11[".printerPageOrientation"] = 0;
$tdatasubcategorias11[".nPrinterPageScale"] = 100;

$tdatasubcategorias11[".nPrinterSplitRecords"] = 40;

$tdatasubcategorias11[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdatasubcategorias11[".pageSize"] = 20;

$tdatasubcategorias11[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasubcategorias11[".strOrderBy"] = $tstrOrderBy;

$tdatasubcategorias11[".orderindexes"] = array();

$tdatasubcategorias11[".sqlHead"] = "SELECT id,  	id_categoria,  	nome_por,  	nome_eng,  	nome_esp,  	ocultar,  	ordem";
$tdatasubcategorias11[".sqlFrom"] = "FROM subcategorias";
$tdatasubcategorias11[".sqlWhereExpr"] = "";
$tdatasubcategorias11[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasubcategorias11[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasubcategorias11[".arrGroupsPerPage"] = $arrGPP;

$tdatasubcategorias11[".highlightSearchResults"] = true;

$tableKeyssubcategorias11 = array();
$tableKeyssubcategorias11[] = "id";
$tdatasubcategorias11[".Keys"] = $tableKeyssubcategorias11;

$tdatasubcategorias11[".listFields"] = array();
$tdatasubcategorias11[".listFields"][] = "ocultar";
$tdatasubcategorias11[".listFields"][] = "ordem";
$tdatasubcategorias11[".listFields"][] = "id";
$tdatasubcategorias11[".listFields"][] = "id_categoria";
$tdatasubcategorias11[".listFields"][] = "nome_por";
$tdatasubcategorias11[".listFields"][] = "nome_eng";
$tdatasubcategorias11[".listFields"][] = "nome_esp";

$tdatasubcategorias11[".hideMobileList"] = array();


$tdatasubcategorias11[".viewFields"] = array();
$tdatasubcategorias11[".viewFields"][] = "ocultar";
$tdatasubcategorias11[".viewFields"][] = "ordem";

$tdatasubcategorias11[".addFields"] = array();
$tdatasubcategorias11[".addFields"][] = "ocultar";
$tdatasubcategorias11[".addFields"][] = "ordem";

$tdatasubcategorias11[".inlineAddFields"] = array();
$tdatasubcategorias11[".inlineAddFields"][] = "ordem";
$tdatasubcategorias11[".inlineAddFields"][] = "ocultar";
$tdatasubcategorias11[".inlineAddFields"][] = "id_categoria";
$tdatasubcategorias11[".inlineAddFields"][] = "nome_por";
$tdatasubcategorias11[".inlineAddFields"][] = "nome_eng";
$tdatasubcategorias11[".inlineAddFields"][] = "nome_esp";

$tdatasubcategorias11[".editFields"] = array();
$tdatasubcategorias11[".editFields"][] = "ocultar";
$tdatasubcategorias11[".editFields"][] = "ordem";

$tdatasubcategorias11[".inlineEditFields"] = array();
$tdatasubcategorias11[".inlineEditFields"][] = "ordem";
$tdatasubcategorias11[".inlineEditFields"][] = "ocultar";
$tdatasubcategorias11[".inlineEditFields"][] = "id_categoria";
$tdatasubcategorias11[".inlineEditFields"][] = "nome_por";
$tdatasubcategorias11[".inlineEditFields"][] = "nome_eng";
$tdatasubcategorias11[".inlineEditFields"][] = "nome_esp";

$tdatasubcategorias11[".exportFields"] = array();
$tdatasubcategorias11[".exportFields"][] = "ocultar";
$tdatasubcategorias11[".exportFields"][] = "ordem";

$tdatasubcategorias11[".importFields"] = array();
$tdatasubcategorias11[".importFields"][] = "ocultar";
$tdatasubcategorias11[".importFields"][] = "ordem";

$tdatasubcategorias11[".printFields"] = array();
$tdatasubcategorias11[".printFields"][] = "ocultar";
$tdatasubcategorias11[".printFields"][] = "ordem";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "subcategorias";
	$fdata["Label"] = GetFieldLabel("subcategorias11","id"); 
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

	

	
	$tdatasubcategorias11["id"] = $fdata;
//	id_categoria
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_categoria";
	$fdata["GoodName"] = "id_categoria";
	$fdata["ownerTable"] = "subcategorias";
	$fdata["Label"] = GetFieldLabel("subcategorias11","id_categoria"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "id_categoria"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_categoria";
	
		
		
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "categorias";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "nome_por";
	
		
	$edata["LookupOrderBy"] = "id";
	
		$edata["LookupDesc"] = true;
	
			
		
				
	
	
		
		$edata["SelectSize"] = 1;
		
// End Lookup Settings


		
		
		
		
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

	

	
	$tdatasubcategorias11["id_categoria"] = $fdata;
//	nome_por
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "nome_por";
	$fdata["GoodName"] = "nome_por";
	$fdata["ownerTable"] = "subcategorias";
	$fdata["Label"] = GetFieldLabel("subcategorias11","nome_por"); 
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

	

	
	$tdatasubcategorias11["nome_por"] = $fdata;
//	nome_eng
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "nome_eng";
	$fdata["GoodName"] = "nome_eng";
	$fdata["ownerTable"] = "subcategorias";
	$fdata["Label"] = GetFieldLabel("subcategorias11","nome_eng"); 
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

	

	
	$tdatasubcategorias11["nome_eng"] = $fdata;
//	nome_esp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "nome_esp";
	$fdata["GoodName"] = "nome_esp";
	$fdata["ownerTable"] = "subcategorias";
	$fdata["Label"] = GetFieldLabel("subcategorias11","nome_esp"); 
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

	

	
	$tdatasubcategorias11["nome_esp"] = $fdata;
//	ocultar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ocultar";
	$fdata["GoodName"] = "ocultar";
	$fdata["ownerTable"] = "subcategorias";
	$fdata["Label"] = GetFieldLabel("subcategorias11","ocultar"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ocultar"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ocultar";
	
		
		
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
	
		
		
		
		
			$edata["HTML5InuptType"] = "number";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatasubcategorias11["ocultar"] = $fdata;
//	ordem
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "ordem";
	$fdata["GoodName"] = "ordem";
	$fdata["ownerTable"] = "subcategorias";
	$fdata["Label"] = GetFieldLabel("subcategorias11","ordem"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ordem"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ordem";
	
		
		
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
	
		
		
		
		
			$edata["HTML5InuptType"] = "number";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatasubcategorias11["ordem"] = $fdata;

	
$tables_data["subcategorias11"]=&$tdatasubcategorias11;
$field_labels["subcategorias11"] = &$fieldLabelssubcategorias11;
$fieldToolTips["subcategorias11"] = &$fieldToolTipssubcategorias11;
$page_titles["subcategorias11"] = &$pageTitlessubcategorias11;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["subcategorias11"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["subcategorias11"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_subcategorias11()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	id_categoria,  	nome_por,  	nome_eng,  	nome_esp,  	ocultar,  	ordem";
$proto0["m_strFrom"] = "FROM subcategorias";
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
	"m_strTable" => "subcategorias",
	"m_srcTableName" => "subcategorias11"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "subcategorias11";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "id_categoria",
	"m_strTable" => "subcategorias",
	"m_srcTableName" => "subcategorias11"
));

$proto7["m_sql"] = "id_categoria";
$proto7["m_srcTableName"] = "subcategorias11";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "nome_por",
	"m_strTable" => "subcategorias",
	"m_srcTableName" => "subcategorias11"
));

$proto9["m_sql"] = "nome_por";
$proto9["m_srcTableName"] = "subcategorias11";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "nome_eng",
	"m_strTable" => "subcategorias",
	"m_srcTableName" => "subcategorias11"
));

$proto11["m_sql"] = "nome_eng";
$proto11["m_srcTableName"] = "subcategorias11";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "nome_esp",
	"m_strTable" => "subcategorias",
	"m_srcTableName" => "subcategorias11"
));

$proto13["m_sql"] = "nome_esp";
$proto13["m_srcTableName"] = "subcategorias11";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "ocultar",
	"m_strTable" => "subcategorias",
	"m_srcTableName" => "subcategorias11"
));

$proto15["m_sql"] = "ocultar";
$proto15["m_srcTableName"] = "subcategorias11";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "ordem",
	"m_strTable" => "subcategorias",
	"m_srcTableName" => "subcategorias11"
));

$proto17["m_sql"] = "ordem";
$proto17["m_srcTableName"] = "subcategorias11";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "subcategorias";
$proto20["m_srcTableName"] = "subcategorias11";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "id";
$proto20["m_columns"][] = "id_categoria";
$proto20["m_columns"][] = "nome_por";
$proto20["m_columns"][] = "nome_eng";
$proto20["m_columns"][] = "nome_esp";
$proto20["m_columns"][] = "ocultar";
$proto20["m_columns"][] = "ordem";
$obj = new SQLTable($proto20);

$proto19["m_table"] = $obj;
$proto19["m_sql"] = "subcategorias";
$proto19["m_alias"] = "";
$proto19["m_srcTableName"] = "subcategorias11";
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
$proto0["m_srcTableName"]="subcategorias11";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_subcategorias11 = createSqlQuery_subcategorias11();


	
							
	
$tdatasubcategorias11[".sqlquery"] = $queryData_subcategorias11;

$tableEvents["subcategorias11"] = new eventsBase;
$tdatasubcategorias11[".hasEvents"] = false;

?>