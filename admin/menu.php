<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");


require_once("include/dbcommon.php");


if(!isLogged())
{
	HeaderRedirect("login");
	return;
}

if (($_SESSION["MyURL"] == "") || (!isLoggedAsGuest())) {
	Security::saveRedirectURL();
}




$layout = new TLayout("menu2", "CoralOrange", "MobileOrange");
$layout->version = 2;
$layout->blocks["top"] = array();
$layout->containers["menu"] = array();
$layout->container_properties["menu"] = array(  );
$layout->containers["menu"][] = array("name"=>"login_menu", 
	"block"=>"loggedas_block", "substyle"=>2  );

$layout->containers["menu"][] = array("name"=>"vmenu", 
	"block"=>"menu_block", "substyle"=>1  );

$layout->skins["menu"] = "1";

$layout->blocks["top"][] = "menu";
$page_layouts["menu"] = $layout;

$layout->skinsparams = array();
$layout->skinsparams["empty"] = array("button"=>"button1");
$layout->skinsparams["menu"] = array("button"=>"button1");
$layout->skinsparams["hmenu"] = array("button"=>"button1");
$layout->skinsparams["undermenu"] = array("button"=>"button1");
$layout->skinsparams["fields"] = array("button"=>"button1");
$layout->skinsparams["form"] = array("button"=>"button1");
$layout->skinsparams["1"] = array("button"=>"button1");
$layout->skinsparams["2"] = array("button"=>"button1");
$layout->skinsparams["3"] = array("button"=>"button1");



require_once('include/xtempl.php');
require_once(getabspath("classes/cipherer.php"));

include_once(getabspath("include/categorias_events.php"));
$tableEvents["categorias"] = new eventclass_categorias;
include_once(getabspath("include/produtos_events.php"));
$tableEvents["produtos"] = new eventclass_produtos;
include_once(getabspath("include/linhadotempo_events.php"));
$tableEvents["linhadotempo"] = new eventclass_linhadotempo;
include_once(getabspath("include/empresa_events.php"));
$tableEvents["empresa"] = new eventclass_empresa;
include_once(getabspath("include/downloads_events.php"));
$tableEvents["downloads"] = new eventclass_downloads;
include_once(getabspath("include/area_restrita_events.php"));
$tableEvents["area_restrita"] = new eventclass_area_restrita;
include_once(getabspath("include/idiomas_events.php"));
$tableEvents["idiomas"] = new eventclass_idiomas;
include_once(getabspath("include/categorias1_events.php"));
$tableEvents["categorias1"] = new eventclass_categorias1;
include_once(getabspath("include/catalogo_events.php"));
$tableEvents["catalogo"] = new eventclass_catalogo;
include_once(getabspath("include/banners_events.php"));
$tableEvents["banners"] = new eventclass_banners;

$xt = new Xtempl();

$id = postvalue("id")!=="" ? postvalue("id") : 1;

//array of params for classes
$params = array();
$params["id"] = $id; 
$params["xt"] = &$xt;
$params["tName"] = NOT_TABLE_BASED_TNAME;
$params["pageType"] = PAGE_MENU;
$params["templatefile"] = "menu.htm";
$params["isGroupSecurity"] = $isGroupSecurity;
$params["needSearchClauseObj"] = false;
$pageObject = new RunnerPage($params);
$pageObject->init();

// button handlers file names

//	Before Process event
if($globalEvents->exists("BeforeProcessMenu"))
	$globalEvents->BeforeProcessMenu( $pageObject );

$pageObject->body["begin"] .= GetBaseScriptsForPage(false);

$pageObject->addCommonJs();

//fill jsSettings and ControlsHTMLMap
$pageObject->fillSetCntrlMaps();
$pageObject->body['end'] .= '<script>';
$pageObject->body['end'] .= "window.controlsMap = ".my_json_encode($pageObject->controlsHTMLMap).";";
$pageObject->body['end'] .= "window.viewControlsMap = ".my_json_encode($pageObject->viewControlsHTMLMap).";";
$pageObject->body['end'] .= "window.settings = ".my_json_encode($pageObject->jsSettings).";</script>";
$pageObject->body["end"] .= "<script type=\"text/javascript\" src=\"".GetRootPathForResources("include/runnerJS/RunnerAll.js")."\"></script>";
$pageObject->body["end"] .= '<script>'.$pageObject->PrepareJS()."</script>";
$xt->assignbyref("body",$pageObject->body);

// The user might rewrite $_SESSION["UserName"] value with HTML code in an event, so no encoding will be performed while printing this value.
$xt->assign("username", $_SESSION["UserName"]);
$xt->assign("changepwd_link",$_SESSION["AccessLevel"] != ACCESS_LEVEL_GUEST && $_SESSION["fromFacebook"] == false);
$xt->assign("changepwdlink_attrs","onclick=\"window.location.href='".GetTableLink("changepwd")."';return false;\"");

$xt->assign("logoutlink_attrs","onclick=\"window.location.href='".GetTableLink("login", "", "a=logout")."';return false;\"");

$xt->assign("guestloginlink_attrs","onclick=\"window.location.href='".GetTableLink("login")."';return false;\"");

$xt->assign("loggedas_block", !isLoggedAsGuest());
$xt->assign("loggedas_message", !isLoggedAsGuest());

$xt->assign("logout_link", true);
$xt->assign("guestloginbutton", isLoggedAsGuest());
$xt->assign("logoutbutton", isSingleSign() && !isLoggedAsGuest());


// get redirect location for menu page
$redirect = $pageObject->getRedirectForMenuPage();
if($redirect)
{
	header("Location: ".$redirect); 
	exit();
}

$xt->assign("menu_block",true);
if($globalEvents->exists("BeforeShowMenu"))
	$globalEvents->BeforeShowMenu($xt, $pageObject->templatefile, $pageObject);

$pageObject->display($pageObject->templatefile);
?>