<?php 

require 'joeliniadmin/util/connect.php';
require 'joeliniadmin/util/appvars.php';
require 'joeliniadmin/funcoes.php';

?>



<?php $title = 'Produtos Descrições - Joelini Ferragens para Móveis'; ?>
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
	
	*/ ?>
    
   <ul>
   
      <?php listar_menu_categoria_frontend(); ?>
      
   </ul>
    
    </div><!--produtos_menu-->
    
    
    
  <div class="prod_detalhes">
    	
    	<?php listar_detalhes_frontend(); ?>
    
    </div><!--prod_detalhes-->
    
        	
        
        </section><!--produtos-->
    
    
    
    </section><!--conteudo-->
    
  </div><!--back_conteudo-->
  
    	
    
    
    
  <?php require 'footer.php'; ?>
    
    </section><!--/all-->
    
  
  
    
    


</body>
</html>