<?php
require_once(getabspath("classes/cipherer.php"));




$tdatasubcategorias = array();	
	$tdatasubcategorias[".truncateText"] = true;
	$tdatasubcategorias[".NumberOfChars"] = 80; 
	$tdatasubcategorias[".ShortName"] = "subcategorias";
	$tdatasubcategorias[".OwnerID"] = "";
	$tdatasubcategorias[".OriginalTable"] = "subcategorias";

//	field labels
$fieldLabelssubcategorias = array();
$fieldToolTipssubcategorias = array();
$pageTitlessubcategorias = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelssubcategorias["Portuguese(Brazil)"] = array();
	$fieldToolTipssubcategorias["Portuguese(Brazil)"] = array();
	$pageTitlessubcategorias["Portuguese(Brazil)"] = array();
	$fieldLabelssubcategorias["Portuguese(Brazil)"]["id"] = "Id";
	$fieldToolTipssubcategorias["Portuguese(Brazil)"]["id"] = "";
	$fieldLabelssubcategorias["Portuguese(Brazil)"]["id_categoria"] = "Categoria";
	$fieldToolTipssubcategorias["Portuguese(Brazil)"]["id_categoria"] = "";
	$fieldLabelssubcategorias["Portuguese(Brazil)"]["nome_por"] = "Nome Português";
	$fieldToolTipssubcategorias["Portuguese(Brazil)"]["nome_por"] = "";
	$fieldLabelssubcategorias["Portuguese(Brazil)"]["nome_eng"] = "Nome Inglês";
	$fieldToolTipssubcategorias["Portuguese(Brazil)"]["nome_eng"] = "";
	$fieldLabelssubcategorias["Portuguese(Brazil)"]["nome_esp"] = "Nome Espanhol";
	$fieldToolTipssubcategorias["Portuguese(Brazil)"]["nome_esp"] = "";
	if (count($fieldToolTipssubcategorias["Portuguese(Brazil)"]))
		$tdatasubcategorias[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelssubcategorias[""] = array();
	$fieldToolTipssubcategorias[""] = array();
	$pageTitlessubcategorias[""] = array();
	$fieldLabelssubcategorias[""]["id"] = "Id";
	$fieldToolTipssubcategorias[""]["id"] = "";
	if (count($fieldToolTipssubcategorias[""]))
		$tdatasubcategorias[".isUseToolTips"] = true;
}
	
	
	$tdatasubcategorias[".NCSearch"] = true;



$tdatasubcategorias[".shortTableName"] = "subcategorias";
$tdatasubcategorias[".nSecOptions"] = 0;
$tdatasubcategorias[".recsPerRowList"] = 1;
$tdatasubcategorias[".mainTableOwnerID"] = "";
$tdatasubcategorias[".moveNext"] = 1;
$tdatasubcategorias[".nType"] = 0;

$tdatasubcategorias[".strOriginalTableName"] = "subcategorias";




$tdatasubcategorias[".showAddInPopup"] = false;

$tdatasubcategorias[".showEditInPopup"] = false;

