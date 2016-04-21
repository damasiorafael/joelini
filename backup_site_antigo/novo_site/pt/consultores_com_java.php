<?php $title = 'Consultores - Joelini Ferragens para Móveis'; ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

<link rel="stylesheet" type="text/css" href="css/style.css">
<link href="banner/css/skitter.styles.css" type="text/css" media="all" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="lightbox/lightbox.css">


<title><?php echo $title ?></title>




<script>
  $(function() {
    $( "#tabs" ).tabs();
  });
</script>



<!--[if lt IE 9]>
   <script>
      document.createElement('header');
      document.createElement('nav');
      document.createElement('section');
      document.createElement('article');
      document.createElement('aside');
      document.createElement('footer');
   </script>
<![endif]-->

<!--[if lt IE 9]>
 <style type="text/css">
 
header, nav, section, article, aside, footer {
   display:block;
}
 
 
 </style
<![endif]-->

</head>

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
                
                 
       
       
<div id="tabs">
  
  <map name="map">
  
  <ul>
    <li><a href="#tabs-1" title="Outras Regiões"><area style="outline:none;" shape="poly" coords="188,207,168,234,161,244,143,229,132,212,141,193,130,180,116,180,111,156,85,148,72,142,72,126,63,125,45,137,31,139,26,127,11,128,3,109,11,92,32,83,36,54,33,45,36,31,51,28,79,38,80,13,112,5,131,32,156,23,177,25,189,8,198,31,213,48,245,59,250,68,278,70,311,90,324,97,322,125,294,155,289,173,281,205,266,228,242,236,219,212" href="#"></a></li>
        
    
    <li><a href="#tabs-2" title="São Paulo"><area style="outline:none;" shape="poly" coords="176,230,188,218,194,212,203,215,217,212,221,219,222,226,225,233,237,234,237,244,222,246,212,252" href="#">
    </a></li>
    
    <li><a href="#tabs-3" title="Sul do País"><area style="outline:none;" shape="poly" coords="174,233,187,235,198,236,200,242,204,250,208,253,209,257,208,264,210,272,206,281,200,293,197,293,191,303,185,312,180,316,170,325,161,309,154,303,147,295" href="#"></a></li>
       
       
  </ul>
  
  </map>
  
  
  <div class="tabs_posicionamento">
  
  
  <div id="tabs-1">
  
  	<figure>
    	<img src="estru/consultores/fernando.png" alt="Consultores">
        <figcaption>Fernando Gonçalves</figcaption>
        <figcaption>+55 43 8801-2362</figcaption>
        <figcaption>vendas2@joelini.com.br</figcaption>
    </figure>
  
  </div><!--tabs-1-->
  
  
  
  
  <div id="tabs-2">
  
  
  	<figure>
    	<img src="estru/consultores/gustavo.png" alt="Consultores">
        <figcaption>Gustavo Milani</figcaption>
        <figcaption>+55 43 8822-8643</figcaption>
        <figcaption>vendas1@joelini.com.br</figcaption>
    </figure>
    
  
  </div><!--tabs-2-->
     
     
     
  <div id="tabs-3">
  
  	
    <figure>
    	<img src="estru/consultores/rafael.png" alt="Consultores">
        <figcaption>Rafael Vilas Boas</figcaption>
        <figcaption>+55 43 8817-4127</figcaption>
        <figcaption>vendas5@joelini.com.br</figcaption>
    </figure>
  
  
  </div><!--tabs-3-->
  
  
  
  
  
</div><!--tabs_posicionamento-->
                
                
                
            
          </div><!--tabs-->
            
              
        
        	
        
        
        	
                
                
               
            
            
            
           
            </div><!--mapa-->
         
        
        </section><!--consultores-->
    
    
    
    
    
    
    	
    
    
    </section><!--conteudo-->
    
  </div><!--back_conteudo-->
  
    	
    
    
    
  <?php require 'footer.php'; ?>
    
    </section><!--/all-->
    
  
  
    
    


</body>
</html>