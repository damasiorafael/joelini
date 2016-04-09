<?php
$strTableName="emailsformularios";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="emailsformularios";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("emailsformularios");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["emailsformularios"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>