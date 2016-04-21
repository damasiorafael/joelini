<?php 

require 'joeliniadmin/util/connect.php';
require 'joeliniadmin/util/appvars.php';
require 'joeliniadmin/funcoes.php';

?>

<?php $title = 'News - Joelini Ferragens para Móveis'; ?>
<?php require 'header.php'; ?>

<body>

	<?php $menuNews = 'active' ?>
	<?php require 'cabecalho.php'; ?>
    
    
    <section id="all">
    
 
  <div class="back_conteudo">
  
  	<section id="conteudo">
 
    
    
    
    	<section id="news">
        
        	<h1>News</h1>
            
            
            
            <div class="news_menu">
    
   <ul>
      
      <?php listar_news_frontend(); ?>
      
      
   </ul>
    
    </div><!--news_menu-->



	<div class="listagem_news">
  <div class="limit">
  
  	<?php listar_news_detalhes_frontend(); ?>
    
  </div><!--limit-->
    
    </div><!--listagem_news-->
            
               
        
        </section><!--news-->
    
    
    
    
    
    
    	
    
    
    </section><!--conteudo-->
    
  </div><!--back_conteudo-->
  
    	
    
    
    
  <?php require 'footer.php'; ?>
    
    </section><!--/all-->
    
  
  
    
    


</body>
</html>