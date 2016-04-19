<?php
require_once(getabspath("classes/cipherer.php"));




$tdataprodutos = array();	
	$tdataprodutos[".truncateText"] = true;
	$tdataprodutos[".NumberOfChars"] = 80; 
	$tdataprodutos[".ShortName"] = "produtos";
	$tdataprodutos[".OwnerID"] = "";
	$tdataprodutos[".OriginalTable"] = "produtos";

//	field labels
$fieldLabelsprodutos = array();
$fieldToolTipsprodutos = array();
$pageTitlesprodutos = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsprodutos["Portuguese(Brazil)"] = array();
	$fieldToolTipsprodutos["Portuguese(Brazil)"] = array();
	$pageTitlesprodutos["Portuguese(Brazil)"] = array();
	$fieldLabelsprodutos["Portuguese(Brazil)"]["id"] = "Id";
	$fieldToolTipsprodutos["Portuguese(Brazil)"]["id"] = "";
	$fieldLabelsprodutos["Portuguese(Brazil)"]["id_subcategoria"] = "Subcategoria";
	$fieldToolTipsprodutos["Portuguese(Brazil)"]["id_subcategoria"] = "";
	$fieldLabelsprodutos["Portuguese(Brazil)"]["nome_por"] = "Nome Português";
	$fieldToolTipsprodutos["Portuguese(Brazil)"]["nome_por"] = "";
	$fieldLabelsprodutos["Portuguese(Brazil)"]["nome_eng"] = "Nome Inglês";
	$fieldToolTipsprodutos["Portuguese(Brazil)"]["nome_eng"] = "";
	$fieldLabelsprodutos["Portuguese(Brazil)"]["nome_esp"] = "Nome Espanhol";
	$fieldToolTipsprodutos["Portuguese(Brazil)"]["nome_esp"] = "";
	$fieldLabelsprodutos["Portuguese(Brazil)"]["descricao_por"] = "Descrição Português";
	$fieldToolTipsprodutos["Portuguese(Brazil)"]["descricao_por"] = "";
	$fieldLabelsprodutos["Portuguese(Brazil)"]["descricao_eng"] = "Descrição Inglês";
	$fieldToolTipsprodutos["Portuguese(Brazil)"]["descricao_eng"] = "";
	$fieldLabelsprodutos["Portuguese(Brazil)"]["descricao_esp"] = "Descrição Espanhol";
	$fieldToolTipsprodutos["Portuguese(Brazil)"]["descricao_esp"] = "";
	$fieldLabelsprodutos["Portuguese(Brazil)"]["video"] = "Vídeo";
	$fieldToolTipsprodutos["Portuguese(Brazil)"]["video"] = "";
	$fieldLabelsprodutos["Portuguese(Brazil)"]["imagens"] = "Imagens";
	$fieldToolTipsprodutos["Portuguese(Brazil)"]["imagens"] = "";
	$fieldLabelsprodutos["Portuguese(Brazil)"]["arearestrita"] = "Área Restrita";
	$fieldToolTipsprodutos["Portuguese(Brazil)"]["arearestrita"] = "";
	$fieldLabelsprodutos["Portuguese(Brazil)"]["ocultar"] = "Ocultar";
	$fieldToolTipsprodutos["Portuguese(Brazil)"]["ocultar"] = "";
	$fieldLabelsprodutos["Portuguese(Brazil)"]["ordem"] = "Ordem";
	$fieldToolTipsprodutos["Portuguese(Brazil)"]["ordem"] = "";
	if (count($fieldToolTipsprodutos["Portuguese(Brazil)"]))
		$tdataprodutos[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsprodutos[""] = array();
	$fieldToolTipsprodutos[""] = array();
	$pageTitlesprodutos[""] = array();
	$fieldLabelsprodutos[""]["id"] = "Id";
	$fieldToolTipsprodutos[""]["id"] = "";
	$fieldLabelsprodutos[""]["imagens"] = "Imagens";
	$fieldToolTipsprodutos[""]["imagens"] = "";
	$fieldLabelsprodutos[""]["arearestrita"] = "Arearestrita";
	$fieldToolTipsprodutos[""]["arearestrita"] = "";
	$fieldLabelsprodutos[""]["ocultar"] = "Ocultar";
	$fieldToolTipsprodutos[""]["ocultar"] = "";
	$fieldLabelsprodutos[""]["ordem"] = "Ordem";
	$fieldToolTipsprodutos[""]["ordem"] = "";
	if (count($fieldToolTipsprodutos[""]))
		$tdataprodutos[".isUseToolTips"] = true;
}
	
	
	$tdataprodutos[".NCSearch"] = true;



