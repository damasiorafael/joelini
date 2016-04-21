<?php 

require_once 'joeliniadmin/util/connect.php';
require_once 'joeliniadmin/util/appvars.php';
require_once 'joeliniadmin/funcoes.php';

?>



<?php $title = 'Produtos - Joelini Ferragens para Móveis'; ?>
<?php require 'header.php'; ?>

<body>

	<?php $menuProdutos = 'active' ?>
	<?php require 'cabecalho.php'; ?>
    
    
    <section id="all">
    
 
  <div class="back_conteudo">
  
  	<section id="conteudo">
 
    
    
    	<section id="produtos">
        	
            <h1>Produtos</h1>
            
            
            <div class="produtos_menu">
    <?php
		/*if(isset($_GET['active'])) {
			
			
			$act = $_GET['active'];
			
			
			if($act == 'sis') {
				$act_sis = 'id="active"';
				
			}
			
			elseif($act == 'reg') {
				$act_reg = 'id="active"';
			}
			
			elseif($act == 'pux') {
				$act_pux = 'id="active"';
			}
			
			elseif($act == 'pes') {
				$act_pes = 'id="active"';
			}
			
			switch($_GET['active']) {
			
				case "sis";
					$act_sis = 'id="active"';
				break;
				
				case "reg";
					$act_reg = 'id="active"';
					break;
					
				case "pux";
					$act_pux = 'id="active"';
					break;
					
				case "pes";
					$act_pes = 'id="active"';
				break;
				
			
			}
			
		}
	
	 */?>
    
   <ul>
      
      
      
      
      
      <?php listar_menu_categoria_frontend(); ?>
      
      
      
      
      
      
      
      <!--<li class="sis" <?php// if(!empty($act_sis)) echo $act_sis ?>><a href="produtos.php?active=sis&cat=porta_de_correr" title="">Sistemas para Porta de correr</a></li>
      
       <li class="reg" <?php// if(!empty($act_reg)) echo $act_reg ?>><a href="produtos.php?active=reg&cat=grades_de_berco" title="">Regulador para Grades de Berços</a></li>
       
       <li class="pux" <?php// if(!empty($act_pux)) echo $act_pux ?>><a href="produtos.php?active=pux&cat=puxadores" title="">Puxadores</a></li>
       
       <li class="pes" <?php// if(!empty($act_pes)) echo $act_pes ?>><a href="produtos.php?active=pes&cat=pes" title="">Pés</a></li>-->
   </ul>
    
    </div><!--produtos_menu-->
    
    
    
    <div class="listagem_prod">
    
 	 <?php listar_categoria_frontend(); ?>
   
    </div><!--listagem_prod-->
    
        	
        
        </section><!--produtos-->
    
    
    
    </section><!--conteudo-->
    
  </div><!--back_conteudo-->
  
    	
    
    
    
  <?php require 'footer.php'; ?>
    
    </section><!--/all-->
    
  
  
    
    


</body>
</html>