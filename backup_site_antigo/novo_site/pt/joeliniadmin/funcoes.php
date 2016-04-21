<?PHP //-------------------------ADICIONAR CATEGORIA--------------------------- ?>

<?php function adicionar_categoria() { ?>

	<?php 
		
		if(isset($_POST['submit'])) {
			
			$categoria = $_POST['seleciona_cat'];
			$codigo = $_POST['codigo'];
			$capa_categoria = date('dmHisu') . '-' . $_FILES['capa_categoria']['name'];
			$capa_categoria_type = $_FILES['capa_categoria']['type'];
			$capa_categoria_size = $_FILES['capa_categoria']['size'];
			
			if(!empty($categoria)) {
			
			if(($capa_categoria_type == 'image/jpeg') || ($capa_categoria_type == 'image/jpg') || ($capa_categoria_type == 'image/pjpeg') || ($capa_categoria_type == 'image/png') || ($capa_categoria_type == 'image/x-png') && ($capa_categoria_size > 0) && ($capa_categoria_size <= JOELINI_MAXFILESIZE)) {
			
			
			$target = JOELINI_UPLOADPATH_CAPA_CATEGORIA . $capa_categoria;
			if(move_uploaded_file($_FILES['capa_categoria']['tmp_name'], $target)) {
			
			
			$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
			$query = "INSERT INTO categoria (id_categoria_dinamica, codigo, capa_categoria) VALUES ('$categoria', '$codigo', '$capa_categoria')";
			
			$sql = mysqli_query($dbc, $query)
			or die("mysqli_error");
			mysqli_close($dbc);
			echo'<p class="sucesso">Categoria Adicionada com sucesso!</p>';
			
			$categoria = '';
			$codigo = '';
						
			
			}// if move_uploaded_file
			
			
			
			}// if imagem type
			 else {
			 	echo '<p class="error">Escolha uma imagem do tipo JPG, PNG e menor que 1MB!</p>';
			 }
			
			}// if $categoria vazio
			else {
					echo '<p class="error">Escolha uma Categoria!</p>';
			}//else if $categoria vazio
		
		
		}//isset
	
	
	 ?>


	

	<form action="" method="post" id="form_add_categoria" enctype="multipart/form-data">
    	
       	
    	<select id="seleciona_cat" name="seleciona_cat">
        <option value="">Escolha uma categoria</option>
			<?php
			$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
			$query = "SELECT * FROM categoria_dinamica ORDER BY nome_categoria ASC";
			$sql = mysqli_query($dbc, $query)
			or die('mysqli_error');
			
			
			while($row = mysqli_fetch_array($sql)) {
			
				$id_categoria_dinamica = $row['id_categoria_dinamica'];
				$nome_categoria = $row['nome_categoria'];
			?>
			
        	<option value="<?php echo $id_categoria_dinamica ?>"><?php echo $nome_categoria ?></option>
            
            
        <?php }//while ?>
        </select><br><br>
        
        <label for="codigo">Código do produto</label>
        <input type="text" id="codigo" name="codigo" id="codigo"><br><br>
        
        <label for="capa_categoria">Imagem do produto<br> <span style="font-size:15px;">Tamanho da imagem sem Distorção 85x82</span></label>
        <input type="file" id="capa_categoria" name="capa_categoria"><br><br>
        
        <input type="submit" id="submit" name="submit" value="Adicionar">
    
    
    
    </form>



<?php } //adicionar_categoria() ?>

<?PHP //-------------------------/ADICIONAR CATEGORIA--------------------------- ?>



<?PHP
//--------------------------------------------------------------------------------------------
// * LISTAR MENU CATEGORIAS BACKEND
//--------------------------------------------------------------------------------------------
?>

<?php function listar_menu_categoria_backend() { ?>
	
    
    	<?php
			$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
			$query = "SELECT * FROM categoria_dinamica";
			$sql = mysqli_query($dbc, $query)
			or die('mysqli_error');
			
			
			while($row = mysqli_fetch_array($sql)) {
			
				
				$id_categoria_dinamica = $row['id_categoria_dinamica'];
				$nome_categoria = $row['nome_categoria'];
			 ?>
			
            
             <a href="index.php?titulo=<?php echo $nome_categoria ?>&cat=<?php echo $id_categoria_dinamica ?>"              title=""><h2 class="titulo_categoria"><?php echo $nome_categoria ?></h2></a>|
			
            
            
            <?php }//while)  ?>
			
		
		
		
		



<?php }//listar_menu_categoria_backend() ?>






