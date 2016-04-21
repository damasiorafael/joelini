<?PHP
//--------------------------------------------------------------------------------------------
// * ADICIONAR CONSULTORES
//--------------------------------------------------------------------------------------------
?>

<?php function adicionar_consultores() { ?>
	
    <?php
		if(isset($_POST['submit_adicionar_consultor'])) {
		
		 $search  = array('<head>', '</head>', '<body>', '</body>', '<html>', '</html>', '<!DOCTYPE html>');
    	 $replace = array('', '', '', '', '', '', '');
		 
			$estado_cat = $_POST['estado_cat'];
			$estado_consultor_certinho = $_POST['estado_consultor_certinho'];
			$imagem_consultor = date('dmHisu') . '-' . $_FILES['imagem_consultor']['name'];
		    $imagem_consultor_type = $_FILES['imagem_consultor']['type'];
			$imagem_consultor_size = $_FILES['imagem_consultor']['size'];
			$detalhes_consultor = str_replace($search, $replace, $_POST['detalhes_consultor']);
		
		
		 
		
		
	if(!empty($estado_cat) && !empty($detalhes_consultor) && !empty($estado_consultor_certinho)) {
		
	if(($imagem_consultor_type == 'image/jpeg') || ($imagem_consultor_type == 'image/pjpeg') || ($imagem_consultor_type == 'image/jpg') || ($imagem_consultor_type == 'image/png') && ($imagem_consultor_size > 0) && ($imagem_consultor_size <= JOELINI_MAXFILESIZE)) {
			
			$target = JOELINI_UPLOADPATH_CONSULTORES_BACKEND . $imagem_consultor;
			
			if(move_uploaded_file($_FILES['imagem_consultor']['tmp_name'], $target));
			
			$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
			$query = "INSERT INTO consultores (estado_consultor, detalhes_consultor, imagem_consultor, estado_cat) VALUES ('$estado_consultor_certinho', '$detalhes_consultor', '$imagem_consultor', '$estado_cat')";
			$sql = mysqli_query($dbc, $query)
			or die('mysqli_error');
			
			
			echo '<center><p id="sucesso">Consultor adicionado com sucesso!</p></center>';
			
			
			}//if imagem type tamanho
			else {
				echo '<center><p id="error">A imagem deve ser em .JPG ou .PNG e menor que 1MB!</p></center>';
			}
		
		
		
		}//if !empty
		else {
			echo '<center><p id="error">Preencha todos os campos</p></center>';
		}
		
		
		
		
		}//if isset submit
	
	 ?>
    
    
    
    <form action="" method="post" enctype="multipart/form-data" id="form_consultores">
    
    
    	<label for="estado_cat">Estado do consultor</label>
	   <select id="estado_cat" name="estado_cat">
       	<option value="">Esolha um estado</option>
        <option value="acre">Acre</option>
        <option value="alagoas">Alagoas</option>
        <option value="amapa">Amapá</option>
        <option value="amazonas">Amazonas</option>
        <option value="bahia">Bahia</option>
        <option value="ceara">Ceará</option>
        <option value="distrito_federal">Distrito Federal</option>
        <option value="espirito_santo">Espírito Santo</option>
        <option value="goias">Goiás</option>
        <option value="maranhao">Maranhão</option>
        <option value="mato_grosso">Mato Grosso</option>
        <option value="mato_grosso_do_sul">Mato Grosso do Sul</option>
        <option value="minas_gerais">Minas Gerais</option>
        <option value="para">Pará</option>
        <option value="paraiba">Paraíba</option>
        <option value="parana">Paraná</option>
        <option value="pernambuco">Pernambuco</option>
        <option value="piaui">Piauí</option>
        <option value="rio_de_janeiro">Rio de Janeiro</option>
        <option value="rio_grande_do_norte">Rio Grande do Norte</option>
        <option value="rio_grande_do_sul">Rio Grande do Sul</option>
        <option value="rondonia">Rondônia</option>
        <option value="roraima">Roraima</option>
        <option value="santa_catarina">Santa Catarina</option>
        <option value="sao_paulo">São Paulo</option>
        <option value="sergipe">Sergipe</option>
        <option value="tocantins">Tocantins</option>
       </select>
       
       
        <label for="estado_consultor_certinho">Digite o estado do Consultor</label>
	   <input type="text" id="estado_consultor_certinho" name="estado_consultor_certinho">
       
    
       <label for="imagem_consultor">Imagem Consultor (imagem sem distorção 169x170)</label>
	   <input type="file" id="imagem_consultor" name="imagem_consultor">
        
        
       <label for="detalhes_consultor">Detalhes Consultor</label>
	   <textarea id="detalhes_consultor" name="detalhes_consultor"></textarea>
        
       <input type="submit" id="submit_adicionar_consultor" name="submit_adicionar_consultor" value="Adicionar">   
    
    </form>


<?php }//adicionar_consultores() ?>