$tdataprodutos[".shortTableName"] = "produtos";
$tdataprodutos[".nSecOptions"] = 0;
$tdataprodutos[".recsPerRowList"] = 1;
$tdataprodutos[".mainTableOwnerID"] = "";
$tdataprodutos[".moveNext"] = 1;
$tdataprodutos[".nType"] = 0;

$tdataprodutos[".strOriginalTableName"] = "produtos";




$tdataprodutos[".showAddInPopup"] = false;

$tdataprodutos[".showEditInPopup"] = false;

$tdataprodutos[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataprodutos[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataprodutos[".fieldsForRegister"] = array();

$tdataprodutos[".listAjax"] = false;

	$tdataprodutos[".audit"] = false;

	$tdataprodutos[".locking"] = false;

$tdataprodutos[".edit"] = true;

$tdataprodutos[".list"] = true;

$tdataprodutos[".inlineEdit"] = true;
$tdataprodutos[".view"] = true;




$tdataprodutos[".delete"] = true;

$tdataprodutos[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataprodutos[".searchSaving"] = false;
//

$tdataprodutos[".showSearchPanel"] = true;
		$tdataprodutos[".flexibleSearch"] = true;		

if (isMobile())
	$tdataprodutos[".isUseAjaxSuggest"] = false;
else 
	$tdataprodutos[".isUseAjaxSuggest"] = true;

$tdataprodutos[".rowHighlite"] = true;



$tdataprodutos[".addPageEvents"] = false;

// use timepicker for search panel
$tdataprodutos[".isUseTimeForSearch"] = false;





$tdataprodutos[".allSearchFields"] = array();
$tdataprodutos[".filterFields"] = array();
$tdataprodutos[".requiredSearchFields"] = array();

$tdataprodutos[".allSearchFields"][] = "id_subcategoria";
	$tdataprodutos[".allSearchFields"][] = "arearestrita";
	$tdataprodutos[".allSearchFields"][] = "ordem";
	$tdataprodutos[".allSearchFields"][] = "id";
	$tdataprodutos[".allSearchFields"][] = "nome_por";
	$tdataprodutos[".allSearchFields"][] = "nome_eng";
	$tdataprodutos[".allSearchFields"][] = "nome_esp";
	$tdataprodutos[".allSearchFields"][] = "descricao_por";
	$tdataprodutos[".allSearchFields"][] = "descricao_eng";
	$tdataprodutos[".allSearchFields"][] = "descricao_esp";
	$tdataprodutos[".allSearchFields"][] = "video";
	$tdataprodutos[".allSearchFields"][] = "imagens";
	

$tdataprodutos[".googleLikeFields"] = array();
$tdataprodutos[".googleLikeFields"][] = "id";
$tdataprodutos[".googleLikeFields"][] = "id_subcategoria";
$tdataprodutos[".googleLikeFields"][] = "nome_por";
$tdataprodutos[".googleLikeFields"][] = "nome_eng";
$tdataprodutos[".googleLikeFields"][] = "nome_esp";
$tdataprodutos[".googleLikeFields"][] = "descricao_por";
$tdataprodutos[".googleLikeFields"][] = "descricao_eng";
$tdataprodutos[".googleLikeFields"][] = "descricao_esp";
$tdataprodutos[".googleLikeFields"][] = "video";
$tdataprodutos[".googleLikeFields"][] = "arearestrita";
$tdataprodutos[".googleLikeFields"][] = "imagens";
$tdataprodutos[".googleLikeFields"][] = "ocultar";
$tdataprodutos[".googleLikeFields"][] = "ordem";


$tdataprodutos[".advSearchFields"] = array();
$tdataprodutos[".advSearchFields"][] = "id_subcategoria";
$tdataprodutos[".advSearchFields"][] = "arearestrita";
$tdataprodutos[".advSearchFields"][] = "ordem";
$tdataprodutos[".advSearchFields"][] = "id";
$tdataprodutos[".advSearchFields"][] = "nome_por";
$tdataprodutos[".advSearchFields"][] = "nome_eng";
$tdataprodutos[".advSearchFields"][] = "nome_esp";
$tdataprodutos[".advSearchFields"][] = "descricao_por";
$tdataprodutos[".advSearchFields"][] = "descricao_eng";
$tdataprodutos[".advSearchFields"][] = "descricao_esp";
$tdataprodutos[".advSearchFields"][] = "video";
$tdataprodutos[".advSearchFields"][] = "imagens";

$tdataprodutos[".tableType"] = "list";

$tdataprodutos[".printerPageOrientation"] = 0;
$tdataprodutos[".nPrinterPageScale"] = 100;

$tdataprodutos[".nPrinterSplitRecords"] = 40;

$tdataprodutos[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdataprodutos[".pageSize"] = 20;

$tdataprodutos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataprodutos[".strOrderBy"] = $tstrOrderBy;

$tdataprodutos[".orderindexes"] = array();

$tdataprodutos[".sqlHead"] = "SELECT id,  	id_subcategoria,  	nome_por,  	nome_eng,  	nome_esp,  	descricao_por,  	descricao_eng,  	descricao_esp,  	video,  	arearestrita,  	imagens,  	ocultar,  	ordem";
$tdataprodutos[".sqlFrom"] = "FROM produtos";
$tdataprodutos[".sqlWhereExpr"] = "";
$tdataprodutos[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataprodutos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataprodutos[".arrGroupsPerPage"] = $arrGPP;

$tdataprodutos[".highlightSearchResults"] = true;

$tableKeysprodutos = array();
$tableKeysprodutos[] = "id";
$tdataprodutos[".Keys"] = $tableKeysprodutos;

$tdataprodutos[".listFields"] = array();
$tdataprodutos[".listFields"][] = "id";
$tdataprodutos[".listFields"][] = "arearestrita";
$tdataprodutos[".listFields"][] = "ordem";
$tdataprodutos[".listFields"][] = "id_subcategoria";
$tdataprodutos[".listFields"][] = "nome_por";
$tdataprodutos[".listFields"][] = "nome_eng";
$tdataprodutos[".listFields"][] = "nome_esp";
$tdataprodutos[".listFields"][] = "descricao_por";
$tdataprodutos[".listFields"][] = "descricao_eng";
$tdataprodutos[".listFields"][] = "descricao_esp";
$tdataprodutos[".listFields"][] = "video";
$tdataprodutos[".listFields"][] = "imagens";
$tdataprodutos[".listFields"][] = "ocultar";

$tdataprodutos[".hideMobileList"] = array();


$tdataprodutos[".viewFields"] = array();
$tdataprodutos[".viewFields"][] = "id";
$tdataprodutos[".viewFields"][] = "ordem";
$tdataprodutos[".viewFields"][] = "id_subcategoria";
$tdataprodutos[".viewFields"][] = "nome_por";
$tdataprodutos[".viewFields"][] = "nome_eng";
$tdataprodutos[".viewFields"][] = "nome_esp";
$tdataprodutos[".viewFields"][] = "descricao_por";
$tdataprodutos[".viewFields"][] = "descricao_eng";
$tdataprodutos[".viewFields"][] = "descricao_esp";
$tdataprodutos[".viewFields"][] = "video";
$tdataprodutos[".viewFields"][] = "arearestrita";
$tdataprodutos[".viewFields"][] = "imagens";

$tdataprodutos[".addFields"] = array();
$tdataprodutos[".addFields"][] = "arearestrita";
$tdataprodutos[".addFields"][] = "ordem";
$tdataprodutos[".addFields"][] = "id_subcategoria";
$tdataprodutos[".addFields"][] = "nome_por";
$tdataprodutos[".addFields"][] = "nome_eng";
$tdataprodutos[".addFields"][] = "nome_esp";
$tdataprodutos[".addFields"][] = "descricao_por";
$tdataprodutos[".addFields"][] = "descricao_eng";
$tdataprodutos[".addFields"][] = "descricao_esp";
$tdataprodutos[".addFields"][] = "video";
$tdataprodutos[".addFields"][] = "imagens";

$tdataprodutos[".inlineAddFields"] = array();

$tdataprodutos[".editFields"] = array();
$tdataprodutos[".editFields"][] = "arearestrita";
$tdataprodutos[".editFields"][] = "ordem";
$tdataprodutos[".editFields"][] = "id_subcategoria";
$tdataprodutos[".editFields"][] = "nome_por";
$tdataprodutos[".editFields"][] = "nome_eng";
$tdataprodutos[".editFields"][] = "nome_esp";
$tdataprodutos[".editFields"][] = "descricao_por";
$tdataprodutos[".editFields"][] = "descricao_eng";
$tdataprodutos[".editFields"][] = "descricao_esp";
$tdataprodutos[".editFields"][] = "video";
$tdataprodutos[".editFields"][] = "imagens";

$tdataprodutos[".inlineEditFields"] = array();
$tdataprodutos[".inlineEditFields"][] = "arearestrita";
$tdataprodutos[".inlineEditFields"][] = "ordem";
$tdataprodutos[".inlineEditFields"][] = "ocultar";

$tdataprodutos[".exportFields"] = array();

$tdataprodutos[".importFields"] = array();

$tdataprodutos[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "produtos";
	$fdata["Label"] = GetFieldLabel("produtos","id"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
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

	

	
	$tdataprodutos["id"] = $fdata;
//	id_subcategoria
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_subcategoria";
	$fdata["GoodName"] = "id_subcategoria";
	$fdata["ownerTable"] = "produtos";
	$fdata["Label"] = GetFieldLabel("produtos","id_subcategoria"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "id_subcategoria"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_subcategoria";
	
		
		
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
	$edata["LookupTable"] = "subcategorias";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nome_por";
	
		
	$edata["LookupOrderBy"] = "id";
	
		
			
		
				
	
	
		
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

	

	
	$tdataprodutos["id_subcategoria"] = $fdata;
//	nome_por
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "nome_por";
	$fdata["GoodName"] = "nome_por";
	$fdata["ownerTable"] = "produtos";
	$fdata["Label"] = GetFieldLabel("produtos","nome_por"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
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

	

	
	$tdataprodutos["nome_por"] = $fdata;
//	nome_eng
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "nome_eng";
	$fdata["GoodName"] = "nome_eng";
	$fdata["ownerTable"] = "produtos";
	$fdata["Label"] = GetFieldLabel("produtos","nome_eng"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
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

	

	
	$tdataprodutos["nome_eng"] = $fdata;
//	nome_esp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "nome_esp";
	$fdata["GoodName"] = "nome_esp";
	$fdata["ownerTable"] = "produtos";
	$fdata["Label"] = GetFieldLabel("produtos","nome_esp"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
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

	

	
	$tdataprodutos["nome_esp"] = $fdata;
//	descricao_por
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "descricao_por";
	$fdata["GoodName"] = "descricao_por";
	$fdata["ownerTable"] = "produtos";
	$fdata["Label"] = GetFieldLabel("produtos","descricao_por"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "descricao_por"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "descricao_por";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "HTML");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text area");
	
			
	
	


		
		$edata["UseRTE"] = true; 
	
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 400;
			$edata["nCols"] = 500;
	
		
		
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
		$fdata["defaultSearchOption"] = "NOT Empty";
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataprodutos["descricao_por"] = $fdata;
//	descricao_eng
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "descricao_eng";
	$fdata["GoodName"] = "descricao_eng";
	$fdata["ownerTable"] = "produtos";
	$fdata["Label"] = GetFieldLabel("produtos","descricao_eng"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "descricao_eng"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "descricao_eng";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "HTML");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text area");
	
			
	
	


		
		$edata["UseRTE"] = true; 
	
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 400;
			$edata["nCols"] = 500;
	
		
		
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
		$fdata["defaultSearchOption"] = "NOT Empty";
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataprodutos["descricao_eng"] = $fdata;
//	descricao_esp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "descricao_esp";
	$fdata["GoodName"] = "descricao_esp";
	$fdata["ownerTable"] = "produtos";
	$fdata["Label"] = GetFieldLabel("produtos","descricao_esp"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "descricao_esp"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "descricao_esp";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "HTML");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text area");
	
			
	
	


		
		$edata["UseRTE"] = true; 
	
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 400;
			$edata["nCols"] = 500;
	
		
		
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
		$fdata["defaultSearchOption"] = "NOT Empty";
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataprodutos["descricao_esp"] = $fdata;
//	video
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "video";
	$fdata["GoodName"] = "video";
	$fdata["ownerTable"] = "produtos";
	$fdata["Label"] = GetFieldLabel("produtos","video"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "video"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "video";
	
		
		
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

	

	
	$tdataprodutos["video"] = $fdata;
//	arearestrita
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "arearestrita";
	$fdata["GoodName"] = "arearestrita";
	$fdata["ownerTable"] = "produtos";
	$fdata["Label"] = GetFieldLabel("produtos","arearestrita"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "arearestrita"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "arearestrita";
	
		
		
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

	

	
	$tdataprodutos["arearestrita"] = $fdata;
//	imagens
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "imagens";
	$fdata["GoodName"] = "imagens";
	$fdata["ownerTable"] = "produtos";
	$fdata["Label"] = GetFieldLabel("produtos","imagens"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "imagens"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "imagens";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "../uploads/";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "File-based Image");
	
		
		
				$vdata["ShowThumbnail"] = true;
	$vdata["ThumbWidth"] = 72;
	$vdata["ThumbHeight"] = 72;	
			$vdata["ShowListOfThumbnails"] = true;		
	$vdata["ImageWidth"] = 0;
	$vdata["ImageHeight"] = 0;
	
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Document upload");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
							$edata["acceptFileTypes"] = "bmp";
						$edata["acceptFileTypes"] .= "|gif";
						$edata["acceptFileTypes"] .= "|jpg";
						$edata["acceptFileTypes"] .= "|png";
		$edata["acceptFileTypes"] = "(".$edata["acceptFileTypes"].")$";
	
		$edata["maxNumberOfFiles"] = 0;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 150;
	
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	$fdata["Absolute"] = true;
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataprodutos["imagens"] = $fdata;
//	ocultar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "ocultar";
	$fdata["GoodName"] = "ocultar";
	$fdata["ownerTable"] = "produtos";
	$fdata["Label"] = GetFieldLabel("produtos","ocultar"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "ocultar"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ocultar";
	
		
		
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
	
	
	
	

	

	
	$tdataprodutos["ocultar"] = $fdata;
//	ordem
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "ordem";
	$fdata["GoodName"] = "ordem";
	$fdata["ownerTable"] = "produtos";
	$fdata["Label"] = GetFieldLabel("produtos","ordem"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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

	

	
	$tdataprodutos["ordem"] = $fdata;

	
$tables_data["produtos"]=&$tdataprodutos;
$field_labels["produtos"] = &$fieldLabelsprodutos;
$fieldToolTips["produtos"] = &$fieldToolTipsprodutos;
$page_titles["produtos"] = &$pageTitlesprodutos;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["produtos"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["produtos"] = array();


	
				$strOriginalDetailsTable="subcategorias";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="subcategorias";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "subcategorias";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["produtos"][0] = $masterParams;	
				$masterTablesData["produtos"][0]["masterKeys"] = array();
	$masterTablesData["produtos"][0]["masterKeys"][]="id";
				$masterTablesData["produtos"][0]["detailKeys"] = array();
	$masterTablesData["produtos"][0]["detailKeys"][]="id_subcategoria";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_produtos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	id_subcategoria,  	nome_por,  	nome_eng,  	nome_esp,  	descricao_por,  	descricao_eng,  	descricao_esp,  	video,  	arearestrita,  	imagens,  	ocultar,  	ordem";
$proto0["m_strFrom"] = "FROM produtos";
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
	"m_strTable" => "produtos",
	"m_srcTableName" => "produtos"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "produtos";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "id_subcategoria",
	"m_strTable" => "produtos",
	"m_srcTableName" => "produtos"
));

$proto7["m_sql"] = "id_subcategoria";
$proto7["m_srcTableName"] = "produtos";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "nome_por",
	"m_strTable" => "produtos",
	"m_srcTableName" => "produtos"
));

$proto9["m_sql"] = "nome_por";
$proto9["m_srcTableName"] = "produtos";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "nome_eng",
	"m_strTable" => "produtos",
	"m_srcTableName" => "produtos"
));

$proto11["m_sql"] = "nome_eng";
$proto11["m_srcTableName"] = "produtos";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "nome_esp",
	"m_strTable" => "produtos",
	"m_srcTableName" => "produtos"
));

$proto13["m_sql"] = "nome_esp";
$proto13["m_srcTableName"] = "produtos";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "descricao_por",
	"m_strTable" => "produtos",
	"m_srcTableName" => "produtos"
));

$proto15["m_sql"] = "descricao_por";
$proto15["m_srcTableName"] = "produtos";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "descricao_eng",
	"m_strTable" => "produtos",
	"m_srcTableName" => "produtos"
));

$proto17["m_sql"] = "descricao_eng";
$proto17["m_srcTableName"] = "produtos";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "descricao_esp",
	"m_strTable" => "produtos",
	"m_srcTableName" => "produtos"
));

$proto19["m_sql"] = "descricao_esp";
$proto19["m_srcTableName"] = "produtos";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "video",
	"m_strTable" => "produtos",
	"m_srcTableName" => "produtos"
));