<?PHP
//--------------------------------------------------------------------------------------------
// * LISTAR MENU CATEGORIAS FRONTEND
//--------------------------------------------------------------------------------------------
?>

<?php function listar_menu_categoria_frontend() { ?>
	
    
    	<?php
						
			
			
			$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
			$query = "SELECT * FROM categoria_dinamica";
			$sql = mysqli_query($dbc, $query)
			or die('mysqli_error');
			
			
			while($row = mysqli_fetch_array($sql)) {
			
				
			
				
				$id_categoria_dinamica = $row['id_categoria_dinamica'];
				$nome_categoria = $row['nome_categoria'];
				
				
				if(isset($_GET['cat'])) {
				
				$active = $_GET['cat'];
				$ativar = '';
				if(!empty($active) && $active == $row['id_categoria_dinamica']) {
				$ativar = 'class="active"';
		   }//if !empty
		   
		   }//if isset
				
			 ?>
			
            
         <li <?php echo @$ativar ?>><a href="produtos.php?active=sis&cat=<?php echo $id_categoria_dinamica ?>" title=""><?php echo $nome_categoria ?></a></li>											          
			
            
            
            <?php }//while) ?>
			
			
			
		
		
		
		


<?php }//listar_menu_categoria_backend() ?>


<?PHP
//--------------------------------------------------------------------------------------------
// * LISTAR MENU CATEGORIAS DELETAR
//--------------------------------------------------------------------------------------------
?>

<?php function listar_menu_categoria_deletar() { ?>


<?php


	$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	$query = "SELECT * FROM categoria_dinamica";
	$sql = mysqli_query($dbc, $query)
	or die ('mysqli_error');
	
	
	while($row = mysqli_fetch_array($sql)) {
	
		$id_categoria_dinamica = $row['id_categoria_dinamica'];
		$nome_categoria = $row['nome_categoria'];
	?>
	
    
    	<figure>
    	<a href="criar_categoria.php?categoria_dinamica=<?php echo $id_categoria_dinamica?>" title=""><?php         echo $nome_categoria ?></a>
        <figcaption><a href="javascript:if(confirm('Tem Certeza que Deseja Excluir esta Categoria?')) {location='criar_categoria.php?id_categoria_dinamica=<?php echo $id_categoria_dinamica; ?>';}" title="">Deletar</a></figcaption>
        </figure>
    
   
    
    <?php }//while ?>
	



<?php }//listar_menu_categoria_deletar() ?>




<?PHP
//--------------------------------------------------------------------------------------------
// * DELETAR DINAMICAS
//--------------------------------------------------------------------------------------------
?>

<?php function deletar_categoria_dinamica() { ?>
	
    <?php
	
		if(isset($_GET['id_categoria_dinamica'])) {
		
		
			$id_categoria_dinamica = $_GET['id_categoria_dinamica'];
	
	
		$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		$query = "DELETE FROM categoria_dinamica WHERE id_categoria_dinamica = '$id_categoria_dinamica'";
		$sql = mysqli_query($dbc, $query)
		or die('mysqli_error');
		
			echo 'Deletando...';
		
		
		    echo '<script language= "JavaScript">
                      location.href="criar_categoria.php"
                  </script>';
				
		}
	
	
	
	?>






<?php }//deletar_categoria_dinamica() { ?>





<?PHP //-------------------------LITAR CATEGORIA BACKEND--------------------------- ?>


<?php function listar_categoria_backend() { ?>
    
    
    <?php 
	
		if(isset($_GET['cat']) && ($_GET['titulo'])) {
			$cat = $_GET['cat'];
			$tiulo = $_GET['titulo'];
		
		echo'<center><h1 style="margin-top:30px; color:#000;">'.$tiulo.'</h1></center>';
	
		$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		
		$query = "SELECT * FROM categoria WHERE id_categoria_dinamica = '$cat'";
		$sql = mysqli_query($dbc, $query);
		
		while($row = mysqli_fetch_array($sql)) {  
			
			$id_categoria = $row['id_categoria'];
			$categoria = $row['id_categoria_dinamica'];
			$codigo = $row['codigo'];
			$capa_categoria = $row['capa_categoria'];
			
			?>
			
		
         <figure>
  <a href="index.php?pagina=editar_cat&id_categoria=<?php echo $id_categoria ?>" title=""><img src="<?php echo JOELINI_UPLOADPATH_CAPA_CATEGORIA . $capa_categoria ?>" alt="Imagem Produto" width="85" height="82"></a>
  <figcaption><?php echo $codigo  ?> | <span><a href="index.php?pagina=deletar_cat&capa_categoria=<?php echo $capa_categoria ?>&id_categoria=<?php echo $id_categoria ?>" title="Deletar" style="color:#FF0000;">X</a></span></figcaption>
   </figure>
        
		
		<?php }// while
	
	}
	?>

    

<?php } //listar_categoria_backend?>



