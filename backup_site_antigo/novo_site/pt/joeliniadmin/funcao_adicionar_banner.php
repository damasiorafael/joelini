<?PHP
//--------------------------------------------------------------------------------------------
// * ADICIONAR BANNER
//--------------------------------------------------------------------------------------------
?>

<?php function adicionar_banner() { ?>

	
    <?php
		if(isset($_POST['submit_adicionar_banner'])) {
		
			$titulo_banner = $_POST['titulo_banner'];
			$link_banner = $_POST['link_banner'];
			$imagem_banner = date('dmHisu') . '-' . $_FILES['imagem_banner']['name'];
			$imagem_banner_type = $_FILES['imagem_banner']['type'];
			$imagem_banner_size = $_FILES['imagem_banner']['size'];
		
		
		
		if(!empty($imagem_banner)) {
			
		if(($imagem_banner_type == 'image/pjpeg') || ($imagem_banner_type == 'image/jpeg') || ($imagem_banner_type == 'image/jpg') || ($imagem_banner_type == 'image/png') && ($imagem_banner_size > 0) && (        $imagem_banner_size <= JOELINI_MAXFILESIZE)) {
			
			$target = JOELINI_UPLOADPATH_BANNER_BACKEND . $imagem_banner;
			if(move_uploaded_file($_FILES['imagem_banner']['tmp_name'], $target)) {
			
				
			$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
			$query = "INSERT INTO banner (titulo_banner, link_banner, imagem_banner) VALUES ('$titulo_banner',            '$link_banner', '$imagem_banner')";
			$sql = mysqli_query($dbc, $query)
			or die('mysqli_error');
			
			echo '<center><p id="sucesso">Banner adicionado com sucesso!</p></center>';
			
			
			mysqli_close($dbc);
			
			}//if_move_uploaded_file
			
			}//if image type
			else {
				echo '<center><p id="error">A imagem deve ser em .JPG ou .PNG e menor que 1MB!</p></center>';
			}
		
		
		}// if !empty
		else {
			echo '<p id="error">Campo imagem é obrigatório!</p>';
		}
		
		
		
		
		
		}//if isset
	
	
	?>
    
    
    
<form action="" method="post" enctype="multipart/form-data" id="form_banner">
    
    	<label for="titulo_banner">Titulo Banner</label>
		<input type="text" id="titulo_banner" name="titulo_banner"> 
        
        
        <label for="link_banner">Link Banner</label>
		<input type="text" id="link_banner" name="link_banner">
        
        
        <label for="imagem_banner">Imagem Banner tamanho da imagem 729 x 194</label>
		<input type="file" id="imagem_banner" name="imagem_banner">
        
        <input type="submit" id="submit_adicionar_banner" name="submit_adicionar_banner" value="Adicionar">   
    
    </form>


<?php } //adicionar_banner() ?>


<?PHP
//--------------------------------------------------------------------------------------------
// * LISTAR BANNER BACKEND
//--------------------------------------------------------------------------------------------
?>

<?php function listar_banner_backend() { ?>

	<div id="listar_banner_backend">
    
    	<center><h2 style="margin-top:20px;">Banners Adicionados</h2></center>
	
    <?php
		$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		$query = "SELECT * FROM banner ORDER BY id_banner DESC";
		$sql = mysqli_query($dbc, $query)
		or die('mysqli_error');
		
		
		while($row = mysqli_fetch_array($sql)) {
		
			$id_banner = $row['id_banner'];
			$titulo_banner = $row['titulo_banner'];
			$link_banner = $row['link_banner'];
			$imagem_banner = $row['imagem_banner'];
		
		
	?>	
    
    
    <figure id="figure_listar_banner">
    	<a href="<?php if(!empty($link_banner)) { echo $link_banner; } else { echo '#'; } ?>" title=""><img src="<?php echo JOELINI_UPLOADPATH_BANNER_BACKEND . $imagem_banner ?>" alt="<?php if(!        empty($titulo_banner)) echo $titulo_banner ?>" width="380" height="102"></a> 
        <figcaption><a href="?id_ban=<?php echo $id_banner ?>&ima_ban=<?php echo $imagem_banner ?>&pag=list_banner" title="Deletar?">Deletar</a></figcaption>   
    </figure>
    
    
    
    <?php }//while ?>
	
    <?php mysqli_close($dbc); ?>
	
	</div><!--listar_banner_backend-->


<?php }//listar_banner_backend() ?>

<?PHP
//--------------------------------------------------------------------------------------------
// * DELETAR BANNNER
//--------------------------------------------------------------------------------------------
?>

<?php function deletar_banner() { ?>

	<?php
		if(isset($_GET['id_ban']) && isset($_GET['ima_ban'])) {
	
			$id_banner = $_GET['id_ban'];
			$imagem_banner = $_GET['ima_ban'];
	
		$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		$query = "DELETE FROM banner WHERE id_banner = '$id_banner'";
		$sql = mysqli_query($dbc, $query)
		or die('mysqli_error');
		
		
		@unlink (JOELINI_UPLOADPATH_BANNER_BACKEND . $imagem_banner);
		
		echo '<center><p id="sucesso">Banner deletado com sucesso!</p></center>';
		
		mysqli_close($dbc);
		
		}// if isset
	?>


<?php }//deletar_banner() ?>

<?PHP
//--------------------------------------------------------------------------------------------
// * LISTAR BANNER FRONTEND
//--------------------------------------------------------------------------------------------
?>


<?php function listar_banner_frontend() { ?>

	<?php
		$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		$query = "SELECT * FROM banner ORDER BY id_banner DESC";
		$sql = mysqli_query($dbc, $query)
		or die('mysqli_error');
		
		
		while($row = mysqli_fetch_array($sql)) {
		
			$titulo_banner = $row['titulo_banner'];
			$link_banner = $row['link_banner'];
			$imagem_banner = $row['imagem_banner'];
			
		
	?>	
    
    
    <li><a href="<?php if(!empty($link_banner)) { echo $link_banner; } else { echo '#'; } ?>"><img src="<?php echo JOELINI_UPLOADPATH_BANNER_FRONTEND . $imagem_banner ?>" class=""></a><div class="label_text"><p>cubeStop</p></div></li>
    
    
    <?php }// while ?>
		


<?php }//listar_banner_frontend() ?>

