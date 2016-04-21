<?php require 'util/authorize.php'; ?>
<?php require 'util/connect.php'; ?>
<?php require 'util/appvars.php'; ?>
<?php require 'funcao_adicionar_consultores.php'; ?>

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
tinymce.init({
        selector: "textarea",
		language_url: 'tinymce/js/tinymce/langs/pt_BR.js',
        plugins: [
                "advlist autolink autosave link image lists charmap preview hr anchor pagebreak spellchecker",
                "wordcount visualchars code fullscreen insertdatetime media nonbreaking",
                "table contextmenu directionality emoticons template textcolor paste fullpage textcolor"
        ],

        toolbar1: "newdocument | bold italic underline | alignleft aligncenter alignright alignjustify bullist numlist table hr removeformat | print fullscreen ltr rtl styleselect formatselect  fontselect | fontsizeselect forecolor backcolor",
        toolbar2: " link unlink image media code restoredraft inserttime preview ",
        toolbar3: "",

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
<body style=" background-color:#ECF1F5;">


<div id="consultores">

	<center><h4 id="add_btn"><a href="index.php" title="">Voltar</a></h5></center>

<center><h4 id="add_btn"><a href="?pag=add_novo_consultor" title="">Adicionar novo Consultor</a></h5></center>
<center><h4 id="add_btn"><a href="?pag=add_consul" title="">Listar Consultores</a></h5></center>

	


	<?php
		if(isset($_GET['pag'])) {
		
			$add_consul = $_GET['pag'];
		
		
		
		switch($add_consul) {
		
			case 'add_novo_consultor';
				adicionar_consultores();
			break;
			
			case 'add_consul';
				deletar_consultor();
				listar_consultores_backend();
			break;
			
			
			case 'editar_consul';
				editar_consultor();
			break;
			
		
		
		
		}//switch
		
		
		
		}//if isset
	
	
	
	
	 ?>




</div><!--consultores-->


</body>





