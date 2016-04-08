<?php
require_once(getabspath("classes/cipherer.php"));




$tdatasubcategorias1 = array();	
	$tdatasubcategorias1[".truncateText"] = true;
	$tdatasubcategorias1[".NumberOfChars"] = 80; 
	$tdatasubcategorias1[".ShortName"] = "subcategorias1";
	$tdatasubcategorias1[".OwnerID"] = "";
	$tdatasubcategorias1[".OriginalTable"] = "subcategorias";

//	field labels
$fieldLabelssubcategorias1 = array();
$fieldToolTipssubcategorias1 = array();
$pageTitlessubcategorias1 = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelssubcategorias1["Portuguese(Brazil)"] = array();
	$fieldToolTipssubcategorias1["Portuguese(Brazil)"] = array();
	$pageTitlessubcategorias1["Portuguese(Brazil)"] = array();
	$fieldLabelssubcategorias1["Portuguese(Brazil)"]["id"] = "Id";
	$fieldToolTipssubcategorias1["Portuguese(Brazil)"]["id"] = "";
	$fieldLabelssubcategorias1["Portuguese(Brazil)"]["id_categoria"] = "Id Categoria";
	$fieldToolTipssubcategorias1["Portuguese(Brazil)"]["id_categoria"] = "";
	$fieldLabelssubcategorias1["Portuguese(Brazil)"]["nome_por"] = "Nome Por";
	$fieldToolTipssubcategorias1["Portuguese(Brazil)"]["nome_por"] = "";
	$fieldLabelssubcategorias1["Portuguese(Brazil)"]["nome_eng"] = "Nome Eng";
	$fieldToolTipssubcategorias1["Portuguese(Brazil)"]["nome_eng"] = "";
	$fieldLabelssubcategorias1["Portuguese(Brazil)"]["nome_esp"] = "Nome Esp";
	$fieldToolTipssubcategorias1["Portuguese(Brazil)"]["nome_esp"] = "";
	$fieldLabelssubcategorias1["Portuguese(Brazil)"]["nome_por1"] = "Nome Por1";
	$fieldToolTipssubcategorias1["Portuguese(Brazil)"]["nome_por1"] = "";
	$fieldLabelssubcategorias1["Portuguese(Brazil)"]["id1"] = "Id1";
	$fieldToolTipssubcategorias1["Portuguese(Brazil)"]["id1"] = "";
	if (count($fieldToolTipssubcategorias1["Portuguese(Brazil)"]))
		$tdatasubcategorias1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelssubcategorias1[""] = array();
	$fieldToolTipssubcategorias1[""] = array();
	$pageTitlessubcategorias1[""] = array();
	if (count($fieldToolTipssubcategorias1[""]))
		$tdatasubcategorias1[".isUseToolTips"] = true;
}
	
	
	$tdatasubcategorias1[".NCSearch"] = true;



$tdatasubcategorias1[".shortTableName"] = "subcategorias1";
$tdatasubcategorias1[".nSecOptions"] = 0;
$tdatasubcategorias1[".recsPerRowList"] = 1;
$tdatasubcategorias1[".mainTableOwnerID"] = "";
$tdatasubcategorias1[".moveNext"] = 1;
$tdatasubcategorias1[".nType"] = 1;

$tdatasubcategorias1[".strOriginalTableName"] = "subcategorias";




$tdatasubcategorias1[".showAddInPopup"] = false;

$tdatasubcategorias1[".showEditInPopup"] = false;

