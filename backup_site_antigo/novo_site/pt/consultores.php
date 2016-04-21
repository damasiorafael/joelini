<?php 

require 'joeliniadmin/util/connect.php';
require 'joeliniadmin/util/appvars.php';
require 'joeliniadmin/funcao_adicionar_consultores.php';

?>

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
            
            
            <div id="descricao_consultor">
            
            	<?php listar_consultores_frontend(); ?>
            
            </div><!--descricao_consultor-->
            
            
            
            <div id="mapa">
            
            <a href="?consu=amazonas" title="Amazonas" id="amazonas" class="tooltip">
            	<span>Amazonas</span>
            </a>
            
            
            <a href="?consu=acre" title="Acre" id="acre" class="tooltip">
            <span>Acre</span>
            </a>
            
            
            <a href="?consu=rondonia" title="Rondônia" id="rondonia" class="tooltip">
            <span>Rondônia</span>
            </a>
            
            
            <a href="?consu=mato_grosso" title="Mato Grosso" id="mato_grosso" class="tooltip">
            <span>Mato Grosso</span>
            </a>
            
            
            <a href="?consu=para" title="Pará" id="para" class="tooltip">
             <span>Pará</span>
            </a>
            
            
            
            <a href="?consu=roraima" title="Roraima" id="roraima" class="tooltip">
            <span>Roraima</span>
            </a>
            
            
            
            <a href="?consu=amapa" title="Amapá" id="amapa" class="tooltip">
            <span>Amapá</span>
            </a>
        
        
       		<a href="?consu=mato_grosso_do_sul" title="Mato Grosso do Sul" id="mato_grosso_do_sul" class="tooltip">
            <span>Mato Grosso do Sul</span>
            </a>
            
            
            <a href="?consu=parana" title="Paraná" id="parana" class="tooltip">
            <span>Paraná</span>
            </a>
            
            
            <a href="?consu=maranhao" title="Maranhão" id="maranhao" class="tooltip">
            <span>Maranhão</span>
            </a>
            
            
            <a href="?consu=tocantins" title="Tocantins" id="tocantins" class="tooltip">
            <span>Tocantins</span>
            </a>
            
            
            <a href="?consu=sao_paulo" title="São Paulo" id="sao_paulo" class="tooltip">
            <span>São Paulo</span>
            </a>
            
            
            <a href="?consu=distrito_federal" title="Distrito Federal" id="distrito_federal" class="tooltip">
            <span>Distrito Federal</span>
            </a>
            
            
            <a href="?consu=goias" title="Goiás" id="goias" class="tooltip">
            <span>Goiás</span>
            </a>
            
                        
            
            <a href="?consu=minas_gerais" title="Minas Gerais" id="minas_gerais" class="tooltip">
            <span>Minas Gerais</span>
            </a>
            
            
            <a href="?consu=santa_catarina" title="Santa Catarina" id="santa_catarina" class="tooltip">
            <span>Santa Catarina</span>
            </a>
            
            
            <a href="?consu=rio_grande_do_sul" title="Rio Grande do Sul" id="rio_grande_do_sul" class="tooltip">
            <span>Rio Grande do Sul</span>
            </a>
            
            
            
            <a href="?consu=bahia" title="Bahia" id="bahia" class="tooltip">
            <span>Bahia</span>
            </a>
            
            
            <a href="?consu=piaui" title="Piauí" id="piaui" class="tooltip">
            <span>Piauí</span>
            </a>
            
            
            <a href="?consu=ceara" title="Ceará" id="ceara" class="tooltip">
            <span>Ceará</span>
            </a>
            
            
            <a href="?consu=rio_grande_do_norte" title="Rio Grande do Norte" id="rio_grande_do_norte" class="tooltip">
            <span>Rio Grande do Norte</span>
            </a>
            
            
            <a href="?consu=paraiba" title="Paraíba" id="paraiba" class="tooltip" class="tooltip">
            <span>Paraíba</span>
            </a>
            
            
            <a href="?consu=Pernambuco" title="Pernambuco" id="pernambuco" class="tooltip">
            <span>Pernambuco</span>
            </a>
            
            
            <a href="?consu=alagoas" title="Alagoas" id="alagoas" class="tooltip">
            <span>Alagoas</span>
            </a>
            
            
            <a href="?consu=sergipe" title="Sergipe" id="sergipe" class="tooltip">
            <span>Sergipe</span>
            </a>
            
            
            <a href="?consu=espirito_santo" title="Espirito Santo" id="espirito_santo" class="tooltip">
            <span>Espirito Santo</span>
            </a>
            
            
            <a href="?consu=rio_de_janeiro" title="Rio de Janeiro" id="rio_de_janeiro" class="tooltip">
            <span>Rio de Janeiro</span>
            </a>
       
            
   
  
			</div><!--mapa-->

        
        </section><!--consultores-->

    </section><!--conteudo-->
    
  </div><!--back_conteudo-->
  
    	
    
    
    
  <?php require 'footer.php'; ?>
    
    </section><!--/all-->
    
  
  
    
    


</body>
</html>