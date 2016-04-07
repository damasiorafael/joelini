<?php
require_once(getabspath("classes/cipherer.php"));




$tdataimagens_produtos = array();	
	$tdataimagens_produtos[".truncateText"] = true;
	$tdataimagens_produtos[".NumberOfChars"] = 80; 
	$tdataimagens_produtos[".ShortName"] = "imagens_produtos";
	$tdataimagens_produtos[".OwnerID"] = "";
	$tdataimagens_produtos[".OriginalTable"] = "imagens_produtos";

//	field labels
$fieldLabelsimagens_produtos = array();
$fieldToolTipsimagens_produtos = array();
$pageTitlesimagens_produtos = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsimagens_produtos["Portuguese(Brazil)"] = array();
	$fieldToolTipsimagens_produtos["Portuguese(Brazil)"] = array();
	$pageTitlesimagens_produtos["Portuguese(Brazil)"] = array();
	$fieldLabelsimagens_produtos["Portuguese(Brazil)"]["id"] = "Id";
	$fieldToolTipsimagens_produtos["Portuguese(Brazil)"]["id"] = "";
	$fieldLabelsimagens_produtos["Portuguese(Brazil)"]["id_produto"] = "Id Produto";
	$fieldToolTipsimagens_produtos["Portuguese(Brazil)"]["id_produto"] = "";
	$fieldLabelsimagens_produtos["Portuguese(Brazil)"]["imagem"] = "Imagem";
	$fieldToolTipsimagens_produtos["Portuguese(Brazil)"]["imagem"] = "";
	$fieldLabelsimagens_produtos["Portuguese(Brazil)"]["destaque"] = "Destaque";
	$fieldToolTipsimagens_produtos["Portuguese(Brazil)"]["destaque"] = "";
	if (count($fieldToolTipsimagens_produtos["Portuguese(Brazil)"]))
		$tdataimagens_produtos[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsimagens_produtos[""] = array();
	$fieldToolTipsimagens_produtos[""] = array();
	$pageTitlesimagens_produtos[""] = array();
	$fieldLabelsimagens_produtos[""]["id"] = "Id";
	$fieldToolTipsimagens_produtos[""]["id"] = "";
	if (count($fieldToolTipsimagens_produtos[""]))
		$tdataimagens_produtos[".isUseToolTips"] = true;
}
	
	
	$tdataimagens_produtos[".NCSearch"] = true;



$tdataimagens_produtos[".shortTableName"] = "imagens_produtos";
$tdataimagens_produtos[".nSecOptions"] = 0;
$tdataimagens_produtos[".recsPerRowList"] = 1;
$tdataimagens_produtos[".mainTableOwnerID"] = "";
$tdataimagens_produtos[".moveNext"] = 1;
$tdataimagens_produtos[".nType"] = 0;

$tdataimagens_produtos[".strOriginalTableName"] = "imagens_produtos";




$tdataimagens_produtos[".showAddInPopup"] = false;

$tdataimagens_produtos[".showEditInPopup"] = false;