$tdatasubcategorias1[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatasubcategorias1[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatasubcategorias1[".fieldsForRegister"] = array();

$tdatasubcategorias1[".listAjax"] = false;

	$tdatasubcategorias1[".audit"] = false;

	$tdatasubcategorias1[".locking"] = false;


$tdatasubcategorias1[".list"] = true;

$tdatasubcategorias1[".inlineEdit"] = true;
$tdatasubcategorias1[".inlineAdd"] = true;




$tdatasubcategorias1[".delete"] = true;

$tdatasubcategorias1[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatasubcategorias1[".searchSaving"] = false;
//

$tdatasubcategorias1[".showSearchPanel"] = true;
		$tdatasubcategorias1[".flexibleSearch"] = true;		

if (isMobile())
	$tdatasubcategorias1[".isUseAjaxSuggest"] = false;
else 
	$tdatasubcategorias1[".isUseAjaxSuggest"] = true;

$tdatasubcategorias1[".rowHighlite"] = true;



$tdatasubcategorias1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasubcategorias1[".isUseTimeForSearch"] = false;





$tdatasubcategorias1[".allSearchFields"] = array();
$tdatasubcategorias1[".filterFields"] = array();
$tdatasubcategorias1[".requiredSearchFields"] = array();

$tdatasubcategorias1[".allSearchFields"][] = "id";
	$tdatasubcategorias1[".allSearchFields"][] = "id_categoria";
	$tdatasubcategorias1[".allSearchFields"][] = "nome_por";
	$tdatasubcategorias1[".allSearchFields"][] = "nome_eng";
	$tdatasubcategorias1[".allSearchFields"][] = "nome_esp";
	$tdatasubcategorias1[".allSearchFields"][] = "nome_por1";
	$tdatasubcategorias1[".allSearchFields"][] = "id1";
	

$tdatasubcategorias1[".googleLikeFields"] = array();
$tdatasubcategorias1[".googleLikeFields"][] = "id";
$tdatasubcategorias1[".googleLikeFields"][] = "id_categoria";
$tdatasubcategorias1[".googleLikeFields"][] = "nome_por";
$tdatasubcategorias1[".googleLikeFields"][] = "nome_eng";
$tdatasubcategorias1[".googleLikeFields"][] = "nome_esp";
$tdatasubcategorias1[".googleLikeFields"][] = "nome_por1";
$tdatasubcategorias1[".googleLikeFields"][] = "id1";


$tdatasubcategorias1[".advSearchFields"] = array();
$tdatasubcategorias1[".advSearchFields"][] = "id";
$tdatasubcategorias1[".advSearchFields"][] = "id_categoria";
$tdatasubcategorias1[".advSearchFields"][] = "nome_por";
$tdatasubcategorias1[".advSearchFields"][] = "nome_eng";
$tdatasubcategorias1[".advSearchFields"][] = "nome_esp";
$tdatasubcategorias1[".advSearchFields"][] = "nome_por1";
$tdatasubcategorias1[".advSearchFields"][] = "id1";

$tdatasubcategorias1[".tableType"] = "list";

$tdatasubcategorias1[".printerPageOrientation"] = 0;
$tdatasubcategorias1[".nPrinterPageScale"] = 100;

$tdatasubcategorias1[".nPrinterSplitRecords"] = 40;

$tdatasubcategorias1[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdatasubcategorias1[".pageSize"] = 20;

$tdatasubcategorias1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasubcategorias1[".strOrderBy"] = $tstrOrderBy;

$tdatasubcategorias1[".orderindexes"] = array();

$tdatasubcategorias1[".sqlHead"] = "SELECT subcategorias.id,  subcategorias.id_categoria,  subcategorias.nome_por,  subcategorias.nome_eng,  subcategorias.nome_esp,  categorias.nome_por AS nome_por1,  categorias.id AS id1";
$tdatasubcategorias1[".sqlFrom"] = "FROM subcategorias  INNER JOIN categorias ON categorias.id = subcategorias.id_categoria";
$tdatasubcategorias1[".sqlWhereExpr"] = "";
$tdatasubcategorias1[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasubcategorias1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasubcategorias1[".arrGroupsPerPage"] = $arrGPP;

$tdatasubcategorias1[".highlightSearchResults"] = true;

$tableKeyssubcategorias1 = array();
$tableKeyssubcategorias1[] = "id";
$tdatasubcategorias1[".Keys"] = $tableKeyssubcategorias1;

$tdatasubcategorias1[".listFields"] = array();
$tdatasubcategorias1[".listFields"][] = "nome_por1";
$tdatasubcategorias1[".listFields"][] = "id1";
$tdatasubcategorias1[".listFields"][] = "id";
$tdatasubcategorias1[".listFields"][] = "id_categoria";
$tdatasubcategorias1[".listFields"][] = "nome_por";
$tdatasubcategorias1[".listFields"][] = "nome_eng";
$tdatasubcategorias1[".listFields"][] = "nome_esp";

$tdatasubcategorias1[".hideMobileList"] = array();


$tdatasubcategorias1[".viewFields"] = array();
$tdatasubcategorias1[".viewFields"][] = "nome_por1";
$tdatasubcategorias1[".viewFields"][] = "id1";

$tdatasubcategorias1[".addFields"] = array();

$tdatasubcategorias1[".inlineAddFields"] = array();
$tdatasubcategorias1[".inlineAddFields"][] = "id_categoria";
$tdatasubcategorias1[".inlineAddFields"][] = "nome_por";
$tdatasubcategorias1[".inlineAddFields"][] = "nome_eng";
$tdatasubcategorias1[".inlineAddFields"][] = "nome_esp";

$tdatasubcategorias1[".editFields"] = array();

$tdatasubcategorias1[".inlineEditFields"] = array();
$tdatasubcategorias1[".inlineEditFields"][] = "id_categoria";
$tdatasubcategorias1[".inlineEditFields"][] = "nome_por";
$tdatasubcategorias1[".inlineEditFields"][] = "nome_eng";
$tdatasubcategorias1[".inlineEditFields"][] = "nome_esp";

$tdatasubcategorias1[".exportFields"] = array();
$tdatasubcategorias1[".exportFields"][] = "nome_por1";
$tdatasubcategorias1[".exportFields"][] = "id1";

$tdatasubcategorias1[".importFields"] = array();
$tdatasubcategorias1[".importFields"][] = "nome_por1";
$tdatasubcategorias1[".importFields"][] = "id1";

$tdatasubcategorias1[".printFields"] = array();
$tdatasubcategorias1[".printFields"][] = "nome_por1";
$tdatasubcategorias1[".printFields"][] = "id1";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "subcategorias";
	$fdata["Label"] = GetFieldLabel("subcategorias1","id"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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

	

	
	$tdatasubcategorias1["id"] = $fdata;
//	id_categoria
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_categoria";
	$fdata["GoodName"] = "id_categoria";
	$fdata["ownerTable"] = "subcategorias";
	$fdata["Label"] = GetFieldLabel("subcategorias1","id_categoria"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "id_categoria"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "subcategorias.id_categoria";
	
		
		
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

	

	
	$tdatasubcategorias1["id_categoria"] = $fdata;
//	nome_por
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "nome_por";
	$fdata["GoodName"] = "nome_por";
	$fdata["ownerTable"] = "subcategorias";
	$fdata["Label"] = GetFieldLabel("subcategorias1","nome_por"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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

	

	
	$tdatasubcategorias1["nome_por"] = $fdata;
//	nome_eng
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "nome_eng";
	$fdata["GoodName"] = "nome_eng";
	$fdata["ownerTable"] = "subcategorias";
	$fdata["Label"] = GetFieldLabel("subcategorias1","nome_eng"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "nome_eng"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "subcategorias.nome_eng";
	
		
		
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

	

	
	$tdatasubcategorias1["nome_eng"] = $fdata;
//	nome_esp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "nome_esp";
	$fdata["GoodName"] = "nome_esp";
	$fdata["ownerTable"] = "subcategorias";
	$fdata["Label"] = GetFieldLabel("subcategorias1","nome_esp"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "nome_esp"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "subcategorias.nome_esp";
	
		
		
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

	

	
	$tdatasubcategorias1["nome_esp"] = $fdata;
//	nome_por1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "nome_por1";
	$fdata["GoodName"] = "nome_por1";
	$fdata["ownerTable"] = "categorias";
	$fdata["Label"] = GetFieldLabel("subcategorias1","nome_por1"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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

	

	
	$tdatasubcategorias1["nome_por1"] = $fdata;
//	id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "id1";
	$fdata["GoodName"] = "id1";
	$fdata["ownerTable"] = "categorias";
	$fdata["Label"] = GetFieldLabel("subcategorias1","id1"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "categorias.id";
	
		
		
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

	

	
	$tdatasubcategorias1["id1"] = $fdata;

	
$tables_data["subcategorias1"]=&$tdatasubcategorias1;
$field_labels["subcategorias1"] = &$fieldLabelssubcategorias1;
$fieldToolTips["subcategorias1"] = &$fieldToolTipssubcategorias1;
$page_titles["subcategorias1"] = &$pageTitlessubcategorias1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["subcategorias1"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["subcategorias1"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_subcategorias1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "subcategorias.id,  subcategorias.id_categoria,  subcategorias.nome_por,  subcategorias.nome_eng,  subcategorias.nome_esp,  categorias.nome_por AS nome_por1,  categorias.id AS id1";
$proto0["m_strFrom"] = "FROM subcategorias  INNER JOIN categorias ON categorias.id = subcategorias.id_categoria";
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
	"m_srcTableName" => "subcategorias1"
));

$proto5["m_sql"] = "subcategorias.id";
$proto5["m_srcTableName"] = "subcategorias1";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "id_categoria",
	"m_strTable" => "subcategorias",
	"m_srcTableName" => "subcategorias1"
));

$proto7["m_sql"] = "subcategorias.id_categoria";
$proto7["m_srcTableName"] = "subcategorias1";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "nome_por",
	"m_strTable" => "subcategorias",
	"m_srcTableName" => "subcategorias1"
));

$proto9["m_sql"] = "subcategorias.nome_por";
$proto9["m_srcTableName"] = "subcategorias1";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "nome_eng",
	"m_strTable" => "subcategorias",
	"m_srcTableName" => "subcategorias1"
));

$proto11["m_sql"] = "subcategorias.nome_eng";
$proto11["m_srcTableName"] = "subcategorias1";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "nome_esp",
	"m_strTable" => "subcategorias",
	"m_srcTableName" => "subcategorias1"
));

$proto13["m_sql"] = "subcategorias.nome_esp";
$proto13["m_srcTableName"] = "subcategorias1";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "nome_por",
	"m_strTable" => "categorias",
	"m_srcTableName" => "subcategorias1"
));

$proto15["m_sql"] = "categorias.nome_por";
$proto15["m_srcTableName"] = "subcategorias1";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "nome_por1";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "categorias",
	"m_srcTableName" => "subcategorias1"
));

