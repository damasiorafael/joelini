<?php

$script = "<script type='javascript'>jQuery('.combo-categorias').on('change', function(){ var jthis = jQuery(this); var id = jthis.val();	jQuery.ajax({ type: 'POST',	url: '../subcategorias-ajax.php', data: 'categoria='+id, success: function(data){ jQuery('.combo-subcategorias').html(data); })});</script>";

$str= "<select onchange=\"getStates(this.options[this."."selectedIndex].value;)\">

<option value=\"\">Favor Selecionar</option>";

//select values from database

global $conn;

$strSQL = "select id, nome_por from categorias";

$rs = db_query($strSQL,$conn);

while ($data = db_fetch_array($rs))

$str.="<option value='".$data["id"].")'>".$data["nome_por"]."</option>";

$str.="</select>";

echo $str;

// Place event code here.
// Use "Add Action" button to add code snippets.

// Put your code here.
echo "";

?>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">

function getStates(what) {
	if(what.selectedIndex != ''){
		var cat = what.value;
		document.location=('subcategorias_list.php?q=id~equals~'+cat);
	}
}

$('.combo-categorias').on('change', function(){
	var $this = $(this);
	var id = $this.val();
	$.ajax({
		type: "POST",
		url: "../subcategorias-ajax.php",
		data: "categoria="+id,
		success: function(data){
			$('.combo-subcategorias').html(data);
		}
	)
});
 
$(document).ready(function(){
 
$("select[name=cnpj]").change(function(){
$("select[name=contrib]").html('<option value="0">Carregando...</option>');
$.post("contrib.php",
  {cnpj:$(this).val()},
  function(valor){
  $("select[name=nome]").html(valor);
  }
  )
 
})
  })
  
</script> 

<tr>
	<td>CPF/CNPJ</td>
	<td>
		<select name="cnpj">
			<option value="0">Escolha o CNPJ</option>
			<?php
				include "conecta.php";
				mysql_select_db("controle_proc_ti");
				$sql = "select * from contrib order by nome ASC";
				$qr = mysql_query($sql) or die (mysql_error());
				while($result = mysql_fetch_assoc($qr)){
					echo '<option value="'.$result['id_contrib'].'">'.$result['cnpj'].'</option>';
				}
			?>
		</select>
	</td>
</tr>
<tr>
	<td width="165">Contribuinte</td>
	<td width="209">
		<select name="contrib">
			<option value="0" disabled="disabled">Escolha o CNPJ</option>
		</select>
	</td>
</tr>

$script = "<script type='text/javascript'>jQuery('.combo-categorias').on('change', function(){ var jthis = jQuery(this); var id = jthis.val();	jQuery.ajax({ type: 'POST',	url: '../subcategorias-ajax.php', data: 'categoria='+id, success: function(data){ jQuery('.combo-subcategorias').html(data); } }); });</script>";