<?PHP //-------------------------/LITAR CATEGORIA BACKEND--------------------------- ?>



<?PHP //------------------------------EDITAR CATEGORIA-------------------------------- ?>


<?php function editar_categoria() { ?>


	<?php
	
		if(isset($_GET['id_categoria'])) {
		
		$id_categoria = $_GET['id_categoria'];
		 }
		 $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		 if(isset($_POST['submit'])) {
		 
		 	$titulo_produto = $_POST['titulo_produto'];
			$old_picture = $_POST['old_picture'];
			$capa_prod = $_FILES['capa_prod']['name'];
			$capa_prod_type = $_FILES['capa_prod']['type'];
			$capa_prod_size = $_FILES['capa_prod']['size'];
			$descricao_pro = $_POST['descricao_pro'];
			$youtube_link = $_POST['youtube_link'];
			
			
		if(!empty($capa_prod)) {
		
			if((($capa_prod_type == 'image/jpeg') || ($capa_prod_type == 'image/jpg') || ($capa_prod_type == 'image/pjpeg') || ($capa_prod_type == 'image/png') && ($capa_prod_size > 0) && ($capa_prod_size <= JOELINI_MAXFILESIZE))) {
			
			$target = JOELINI_UPLOADPATH_CAPA_CATEGORIA . $capa_prod;
			if (move_uploaded_file($_FILES['capa_prod']['tmp_name'], $target)) {
			
			if(!empty($old_picture) && ($old_picture != $capa_prod)) {
				@unlink (JOELINI_UPLOADPATH_CAPA_CATEGORIA . $old_picture);
			}// if(!empty($old_picture) && ($old_picture != $c
			else {
				@unlink($_FILES['capa_prod']['tmp_name']);		
				/*echo '<p class="error">Problema ao fazer upload da imagem!</p>';*/
			}// else if(!empty($old_picture) && ($old_picture != $c
			
			}// if move_upoaded_file
			
			}// type
			
		else {
			@unlink($_FILES['capa_prod']['tmp_name']);
			echo '<p class="error">Sua imagem deve ser JPG ou PNG e menor que 1MB!</p>';
		}// else type
		
		}// !empty($capa_prod)
		
		if(!empty($titulo_produto)) {
		
			if(!empty($capa_prod)) {
			
				$query = "UPDATE detalhes SET titulo_prod = '$titulo_produto', img_prod_thumb = '$capa_prod', descricao_prod = '$descricao_pro', youtube_link = '$youtube_link' WHERE id_categoria = '$id_categoria'";
			
				//@header('Location: index.php?pagina=editar_cat&id_categoria="'.$id_categoria.'"');
				
				echo '<script language="javascript">location:window.history.back()</script>';
			
			}// if(!empty($capa_prod)
			else {
				$query = "UPDATE detalhes SET titulo_prod = '$titulo_produto', descricao_prod = '$descricao_pro', youtube_link = '$youtube_link' WHERE id_categoria = '$id_categoria'";
				
				//@header('Location: index.php?pagina=editar_cat&id_categoria="'.$id_categoria.'"');
				
				echo '<script language="javascript">location:window.history.back()</script>';
				
			}// else if(!empty($capa_prod)
		
		mysqli_query($dbc, $query);
		
		echo '<center><p class="sucesso">Atualizado com Sucesso!</p></center>';
		
		mysqli_close($dbc);
		exit();
		
		}// if(!empty($titulo))
		else {
			echo '<p class="error">Preencha o campo titulo a imagem e opcional!</p>';
		}
		
		 
		 }//if isset
		 else {
			 
		 
		 
		$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		$query = "SELECT * FROM detalhes WHERE id_categoria = '$id_categoria'";
		$sql = mysqli_query($dbc, $query);
		if(mysqli_num_rows($sql) == 0) {
			
		$query2 = "INSERT INTO detalhes (id_categoria, titulo_prod, img_prod_thumb, descricao_prod, 			youtube_link) VALUES ('$id_categoria', 'VAZIO', '', 'VAZIO', '')";
		mysqli_query($dbc, $query2);		
		}
		
		$row = mysqli_fetch_array($sql);
		
		
		
		/*if($row != NULL) {*/
					
		$titulo_prod = $row['titulo_prod'];
		$old_picture = $row['img_prod_thumb'];
		$descricao_prod = $row['descricao_prod'];
		$youtube_link =  $row['youtube_link'];
		/*}
		 else {
      echo '<p class="error">Problea ao acessar dados do Banco de Dados.</p>';
		}//else*/
			 mysqli_close($dbc);
	}// else
		 
	?>	
    

	<form action="" method="post" enctype="multipart/form-data" id="form_editar_categoria">
		
        <label for="titulo_do_produto">Titulo do Produto</label>
    	<input type="text" id="titulo_produto" name="titulo_produto" value="<?php if(!empty($titulo_prod)) echo $titulo_prod ?>">
        
        
        <label for="titulo_do_produto">Imagem do Produto</label>
    	<input type="file" id="capa_prod" name="capa_prod">
        
        
        <input type="hidden" id="old_picture" name="old_picture" value="<?php if(!empty($old_picture)) echo $old_picture ?>">
        <?php if (!empty($old_picture)) {
        echo '<img class="profile" src="' . JOELINI_UPLOADPATH_CAPA_CATEGORIA . $old_picture . '" alt="Profile Picture" width="249" height="88">';
      }
	 ?>
        
        
        <label for="descricao_pro">Descrição do Produto</label>
    	<textarea id="descricao_prod" name="descricao_pro"><?php if(!empty($descricao_prod)) echo $descricao_prod ?></textarea>
        
        
        <label for="youtube_link">Youtube Link</label>
    	<input type="text" id="youtube_link" name="youtube_link" value="<?php if(!empty($youtube_link)) echo $youtube_link ?>"><br>
        

    	<input type="submit" id="submit" name="submit" value="Atualizar" id="submit" style="margin-bottom:50px;">
    
    </form>
    
    
    
<!--/////////////////////////////ADICIONAR IMAGENS GALERIA E EDITAR/////////////////////////////-->
<?php

	if(isset($_POST['submit_galeria'])) {
					
					$pasta = '../imagens/imgG/';
					
			     foreach($_FILES['imagem']['error'] as $key => $error) {
				
				
					if($error == UPLOAD_ERR_OK) {
							
							$tmp_name = $_FILES['imagem']['tmp_name'][$key];
							$nome = date('dmHisu') . '-' . $_FILES['imagem']['name'][$key];
							$uploadfile = $pasta . basename($nome);
				$nova = '../imagens/imgP/';		
				$largura = 150;  
			       
             	$img = imagecreatefromjpeg($tmp_name);
                $x   = imagesx($img);
                $y   = imagesy($img);
                $altura = ($largura * $y)/$x;
                $nova = imagecreatetruecolor($largura, $altura);
                imagecopyresampled($nova, $img, 0, 0, 0, 0, $largura, $altura, $x, $y);
                imagejpeg($nova, JOELINI_UPLOADPATH_THUBNAILS . $nome);
                imagedestroy($img);
                imagedestroy($nova);
							
							
							
					if(move_uploaded_file($tmp_name, $uploadfile)) {
					$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
			        $query = "INSERT INTO galeria (id_categoria, imagem, thumbnails) VALUES                      ('$id_categoria', '$nome', '$nome')";
			        $sql = mysqli_query($dbc, $query);
			        mysqli_close($dbc);
					
						echo'<p class="sucesso">Imagem adicionada com sucesso!</p>';
					}
					else {
						echo'<p class="error">Erro!</p>';
					}
							
					
					}//UPLOAD_ERR_OK
					
			
				
				}//foreach
				
			}//isset

?>



	<form id="form_galeria" action="" method="post" enctype="multipart/form-data">
    	
        <label for="adicionar_imagens">Adicionar Imagens Galeria</label>
        <input type="file" id="imagens" name="imagem[]" class="multi" maxlength="5" accept="jpg|jpeg">
        
        <input type="submit" id="submit_galeria" name="submit_galeria" value="Adicionar">
        
    </form>





<!--/////////////////////////////ADICIONAR IMAGENS GALERIA E EDITAR/////////////////////////////-->    
    
    
    

<?php } //editar_categoria ?>


