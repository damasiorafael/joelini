<?php

include("inc/config.php");

$idcategoria = $_REQUEST["categoria"];

$sql = "select id, nome_por from subcategorias where id_categoria = $idcategoria";
$result = consulta_db($sql);
$numRows = mysql_num_rows($result);
if($numRows > 0){
    echo "<option value=''>Selecione</option>";
    while($consulta = mysql_fetch_object($result)){
        echo "<option value='".$consulta->id."'>".$consulta->nome_por."</option>";
    }
} else {
    echo "<option disabled selected>Nenhum valor encontrado!</option>";
}

?>