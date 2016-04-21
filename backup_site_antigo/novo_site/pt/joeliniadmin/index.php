<?php require 'util/authorize.php'; ?>
<?php require 'util/connect.php'; ?>
<?php require 'util/appvars.php'; ?>
<?php require 'funcoes.php'; ?>

<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head><!-- Created by Artisteer v4.1.0.59782 -->
    <meta charset="utf-8">
    <title>Área Administrativa - Joelini</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style.responsive.css" media="all">
    <link rel="stylesheet" href="style_din.css" media="all">

<script type="text/javascript" src="tinymce/js/tinymce/tinymce.min.js"></script>


<script type="text/javascript" src="../lightbox/lightbox-with-gallery.js"></script>
<link rel="stylesheet" type="text/css" href="../lightbox/lightbox.css">


<script type="text/javascript" src="multi/jquery.js"></script>
<script type="text/javascript" src="multi/jquery.MultiFile.js"></script>


<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <script src="jquery.js"></script>
    <script src="script.js"></script>
    <script src="script.responsive.js"></script>


<style>.art-content .art-postcontent-0 .layout-item-old-0 { padding-right: 10px;padding-left: 10px;  }
.art-content .art-postcontent-0 .layout-item-old-1 { margin-top: 10px;  }
.art-content .art-postcontent-0 .layout-item-old-2 { border-top-style:solid;border-right-style:solid;border-bottom-style:solid;border-left-style:solid;border-width:0px;border-top-color:#A6A6A6;border-right-color:#A6A6A6;border-bottom-color:#A6A6A6;border-left-color:#A6A6A6; padding-right: 10px;padding-left: 10px;  }
.ie7 .art-post .art-layout-cell {border:none !important; padding:0 !important; }
.ie6 .art-post .art-layout-cell {border:none !important; padding:0 !important; }

</style>


<script type="text/javascript">
hs.graphicsDir = '../lightbox/graphics/';
hs.align = 'center';
hs.transitions = ['expand', 'crossfade'];
hs.outlineType = 'rounded-white';
hs.fadeInOut = true;
//hs.dimmingOpacity = 0.75;

// Add the controlbar
hs.addSlideshow({
	//slideshowGroup: 'group1',
	interval: 5000,
	repeat: false,
	useControls: true,
	fixedControls: 'fit',
	overlayOptions: {
		opacity: 0.75,
		position: 'bottom center',
		hideOnMouseOut: true
	}
});
</script>


<script type="text/javascript">
tinymce.init({
        selector: "textarea",
		language_url: 'tinymce/js/tinymce/langs/pt_BR.js',
        plugins: [
                "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
                "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                "table contextmenu directionality emoticons template textcolor paste fullpage textcolor"
        ],

        toolbar1: "newdocument fullpage | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect",
        toolbar2: "cut copy paste | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink anchor image media code | inserttime preview | forecolor backcolor",
        toolbar3: "table | hr removeformat | subscript superscript | charmap emoticons | print fullscreen | ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak restoredraft",

        menubar: false,
        toolbar_items_size: 'small',

        style_formats: [
                {title: 'Bold text', inline: 'b'},
                {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                {title: 'Example 1', inline: 'span', classes: 'example1'},
                {title: 'Example 2', inline: 'span', classes: 'example2'},
                {title: 'Table styles'},
                {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
        ],

        templates: [
                {title: 'Test template 1', content: 'Test 1'},
                {title: 'Test template 2', content: 'Test 2'}
        ]
});</script>


</head>
<body>
<div id="art-main">
<header class="art-header clearfix">


    <div class="art-shapes">
<div class="art-object1872615019" data-left="0%"></div>

            </div>


<nav class="art-nav clearfix">

    <ul class="art-hmenu"><li><a href="index.php" class="active">Home</a></li><li><a href="index.php">Empresa</a></li><li><a href="index.php">Produtos</a></li><li><a href="consultores.php">Consultores</a></li><li><a href="index.php">News</a></li><li><a href="index.php">Fale Conosco</a></li></ul> 
    </nav>

                    
</header>
<div class="art-sheet clearfix">
            <div class="art-layout-wrapper clearfix">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-content clearfix"><article class="art-post art-article">
                                
                                                
                <div class="art-postcontent art-postcontent-0 clearfix"><div class="art-content-layout">
<div class="art-content-layout-row">


<div style="width: 1024px; height: 1400px; background-color: rgba(255, 255, 255, 0.54); margin: 0px auto 0px auto;"><!--start-->



<h1>Conteúdo administrativo</h1>

<div style="width:720px; margin: 0px auto 0px auto;" id="form_add_cat">

<center><a href="index.php?pagina=adicionar_cat" title="" id="menuadmin">Adicionar Produto</a>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="criar_categoria.php" title="" id="menuadmin">Cria Categoria</a>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="news.php" title="" id="menuadmin">Adicionar News</a>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="consultores.php" title="" id="menuadmin">Consultores</a>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="banner.php" title="" id="menuadmin">Banner</a>



</center>






<?php
	
	if(isset($_GET['pagina'])) {
		$pagina = $_GET['pagina'];	
		
		
		if($pagina == 'adicionar_cat') {
			adicionar_categoria();
		}
	
	
	}//if isset


 ?>
</div><!--form_add_ca-->


	<div id="listar_produtos_db">
    	
        <center><h1>Produtos Adicionados</h1></center>
        
        
        
        <?php listar_menu_categoria_backend(); ?>
        
        
        
        
        
        <!--<a href="index.php?titulo=Sistemas para Porta de correr&cat=porta_de_correr" title=""><h2 class="titulo_categoria">Sistemas para Porta de correr</h2></a>
        
        <a href="index.php?titulo=Regulador para Grades de Berços&cat=grades_de_berco" title=""><h2 class="titulo_categoria">Regulador para Grades de Berços</h2></a>
        
        <a href="index.php?titulo=Puxadores&cat=puxadores" title=""><h2 class="titulo_categoria">Puxadores</h2></a>
        
        <a href="index.php?titulo=Pés&cat=pes" title=""><h2 class="titulo_categoria">Pés</h2></a>-->
        
        <hr>
        
        
        <?php
		 listar_categoria_backend();
		 ?>
        
        
       
        <?php 
		if(isset($_GET['pagina'])){ 
		$pagina = $_GET['pagina'];	
		
		
		if($pagina == 'editar_cat') 
			editar_categoria();
			
			if($pagina == 'deletar_cat') {
			deletar_categoria();	
			}
		
		
		listar_galeria_backend();
		
		if($pagina == 'deletar_imagem_galeria')
		deletar_imagem_galeria();
		
			
		}
		
		?>
        
        
    </div><!--listar_produtos1-->




</div><!--end-->






<div class="art-layout-cell layout-item-old-0" style="width: 43%"><h1 style="text-align: justify;"><span style="color: rgb(182, 191, 201); font-family: 'Myriad Pro', Arial, 'Arial Unicode MS', Helvetica, sans-serif; font-size: 26px; line-height: 14px;"><br></span></h1>
</div>

</div>
</div>
<div class="art-content-layout-wrapper layout-item-old-1">
<div class="art-content-layout">
<div class="art-content-layout-row">

<div class="art-layout-cell layout-item-old-2" style="width: 58%">
<p>         </p>
<p>         </p>
<p>         </p>
<h1><span style="color: rgb(105, 105, 105); font-family: Arial, 'Arial Unicode MS', Helvetica, sans-serif; font-size: 13px;">.</span>

 <span style="color: rgb(105, 105, 105); font-family: Arial, 'Arial Unicode MS', Helvetica, sans-serif; font-size: 13px;"></span><br></h1>
</div>
<div class="art-layout-cell layout-item-old-0" style="width: 42%">
<p> </p>
<p> </p>
<p> </p>


<p><br></p>
</div>
</div>
</div>
</div></div>
                                
                

</article></div>
                    </div>
                </div>
            </div><footer class="art-footer clearfix">
<div class="art-content-layout-wrapper layout-item-0">
<div class="art-content-layout layout-item-1">
    <div class="art-content-layout-row">
    <div class="art-layout-cell" style="width: 100%">
        <div class="art-content-layout layout-item-old-0">
        <div class="art-content-layout-row">
        <div class="art-layout-cell" style="width: 100%">
        <div class="art-content-layout">
        <div class="art-content-layout-row">
        <div class="art-layout-cell" style="width: 25%;background-color: rgba(255, 255, 255, 0.5);">
        <p><img width="25" height="25" alt="" src="images/google-2.png"><img width="25" height="25" alt="" src="images/face.png" class=""><img width="25" height="25" alt="" src="images/twitter.png" class=""><br>
         <span style="color: rgb(103, 106, 111); font-size: 18px; font-style: italic; font-family: 'Myriad Pro', Arial, 'Arial Unicode MS', Helvetica, sans-serif;">Copyright&nbsp;© 2013-2017</span></p>
        </div>
        <div class="art-layout-cell" style="width: 75%">
        <h3><br>
        <br></h3>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
    </div>
    </div>
</div>
</div>

</footer>

    </div>
</div>


</body></html>