<?PHP //------------------------------/EDITAR CATEGORIA-------------------------------- ?>




<?PHP //------------------------------LISTAR GALERIA BACKEND-------------------------------- ?>


<?php function listar_galeria_backend() { ?>

	<?php 
	
		if(isset($_GET['id_categoria'])) {
		
		$id_categoria = $_GET['id_categoria'];
		 }
	
	$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	@$query = "SELECT * FROM galeria WHERE id_categoria = '$id_categoria'";
	$sql = mysqli_query($dbc, $query);
	
		while($row = mysqli_fetch_array($sql)) {
		
			$id_galeria = $row['id_galeria'];
			$id_categoria = $row['id_categoria'];
			$imagem = $row['imagem'];
			$thumbnails = $row['thumbnails'];
		?>
		
  
        
        <article style="text-align:center; width: 120px; float:left; margin-top: 20px;">
        <a href="<?php echo JOELINI_UPLOADPATH_NORMAL . $imagem ?>" class="highslide" onclick="return hs.expand(this)">
           <img src="<?php echo JOELINI_UPLOADPATH_THUBNAILS . $thumbnails ?>" alt="" width="108" height="59">
        </a><br>
           <span><a href="index.php?pagina=deletar_imagem_galeria&nome_imagem=<?php echo $imagem ?>&id_categoria=<?php echo $id_categoria ?>&id_galeria=<?php echo $id_galeria ?>" title="Deletar?">X</a></span>
           
           <!--<div class="highslide-caption">
	       Legenda da Imagem vai aqui
           </div>-->
           
       </article>
		  
        
		<?php }// while ?>
	

<?php } //listar_galeria_backend() ?>


