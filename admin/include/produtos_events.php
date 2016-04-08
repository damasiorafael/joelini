<?php 
class eventclass_produtos  extends eventsBase
{ 
	function eventclass_produtos()
	{
	// fill list of events
		$this->events["BeforeAdd"]=true;

		$this->events["BeforeEdit"]=true;


//	onscreen events
		$this->events["produtos_snippet1"] = true;
		$this->events["produtos_snippet3"] = true;


	}
// Captchas functions	

//	handlers

		
		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values, &$message, $inline, &$pageObject)
{

		echo "";

// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
;		
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record updated
function BeforeEdit(&$values, $where, &$oldvalues, &$keys, &$message, $inline, &$pageObject)
{

		echo "";

// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
;		
} // function BeforeEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events
function produtos_snippet1(&$params)
{
$script = "<script type='text/javascript'>jQuery('.combo-categorias').on('change', function(){ var jthis = jQuery(this); var id = jthis.val();	jQuery.ajax({ type: 'POST',	url: '../subcategorias-ajax.php', data: 'categoria='+id, success: function(data){ jQuery('select[name=\'value_id_subcategoria_1\']').html(data); } }); });</script>";

$str= "<span class=\"rnr-nowrap\"><select style=\"width: 200px;\" class=\"combo-categorias\">

<option value=\"\">Favor Selecionar</option>";

//select values from database

global $conn;

$strSQL = "select id, nome_por from categorias";

$rs = db_query($strSQL,$conn);

while ($data = db_fetch_array($rs))

$str.="<option value='".$data["id"]."'>".$data["nome_por"]."</option>";

$str.="</select></span>";

echo $str;

echo $script;

// Place event code here.
// Use "Add Action" button to add code snippets.

// Put your code here.
echo "";
;
}
function produtos_snippet3(&$params)
{
$script = "<script type='text/javascript'>jQuery('.combo-categorias').on('change', function(){ var jthis = jQuery(this); var id = jthis.val();	jQuery.ajax({ type: 'POST',	url: '../subcategorias-ajax.php', data: 'categoria='+id, success: function(data){ jQuery('select[name=\'value_id_subcategoria_1\'').html(data); } }); });</script>";

$str= "<span class=\"rnr-nowrap\"><select style=\"width: 200px;\" class=\"combo-categorias\">

<option value=\"\">Favor Selecionar</option>";

//select values from database

global $conn;

$thisProdId = $_REQUEST["editid1"];

$strSQLInner = "select categorias.id, categorias.nome_por from categorias LEFT JOIN subcategorias ON subcategorias.id_categoria = categorias.id LEFT JOIN produtos ON produtos.id_subcategoria = subcategorias.id WHERE produtos.id = $thisProdId";

$rsInner = db_query($strSQLInner,$conn);

$dataInner = db_fetch_array($rsInner);

$innerId = $dataInner["id"];

$strSQL = "select id, nome_por from categorias";

$rs = db_query($strSQL,$conn);

$selectedInner = "";
while($data = db_fetch_array($rs)){
	if($data["id"] == $innerId){
		$selectedInner = "selected";
	} else {
		$selectedInner = "";
	}
	$str.="<option value='".$data["id"]."' ".$selectedInner.">".$data["nome_por"]."</option>";

}

$str.="</select></span>";

echo $str;

echo $script;

// Place event code here.
// Use "Add Action" button to add code snippets.

// Put your code here.
echo "";

// Place event code here.
// Use "Add Action" button to add code snippets.

// Put your code here.
echo "";
;
}

} 
?>
