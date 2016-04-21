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
            
            	<img src="estru/brasil.png" alt="Mapa Brasil" usemap="#map">
                
                 
       
       
  
  <map name="map">
  
  <ul>
    <li><area class="teste" shape="poly" coords="188,207,168,234,161,244,143,229,132,212,141,193,130,180,116,180,111,156,85,148,72,142,72,126,63,125,45,137,31,139,26,127,11,128,3,109,11,92,32,83,36,54,33,45,36,31,51,28,79,38,80,13,112,5,131,32,156,23,177,25,189,8,198,31,213,48,245,59,250,68,278,70,311,90,324,97,322,125,294,155,289,173,281,205,266,228,242,236,219,212" href="consultores2.php?consultores=1" title="Outras Regiões"></li>
        
    
    <li><area shape="poly" coords="176,230,188,218,194,212,203,215,217,212,221,219,222,226,225,233,237,234,237,244,222,246,212,252" href="consultores2.php?consultores=2" title="São Paulo">
    </li>
    
    <li><area shape="poly" coords="174,233,187,235,198,236,200,242,204,250,208,253,209,257,208,264,210,272,206,281,200,293,197,293,191,303,185,312,180,316,170,325,161,309,154,303,147,295" href="consultores2.php?consultores=3" title="Sul do País"></li>
       
       
  </ul>
  
  </map>
  
  
  <div class="tabs_posicionamento">
  
  <?php
  if(isset($_GET['consultores'])) {
	
	$consultores = $_GET['consultores'];
	
	switch($consultores){
	
	
		case "1";
		echo '<figure>
    	<img src="estru/consultores/fernando.png" alt="Consultores">
        <figcaption>Fernando Gonçalves</figcaption>
        <figcaption>+55 43 8801-2362</figcaption>
        <figcaption>vendas2@joelini.com.br</figcaption>
             </figure>';
		break;
		
		
		
		case "2";
		echo '<figure>
    	<img src="estru/consultores/gustavo.png" alt="Consultores">
        <figcaption>Gustavo Milani</figcaption>
        <figcaption>+55 43 8822-8643</figcaption>
        <figcaption>vendas1@joelini.com.br</figcaption>
             </figure>';
		break;
		
		
		
		
		case "3";
		echo '<figure>
    	<img src="estru/consultores/rafael.png" alt="Consultores">
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