$proto21["m_sql"] = "video";
$proto21["m_srcTableName"] = "produtos";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "arearestrita",
	"m_strTable" => "produtos",
	"m_srcTableName" => "produtos"
));

$proto23["m_sql"] = "arearestrita";
$proto23["m_srcTableName"] = "produtos";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "imagens",
	"m_strTable" => "produtos",
	"m_srcTableName" => "produtos"
));

$proto25["m_sql"] = "imagens";
$proto25["m_srcTableName"] = "produtos";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "ocultar",
	"m_strTable" => "produtos",
	"m_srcTableName" => "produtos"
));

$proto27["m_sql"] = "ocultar";
$proto27["m_srcTableName"] = "produtos";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "ordem",
	"m_strTable" => "produtos",
	"m_srcTableName" => "produtos"
));

$proto29["m_sql"] = "ordem";
$proto29["m_srcTableName"] = "produtos";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto31=array();
$proto31["m_link"] = "SQLL_MAIN";
			$proto32=array();
$proto32["m_strName"] = "produtos";
$proto32["m_srcTableName"] = "produtos";
$proto32["m_columns"] = array();
$proto32["m_columns"][] = "id";
$proto32["m_columns"][] = "id_subcategoria";
$proto32["m_columns"][] = "nome_por";
$proto32["m_columns"][] = "nome_eng";
$proto32["m_columns"][] = "nome_esp";
$proto32["m_columns"][] = "descricao_por";
$proto32["m_columns"][] = "descricao_eng";
$proto32["m_columns"][] = "descricao_esp";
$proto32["m_columns"][] = "video";
$proto32["m_columns"][] = "arearestrita";
$proto32["m_columns"][] = "imagens";
$proto32["m_columns"][] = "ocultar";
$proto32["m_columns"][] = "ordem";
$obj = new SQLTable($proto32);

$proto31["m_table"] = $obj;
$proto31["m_sql"] = "produtos";
$proto31["m_alias"] = "";
$proto31["m_srcTableName"] = "produtos";
$proto33=array();
$proto33["m_sql"] = "";
$proto33["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto33["m_column"]=$obj;
$proto33["m_contained"] = array();
$proto33["m_strCase"] = "";
$proto33["m_havingmode"] = false;
$proto33["m_inBrackets"] = false;
$proto33["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto33);

$proto31["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto31);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="produtos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_produtos = createSqlQuery_produtos();


	
													
	
$tdataprodutos[".sqlquery"] = $queryData_produtos;

include_once(getabspath("include/produtos_events.php"));
$tableEvents["produtos"] = new eventclass_produtos;
$tdataprodutos[".hasEvents"] = true;

?>