<?PHP
//--------------------------------------------------------------------------------------------
// * LISTAR  CONSULTORES BACKEND
//--------------------------------------------------------------------------------------------
?>

<?php function listar_consultores_backend() { ?>



	<div id="listar_consultores_backend">
    
    	<!--<center><h4 id="add_btn"><a href="?pag=add_novo_consultor" title="">Adicionar novo Consultor</a></h5></center>-->
    
    <div id="listar_estados_consu">
   <a href="?consu=amazonas&pag=add_consul&nom_est=Amazonas" title="Amazonas" id="amazonas" class="tooltip">Amazonas</a>
            
            
   <a href="?consu=acre&pag=add_consul&nom_est=Acre" title="Acre" id="acre" class="tooltip">Acre</a>
            
            
   <a href="?consu=rondonia&pag=add_consul&nom_est=Rondônia" title="Rondônia" id="rondonia" class="tooltip">Rondônia</a>
            
            
   <a href="?consu=mato_grosso&pag=add_consul&nom_est=Mato Grosso" title="Mato Grosso" id="mato_grosso" class="tooltip">Mato Gross</a>
            
            
   <a href="?consu=para&pag=add_consul&nom_est=Pará" title="Pará" id="para" class="tooltip">Pará</a>
            

            
   <a href="?consu=roraima&pag=add_consul&nom_est=Roraima" title="Roraima" id="roraima" class="tooltip">Roraima</a>
            
            
   <a href="?consu=amapa&pag=add_consul&nom_est=Amapá" title="Amapá" id="amapa" class="tooltip">Amapá</a>
            
        
        
  <a href="?consu=mato_grosso_do_sul&pag=add_consul&nom_est=Mato Grosso do Sul" title="Mato Grosso do Sul" id="mato_grosso_do_sul" class="tooltip">Mato Grosso do Sul</a>
            
            
  <a href="?consu=parana&pag=add_consul&pag=add_consul&nom_est=Paraná" title="Paraná" id="parana" class="tooltip">Paraná</a>
            
            
            
  <a href="?consu=maranhao&pag=add_consul&nom_est=Maranhão" title="Maranhão" id="maranhao" class="tooltip">Maranhão</a>
            
            
            
  <a href="?consu=tocantins&pag=add_consul&nom_est=Tocantins" title="Tocantins" id="tocantins" class="tooltip">Tocantins</a>
            
            
            
  <a href="?consu=sao_paulo&pag=add_consul&nom_est=São Paulo" title="São Paulo" id="sao_paulo" class="tooltip">São Paulo</a>
            
            
            
  <a href="?consu=distrito_federal&pag=add_consul&nom_est=Distrito Federal" title="Distrito Federal" id="distrito_federal" class="tooltip">Distrito Federal</a>
            
            
            
  <a href="?consu=goias&pag=add_consul&nom_est=Goiás" title="Goiás" id="goias" class="tooltip">Goiás</a>
            
            
            
  <a href="?consu=minas_gerais&pag=add_consul&nom_est=Minas Gerais" title="Minas Gerais" id="minas_gerais" class="tooltip">Minas Gerais</a>
            
            
            
  <a href="?consu=santa_catarina&pag=add_consul&nom_est=Santa Catarina" title="Santa Catarina" id="santa_catarina" class="tooltip">Santa Catarina</a>
            
            
            
  <a href="?consu=rio_grande_do_sul&pag=add_consul&nom_est=Rio Grande do Sul" title="Rio Grande do Sul" id="rio_grande_do_sul" class="tooltip">Rio Grande do Sul</a>
            
            
            
  <a href="?consu=bahia&pag=add_consul&nom_est=Bahia" title="Bahia" id="bahia" class="tooltip">Bahia</a>
            
            
            
  <a href="?consu=piaui&pag=add_consul&nom_est=Piauí" title="Piauí" id="piaui" class="tooltip">Piauí</a>
            
            
            
  <a href="?consu=ceara&pag=add_consul&nom_est=Ceará" title="Ceará" id="ceara" class="tooltip">Ceará</a>
            
            
            
  <a href="?consu=rio_grande_do_norte&pag=add_consul&nom_est=Rio Grande do Norte" title="Rio Grande do Norte" id="rio_grande_do_norte" class="tooltip">Rio Grande do Norte</a>
            
            
            
  <a href="?consu=paraiba&pag=add_consul&nom_est=Paraíba" title="Paraíba" id="paraiba" class="tooltip" class="tooltip">Paraíba</a>
            
            
            
  <a href="?consu=pernambuco&pag=add_consul&nom_est=pernambuco" title="pernambuco" id="pernambuco" class="tooltip">Pernambuco</a>
            
            
            
  <a href="?consu=alagoas&pag=add_consul&nom_est=Alagoas" title="Alagoas" id="alagoas" class="tooltip">Alagoas</a>
            
            
            
  <a href="?consu=sergipe&pag=add_consul&nom_est=Sergipe" title="Sergipe" id="sergipe" class="tooltip">Sergipe</a>
            
            
            
  <a href="?consu=espirito_santo&pag=add_consul&nom_est=Espirito Santo" title="Espirito Santo" id="espirito_santo" class="tooltip">Espirito Santo</a>
            
            
            
  <a href="?consu=rio_de_janeiro&pag=add_consul&nom_est=Rio de Janeiro" title="Rio de Janeiro" id="rio_de_janeiro" class="tooltip">Rio de Janeiro</a>
            
       
    </div><!--listar_estados_consu-->
    
    
    
    	<center><h2>Todos os consultores adicionados</h2></center><br>
        
        <center><h3><?php if(isset($_GET['nom_est'])) echo $_GET['nom_est']; ?></h3></center>
    
    	
     <?php
	 	
		if(isset($_GET['consu'])) {
		
		
		$consu = $_GET['consu'];
	 
	 
	 	$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		$query = "SELECT * FROM consultores WHERE estado_cat LIKE '$consu'";
		$sql = mysqli_query($dbc, $query)
		or die('mysqli_error');
		
		while($row = mysqli_fetch_array($sql)) {
		
			$id_consultor = $row['id_consultor'];
			$estado_consultor = $row['estado_consultor'];
			$detalhes_consultor = $row['detalhes_consultor'];
			$imagem_consultor = $row['imagem_consultor'];
			$estado_cat = $row['estado_cat'];
		
		?>
		
    <figure id="box_consultores">
    <figcaption><a href="?id_con=<?php echo $id_consultor ?>&img_con=<?php echo $imagem_consultor ?>&pag=add_consul" title="Deletar?">Deletar</a> | <a href="?id_con=<?php echo $id_consultor ?>&pag=editar_consul" title="">Editar</a></figcaption>
    	<img src="<?php echo JOELINI_UPLOADPATH_CONSULTORES_BACKEND . $imagem_consultor ?>" alt="imagem consultor" width="169" height="170"><br>
     <?php echo $estado_consultor ?>
     <?php echo $detalhes_consultor ?>
       
    </figure>
    
        <?php }//while ?>
        
	 
	<?php } else {//if isset ?>
     
     
     
     <?php 
     	$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		$query = "SELECT * FROM consultores";
		$sql = mysqli_query($dbc, $query)
		or die('mysqli_error');
		
		
		while($row = mysqli_fetch_array($sql)) {
		
			$id_consultor = $row['id_consultor'];
			$estado_consultor = $row['estado_consultor'];
			$detalhes_consultor = $row['detalhes_consultor'];
			$imagem_consultor = $row['imagem_consultor'];
			$estado_cat = $row['estado_cat'];
		
		?>
     
	 <figure id="box_consultores">
    <figcaption><a href="?id_con=<?php echo $id_consultor ?>&img_con=<?php echo $imagem_consultor ?>&pag=add_consul" title="Deletar?">Deletar</a> | <a href="?id_con=<?php echo $id_consultor ?>&pag=editar_consul" title="">Editar</a></figcaption>
    	<img src="<?php echo JOELINI_UPLOADPATH_CONSULTORES_BACKEND . $imagem_consultor ?>" alt="imagem consultor" width="169" height="170"><br>
     <?php echo $estado_consultor ?>
     <?php echo $detalhes_consultor ?>
        
    </figure>
        
        
        <?php }//while ?>
        
    <?php  } ?>
  
    
    </div><!--listar_consultores_backend-->


<?php }//listar_consultores_backend() ?>


