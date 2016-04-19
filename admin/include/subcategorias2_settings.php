<?php
require_once(getabspath("classes/cipherer.php"));




$tdatasubcategorias2 = array();	
	$tdatasubcategorias2[".truncateText"] = true;
	$tdatasubcategorias2[".NumberOfChars"] = 80; 
	$tdatasubcategorias2[".ShortName"] = "subcategorias2";
	$tdatasubcategorias2[".OwnerID"] = "";
	$tdatasubcategorias2[".OriginalTable"] = "subcategorias";

//	field labels
$fieldLabelssubcategorias2 = array();
$fieldToolTipssubcategorias2 = array();
$pageTitlessubcategorias2 = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelssubcategorias2["Portuguese(Brazil)"] = array();
	$fieldToolTipssubcategorias2["Portuguese(Brazil)"] = array();
	$pageTitlessubcategorias2["Portuguese(Brazil)"] = array();
	$fieldLabelssubcategorias2["Portuguese(Brazil)"]["id"] = "Id";
	$fieldToolTipssubcategorias2["Portuguese(Brazil)"]["id"] = "";
	$fieldLabelssubcategorias2["Portuguese(Brazil)"]["id_categoria"] = "Categoria";
	$fieldToolTipssubcategorias2["Portuguese(Brazil)"]["id_categoria"] = "";
	$fieldLabelssubcategorias2["Portuguese(Brazil)"]["nome_por"] = "Nome Português";
	$fieldToolTipssubcategorias2["Portuguese(Brazil)"]["nome_por"] = "";
	$fieldLabelssubcategorias2["Portuguese(Brazil)"]["nome_eng"] = "Nome Inglês";
	$fieldToolTipssubcategorias2["Portuguese(Brazil)"]["nome_eng"] = "";
	$fieldLabelssubcategorias2["Portuguese(Brazil)"]["nome_esp"] = "Nome Espanhol";
	$fieldToolTipssubcategorias2["Portuguese(Brazil)"]["nome_esp"] = "";
	$fieldLabelssubcategorias2["Portuguese(Brazil)"]["id1"] = "Id1";
	$fieldToolTipssubcategorias2["Portuguese(Brazil)"]["id1"] = "";
	$fieldLabelssubcategorias2["Portuguese(Brazil)"]["nome_por1"] = "Nome Por1";
	$fieldToolTipssubcategorias2["Portuguese(Brazil)"]["nome_por1"] = "";
	$fieldLabelssubcategorias2["Portuguese(Brazil)"]["id_subcategoria"] = "Id Subcategoria";
	$fieldToolTipssubcategorias2["Portuguese(Brazil)"]["id_subcategoria"] = "";
	if (count($fieldToolTipssubcategorias2["Portuguese(Brazil)"]))
		$tdatasubcategorias2[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelssubcategorias2[""] = array();
	$fieldToolTipssubcategorias2[""] = array();
	$pageTitlessubcategorias2[""] = array();
	$fieldLabelssubcategorias2[""]["id"] = "Id";
	$fieldToolTipssubcategorias2[""]["id"] = "";
	$fieldLabelssubcategorias2[""]["id1"] = "Id1";
	$fieldToolTipssubcategorias2[""]["id1"] = "";
	$fieldLabelssubcategorias2[""]["nome_por1"] = "Nome Por1";
	$fieldToolTipssubcategorias2[""]["nome_por1"] = "";
	if (count($fieldToolTipssubcategorias2[""]))
		$tdatasubcategorias2[".isUseToolTips"] = true;
}
	
	
	$tdatasubcategorias2[".NCSearch"] = true;



$tdatasubcategorias2[".shortTableName"] = "subcategorias2";
$tdatasubcategorias2[".nSecOptions"] = 0;
$tdatasubcategorias2[".recsPerRowList"] = 1;
$tdatasubcategorias2[".mainTableOwnerID"] = "";
$tdatasubcategorias2[".moveNext"] = 1;
$tdatasubcategorias2[".nType"] = 1;

$tdatasubcategorias2[".strOriginalTableName"] = "subcategorias";




$tdatasubcategorias2[".showAddInPopup"] = false;

