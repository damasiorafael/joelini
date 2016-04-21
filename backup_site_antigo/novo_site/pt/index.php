<?php 

require 'joeliniadmin/util/connect.php';
require 'joeliniadmin/util/appvars.php';
require 'joeliniadmin/funcoes.php';
require 'joeliniadmin/funcao_adicionar_banner.php';

?>

<?php $title = 'Home - Joelini Ferragens para Móveis'; ?>
<?php require 'header.php'; ?>

<body>

	<?php $menuInicio = 'active' ?>
	<?php require 'cabecalho.php'; ?>
    
    
    <section id="all">
    
  <div class="backbanner">  
  
    <div id="banner">
    
    	<div class="box_skitter box_skitter_large">
<ul>

	<?php listar_banner_frontend() ?>


</ul>
				</div><!--box_skitter box_skitter_large-->
                
                
    </div><!--banner-->
    
    
  </div><!--backbanner-->
  
  
  
 <div class="backnews"> 
 
  <article id="news">
  
  	<h6>News</h6>
  
  	
  	<?php listar_news_index(); ?>
  	
  </article>
  
  </div><!--backnews-->
  
  
  
  
  <div class="backconhecaprodutos">
  
  	<a href="produtos.php" title="Conheça nossa linha de produtos">
    <article id="conheca_nossos_produtos">
    
    </article><!--conheca_nossos_produtos-->
    </a>
  
  </div><!--backconhecaprodutos-->
  
  
    
   <?php require 'footer.php'; ?>
    
    </section><!--/all-->
    
  
  
    
    


</body>
</html>