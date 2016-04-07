<?php
require_once(getabspath("classes/cipherer.php"));




$tdatavendas = array();	
	$tdatavendas[".truncateText"] = true;
	$tdatavendas[".NumberOfChars"] = 80; 
	$tdatavendas[".ShortName"] = "vendas";
	$tdatavendas[".OwnerID"] = "";
	$tdatavendas[".OriginalTable"] = "vendas";

//	field labels
$fieldLabelsvendas = array();
$fieldToolTipsvendas = array();
$pageTitlesvendas = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsvendas["Portuguese(Brazil)"] = array();
	$fieldToolTipsvendas["Portuguese(Brazil)"] = array();
	$pageTitlesvendas["Portuguese(Brazil)"] = array();
	$fieldLabelsvendas["Portuguese(Brazil)"]["id"] = "Id";
	$fieldToolTipsvendas["Portuguese(Brazil)"]["id"] = "";
	$fieldLabelsvendas["Portuguese(Brazil)"]["nome"] = "Nome";
	$fieldToolTipsvendas["Portuguese(Brazil)"]["nome"] = "";
	$fieldLabelsvendas["Portuguese(Brazil)"]["email"] = "Email";
	$fieldToolTipsvendas["Portuguese(Brazil)"]["email"] = "";
	$fieldLabelsvendas["Portuguese(Brazil)"]["telefone"] = "Telefone";
	$fieldToolTipsvendas["Portuguese(Brazil)"]["telefone"] = "";
	$fieldLabelsvendas["Portuguese(Brazil)"]["cidade"] = "Cidade";
	$fieldToolTipsvendas["Portuguese(Brazil)"]["cidade"] = "";
	$fieldLabelsvendas["Portuguese(Brazil)"]["estado"] = "Estado";
	$fieldToolTipsvendas["Portuguese(Brazil)"]["estado"] = "";
	$fieldLabelsvendas["Portuguese(Brazil)"]["cep"] = "Cep";
	$fieldToolTipsvendas["Portuguese(Brazil)"]["cep"] = "";
	$fieldLabelsvendas["Portuguese(Brazil)"]["mensagem"] = "Mensagem";
	$fieldToolTipsvendas["Portuguese(Brazil)"]["mensagem"] = "";
	$fieldLabelsvendas["Portuguese(Brazil)"]["data_contato"] = "Data Contato";
	$fieldToolTipsvendas["Portuguese(Brazil)"]["data_contato"] = "";
	if (count($fieldToolTipsvendas["Portuguese(Brazil)"]))
		$tdatavendas[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsvendas[""] = array();
	$fieldToolTipsvendas[""] = array();
	$pageTitlesvendas[""] = array();
	$fieldLabelsvendas[""]["id"] = "Id";
	$fieldToolTipsvendas[""]["id"] = "";
	if (count($fieldToolTipsvendas[""]))
		$tdatavendas[".isUseToolTips"] = true;
}
	
	
	$tdatavendas[".NCSearch"] = true;



$tdatavendas[".shortTableName"] = "vendas";
$tdatavendas[".nSecOptions"] = 0;
$tdatavendas[".recsPerRowList"] = 1;
$tdatavendas[".mainTableOwnerID"] = "";
$tdatavendas[".moveNext"] = 1;
$tdatavendas[".nType"] = 0;

$tdatavendas[".strOriginalTableName"] = "vendas";




$tdatavendas[".showAddInPopup"] = false;

$tdatavendas[".showEditInPopup"] = false;

