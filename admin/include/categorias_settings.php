<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacategorias = array();	
	$tdatacategorias[".truncateText"] = true;
	$tdatacategorias[".NumberOfChars"] = 80; 
	$tdatacategorias[".ShortName"] = "categorias";
	$tdatacategorias[".OwnerID"] = "";
	$tdatacategorias[".OriginalTable"] = "categorias";

//	field labels
$fieldLabelscategorias = array();
$fieldToolTipscategorias = array();
$pageTitlescategorias = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelscategorias["Portuguese(Brazil)"] = array();
	$fieldToolTipscategorias["Portuguese(Brazil)"] = array();
	$pageTitlescategorias["Portuguese(Brazil)"] = array();
	$fieldLabelscategorias["Portuguese(Brazil)"]["id"] = "Id";
	$fieldToolTipscategorias["Portuguese(Brazil)"]["id"] = "";
	$fieldLabelscategorias["Portuguese(Brazil)"]["nome_por"] = "Nome Português";
	$fieldToolTipscategorias["Portuguese(Brazil)"]["nome_por"] = "";
	$fieldLabelscategorias["Portuguese(Brazil)"]["nome_eng"] = "Nome Inglês";
	$fieldToolTipscategorias["Portuguese(Brazil)"]["nome_eng"] = "";
	$fieldLabelscategorias["Portuguese(Brazil)"]["nome_esp"] = "Nome Espanhol";
	$fieldToolTipscategorias["Portuguese(Brazil)"]["nome_esp"] = "";
	$fieldLabelscategorias["Portuguese(Brazil)"]["imagem"] = "Imagem";
	$fieldToolTipscategorias["Portuguese(Brazil)"]["imagem"] = "";
	$fieldLabelscategorias["Portuguese(Brazil)"]["ocultar"] = "Ocultar";
	$fieldToolTipscategorias["Portuguese(Brazil)"]["ocultar"] = "";
	if (count($fieldToolTipscategorias["Portuguese(Brazil)"]))
		$tdatacategorias[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscategorias[""] = array();
	$fieldToolTipscategorias[""] = array();
	$pageTitlescategorias[""] = array();
	$fieldLabelscategorias[""]["id"] = "Id";
	$fieldToolTipscategorias[""]["id"] = "";
	$fieldLabelscategorias[""]["ocultar"] = "Ocultar";
	$fieldToolTipscategorias[""]["ocultar"] = "";
	if (count($fieldToolTipscategorias[""]))
		$tdatacategorias[".isUseToolTips"] = true;
}
	
	
	$tdatacategorias[".NCSearch"] = true;



$tdatacategorias[".shortTableName"] = "categorias";
$tdatacategorias[".nSecOptions"] = 0;
$tdatacategorias[".recsPerRowList"] = 1;
$tdatacategorias[".mainTableOwnerID"] = "";
$tdatacategorias[".moveNext"] = 1;
$tdatacategorias[".nType"] = 0;

$tdatacategorias[".strOriginalTableName"] = "categorias";




$tdatacategorias[".showAddInPopup"] = false;

$tdatacategorias[".showEditInPopup"] = false;