<?PHP //------------------------------/LISTAR GALERIA BACKEND-------------------------------- ?>


<?PHP //------------------------------DELETAR IMAGEM GALERIA-------------------------------- ?>

	
<?php  function deletar_imagem_galeria() { ?>


	<?php 
	
		if(isset($_GET['id_galeria']) && ($_GET['id_categoria']) && ($_GET['nome_imagem'])) {
		
		$id_galeria = $_GET['id_galeria'];
		$id_categoria = $_GET['id_categoria'];
		$nome_imagem = $_GET['nome_imagem'];
		 
	
	
	$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	$query = "DELETE FROM galeria WHERE id_galeria = '$id_galeria'";
	mysqli_query($dbc, $query)
	or die('mysqli_error');
	echo $query;
	
	@unlink (JOELINI_UPLOADPATH_THUBNAILS . $nome_imagem);
	@unlink (JOELINI_UPLOADPATH_NORMAL . $nome_imagem);
	
	
	/*header('Location: index.php?titulo=pes&cat=pes&pagina=editar_cat&id_categoria='.$id_categoria.'');*/
	
	echo '<script language="javascript">location:window.history.back()</script>';
	
		}
	?>



<?php } // deletar_imagem_galeria() } ?>




<?PHP //------------------------------/DELETAR IMAGEM GALERIA-------------------------------- ?>





<?PHP //------------------------------ DELETAR CATEGORIA -------------------------------- ?>


<?php function deletar_categoria() { ?>
    
   
   	<?php
	
		if(isset($_GET['id_categoria']) && ($_GET['capa_categoria'])) {
		
		$id_categoria = $_GET['id_categoria'];
		$capa_categoria = $_GET['capa_categoria'];
		 
		 $dbc3 = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		$query3 = "SELECT * FROM galeria WHERE id_categoria = '$id_categoria'";
		$sql3 = mysqli_query($dbc3, $query3)
		or die('mysqli_error_yui');
		
		 while($row = mysqli_fetch_array($sql3)) {
		 		
		 	$imagem = $row['imagem'];
			$thumbnails = $row['thumbnails'];
		 
		 
		@unlink(JOELINI_UPLOADPATH_THUBNAILS . $thumbnails);
		@unlink(JOELINI_UPLOADPATH_NORMAL . $imagem);
		 
		
		$dbc4 = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		$query4 = "DELETE FROM galeria WHERE id_categoria = '$id_categoria'";
		$sql4 = mysqli_query($dbc4, $query4);
		
		 
		 }//while galeria
		 
		 
		$dbc2 = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		$query2 = "SELECT * FROM detalhes WHERE id_categoria = '$id_categoria'";
		$sql2 = mysqli_query($dbc2, $query2)
		or die('mysqli_error_yui');
		
		 while($row = mysqli_fetch_array($sql2)) {
			 
			$img_prod_thumb = $row['img_prod_thumb']; 
			 
		$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		$query = "DELETE FROM categoria WHERE id_categoria = '$id_categoria'";
		$sql = mysqli_query($dbc, $query)
		or die('mysqli_error');
		
		
		@unlink(JOELINI_UPLOADPATH_CAPA_CATEGORIA . $capa_categoria);
		@unlink(JOELINI_UPLOADPATH_CAPA_CATEGORIA . $img_prod_thumb);
		
		
		}// while
		
		 echo '<script language="javascript">location:window.history.back()</script>';
		 
		 } // if isset
	
	 ?>
   
    
<?php } // deletar_categoria() ?>


<?PHP //------------------------------ /DELETAR CATEGORIA -------------------------------- ?>