$tdatavendas[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatavendas[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatavendas[".fieldsForRegister"] = array();

$tdatavendas[".listAjax"] = false;

	$tdatavendas[".audit"] = false;

	$tdatavendas[".locking"] = false;


$tdatavendas[".list"] = true;

$tdatavendas[".view"] = true;


$tdatavendas[".exportTo"] = true;



$tdatavendas[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatavendas[".searchSaving"] = false;
//

$tdatavendas[".showSearchPanel"] = true;
		$tdatavendas[".flexibleSearch"] = true;		

if (isMobile())
	$tdatavendas[".isUseAjaxSuggest"] = false;
else 
	$tdatavendas[".isUseAjaxSuggest"] = true;

$tdatavendas[".rowHighlite"] = true;



$tdatavendas[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavendas[".isUseTimeForSearch"] = false;





$tdatavendas[".allSearchFields"] = array();
$tdatavendas[".filterFields"] = array();
$tdatavendas[".requiredSearchFields"] = array();

$tdatavendas[".allSearchFields"][] = "id";
	$tdatavendas[".allSearchFields"][] = "nome";
	$tdatavendas[".allSearchFields"][] = "email";
	$tdatavendas[".allSearchFields"][] = "telefone";
	$tdatavendas[".allSearchFields"][] = "cidade";
	$tdatavendas[".allSearchFields"][] = "estado";
	$tdatavendas[".allSearchFields"][] = "cep";
	$tdatavendas[".allSearchFields"][] = "mensagem";
	$tdatavendas[".allSearchFields"][] = "data_contato";
	

$tdatavendas[".googleLikeFields"] = array();
$tdatavendas[".googleLikeFields"][] = "id";
$tdatavendas[".googleLikeFields"][] = "nome";
$tdatavendas[".googleLikeFields"][] = "email";
$tdatavendas[".googleLikeFields"][] = "telefone";
$tdatavendas[".googleLikeFields"][] = "cidade";
$tdatavendas[".googleLikeFields"][] = "estado";
$tdatavendas[".googleLikeFields"][] = "cep";
$tdatavendas[".googleLikeFields"][] = "mensagem";
$tdatavendas[".googleLikeFields"][] = "data_contato";


$tdatavendas[".advSearchFields"] = array();
$tdatavendas[".advSearchFields"][] = "id";
$tdatavendas[".advSearchFields"][] = "nome";
$tdatavendas[".advSearchFields"][] = "email";
$tdatavendas[".advSearchFields"][] = "telefone";
$tdatavendas[".advSearchFields"][] = "cidade";
$tdatavendas[".advSearchFields"][] = "estado";
$tdatavendas[".advSearchFields"][] = "cep";
$tdatavendas[".advSearchFields"][] = "mensagem";
$tdatavendas[".advSearchFields"][] = "data_contato";

$tdatavendas[".tableType"] = "list";

$tdatavendas[".printerPageOrientation"] = 0;
$tdatavendas[".nPrinterPageScale"] = 100;

$tdatavendas[".nPrinterSplitRecords"] = 40;

$tdatavendas[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdatavendas[".pageSize"] = 20;

$tdatavendas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatavendas[".strOrderBy"] = $tstrOrderBy;

$tdatavendas[".orderindexes"] = array();

$tdatavendas[".sqlHead"] = "SELECT id,  	nome,  	email,  	telefone,  	cidade,  	estado,  	cep,  	mensagem,  	data_contato";
$tdatavendas[".sqlFrom"] = "FROM vendas";
$tdatavendas[".sqlWhereExpr"] = "";
$tdatavendas[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavendas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavendas[".arrGroupsPerPage"] = $arrGPP;

$tdatavendas[".highlightSearchResults"] = true;

$tableKeysvendas = array();
$tableKeysvendas[] = "id";
$tdatavendas[".Keys"] = $tableKeysvendas;

$tdatavendas[".listFields"] = array();
$tdatavendas[".listFields"][] = "id";
$tdatavendas[".listFields"][] = "nome";
$tdatavendas[".listFields"][] = "email";
$tdatavendas[".listFields"][] = "telefone";
$tdatavendas[".listFields"][] = "cidade";
$tdatavendas[".listFields"][] = "estado";
$tdatavendas[".listFields"][] = "cep";
$tdatavendas[".listFields"][] = "mensagem";
$tdatavendas[".listFields"][] = "data_contato";

$tdatavendas[".hideMobileList"] = array();


$tdatavendas[".viewFields"] = array();
$tdatavendas[".viewFields"][] = "id";
$tdatavendas[".viewFields"][] = "nome";
$tdatavendas[".viewFields"][] = "email";
$tdatavendas[".viewFields"][] = "telefone";
$tdatavendas[".viewFields"][] = "cidade";
$tdatavendas[".viewFields"][] = "estado";
$tdatavendas[".viewFields"][] = "cep";
$tdatavendas[".viewFields"][] = "mensagem";
$tdatavendas[".viewFields"][] = "data_contato";

$tdatavendas[".addFields"] = array();

$tdatavendas[".inlineAddFields"] = array();

$tdatavendas[".editFields"] = array();

$tdatavendas[".inlineEditFields"] = array();

$tdatavendas[".exportFields"] = array();
$tdatavendas[".exportFields"][] = "id";
$tdatavendas[".exportFields"][] = "nome";
$tdatavendas[".exportFields"][] = "email";
$tdatavendas[".exportFields"][] = "telefone";
$tdatavendas[".exportFields"][] = "cidade";
$tdatavendas[".exportFields"][] = "estado";
$tdatavendas[".exportFields"][] = "cep";
$tdatavendas[".exportFields"][] = "mensagem";
$tdatavendas[".exportFields"][] = "data_contato";

$tdatavendas[".importFields"] = array();

$tdatavendas[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "vendas";
	$fdata["Label"] = GetFieldLabel("vendas","id"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
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

	

	
	$tdatavendas["id"] = $fdata;
//	nome
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nome";
	$fdata["GoodName"] = "nome";
	$fdata["ownerTable"] = "vendas";
	$fdata["Label"] = GetFieldLabel("vendas","nome"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "nome"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nome";
	
		
		
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

	

	
	$tdatavendas["nome"] = $fdata;
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "vendas";
	$fdata["Label"] = GetFieldLabel("vendas","email"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "email"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email";
	
		
		
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
	
		
		
		
		
			$edata["HTML5InuptType"] = "email";
	
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

	

	
	$tdatavendas["email"] = $fdata;
//	telefone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "telefone";
	$fdata["GoodName"] = "telefone";
	$fdata["ownerTable"] = "vendas";
	$fdata["Label"] = GetFieldLabel("vendas","telefone"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "telefone"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "telefone";
	
		
		
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

	

	
	$tdatavendas["telefone"] = $fdata;
//	cidade
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "cidade";
	$fdata["GoodName"] = "cidade";
	$fdata["ownerTable"] = "vendas";
	$fdata["Label"] = GetFieldLabel("vendas","cidade"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "cidade"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cidade";
	
		
		
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

	

	
	$tdatavendas["cidade"] = $fdata;
//	estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "estado";
	$fdata["GoodName"] = "estado";
	$fdata["ownerTable"] = "vendas";
	$fdata["Label"] = GetFieldLabel("vendas","estado"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "estado"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estado";
	
		
		
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

	

	
	$tdatavendas["estado"] = $fdata;
//	cep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "cep";
	$fdata["GoodName"] = "cep";
	$fdata["ownerTable"] = "vendas";
	$fdata["Label"] = GetFieldLabel("vendas","cep"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "cep"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cep";
	
		
		
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

	

	
	$tdatavendas["cep"] = $fdata;
//	mensagem
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "mensagem";
	$fdata["GoodName"] = "mensagem";
	$fdata["ownerTable"] = "vendas";
	$fdata["Label"] = GetFieldLabel("vendas","mensagem"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "mensagem"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mensagem";
	
		
		
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

	

	
	$tdatavendas["mensagem"] = $fdata;
//	data_contato
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "data_contato";
	$fdata["GoodName"] = "data_contato";
	$fdata["ownerTable"] = "vendas";
	$fdata["Label"] = GetFieldLabel("vendas","data_contato"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "data_contato"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "data_contato";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Date");
	
		$edata["ShowTime"] = true; 
		
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 13; 
	$edata["InitialYearFactor"] = 100; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		
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

	

	
	$tdatavendas["data_contato"] = $fdata;

	
$tables_data["vendas"]=&$tdatavendas;
$field_labels["vendas"] = &$fieldLabelsvendas;
$fieldToolTips["vendas"] = &$fieldToolTipsvendas;
$page_titles["vendas"] = &$pageTitlesvendas;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["vendas"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["vendas"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_vendas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	nome,  	email,  	telefone,  	cidade,  	estado,  	cep,  	mensagem,  	data_contato";
$proto0["m_strFrom"] = "FROM vendas";
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
	"m_strTable" => "vendas",
	"m_srcTableName" => "vendas"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "vendas";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "nome",
	"m_strTable" => "vendas",
	"m_srcTableName" => "vendas"
));

$proto7["m_sql"] = "nome";
$proto7["m_srcTableName"] = "vendas";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "vendas",
	"m_srcTableName" => "vendas"
));

$proto9["m_sql"] = "email";
$proto9["m_srcTableName"] = "vendas";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "telefone",
	"m_strTable" => "vendas",
	"m_srcTableName" => "vendas"
));

$proto11["m_sql"] = "telefone";
$proto11["m_srcTableName"] = "vendas";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "cidade",
	"m_strTable" => "vendas",
	"m_srcTableName" => "vendas"
));

$proto13["m_sql"] = "cidade";
$proto13["m_srcTableName"] = "vendas";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "estado",
	"m_strTable" => "vendas",
	"m_srcTableName" => "vendas"
));

$proto15["m_sql"] = "estado";
$proto15["m_srcTableName"] = "vendas";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "cep",
	"m_strTable" => "vendas",
	"m_srcTableName" => "vendas"
));

$proto17["m_sql"] = "cep";
$proto17["m_srcTableName"] = "vendas";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "mensagem",
	"m_strTable" => "vendas",
	"m_srcTableName" => "vendas"
));

$proto19["m_sql"] = "mensagem";
$proto19["m_srcTableName"] = "vendas";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "data_contato",
	"m_strTable" => "vendas",
	"m_srcTableName" => "vendas"
));

$proto21["m_sql"] = "data_contato";
$proto21["m_srcTableName"] = "vendas";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto23=array();
$proto23["m_link"] = "SQLL_MAIN";
			$proto24=array();
$proto24["m_strName"] = "vendas";
$proto24["m_srcTableName"] = "vendas";
$proto24["m_columns"] = array();
$proto24["m_columns"][] = "id";
$proto24["m_columns"][] = "nome";
$proto24["m_columns"][] = "email";
$proto24["m_columns"][] = "telefone";
$proto24["m_columns"][] = "cidade";
$proto24["m_columns"][] = "estado";
$proto24["m_columns"][] = "cep";
$proto24["m_columns"][] = "mensagem";
$proto24["m_columns"][] = "data_contato";
$obj = new SQLTable($proto24);

$proto23["m_table"] = $obj;
$proto23["m_sql"] = "vendas";
$proto23["m_alias"] = "";
$proto23["m_srcTableName"] = "vendas";
$proto25=array();
$proto25["m_sql"] = "";
$proto25["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto25["m_column"]=$obj;
$proto25["m_contained"] = array();
$proto25["m_strCase"] = "";
$proto25["m_havingmode"] = false;
$proto25["m_inBrackets"] = false;
$proto25["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto25);

$proto23["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto23);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="vendas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vendas = createSqlQuery_vendas();


	
									
	
$tdatavendas[".sqlquery"] = $queryData_vendas;

$tableEvents["vendas"] = new eventsBase;
$tdatavendas[".hasEvents"] = false;

?>