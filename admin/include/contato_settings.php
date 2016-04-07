<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacontato = array();	
	$tdatacontato[".truncateText"] = true;
	$tdatacontato[".NumberOfChars"] = 80; 
	$tdatacontato[".ShortName"] = "contato";
	$tdatacontato[".OwnerID"] = "";
	$tdatacontato[".OriginalTable"] = "contato";

//	field labels
$fieldLabelscontato = array();
$fieldToolTipscontato = array();
$pageTitlescontato = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelscontato["Portuguese(Brazil)"] = array();
	$fieldToolTipscontato["Portuguese(Brazil)"] = array();
	$pageTitlescontato["Portuguese(Brazil)"] = array();
	$fieldLabelscontato["Portuguese(Brazil)"]["id"] = "Id";
	$fieldToolTipscontato["Portuguese(Brazil)"]["id"] = "";
	$fieldLabelscontato["Portuguese(Brazil)"]["nome"] = "Nome";
	$fieldToolTipscontato["Portuguese(Brazil)"]["nome"] = "";
	$fieldLabelscontato["Portuguese(Brazil)"]["email"] = "Email";
	$fieldToolTipscontato["Portuguese(Brazil)"]["email"] = "";
	$fieldLabelscontato["Portuguese(Brazil)"]["cidade"] = "Cidade";
	$fieldToolTipscontato["Portuguese(Brazil)"]["cidade"] = "";
	$fieldLabelscontato["Portuguese(Brazil)"]["estado"] = "Estado";
	$fieldToolTipscontato["Portuguese(Brazil)"]["estado"] = "";
	$fieldLabelscontato["Portuguese(Brazil)"]["telefone"] = "Telefone";
	$fieldToolTipscontato["Portuguese(Brazil)"]["telefone"] = "";
	$fieldLabelscontato["Portuguese(Brazil)"]["departamento"] = "Departamento";
	$fieldToolTipscontato["Portuguese(Brazil)"]["departamento"] = "";
	$fieldLabelscontato["Portuguese(Brazil)"]["mensagem"] = "Mensagem";
	$fieldToolTipscontato["Portuguese(Brazil)"]["mensagem"] = "";
	$fieldLabelscontato["Portuguese(Brazil)"]["arquivo"] = "Arquivo";
	$fieldToolTipscontato["Portuguese(Brazil)"]["arquivo"] = "";
	$fieldLabelscontato["Portuguese(Brazil)"]["data_contato"] = "Data Contato";
	$fieldToolTipscontato["Portuguese(Brazil)"]["data_contato"] = "";
	if (count($fieldToolTipscontato["Portuguese(Brazil)"]))
		$tdatacontato[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscontato[""] = array();
	$fieldToolTipscontato[""] = array();
	$pageTitlescontato[""] = array();
	$fieldLabelscontato[""]["id"] = "Id";
	$fieldToolTipscontato[""]["id"] = "";
	if (count($fieldToolTipscontato[""]))
		$tdatacontato[".isUseToolTips"] = true;
}
	
	
	$tdatacontato[".NCSearch"] = true;



$tdatacontato[".shortTableName"] = "contato";
$tdatacontato[".nSecOptions"] = 0;
$tdatacontato[".recsPerRowList"] = 1;
$tdatacontato[".mainTableOwnerID"] = "";
$tdatacontato[".moveNext"] = 1;
$tdatacontato[".nType"] = 0;

$tdatacontato[".strOriginalTableName"] = "contato";




$tdatacontato[".showAddInPopup"] = false;

$tdatacontato[".showEditInPopup"] = false;