$tdatasubcategorias2[".showEditInPopup"] = false;

$tdatasubcategorias2[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatasubcategorias2[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatasubcategorias2[".fieldsForRegister"] = array();

$tdatasubcategorias2[".listAjax"] = false;

	$tdatasubcategorias2[".audit"] = false;

	$tdatasubcategorias2[".locking"] = false;


$tdatasubcategorias2[".list"] = true;

$tdatasubcategorias2[".inlineEdit"] = true;
$tdatasubcategorias2[".inlineAdd"] = true;




$tdatasubcategorias2[".delete"] = true;

$tdatasubcategorias2[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatasubcategorias2[".searchSaving"] = false;
//

$tdatasubcategorias2[".showSearchPanel"] = true;
		$tdatasubcategorias2[".flexibleSearch"] = true;		

if (isMobile())
	$tdatasubcategorias2[".isUseAjaxSuggest"] = false;
else 
	$tdatasubcategorias2[".isUseAjaxSuggest"] = true;

$tdatasubcategorias2[".rowHighlite"] = true;



$tdatasubcategorias2[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasubcategorias2[".isUseTimeForSearch"] = false;





$tdatasubcategorias2[".allSearchFields"] = array();
$tdatasubcategorias2[".filterFields"] = array();
$tdatasubcategorias2[".requiredSearchFields"] = array();

$tdatasubcategorias2[".allSearchFields"][] = "id";
	$tdatasubcategorias2[".allSearchFields"][] = "id_categoria";
	$tdatasubcategorias2[".allSearchFields"][] = "nome_por";
	$tdatasubcategorias2[".allSearchFields"][] = "nome_eng";
	$tdatasubcategorias2[".allSearchFields"][] = "nome_esp";
	$tdatasubcategorias2[".allSearchFields"][] = "id1";
	$tdatasubcategorias2[".allSearchFields"][] = "nome_por1";
	

$tdatasubcategorias2[".googleLikeFields"] = array();
$tdatasubcategorias2[".googleLikeFields"][] = "id";
$tdatasubcategorias2[".googleLikeFields"][] = "id_categoria";
$tdatasubcategorias2[".googleLikeFields"][] = "nome_por";
$tdatasubcategorias2[".googleLikeFields"][] = "nome_eng";
$tdatasubcategorias2[".googleLikeFields"][] = "nome_esp";
$tdatasubcategorias2[".googleLikeFields"][] = "id1";
$tdatasubcategorias2[".googleLikeFields"][] = "nome_por1";


$tdatasubcategorias2[".advSearchFields"] = array();
$tdatasubcategorias2[".advSearchFields"][] = "id";
$tdatasubcategorias2[".advSearchFields"][] = "id_categoria";
$tdatasubcategorias2[".advSearchFields"][] = "nome_por";
$tdatasubcategorias2[".advSearchFields"][] = "nome_eng";
$tdatasubcategorias2[".advSearchFields"][] = "nome_esp";
$tdatasubcategorias2[".advSearchFields"][] = "id1";
$tdatasubcategorias2[".advSearchFields"][] = "nome_por1";

$tdatasubcategorias2[".tableType"] = "list";

$tdatasubcategorias2[".printerPageOrientation"] = 0;
$tdatasubcategorias2[".nPrinterPageScale"] = 100;

$tdatasubcategorias2[".nPrinterSplitRecords"] = 40;

$tdatasubcategorias2[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdatasubcategorias2[".pageSize"] = 20;

$tdatasubcategorias2[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasubcategorias2[".strOrderBy"] = $tstrOrderBy;

$tdatasubcategorias2[".orderindexes"] = array();

$tdatasubcategorias2[".sqlHead"] = "SELECT subcategorias.id,  subcategorias.id_categoria,  subcategorias.nome_por,  subcategorias.nome_eng,  subcategorias.nome_esp,  categorias.id AS id1,  categorias.nome_por AS nome_por1";
$tdatasubcategorias2[".sqlFrom"] = "FROM subcategorias  INNER JOIN categorias ON categorias.id = subcategorias.id_categoria";
$tdatasubcategorias2[".sqlWhereExpr"] = "";
$tdatasubcategorias2[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasubcategorias2[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasubcategorias2[".arrGroupsPerPage"] = $arrGPP;

$tdatasubcategorias2[".highlightSearchResults"] = true;

$tableKeyssubcategorias2 = array();
$tableKeyssubcategorias2[] = "id";
$tdatasubcategorias2[".Keys"] = $tableKeyssubcategorias2;

$tdatasubcategorias2[".listFields"] = array();
$tdatasubcategorias2[".listFields"][] = "id1";
$tdatasubcategorias2[".listFields"][] = "nome_por1";
$tdatasubcategorias2[".listFields"][] = "id";
$tdatasubcategorias2[".listFields"][] = "id_categoria";
$tdatasubcategorias2[".listFields"][] = "nome_por";
$tdatasubcategorias2[".listFields"][] = "nome_eng";
$tdatasubcategorias2[".listFields"][] = "nome_esp";

$tdatasubcategorias2[".hideMobileList"] = array();


$tdatasubcategorias2[".viewFields"] = array();
$tdatasubcategorias2[".viewFields"][] = "id1";
$tdatasubcategorias2[".viewFields"][] = "nome_por1";

$tdatasubcategorias2[".addFields"] = array();

$tdatasubcategorias2[".inlineAddFields"] = array();
$tdatasubcategorias2[".inlineAddFields"][] = "id_categoria";
$tdatasubcategorias2[".inlineAddFields"][] = "nome_por";
$tdatasubcategorias2[".inlineAddFields"][] = "nome_eng";
$tdatasubcategorias2[".inlineAddFields"][] = "nome_esp";

$tdatasubcategorias2[".editFields"] = array();

$tdatasubcategorias2[".inlineEditFields"] = array();
$tdatasubcategorias2[".inlineEditFields"][] = "id_categoria";
$tdatasubcategorias2[".inlineEditFields"][] = "nome_por";
$tdatasubcategorias2[".inlineEditFields"][] = "nome_eng";
$tdatasubcategorias2[".inlineEditFields"][] = "nome_esp";

$tdatasubcategorias2[".exportFields"] = array();
$tdatasubcategorias2[".exportFields"][] = "id1";
$tdatasubcategorias2[".exportFields"][] = "nome_por1";

$tdatasubcategorias2[".importFields"] = array();
$tdatasubcategorias2[".importFields"][] = "id1";
$tdatasubcategorias2[".importFields"][] = "nome_por1";

$tdatasubcategorias2[".printFields"] = array();
$tdatasubcategorias2[".printFields"][] = "id1";
$tdatasubcategorias2[".printFields"][] = "nome_por1";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "subcategorias";
	$fdata["Label"] = GetFieldLabel("subcategorias2","id"); 
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

	

	
	$tdatasubcategorias2["id"] = $fdata;
//	id_categoria
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_categoria";
	$fdata["GoodName"] = "id_categoria";
	$fdata["ownerTable"] = "subcategorias";
	$fdata["Label"] = GetFieldLabel("subcategorias2","id_categoria"); 
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

	

	
	$tdatasubcategorias2["id_categoria"] = $fdata;
//	nome_por
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "nome_por";
	$fdata["GoodName"] = "nome_por";
	$fdata["ownerTable"] = "subcategorias";
	$fdata["Label"] = GetFieldLabel("subcategorias2","nome_por"); 
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

	

	
	$tdatasubcategorias2["nome_por"] = $fdata;
//	nome_eng
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "nome_eng";
	$fdata["GoodName"] = "nome_eng";
	$fdata["ownerTable"] = "subcategorias";
	$fdata["Label"] = GetFieldLabel("subcategorias2","nome_eng"); 
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

	

	
	$tdatasubcategorias2["nome_eng"] = $fdata;
//	nome_esp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "nome_esp";
	$fdata["GoodName"] = "nome_esp";
	$fdata["ownerTable"] = "subcategorias";
	$fdata["Label"] = GetFieldLabel("subcategorias2","nome_esp"); 
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

	

	
	$tdatasubcategorias2["nome_esp"] = $fdata;
//	id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "id1";
	$fdata["GoodName"] = "id1";
	$fdata["ownerTable"] = "categorias";
	$fdata["Label"] = GetFieldLabel("subcategorias2","id1"); 
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

	

	
	$tdatasubcategorias2["id1"] = $fdata;
//	nome_por1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "nome_por1";
	$fdata["GoodName"] = "nome_por1";
	$fdata["ownerTable"] = "categorias";
	$fdata["Label"] = GetFieldLabel("subcategorias2","nome_por1"); 
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

	

	
	$tdatasubcategorias2["nome_por1"] = $fdata;

	
$tables_data["subcategorias2"]=&$tdatasubcategorias2;
$field_labels["subcategorias2"] = &$fieldLabelssubcategorias2;
$fieldToolTips["subcategorias2"] = &$fieldToolTipssubcategorias2;
$page_titles["subcategorias2"] = &$pageTitlessubcategorias2;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["subcategorias2"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["subcategorias2"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_subcategorias2()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "subcategorias.id,  subcategorias.id_categoria,  subcategorias.nome_por,  subcategorias.nome_eng,  subcategorias.nome_esp,  categorias.id AS id1,  categorias.nome_por AS nome_por1";
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
	"m_srcTableName" => "subcategorias2"
));

$proto5["m_sql"] = "subcategorias.id";
$proto5["m_srcTableName"] = "subcategorias2";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "id_categoria",
	"m_strTable" => "subcategorias",
	"m_srcTableName" => "subcategorias2"
));

$proto7["m_sql"] = "subcategorias.id_categoria";
$proto7["m_srcTableName"] = "subcategorias2";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "nome_por",
	"m_strTable" => "subcategorias",
	"m_srcTableName" => "subcategorias2"
));

$proto9["m_sql"] = "subcategorias.nome_por";
$proto9["m_srcTableName"] = "subcategorias2";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "nome_eng",
	"m_strTable" => "subcategorias",
	"m_srcTableName" => "subcategorias2"
));

$proto11["m_sql"] = "subcategorias.nome_eng";
$proto11["m_srcTableName"] = "subcategorias2";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "nome_esp",
	"m_strTable" => "subcategorias",
	"m_srcTableName" => "subcategorias2"
));

