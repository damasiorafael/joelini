<?php $title = 'Consultores - Joelini Ferragens para Móveis'; ?>
<?php require 'header.php'; ?>

<body>


	<?php $menuConsultores = 'active' ?>
	<?php require 'cabecalho.php'; ?>
    
    
    <section id="all">
    
 
  <div class="back_conteudo">
  
  	<section id="conteudo">
 
    
    
    
    	<section id="consultores">
        
        	<h1>Consultores de Vendas</h1>
          <h4>Escolha o Estado</h4>
            
            
            <div class="mapa">
            
            	<?php if(isset($_GET['act'])) {
			 
			 $action = $_GET['act'];
		 	
			
			switch($action) {
			
			
				case "1";
					$act1 = 'class="active"';
				break;
				
				
				case "2";
					$act2 = 'class="active"';
				break;
				
				
				case "3";
					$act3 = 'class="active"';
				break;
					
			}
		 
		 }
		 
		 ?>
         
         
                
                 
       <ul id="mapa_brasil">
       	
        <li id="outros_estados"><a href="consultores2.php?act=1&consultores=1" title="Outros Estados"<?php if(!empty($act1)) echo $act1; ?>>Outros Estados</a></li>
        <li id="sao_paulo"><a href="consultores2.php?act=2&consultores=2" title="São Paulo" <?php if(!empty($act2)) echo $act2; ?>>São Paulo</a></li>
        <li id="sul_do_pais"><a href="consultores2.php?act=3&consultores=3" title="Sul do País"<?php if(!empty($act3)) echo $act3; ?>>Sul do País</a></li>
       
       
       </ul><!--mapa_brasil-->
  	     
         
         
         
  
  
  
  
  <div class="tabs_posicionamento">
  
  <?php
  if(isset($_GET['consultores'])) {
	
	$consultores = $_GET['consultores'];
	
	switch($consultores){
	
	
		case "1";
		echo '<figure>
    	<img src="estru/consultores/fernando.png" alt="Consultores">
		<h6>Outros Estados</h6>
        <figcaption>Fernando Gonçalves</figcaption>
        <figcaption>+55 43 8801-2362</figcaption>
        <figcaption>vendas2@joelini.com.br</figcaption>
             </figure>';
		break;
		
		
		
		case "2";
		echo '<figure>
    	<img src="estru/consultores/gustavo.png" alt="Consultores">
		<h6>São Paulo</h6>
        <figcaption>Gustavo Milani</figcaption>
        <figcaption>+55 43 8822-8643</figcaption>
        <figcaption>vendas1@joelini.com.br</figcaption>
             </figure>';
		break;
		
		
		
		
		case "3";
		echo '<figure>
    	<img src="estru/consultores/rafael.png" alt="Consultores">
		<h6>Sul do País</h6>
        <figcaption>Rafael Vilas Boas</figcaption>
        <figcaption>+55 43 8817-4127</figcaption>
        <figcaption>vendas5@joelini.com.br</figcaption>
    		</figure>';
		break;
		
		
	
	
	
	}//switch
  
  }//if isset
  
  
   ?>
 
  	
    
  
  
  
  
  
  
  
</div><!--tabs_posicionamento-->
                
                
                
            
            
              
        
        	
        
        
        	
                
                
               
            
            
            
           
            </div><!--mapa-->
         
        
        </section><!--consultores-->
    
    
    
    
    
    
    	
    
    
    </section><!--conteudo-->
    
  </div><!--back_conteudo-->
  
    	
    
    
    
  <?php require 'footer.php'; ?>
    
    </section><!--/all-->
    
  
  
    
    


</body>
</html>