$tdatacontato[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacontato[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacontato[".fieldsForRegister"] = array();

$tdatacontato[".listAjax"] = false;

	$tdatacontato[".audit"] = false;

	$tdatacontato[".locking"] = false;


$tdatacontato[".list"] = true;

$tdatacontato[".view"] = true;


$tdatacontato[".exportTo"] = true;



$tdatacontato[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacontato[".searchSaving"] = false;
//

$tdatacontato[".showSearchPanel"] = true;
		$tdatacontato[".flexibleSearch"] = true;		

if (isMobile())
	$tdatacontato[".isUseAjaxSuggest"] = false;
else 
	$tdatacontato[".isUseAjaxSuggest"] = true;

$tdatacontato[".rowHighlite"] = true;



$tdatacontato[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacontato[".isUseTimeForSearch"] = false;





$tdatacontato[".allSearchFields"] = array();
$tdatacontato[".filterFields"] = array();
$tdatacontato[".requiredSearchFields"] = array();

$tdatacontato[".allSearchFields"][] = "id";
	$tdatacontato[".allSearchFields"][] = "nome";
	$tdatacontato[".allSearchFields"][] = "email";
	$tdatacontato[".allSearchFields"][] = "cidade";
	$tdatacontato[".allSearchFields"][] = "estado";
	$tdatacontato[".allSearchFields"][] = "telefone";
	$tdatacontato[".allSearchFields"][] = "departamento";
	$tdatacontato[".allSearchFields"][] = "mensagem";
	$tdatacontato[".allSearchFields"][] = "arquivo";
	$tdatacontato[".allSearchFields"][] = "data_contato";
	

$tdatacontato[".googleLikeFields"] = array();
$tdatacontato[".googleLikeFields"][] = "id";
$tdatacontato[".googleLikeFields"][] = "nome";
$tdatacontato[".googleLikeFields"][] = "email";
$tdatacontato[".googleLikeFields"][] = "cidade";
$tdatacontato[".googleLikeFields"][] = "estado";
$tdatacontato[".googleLikeFields"][] = "telefone";
$tdatacontato[".googleLikeFields"][] = "departamento";
$tdatacontato[".googleLikeFields"][] = "mensagem";
$tdatacontato[".googleLikeFields"][] = "arquivo";
$tdatacontato[".googleLikeFields"][] = "data_contato";


$tdatacontato[".advSearchFields"] = array();
$tdatacontato[".advSearchFields"][] = "id";
$tdatacontato[".advSearchFields"][] = "nome";
$tdatacontato[".advSearchFields"][] = "email";
$tdatacontato[".advSearchFields"][] = "cidade";
$tdatacontato[".advSearchFields"][] = "estado";
$tdatacontato[".advSearchFields"][] = "telefone";
$tdatacontato[".advSearchFields"][] = "departamento";
$tdatacontato[".advSearchFields"][] = "mensagem";
$tdatacontato[".advSearchFields"][] = "arquivo";
$tdatacontato[".advSearchFields"][] = "data_contato";

$tdatacontato[".tableType"] = "list";

$tdatacontato[".printerPageOrientation"] = 0;
$tdatacontato[".nPrinterPageScale"] = 100;

$tdatacontato[".nPrinterSplitRecords"] = 40;

$tdatacontato[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdatacontato[".pageSize"] = 20;

$tdatacontato[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacontato[".strOrderBy"] = $tstrOrderBy;

$tdatacontato[".orderindexes"] = array();

$tdatacontato[".sqlHead"] = "SELECT id,  	nome,  	email,  	cidade,  	estado,  	telefone,  	departamento,  	mensagem,  	arquivo,  	data_contato";
$tdatacontato[".sqlFrom"] = "FROM contato";
$tdatacontato[".sqlWhereExpr"] = "";
$tdatacontato[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacontato[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacontato[".arrGroupsPerPage"] = $arrGPP;

$tdatacontato[".highlightSearchResults"] = true;

$tableKeyscontato = array();
$tableKeyscontato[] = "id";
$tdatacontato[".Keys"] = $tableKeyscontato;

$tdatacontato[".listFields"] = array();
$tdatacontato[".listFields"][] = "id";
$tdatacontato[".listFields"][] = "nome";
$tdatacontato[".listFields"][] = "email";
$tdatacontato[".listFields"][] = "cidade";
$tdatacontato[".listFields"][] = "estado";
$tdatacontato[".listFields"][] = "telefone";
$tdatacontato[".listFields"][] = "departamento";
$tdatacontato[".listFields"][] = "mensagem";
$tdatacontato[".listFields"][] = "arquivo";
$tdatacontato[".listFields"][] = "data_contato";

$tdatacontato[".hideMobileList"] = array();


$tdatacontato[".viewFields"] = array();
$tdatacontato[".viewFields"][] = "id";
$tdatacontato[".viewFields"][] = "nome";
$tdatacontato[".viewFields"][] = "email";
$tdatacontato[".viewFields"][] = "cidade";
$tdatacontato[".viewFields"][] = "estado";
$tdatacontato[".viewFields"][] = "telefone";
$tdatacontato[".viewFields"][] = "departamento";
$tdatacontato[".viewFields"][] = "mensagem";
$tdatacontato[".viewFields"][] = "arquivo";
$tdatacontato[".viewFields"][] = "data_contato";

$tdatacontato[".addFields"] = array();

$tdatacontato[".inlineAddFields"] = array();

$tdatacontato[".editFields"] = array();

$tdatacontato[".inlineEditFields"] = array();

$tdatacontato[".exportFields"] = array();
$tdatacontato[".exportFields"][] = "id";
$tdatacontato[".exportFields"][] = "nome";
$tdatacontato[".exportFields"][] = "email";
$tdatacontato[".exportFields"][] = "cidade";
$tdatacontato[".exportFields"][] = "estado";
$tdatacontato[".exportFields"][] = "telefone";
$tdatacontato[".exportFields"][] = "departamento";
$tdatacontato[".exportFields"][] = "mensagem";
$tdatacontato[".exportFields"][] = "arquivo";
$tdatacontato[".exportFields"][] = "data_contato";

$tdatacontato[".importFields"] = array();

$tdatacontato[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "contato";
	$fdata["Label"] = GetFieldLabel("contato","id"); 
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

	

	
	$tdatacontato["id"] = $fdata;
//	nome
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nome";
	$fdata["GoodName"] = "nome";
	$fdata["ownerTable"] = "contato";
	$fdata["Label"] = GetFieldLabel("contato","nome"); 
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

	

	
	$tdatacontato["nome"] = $fdata;
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "contato";
	$fdata["Label"] = GetFieldLabel("contato","email"); 
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

	

	
	$tdatacontato["email"] = $fdata;
//	cidade
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "cidade";
	$fdata["GoodName"] = "cidade";
	$fdata["ownerTable"] = "contato";
	$fdata["Label"] = GetFieldLabel("contato","cidade"); 
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

	

	
	$tdatacontato["cidade"] = $fdata;
//	estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "estado";
	$fdata["GoodName"] = "estado";
	$fdata["ownerTable"] = "contato";
	$fdata["Label"] = GetFieldLabel("contato","estado"); 
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

	

	
	$tdatacontato["estado"] = $fdata;
//	telefone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "telefone";
	$fdata["GoodName"] = "telefone";
	$fdata["ownerTable"] = "contato";
	$fdata["Label"] = GetFieldLabel("contato","telefone"); 
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

	

	
	$tdatacontato["telefone"] = $fdata;
//	departamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "departamento";
	$fdata["GoodName"] = "departamento";
	$fdata["ownerTable"] = "contato";
	$fdata["Label"] = GetFieldLabel("contato","departamento"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "departamento"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "departamento";
	
		
		
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

	

	
	$tdatacontato["departamento"] = $fdata;
//	mensagem
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "mensagem";
	$fdata["GoodName"] = "mensagem";
	$fdata["ownerTable"] = "contato";
	$fdata["Label"] = GetFieldLabel("contato","mensagem"); 
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

	

	
	$tdatacontato["mensagem"] = $fdata;
//	arquivo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "arquivo";
	$fdata["GoodName"] = "arquivo";
	$fdata["ownerTable"] = "contato";
	$fdata["Label"] = GetFieldLabel("contato","arquivo"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "arquivo"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "arquivo";
	
		
		
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

	

	
	$tdatacontato["arquivo"] = $fdata;
//	data_contato
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "data_contato";
	$fdata["GoodName"] = "data_contato";
	$fdata["ownerTable"] = "contato";
	$fdata["Label"] = GetFieldLabel("contato","data_contato"); 
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

	

	
	$tdatacontato["data_contato"] = $fdata;

	
$tables_data["contato"]=&$tdatacontato;
$field_labels["contato"] = &$fieldLabelscontato;
$fieldToolTips["contato"] = &$fieldToolTipscontato;
$page_titles["contato"] = &$pageTitlescontato;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["contato"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["contato"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_contato()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	nome,  	email,  	cidade,  	estado,  	telefone,  	departamento,  	mensagem,  	arquivo,  	data_contato";
$proto0["m_strFrom"] = "FROM contato";
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
	"m_strTable" => "contato",
	"m_srcTableName" => "contato"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "contato";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "nome",
	"m_strTable" => "contato",
	"m_srcTableName" => "contato"
));

$proto7["m_sql"] = "nome";
$proto7["m_srcTableName"] = "contato";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "contato",
	"m_srcTableName" => "contato"
));

$proto9["m_sql"] = "email";
$proto9["m_srcTableName"] = "contato";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "cidade",
	"m_strTable" => "contato",
	"m_srcTableName" => "contato"
));

$proto11["m_sql"] = "cidade";
$proto11["m_srcTableName"] = "contato";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "estado",
	"m_strTable" => "contato",
	"m_srcTableName" => "contato"
));

$proto13["m_sql"] = "estado";
$proto13["m_srcTableName"] = "contato";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "telefone",
	"m_strTable" => "contato",
	"m_srcTableName" => "contato"
));

$proto15["m_sql"] = "telefone";
$proto15["m_srcTableName"] = "contato";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "departamento",
	"m_strTable" => "contato",
	"m_srcTableName" => "contato"
));

$proto17["m_sql"] = "departamento";
$proto17["m_srcTableName"] = "contato";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "mensagem",
	"m_strTable" => "contato",
	"m_srcTableName" => "contato"
));