$tdatasubcategorias[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatasubcategorias[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatasubcategorias[".fieldsForRegister"] = array();

$tdatasubcategorias[".listAjax"] = false;

	$tdatasubcategorias[".audit"] = false;

	$tdatasubcategorias[".locking"] = false;


$tdatasubcategorias[".list"] = true;

$tdatasubcategorias[".inlineEdit"] = true;
$tdatasubcategorias[".inlineAdd"] = true;




$tdatasubcategorias[".delete"] = true;

$tdatasubcategorias[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatasubcategorias[".searchSaving"] = false;
//

$tdatasubcategorias[".showSearchPanel"] = true;
		$tdatasubcategorias[".flexibleSearch"] = true;		

if (isMobile())
	$tdatasubcategorias[".isUseAjaxSuggest"] = false;
else 
	$tdatasubcategorias[".isUseAjaxSuggest"] = true;

$tdatasubcategorias[".rowHighlite"] = true;



$tdatasubcategorias[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasubcategorias[".isUseTimeForSearch"] = false;



$tdatasubcategorias[".useDetailsPreview"] = true;


$tdatasubcategorias[".allSearchFields"] = array();
$tdatasubcategorias[".filterFields"] = array();
$tdatasubcategorias[".requiredSearchFields"] = array();

$tdatasubcategorias[".allSearchFields"][] = "id";
	$tdatasubcategorias[".allSearchFields"][] = "id_categoria";
	$tdatasubcategorias[".allSearchFields"][] = "nome_por";
	$tdatasubcategorias[".allSearchFields"][] = "nome_eng";
	$tdatasubcategorias[".allSearchFields"][] = "nome_esp";
	

$tdatasubcategorias[".googleLikeFields"] = array();
$tdatasubcategorias[".googleLikeFields"][] = "id";
$tdatasubcategorias[".googleLikeFields"][] = "id_categoria";
$tdatasubcategorias[".googleLikeFields"][] = "nome_por";
$tdatasubcategorias[".googleLikeFields"][] = "nome_eng";
$tdatasubcategorias[".googleLikeFields"][] = "nome_esp";


$tdatasubcategorias[".advSearchFields"] = array();
$tdatasubcategorias[".advSearchFields"][] = "id";
$tdatasubcategorias[".advSearchFields"][] = "id_categoria";
$tdatasubcategorias[".advSearchFields"][] = "nome_por";
$tdatasubcategorias[".advSearchFields"][] = "nome_eng";
$tdatasubcategorias[".advSearchFields"][] = "nome_esp";

$tdatasubcategorias[".tableType"] = "list";

$tdatasubcategorias[".printerPageOrientation"] = 0;
$tdatasubcategorias[".nPrinterPageScale"] = 100;

$tdatasubcategorias[".nPrinterSplitRecords"] = 40;

$tdatasubcategorias[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdatasubcategorias[".pageSize"] = 20;

$tdatasubcategorias[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasubcategorias[".strOrderBy"] = $tstrOrderBy;

$tdatasubcategorias[".orderindexes"] = array();

$tdatasubcategorias[".sqlHead"] = "SELECT id,  	id_categoria,  	nome_por,  	nome_eng,  	nome_esp";
$tdatasubcategorias[".sqlFrom"] = "FROM subcategorias";
$tdatasubcategorias[".sqlWhereExpr"] = "";
$tdatasubcategorias[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasubcategorias[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasubcategorias[".arrGroupsPerPage"] = $arrGPP;

$tdatasubcategorias[".highlightSearchResults"] = true;

$tableKeyssubcategorias = array();
$tableKeyssubcategorias[] = "id";
$tdatasubcategorias[".Keys"] = $tableKeyssubcategorias;

$tdatasubcategorias[".listFields"] = array();
$tdatasubcategorias[".listFields"][] = "id";
$tdatasubcategorias[".listFields"][] = "id_categoria";
$tdatasubcategorias[".listFields"][] = "nome_por";
$tdatasubcategorias[".listFields"][] = "nome_eng";
$tdatasubcategorias[".listFields"][] = "nome_esp";

$tdatasubcategorias[".hideMobileList"] = array();


$tdatasubcategorias[".viewFields"] = array();

$tdatasubcategorias[".addFields"] = array();

$tdatasubcategorias[".inlineAddFields"] = array();
$tdatasubcategorias[".inlineAddFields"][] = "id_categoria";
$tdatasubcategorias[".inlineAddFields"][] = "nome_por";
$tdatasubcategorias[".inlineAddFields"][] = "nome_eng";
$tdatasubcategorias[".inlineAddFields"][] = "nome_esp";

$tdatasubcategorias[".editFields"] = array();

$tdatasubcategorias[".inlineEditFields"] = array();
$tdatasubcategorias[".inlineEditFields"][] = "id_categoria";
$tdatasubcategorias[".inlineEditFields"][] = "nome_por";
$tdatasubcategorias[".inlineEditFields"][] = "nome_eng";
$tdatasubcategorias[".inlineEditFields"][] = "nome_esp";

$tdatasubcategorias[".exportFields"] = array();

$tdatasubcategorias[".importFields"] = array();

$tdatasubcategorias[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "subcategorias";
	$fdata["Label"] = GetFieldLabel("subcategorias","id"); 
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

	

	
	$tdatasubcategorias["id"] = $fdata;
//	id_categoria
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_categoria";
	$fdata["GoodName"] = "id_categoria";
	$fdata["ownerTable"] = "subcategorias";
	$fdata["Label"] = GetFieldLabel("subcategorias","id_categoria"); 
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

	

	
	$tdatasubcategorias["id_categoria"] = $fdata;
//	nome_por
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "nome_por";
	$fdata["GoodName"] = "nome_por";
	$fdata["ownerTable"] = "subcategorias";
	$fdata["Label"] = GetFieldLabel("subcategorias","nome_por"); 
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

	

	
	$tdatasubcategorias["nome_por"] = $fdata;
//	nome_eng
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "nome_eng";
	$fdata["GoodName"] = "nome_eng";
	$fdata["ownerTable"] = "subcategorias";
	$fdata["Label"] = GetFieldLabel("subcategorias","nome_eng"); 
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

	

	
	$tdatasubcategorias["nome_eng"] = $fdata;
//	nome_esp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "nome_esp";
	$fdata["GoodName"] = "nome_esp";
	$fdata["ownerTable"] = "subcategorias";
	$fdata["Label"] = GetFieldLabel("subcategorias","nome_esp"); 
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

	

	
	$tdatasubcategorias["nome_esp"] = $fdata;

	
$tables_data["subcategorias"]=&$tdatasubcategorias;
$field_labels["subcategorias"] = &$fieldLabelssubcategorias;
$fieldToolTips["subcategorias"] = &$fieldToolTipssubcategorias;
$page_titles["subcategorias"] = &$pageTitlessubcategorias;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["subcategorias"] = array();
//	produtos
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="produtos";
		$detailsParam["dOriginalTable"] = "produtos";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "produtos";
	$detailsParam["dCaptionTable"] = GetTableCaption("produtos");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["subcategorias"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["subcategorias"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["subcategorias"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["subcategorias"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["subcategorias"][$dIndex]["detailKeys"][]="id_subcategoria";
	
// tables which are master tables for current table (detail)
$masterTablesData["subcategorias"] = array();


	
				$strOriginalDetailsTable="categorias";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="categorias";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "categorias";
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
					$masterTablesData["subcategorias"][0] = $masterParams;	
				$masterTablesData["subcategorias"][0]["masterKeys"] = array();
	$masterTablesData["subcategorias"][0]["masterKeys"][]="id";
				$masterTablesData["subcategorias"][0]["detailKeys"] = array();
	$masterTablesData["subcategorias"][0]["detailKeys"][]="id_categoria";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_subcategorias()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	id_categoria,  	nome_por,  	nome_eng,  	nome_esp";
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
	"m_srcTableName" => "subcategorias"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "subcategorias";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "id_categoria",
	"m_strTable" => "subcategorias",
	"m_srcTableName" => "subcategorias"
));

$proto7["m_sql"] = "id_categoria";
$proto7["m_srcTableName"] = "subcategorias";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "nome_por",
	"m_strTable" => "subcategorias",
	"m_srcTableName" => "subcategorias"
));

$proto9["m_sql"] = "nome_por";
$proto9["m_srcTableName"] = "subcategorias";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "nome_eng",
	"m_strTable" => "subcategorias",
	"m_srcTableName" => "subcategorias"
));

$proto11["m_sql"] = "nome_eng";
$proto11["m_srcTableName"] = "subcategorias";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "nome_esp",
	"m_strTable" => "subcategorias",
	"m_srcTableName" => "subcategorias"
));

$proto13["m_sql"] = "nome_esp";
$proto13["m_srcTableName"] = "subcategorias";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "subcategorias";
$proto16["m_srcTableName"] = "subcategorias";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "id";
$proto16["m_columns"][] = "id_categoria";
$proto16["m_columns"][] = "nome_por";
$proto16["m_columns"][] = "nome_eng";
$proto16["m_columns"][] = "nome_esp";
$obj = new SQLTable($proto16);

$proto15["m_table"] = $obj;
$proto15["m_sql"] = "subcategorias";
$proto15["m_alias"] = "";
$proto15["m_srcTableName"] = "subcategorias";
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
$proto0["m_srcTableName"]="subcategorias";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_subcategorias = createSqlQuery_subcategorias();


	
					
	
$tdatasubcategorias[".sqlquery"] = $queryData_subcategorias;

$tableEvents["subcategorias"] = new eventsBase;
$tdatasubcategorias[".hasEvents"] = false;

?>