$tdatacategorias[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacategorias[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacategorias[".fieldsForRegister"] = array();

$tdatacategorias[".listAjax"] = false;

	$tdatacategorias[".audit"] = false;

	$tdatacategorias[".locking"] = false;


$tdatacategorias[".list"] = true;

$tdatacategorias[".inlineEdit"] = true;
$tdatacategorias[".inlineAdd"] = true;





$tdatacategorias[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacategorias[".searchSaving"] = false;
//

$tdatacategorias[".showSearchPanel"] = true;
		$tdatacategorias[".flexibleSearch"] = true;		

if (isMobile())
	$tdatacategorias[".isUseAjaxSuggest"] = false;
else 
	$tdatacategorias[".isUseAjaxSuggest"] = true;

$tdatacategorias[".rowHighlite"] = true;



$tdatacategorias[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacategorias[".isUseTimeForSearch"] = false;



$tdatacategorias[".useDetailsPreview"] = true;


$tdatacategorias[".allSearchFields"] = array();
$tdatacategorias[".filterFields"] = array();
$tdatacategorias[".requiredSearchFields"] = array();

$tdatacategorias[".allSearchFields"][] = "id";
	$tdatacategorias[".allSearchFields"][] = "nome_por";
	$tdatacategorias[".allSearchFields"][] = "nome_eng";
	$tdatacategorias[".allSearchFields"][] = "nome_esp";
	$tdatacategorias[".allSearchFields"][] = "imagem";
	$tdatacategorias[".allSearchFields"][] = "ocultar";
	

$tdatacategorias[".googleLikeFields"] = array();
$tdatacategorias[".googleLikeFields"][] = "id";
$tdatacategorias[".googleLikeFields"][] = "nome_por";
$tdatacategorias[".googleLikeFields"][] = "nome_eng";
$tdatacategorias[".googleLikeFields"][] = "nome_esp";
$tdatacategorias[".googleLikeFields"][] = "imagem";
$tdatacategorias[".googleLikeFields"][] = "ocultar";


$tdatacategorias[".advSearchFields"] = array();
$tdatacategorias[".advSearchFields"][] = "id";
$tdatacategorias[".advSearchFields"][] = "nome_por";
$tdatacategorias[".advSearchFields"][] = "nome_eng";
$tdatacategorias[".advSearchFields"][] = "nome_esp";
$tdatacategorias[".advSearchFields"][] = "imagem";
$tdatacategorias[".advSearchFields"][] = "ocultar";

$tdatacategorias[".tableType"] = "list";

$tdatacategorias[".printerPageOrientation"] = 0;
$tdatacategorias[".nPrinterPageScale"] = 100;

$tdatacategorias[".nPrinterSplitRecords"] = 40;

$tdatacategorias[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdatacategorias[".pageSize"] = 20;

$tdatacategorias[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacategorias[".strOrderBy"] = $tstrOrderBy;

$tdatacategorias[".orderindexes"] = array();

$tdatacategorias[".sqlHead"] = "SELECT id,  	nome_por,  	nome_eng,  	nome_esp,  	imagem,  	ocultar";
$tdatacategorias[".sqlFrom"] = "FROM categorias";
$tdatacategorias[".sqlWhereExpr"] = "";
$tdatacategorias[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacategorias[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacategorias[".arrGroupsPerPage"] = $arrGPP;

$tdatacategorias[".highlightSearchResults"] = true;

$tableKeyscategorias = array();
$tableKeyscategorias[] = "id";
$tdatacategorias[".Keys"] = $tableKeyscategorias;

$tdatacategorias[".listFields"] = array();
$tdatacategorias[".listFields"][] = "id";
$tdatacategorias[".listFields"][] = "nome_por";
$tdatacategorias[".listFields"][] = "nome_eng";
$tdatacategorias[".listFields"][] = "nome_esp";
$tdatacategorias[".listFields"][] = "imagem";
$tdatacategorias[".listFields"][] = "ocultar";

$tdatacategorias[".hideMobileList"] = array();


$tdatacategorias[".viewFields"] = array();

$tdatacategorias[".addFields"] = array();

$tdatacategorias[".inlineAddFields"] = array();
$tdatacategorias[".inlineAddFields"][] = "nome_por";
$tdatacategorias[".inlineAddFields"][] = "nome_eng";
$tdatacategorias[".inlineAddFields"][] = "nome_esp";
$tdatacategorias[".inlineAddFields"][] = "imagem";
$tdatacategorias[".inlineAddFields"][] = "ocultar";

$tdatacategorias[".editFields"] = array();

$tdatacategorias[".inlineEditFields"] = array();
$tdatacategorias[".inlineEditFields"][] = "nome_por";
$tdatacategorias[".inlineEditFields"][] = "nome_eng";
$tdatacategorias[".inlineEditFields"][] = "nome_esp";
$tdatacategorias[".inlineEditFields"][] = "imagem";
$tdatacategorias[".inlineEditFields"][] = "ocultar";

$tdatacategorias[".exportFields"] = array();

$tdatacategorias[".importFields"] = array();

$tdatacategorias[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "categorias";
	$fdata["Label"] = GetFieldLabel("categorias","id"); 
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
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "number";
	
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatacategorias["id"] = $fdata;
//	nome_por
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nome_por";
	$fdata["GoodName"] = "nome_por";
	$fdata["ownerTable"] = "categorias";
	$fdata["Label"] = GetFieldLabel("categorias","nome_por"); 
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

	

	
	$tdatacategorias["nome_por"] = $fdata;
//	nome_eng
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "nome_eng";
	$fdata["GoodName"] = "nome_eng";
	$fdata["ownerTable"] = "categorias";
	$fdata["Label"] = GetFieldLabel("categorias","nome_eng"); 
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

	

	
	$tdatacategorias["nome_eng"] = $fdata;
//	nome_esp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "nome_esp";
	$fdata["GoodName"] = "nome_esp";
	$fdata["ownerTable"] = "categorias";
	$fdata["Label"] = GetFieldLabel("categorias","nome_esp"); 
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

	

	
	$tdatacategorias["nome_esp"] = $fdata;
//	imagem
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "imagem";
	$fdata["GoodName"] = "imagem";
	$fdata["ownerTable"] = "categorias";
	$fdata["Label"] = GetFieldLabel("categorias","imagem"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "imagem"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "imagem";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		$fdata["CompatibilityMode"] = true; 
	
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "../uploads/";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "File-based Image");
	
		
		
				$vdata["ShowThumbnail"] = true;
	$vdata["ThumbWidth"] = 72;
	$vdata["ThumbHeight"] = 72;	
			$vdata["ImageWidth"] = 0;
	$vdata["ImageHeight"] = 0;
	
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Document upload");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
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

	

	
	$tdatacategorias["imagem"] = $fdata;
//	ocultar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ocultar";
	$fdata["GoodName"] = "ocultar";
	$fdata["ownerTable"] = "categorias";
	$fdata["Label"] = GetFieldLabel("categorias","ocultar"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatacategorias["ocultar"] = $fdata;

	
$tables_data["categorias"]=&$tdatacategorias;
$field_labels["categorias"] = &$fieldLabelscategorias;
$fieldToolTips["categorias"] = &$fieldToolTipscategorias;
$page_titles["categorias"] = &$pageTitlescategorias;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["categorias"] = array();
//	subcategorias
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="subcategorias";
		$detailsParam["dOriginalTable"] = "subcategorias";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "subcategorias";
	$detailsParam["dCaptionTable"] = GetTableCaption("subcategorias");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["categorias"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["categorias"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["categorias"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["categorias"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["categorias"][$dIndex]["detailKeys"][]="id_categoria";
	
// tables which are master tables for current table (detail)
$masterTablesData["categorias"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_categorias()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	nome_por,  	nome_eng,  	nome_esp,  	imagem,  	ocultar";
$proto0["m_strFrom"] = "FROM categorias";
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
	"m_strTable" => "categorias",
	"m_srcTableName" => "categorias"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "categorias";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "nome_por",
	"m_strTable" => "categorias",
	"m_srcTableName" => "categorias"
));

$proto7["m_sql"] = "nome_por";
$proto7["m_srcTableName"] = "categorias";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "nome_eng",
	"m_strTable" => "categorias",
	"m_srcTableName" => "categorias"
));

$proto9["m_sql"] = "nome_eng";
$proto9["m_srcTableName"] = "categorias";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "nome_esp",
	"m_strTable" => "categorias",
	"m_srcTableName" => "categorias"
));

$proto11["m_sql"] = "nome_esp";
$proto11["m_srcTableName"] = "categorias";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "imagem",
	"m_strTable" => "categorias",
	"m_srcTableName" => "categorias"
));

$proto13["m_sql"] = "imagem";
$proto13["m_srcTableName"] = "categorias";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "ocultar",
	"m_strTable" => "categorias",
	"m_srcTableName" => "categorias"
));

$proto15["m_sql"] = "ocultar";
$proto15["m_srcTableName"] = "categorias";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "categorias";
$proto18["m_srcTableName"] = "categorias";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "id";
$proto18["m_columns"][] = "nome_por";
$proto18["m_columns"][] = "nome_eng";
$proto18["m_columns"][] = "nome_esp";
$proto18["m_columns"][] = "imagem";
$proto18["m_columns"][] = "ocultar";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_sql"] = "categorias";
$proto17["m_alias"] = "";
$proto17["m_srcTableName"] = "categorias";
$proto19=array();
$proto19["m_sql"] = "";
$proto19["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto19["m_column"]=$obj;
$proto19["m_contained"] = array();
$proto19["m_strCase"] = "";
$proto19["m_havingmode"] = false;
$proto19["m_inBrackets"] = false;
$proto19["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto19);

$proto17["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto17);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="categorias";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_categorias = createSqlQuery_categorias();


	
						
	
$tdatacategorias[".sqlquery"] = $queryData_categorias;

include_once(getabspath("include/categorias_events.php"));
$tableEvents["categorias"] = new eventclass_categorias;
$tdatacategorias[".hasEvents"] = true;

?>