$proto19["m_sql"] = "mensagem";
$proto19["m_srcTableName"] = "contato";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "arquivo",
	"m_strTable" => "contato",
	"m_srcTableName" => "contato"
));

$proto21["m_sql"] = "arquivo";
$proto21["m_srcTableName"] = "contato";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "data_contato",
	"m_strTable" => "contato",
	"m_srcTableName" => "contato"
));

$proto23["m_sql"] = "data_contato";
$proto23["m_srcTableName"] = "contato";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto25=array();
$proto25["m_link"] = "SQLL_MAIN";
			$proto26=array();
$proto26["m_strName"] = "contato";
$proto26["m_srcTableName"] = "contato";
$proto26["m_columns"] = array();
$proto26["m_columns"][] = "id";
$proto26["m_columns"][] = "nome";
$proto26["m_columns"][] = "email";
$proto26["m_columns"][] = "cidade";
$proto26["m_columns"][] = "estado";
$proto26["m_columns"][] = "telefone";
$proto26["m_columns"][] = "departamento";
$proto26["m_columns"][] = "mensagem";
$proto26["m_columns"][] = "arquivo";
$proto26["m_columns"][] = "data_contato";
$obj = new SQLTable($proto26);

$proto25["m_table"] = $obj;
$proto25["m_sql"] = "contato";
$proto25["m_alias"] = "";
$proto25["m_srcTableName"] = "contato";
$proto27=array();
$proto27["m_sql"] = "";
$proto27["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto27["m_column"]=$obj;
$proto27["m_contained"] = array();
$proto27["m_strCase"] = "";
$proto27["m_havingmode"] = false;
$proto27["m_inBrackets"] = false;
$proto27["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto27);

$proto25["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto25);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="contato";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_contato = createSqlQuery_contato();


	
										
	
$tdatacontato[".sqlquery"] = $queryData_contato;

$tableEvents["contato"] = new eventsBase;
$tdatacontato[".hasEvents"] = false;

?>