<?PHP //------------------------------ LISTAR CATEGORIA FRONTEND -------------------------------- ?>

<?php function listar_categoria_frontend() { ?>

<?php 
	
		if(isset($_GET['cat']) && $_GET['active']) {
			$cat = $_GET['cat'];
			$act = $_GET['active'];
		
	
		$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		
		$query = "SELECT * FROM categoria WHERE id_categoria_dinamica = '$cat'";
		$sql = mysqli_query($dbc, $query);
		
		while($row = mysqli_fetch_array($sql)) {  
			
			$id_categoria = $row['id_categoria'];
			$categoria = $row['id_categoria_dinamica'];
			$codigo = $row['codigo'];
			$capa_categoria = $row['capa_categoria'];
			
			?>
     
     <figure>
  <a href="produtos_detalhes.php?active=<?php echo $act ?>&id_categoria=<?php echo $id_categoria ?>&cat=<?php echo $categoria ?>" title=""><img src="<?php echo JOELINI_UPLOADPATH_CAPA_CATEGORIA_FRONTEND . $capa_categoria ?>" alt="Imagem Produto" width="85" height="82"></a>
  <figcaption><?php echo $codigo ?></figcaption>
   </figure>
     
            
        <?php 
		 }
		}
     	?>
	
    
 <?php } //listar_categoria_frontend() ?>   
	
<?PHP //------------------------------ /LISTAR CATEGORIA FRONTEND -------------------------------- ?>


<?PHP //------------------------------ LISTAR DETALHES FRONTEND -------------------------------- ?>


<?php function listar_detalhes_frontend() { ?>

	
	
	
	<?php 
	
		if(isset($_GET['id_categoria'])) {
		
		$id_categoria = $_GET['id_categoria'];
	
	
		$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		$query = "SELECT * FROM detalhes WHERE id_categoria = '$id_categoria'";
		$sql = mysqli_query($dbc, $query);
		
		while( $row = mysqli_fetch_array($sql)) {
		
			$titulo_pro = $row['titulo_prod'];
			$img_prod_thumb = $row['img_prod_thumb'];
			$descricao_prod = $row['descricao_prod'];
			$youtube_link =  $row['youtube_link'];
		?>
		
        
        <h1><?php echo $titulo_pro ?></h1>
        <img src="<?php echo JOELINI_UPLOADPATH_CAPA_CATEGORIA_FRONTEND . $img_prod_thumb ?>" alt="" width="249" height="88">
        
        <div class="descricao_paragr"> <?php echo $descricao_prod ?> </div>
        
        
        
        
        <?php if(!empty($youtube_link)) { ?>
        
        <article class="video_desm">
       <iframe width="230" height="173" src="<?php echo $youtube_link ?>" frameborder="0" allowfullscreen></iframe>
        </article><!--video_desm-->
        
        <?php } 
		else {  ?>
                
        <article class="video_desm">
       
       		<img src="imagens2/aviso.gif" alt="">
       
        </article><!--video_desm-->
                
                
        <?php } ?>
        
        
        
        
        
        
        
        <article class="imagem_prod">
        <?php 
        $dbc2 = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		$query2 = "SELECT * FROM galeria WHERE id_categoria = '$id_categoria'";
		$sql2 = mysqli_query($dbc2, $query2);
		
		
		while($row = mysqli_fetch_array($sql2)) {
			
			$imagem = $row['imagem'];
			$thumnails = $row['thumbnails'];
		?>
		
                
           <a href="<?php echo JOELINI_UPLOADPATH_NORMAL_FRONTEND . $imagem ?>" class="highslide" onclick="return hs.expand(this)">
           <img src="<?php echo JOELINI_UPLOADPATH_THUBNAILS_FRONTEND . $thumnails ?>" alt="" width="108" height="59"></a>
           
           <!--<div class="highslide-caption">
	       Legenda da Imagem vai aqui
           </div>-->
      
      
        
       <?php }//while galeria ?> 
       
      </article><!--imagem_prod--> 
                 
      <?php 
        
        }//while
	
	}// if isset
		?>
	
	





<?php } //listar_detalhes_frontend() ?>



<?PHP //------------------------------ /LISTAR DETALHES FRONTEND -------------------------------- ?>




<?PHP //------------------------------ /NEWS ADICIONAR -------------------------------- ?>