$proto13["m_sql"] = "subcategorias.nome_esp";
$proto13["m_srcTableName"] = "subcategorias2";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "categorias",
	"m_srcTableName" => "subcategorias2"
));

$proto15["m_sql"] = "categorias.id";
$proto15["m_srcTableName"] = "subcategorias2";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "id1";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "nome_por",
	"m_strTable" => "categorias",
	"m_srcTableName" => "subcategorias2"
));

$proto17["m_sql"] = "categorias.nome_por";
$proto17["m_srcTableName"] = "subcategorias2";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "nome_por1";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "subcategorias";
$proto20["m_srcTableName"] = "subcategorias2";
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
$proto19["m_srcTableName"] = "subcategorias2";
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
$proto24["m_srcTableName"] = "subcategorias2";
$proto24["m_columns"] = array();
$proto24["m_columns"][] = "id";
$proto24["m_columns"][] = "nome_por";
$proto24["m_columns"][] = "nome_eng";
$proto24["m_columns"][] = "nome_esp";
$proto24["m_columns"][] = "imagem";
$proto24["m_columns"][] = "ocultar";
$proto24["m_columns"][] = "ordem";
$obj = new SQLTable($proto24);

$proto23["m_table"] = $obj;
$proto23["m_sql"] = "INNER JOIN categorias ON categorias.id = subcategorias.id_categoria";
$proto23["m_alias"] = "";
$proto23["m_srcTableName"] = "subcategorias2";
$proto25=array();
$proto25["m_sql"] = "categorias.id = subcategorias.id_categoria";
$proto25["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "categorias",
	"m_srcTableName" => "subcategorias2"
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
$proto0["m_srcTableName"]="subcategorias2";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_subcategorias2 = createSqlQuery_subcategorias2();


	
							
	
$tdatasubcategorias2[".sqlquery"] = $queryData_subcategorias2;

$tableEvents["subcategorias2"] = new eventsBase;
$tdatasubcategorias2[".hasEvents"] = false;

?>