<?PHP
//--------------------------------------------------------------------------------------------
// * LISTAR CONSULTORES FRONTEND
//--------------------------------------------------------------------------------------------
?>

<?php function listar_consultores_frontend() { ?>


	<?php
		if(isset($_GET['consu'])) {
	
			$estado_cat = $_GET['consu'];
	
		$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		$query = "SELECT * FROM consultores WHERE estado_cat = '$estado_cat'";
		$sql = mysqli_query($dbc, $query)
		or die('mysqli_error');
		if(mysqli_num_rows($sql) > 0) {
		
		
		while($row = mysqli_fetch_array($sql)) {
		
			$estado_consultor = $row['estado_consultor'];
			$detalhes_consultor = $row['detalhes_consultor'];
			$imagem_consultor = $row['imagem_consultor'];
		
    $search  = array('<head>', '</head>', '<body>', '</body>', '<html>', '</html>', '<!DOCTYPE html>');
    $replace = array('', '', '', '', '', '', '');
		
	?>	
    
    
    <img src="<?php echo JOELINI_UPLOADPATH_CONSULTORES_FRONTEND . $imagem_consultor ?>" alt="Imagem Consultor" width="169" height="170">
            
            <p><?php echo $estado_consultor ?></p>
            <?php echo str_replace($search, $replace, $detalhes_consultor) ?>
    
    <?php }//while ?>
	<?php } else { //if num rows ?>
    
    	<p>Ainda não há consultor para este estado</p>
    
    
    <?php }//else ?>
    
  
    
	<?php }//if isset ?>


<?php }//listar_consultores_frontend() ?>