<?php function adicionar_news() { ?>

	<?php
		if(isset($_POST['submit'])) {
			
			$adicionar_titulo = $_POST['adicionar_titulo'];
			$conteudo_news = $_POST['conteudo_news'];
			
			 setlocale(LC_ALL, "pt_BR");
			$data_completa = strftime("%d/%m/%y - ");
			
		if(!empty($adicionar_titulo) && !empty($conteudo_news)) {
			
			$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
			$query = "INSERT INTO news (titulo, conteudo_news, data) VALUES ('$adicionar_titulo', '$conteudo_news', '$data_completa')";
			$sql = mysqli_query($dbc, $query);
			
			echo '<p class="sucesso2">Notícia Adicionada com Sucesso!</p>';
			
			echo '<script language="javascript">location:window.history.back()</script>';
			
			mysqli_close($dbc);
		
		
		}//if !empty
		else {
			echo'<p class="error2">Por Favor Preencha os campos!</p>';
		}
			
			
		}//if isset
	
	
	 ?>
	

	<div id="form_add_news">
    
	<form id="add_news" action="" method="post" enctype="multipart/form-data">
    
    
    	<label for="titulo">Adicionar Titulo</label>
        <input type="text" id="adicionar_titulo" name="adicionar_titulo" value="<?php setlocale(LC_ALL, "pt_BR");
$data_completa = strftime("%d/%m/%y - "); echo $data_completa ?>">
        
        
        <label for="conteudo_news">Adicionar Conteudo</label>
        <textarea id="adicionar" name="conteudo_news"></textarea><br>
        
        
        <input type="submit" id="submit" name="submit" value="Adicionar">
    
    
    </form>

	</div><!--form_add_news-->

<?php } //adicionar_news() ?>



<?PHP //------------------------------ /NEWS ADICIONAR -------------------------------- ?>



<?PHP
//--------------------------------------------------------------------------------------------
// * LITAR NEWS BACKEND
//--------------------------------------------------------------------------------------------
?>


<?php function listar_news_backend() { ?>

	<?php
	 
	$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	$query = "SELECT * FROM news ORDER BY id_news DESC";
	$sql = mysqli_query($dbc, $query);
	
	while($row = mysqli_fetch_array($sql)) {
	
		$id_news = $row['id_news'];
		$titulo = $row['titulo'];
	?>
	
    
    	<li><a href="news.php?pagina=editar_news&id_news=<?php echo $id_news ?>" title=""><?php echo $titulo ?></a></li>
	
    
    <?php } // while ?>
	
    <?php mysqli_close($dbc); ?>

<?php } //listat_news_backend() ?>

<?php
//--------------------------------------------------------------------------------------------
// * LITAR NEWS BACKEND
//--------------------------------------------------------------------------------------------
?>




<?php function editar_news() { ?>


	<?php
	
		if(isset($_GET['id_news'])) {
			
			$id_news = $_GET['id_news']; 
			
		
		
		
	if(isset($_POST['submit_news'])) {
	
		$adicionar_titulo = $_POST['adicionar_titulo'];
		$conteudo_news = $_POST['conteudo_news'];
	
	if(!empty($adicionar_titulo) && !empty($conteudo_news)) {
	
		$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		$query = "UPDATE news SET titulo = '$adicionar_titulo', conteudo_news = '$conteudo_news' WHERE id_news = '$id_news'";
		$sql = mysqli_query($dbc, $query);
		
	echo '<p class="sucesso2">News Atualizada com Sucesso!</p>';
	
	}// if !empty
	
	mysqli_close($dbc);
	
	}//isset submit_news
		
	$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	$query = "SELECT * FROM news WHERE id_news = '$id_news'";
	$sql = mysqli_query($dbc, $query);
	
	$row = mysqli_fetch_array($sql);
		
		$id_news = $row['id_news'];
		$titulo = $row['titulo'];
		$conteudo_news = $row['conteudo_news'];
		
	}//isset id_news
	
	mysqli_close($dbc);
	
	?>


	<div id="form_add_news">
    
	<form id="add_news" action="" method="post" enctype="multipart/form-data">
    
  		  <span class="deletar_news"><a href="javascript:if(confirm('Tem Certeza que Deseja Excluir está News?')) {location='news.php?pagina=deletar_news&id_news=<?php echo $id_news ?>';}" title="">Deletar News</a></span>
    	<label for="titulo">Adicionar Titulo</label>
        <input type="text" id="adicionar_titulo" name="adicionar_titulo" value="<?php if(!empty($titulo)) echo $titulo ?>">
        
        
        <label for="conteudo_news">Adicionar Conteudo</label>
        <textarea id="adicionar" name="conteudo_news"><?php if(!empty($conteudo_news)) echo $conteudo_news ?></textarea><br>
        
        
        <input type="submit" id="submit" name="submit_news" value="Atualizar">
    
    
    </form>

	</div><!--form_add_news-->


<?php } //editar_news() ?>
 