$proto17["m_sql"] = "categorias.id";
$proto17["m_srcTableName"] = "subcategorias1";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "id1";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "subcategorias";
$proto20["m_srcTableName"] = "subcategorias1";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "id";
$proto20["m_columns"][] = "id_categoria";
$proto20["m_columns"][] = "nome_por";
$proto20["m_columns"][] = "nome_eng";
$proto20["m_columns"][] = "nome_esp";
$proto20["m_columns"][] = "ocultar";
$obj = new SQLTable($proto20);

$proto19["m_table"] = $obj;
$proto19["m_sql"] = "subcategorias";
$proto19["m_alias"] = "";
$proto19["m_srcTableName"] = "subcategorias1";
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
												$proto23=array();
$proto23["m_link"] = "SQLL_INNERJOIN";
			$proto24=array();
$proto24["m_strName"] = "categorias";
$proto24["m_srcTableName"] = "subcategorias1";
$proto24["m_columns"] = array();
$proto24["m_columns"][] = "id";
$proto24["m_columns"][] = "nome_por";
$proto24["m_columns"][] = "nome_eng";
$proto24["m_columns"][] = "nome_esp";
$proto24["m_columns"][] = "imagem";
$proto24["m_columns"][] = "ocultar";
$obj = new SQLTable($proto24);

$proto23["m_table"] = $obj;
$proto23["m_sql"] = "INNER JOIN categorias ON categorias.id = subcategorias.id_categoria";
$proto23["m_alias"] = "";
$proto23["m_srcTableName"] = "subcategorias1";
$proto25=array();
$proto25["m_sql"] = "categorias.id = subcategorias.id_categoria";
$proto25["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "categorias",
	"m_srcTableName" => "subcategorias1"
));

$proto25["m_column"]=$obj;
$proto25["m_contained"] = array();
$proto25["m_strCase"] = "= subcategorias.id_categoria";
$proto25["m_havingmode"] = false;
$proto25["m_inBrackets"] = false;
$proto25["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto25);

$proto23["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto23);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="subcategorias1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_subcategorias1 = createSqlQuery_subcategorias1();


	
							
	
$tdatasubcategorias1[".sqlquery"] = $queryData_subcategorias1;

$tableEvents["subcategorias1"] = new eventsBase;
$tdatasubcategorias1[".hasEvents"] = false;

?>