<?PHP
//--------------------------------------------------------------------------------------------
// * DELETAR CONSULTOR
//--------------------------------------------------------------------------------------------
?>

<?php function deletar_consultor() { ?>

	<?php
		if(isset($_GET['id_con']) && ($_GET['img_con'])) {
	
			$id_consultor = $_GET['id_con'];
			$imagem_consultor = $_GET['img_con'];
	
		$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		$query = "DELETE FROM consultores WHERE id_consultor = '$id_consultor'";
		$sql = mysqli_query($dbc, $query)
		or die('mysqli_error');
		
		@unlink(JOELINI_UPLOADPATH_CONSULTORES_BACKEND . $imagem_consultor);
		
		echo '<script language="javascript">
				alert("Consultor deletado com sucesso!");
			  </script>';
		
		}//if isset
	
	?>

<?php }//deletar_consultor() ?>


<?PHP
//--------------------------------------------------------------------------------------------
// * EDITAR CONSULTOR
//--------------------------------------------------------------------------------------------
?>

<?php function editar_consultor() { ?>

	<center><h5>Somente texto pode ser alterado!</h5></center>

	<?php
		if(isset($_POST['submit_atualizar_consultor'])) {
		
			@$id_consultor = $_GET['id_con'];
		
		$estado_consultor_certinho = $_POST['estado_consultor_certinho'];
		$detalhes_consultor = $_POST['detalhes_consultor'];
			
		
		
		if(!empty($estado_consultor_certinho) && !empty($detalhes_consultor)) {
			
		$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		$query = "UPDATE consultores SET estado_consultor = '$estado_consultor_certinho', detalhes_consultor =                 '$detalhes_consultor' WHERE id_consultor = '$id_consultor'";
		$sql = mysqli_query($dbc, $query)
		or die('mysqli_error');
		
		
		echo '<center><p id="sucesso">Consultor atualizado com sucesso!</p></center>';
		
		echo '<script type="text/javascript">
   				alert("Consultor atualizado com sucesso!");
              </script>';
			  
			  
	   echo '<script type="text/javascript">
		   window.location = "consultores.php?pag=add_consul";
	   </script>';
		
		
		
		
		
			  
		
			  
		mysqli_close($dbc);
		
		}//if !empty
		else {
			echo '<center><p id="error">Preecha todos os campos!</p></center>';
		}
		
		
		
		}//if isset
		else {
	
	
	
	
		if(isset($_GET['id_con'])) {
	
			$id_consultor = $_GET['id_con'];
	
		$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		$query = "SELECT * FROM consultores WHERE id_consultor = '$id_consultor'";
		$sql = mysqli_query($dbc, $query)
		or die('mysqli_error');
		
		$row = mysqli_fetch_array($sql);
		
		$estado_consultor = $row['estado_consultor'];
		$detalhes_consultor = $row['detalhes_consultor'];
		$imagem_consultor = $row['imagem_consultor'];
		
		}//if isset
		}//else
	?>


	<form action="" method="post" enctype="multipart/form-data" id="form_consultores">
    
       <img src="<?php echo JOELINI_UPLOADPATH_CONSULTORES_BACKEND . $imagem_consultor ?>" alt="" width="169"        height="170">
       
        <label for="estado_consultor_certinho">Digite o estado do Consultor</label>
	   <input type="text" id="estado_consultor_certinho" name="estado_consultor_certinho" value="<?php if(!empty($estado_consultor)) echo $estado_consultor ?>">
       
        
        
       <label for="detalhes_consultor">Detalhes Consultor</label>
	   <textarea id="detalhes_consultor" name="detalhes_consultor"><?php if(!empty($detalhes_consultor)) echo $detalhes_consultor ?></textarea>
        
       <input type="submit" id="submit_adicionar_consultor" name="submit_atualizar_consultor" value="Atualizar">   
    
    </form>



<?php }//editar_consultor() ?>