<?php
//--------------------------------------------------------------------------------------------
// * DELETAR NEWS
//--------------------------------------------------------------------------------------------
?>
 
 
<?php function deletar_news() { ?>


	<?php 
	
		if(isset($_GET['id_news'])) {
			
			$id_news = $_GET['id_news']; 
	
		$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		$query = "DELETE FROM news WHERE id_news = '$id_news'";
		$sql = mysqli_query($dbc, $query);
		
		echo '<p class="sucesso2">News Deletada com Sucesso!</p>';
		
		echo '<script language="javascript">location:window.history.back()</script>';
		
		}// isset $_GET['id_news'];
		
		mysqli_close($dbc);
	?>


<?php } //deletar_news() ?>

<?php
//--------------------------------------------------------------------------------------------
// * LISTAR NEWS FRONTEND
//--------------------------------------------------------------------------------------------
?>


<?php function listar_news_frontend() { ?>


	<?php 
		$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		$query = "SELECT * FROM news ORDER BY id_news DESC";
		$sql = mysqli_query($dbc, $query);
		
		while($row = mysqli_fetch_array($sql)) {
			
			$id_news = $row['id_news'];
			$titulo = $row['titulo'];
			$conteudo_news = $row['conteudo_news'];
		?>
		
        
    	<li><a href="news.php?pagina=news_detalhes&id_news=<?php echo $id_news ?>" title=""><?php echo $titulo ?></a></li>
        
        <?php }//while ?>
	
    <?php mysqli_close($dbc); ?>
    
<?php } //listar_news_frontend ?>

<?php
//--------------------------------------------------------------------------------------------
// * LISTAR NEWS DETALHES FRONTEND
//--------------------------------------------------------------------------------------------
?>


<?php function listar_news_detalhes_frontend() { ?>


	<?php 
	
		if(isset($_GET['id_news'])) {
			
			$id_news = $_GET['id_news']; 
	
		$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		$query = "SELECT * FROM news WHERE id_news = '$id_news'";
		$sql = mysqli_query($dbc, $query);
		
		$row = mysqli_fetch_array($sql);
			
			$id_news = $row['id_news'];
			$titulo = $row['titulo'];
			$conteudo_news = $row['conteudo_news'];
			
		}//isset
		
		
		if(!empty($conteudo_news)) echo $conteudo_news;
		
		?>


<?php } //listar_news_detalhes_frontend ?>


<?php
//--------------------------------------------------------------------------------------------
// * LISTAR NEWS INDEX
//--------------------------------------------------------------------------------------------
?>


<?php function listar_news_index() { ?>


	<?php
		$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		$query = "SELECT * FROM news ORDER BY id_news DESC LIMIT 1";
		$sql = mysqli_query($dbc, $query);
		
			$row = mysqli_fetch_array($sql);
			
			$id_news = $row['id_news'];
			$conteudo_news = substr($row['conteudo_news'],0,650);
			
			
			
			if(!empty($conteudo_news)) echo $conteudo_news;echo'<a href="news.php?id_news='.$id_news.'" title="">Ver Mais</a>';
			
		
	
	 ?>


<?php }// listar_news_index() ?>



<?php
//--------------------------------------------------------------------------------------------
// * CRIAR CATEGORIA
//--------------------------------------------------------------------------------------------
?>

<?php function criar_categoria() { ?>



	<?php
	
		if(isset($_POST['submit'])) {
		
			$criar_categoria = $_POST['criar_categoria'];
		
		
			if(!empty($criar_categoria)) {
		
		
			$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
			$query = "INSERT INTO categoria_dinamica (nome_categoria) VALUES('$criar_categoria')";
			$sql = mysqli_query($dbc, $query)
			or die('mysqli_error');
			echo '<p class="sucesso">Categoria criada com sucesso!</p>';
			
			echo '<script language= "JavaScript">
                  location.href="criar_categoria.php"
                  </script>';
			
			
			mysqli_close($dbc);
			
			}//if(!empty($criar_categoria))
			else {
				echo '<center><p class="error">Campo vazio!</p></center>';
			}
		}
		
	
	 ?>


	<form action="" method="post" id="form_criar_categoria" enctype="multipart/form-data">
    	
        
        <label for="nome_categoria">Nome Categoria do Produto</label>
        <input type="text" id="codigo" name="criar_categoria" id="nome_categoria"><br><br>
        
       
        <input type="submit" id="submit" name="submit" value="Criar">
    
    
    </form>


<?php }//criar_categoria() ?>