$tdataimagens_produtos[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataimagens_produtos[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataimagens_produtos[".fieldsForRegister"] = array();

$tdataimagens_produtos[".listAjax"] = false;

	$tdataimagens_produtos[".audit"] = false;

	$tdataimagens_produtos[".locking"] = false;

$tdataimagens_produtos[".edit"] = true;

$tdataimagens_produtos[".list"] = true;





$tdataimagens_produtos[".delete"] = true;

$tdataimagens_produtos[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataimagens_produtos[".searchSaving"] = false;
//

$tdataimagens_produtos[".showSearchPanel"] = true;
		$tdataimagens_produtos[".flexibleSearch"] = true;		

if (isMobile())
	$tdataimagens_produtos[".isUseAjaxSuggest"] = false;
else 
	$tdataimagens_produtos[".isUseAjaxSuggest"] = true;

$tdataimagens_produtos[".rowHighlite"] = true;



$tdataimagens_produtos[".addPageEvents"] = false;

// use timepicker for search panel
$tdataimagens_produtos[".isUseTimeForSearch"] = false;





$tdataimagens_produtos[".allSearchFields"] = array();
$tdataimagens_produtos[".filterFields"] = array();
$tdataimagens_produtos[".requiredSearchFields"] = array();

$tdataimagens_produtos[".allSearchFields"][] = "id";
	$tdataimagens_produtos[".allSearchFields"][] = "id_produto";
	$tdataimagens_produtos[".allSearchFields"][] = "imagem";
	$tdataimagens_produtos[".allSearchFields"][] = "destaque";
	

$tdataimagens_produtos[".googleLikeFields"] = array();
$tdataimagens_produtos[".googleLikeFields"][] = "id";
$tdataimagens_produtos[".googleLikeFields"][] = "id_produto";
$tdataimagens_produtos[".googleLikeFields"][] = "imagem";
$tdataimagens_produtos[".googleLikeFields"][] = "destaque";


$tdataimagens_produtos[".advSearchFields"] = array();
$tdataimagens_produtos[".advSearchFields"][] = "id";
$tdataimagens_produtos[".advSearchFields"][] = "id_produto";
$tdataimagens_produtos[".advSearchFields"][] = "imagem";
$tdataimagens_produtos[".advSearchFields"][] = "destaque";

$tdataimagens_produtos[".tableType"] = "list";

$tdataimagens_produtos[".printerPageOrientation"] = 0;
$tdataimagens_produtos[".nPrinterPageScale"] = 100;

$tdataimagens_produtos[".nPrinterSplitRecords"] = 40;

$tdataimagens_produtos[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdataimagens_produtos[".pageSize"] = 20;

$tdataimagens_produtos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataimagens_produtos[".strOrderBy"] = $tstrOrderBy;

$tdataimagens_produtos[".orderindexes"] = array();

$tdataimagens_produtos[".sqlHead"] = "SELECT id,  	id_produto,  	imagem,  	destaque";
$tdataimagens_produtos[".sqlFrom"] = "FROM imagens_produtos";
$tdataimagens_produtos[".sqlWhereExpr"] = "";
$tdataimagens_produtos[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataimagens_produtos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataimagens_produtos[".arrGroupsPerPage"] = $arrGPP;

$tdataimagens_produtos[".highlightSearchResults"] = true;

$tableKeysimagens_produtos = array();
$tableKeysimagens_produtos[] = "id";
$tdataimagens_produtos[".Keys"] = $tableKeysimagens_produtos;

$tdataimagens_produtos[".listFields"] = array();
$tdataimagens_produtos[".listFields"][] = "id";
$tdataimagens_produtos[".listFields"][] = "id_produto";
$tdataimagens_produtos[".listFields"][] = "imagem";
$tdataimagens_produtos[".listFields"][] = "destaque";

$tdataimagens_produtos[".hideMobileList"] = array();


$tdataimagens_produtos[".viewFields"] = array();

$tdataimagens_produtos[".addFields"] = array();
$tdataimagens_produtos[".addFields"][] = "id_produto";
$tdataimagens_produtos[".addFields"][] = "imagem";
$tdataimagens_produtos[".addFields"][] = "destaque";

$tdataimagens_produtos[".inlineAddFields"] = array();

$tdataimagens_produtos[".editFields"] = array();
$tdataimagens_produtos[".editFields"][] = "id_produto";
$tdataimagens_produtos[".editFields"][] = "imagem";
$tdataimagens_produtos[".editFields"][] = "destaque";

$tdataimagens_produtos[".inlineEditFields"] = array();

$tdataimagens_produtos[".exportFields"] = array();

$tdataimagens_produtos[".importFields"] = array();

$tdataimagens_produtos[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "imagens_produtos";
	$fdata["Label"] = GetFieldLabel("imagens_produtos","id"); 
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

	

	
	$tdataimagens_produtos["id"] = $fdata;
//	id_produto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_produto";
	$fdata["GoodName"] = "id_produto";
	$fdata["ownerTable"] = "imagens_produtos";
	$fdata["Label"] = GetFieldLabel("imagens_produtos","id_produto"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "id_produto"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_produto";
	
		
		
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
	$edata["LookupTable"] = "produtos";
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
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataimagens_produtos["id_produto"] = $fdata;
//	imagem
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "imagem";
	$fdata["GoodName"] = "imagem";
	$fdata["ownerTable"] = "imagens_produtos";
	$fdata["Label"] = GetFieldLabel("imagens_produtos","imagem"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
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

	

	
	$tdataimagens_produtos["imagem"] = $fdata;
//	destaque
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "destaque";
	$fdata["GoodName"] = "destaque";
	$fdata["ownerTable"] = "imagens_produtos";
	$fdata["Label"] = GetFieldLabel("imagens_produtos","destaque"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "destaque"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "destaque";
	
		
		
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

	

	
	$tdataimagens_produtos["destaque"] = $fdata;

	
$tables_data["imagens_produtos"]=&$tdataimagens_produtos;
$field_labels["imagens_produtos"] = &$fieldLabelsimagens_produtos;
$fieldToolTips["imagens_produtos"] = &$fieldToolTipsimagens_produtos;
$page_titles["imagens_produtos"] = &$pageTitlesimagens_produtos;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["imagens_produtos"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["imagens_produtos"] = array();


	
				$strOriginalDetailsTable="produtos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="produtos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "produtos";
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
					$masterTablesData["imagens_produtos"][0] = $masterParams;	
				$masterTablesData["imagens_produtos"][0]["masterKeys"] = array();
	$masterTablesData["imagens_produtos"][0]["masterKeys"][]="id";
				$masterTablesData["imagens_produtos"][0]["detailKeys"] = array();
	$masterTablesData["imagens_produtos"][0]["detailKeys"][]="id_produto";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_imagens_produtos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	id_produto,  	imagem,  	destaque";
$proto0["m_strFrom"] = "FROM imagens_produtos";
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
	"m_strTable" => "imagens_produtos",
	"m_srcTableName" => "imagens_produtos"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "imagens_produtos";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "id_produto",
	"m_strTable" => "imagens_produtos",
	"m_srcTableName" => "imagens_produtos"
));

$proto7["m_sql"] = "id_produto";
$proto7["m_srcTableName"] = "imagens_produtos";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "imagem",
	"m_strTable" => "imagens_produtos",
	"m_srcTableName" => "imagens_produtos"
));

$proto9["m_sql"] = "imagem";
$proto9["m_srcTableName"] = "imagens_produtos";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "destaque",
	"m_strTable" => "imagens_produtos",
	"m_srcTableName" => "imagens_produtos"
));

$proto11["m_sql"] = "destaque";
$proto11["m_srcTableName"] = "imagens_produtos";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "imagens_produtos";
$proto14["m_srcTableName"] = "imagens_produtos";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "id";
$proto14["m_columns"][] = "id_produto";
$proto14["m_columns"][] = "imagem";
$proto14["m_columns"][] = "destaque";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_sql"] = "imagens_produtos";
$proto13["m_alias"] = "";
$proto13["m_srcTableName"] = "imagens_produtos";
$proto15=array();
$proto15["m_sql"] = "";
$proto15["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto15["m_column"]=$obj;
$proto15["m_contained"] = array();
$proto15["m_strCase"] = "";
$proto15["m_havingmode"] = false;
$proto15["m_inBrackets"] = false;
$proto15["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto15);

$proto13["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto13);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="imagens_produtos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_imagens_produtos = createSqlQuery_imagens_produtos();


	
				
	
$tdataimagens_produtos[".sqlquery"] = $queryData_imagens_produtos;

include_once(getabspath("include/imagens_produtos_events.php"));
$tableEvents["imagens_produtos"] = new eventclass_imagens_produtos;
$tdataimagens_produtos[".hasEvents"] = true;

?>