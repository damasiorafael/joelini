<?php
    include("inc/config.php");
    include("inc/idiomas.php");
?>
<!DOCTYPE html>
<html lang="en">

<?php include("inc/head.php"); ?>

<body id="home">

    <?php include("inc/header.php"); ?>

    <section class="destaque-home">
        <div class="jcarousel-wrapper">
            <div class="jcarousel">
                <ul>
                    <?php
                        $sqlBanners = "SELECT * FROM banners";
                        $resultBanners = consulta_db($sqlBanners);
                        $numBanners = mysql_num_rows($resultBanners);
                        while($consultaBanners = mysql_fetch_array($resultBanners)){
                    ?>
                            <li>
                                <img src="banners/<?php echo $consultaBanners["imagem"]; ?>">
                            </li>
                    <?php
                        }
                    ?>
                </ul>
            </div>

            <?php
                if($numBanners > 1){
            ?>
                    <div class="container-setas">
                        <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
                        <a href="#" class="jcarousel-control-next">&rsaquo;</a>
                    </div>
            <?php
                }
            ?>
        </div>
        <?php
            $sqlCatalogo = "SELECT * FROM catalogo WHERE ativo = 1";
            $resultCatalogo = consulta_db($sqlCatalogo);
            $numCatalogo = mysql_num_rows($resultCatalogo);
            if($numCatalogo > 0){
                while($consultaCatalogo = mysql_fetch_array($resultCatalogo)){
        ?>
                    <div class="container">
                        <div class="btn-catalogo pull-right">
                            <a href="<?php echo $consultaCatalogo["link"]; ?>" target="_blank" title="<?php echo $catalogo[$_SESSION['lang']]; ?>"><?php echo $catalogo[$_SESSION['lang']]; ?></a>
                        </div>
                    </div>
        <?php          
                }
            }
        ?>
    </section>

    <section class="empresa-home" id="empresa">
    	<div class="container">
    		<div class="empresa tx-empresa pull-left">
                <?php
                    $sqlEmpresa = "SELECT * FROM empresa";
                    $resultEmpresa = consulta_db($sqlEmpresa);
                    $consultaEmpresa = mysql_fetch_array($resultEmpresa);
                ?>
    			<h2 class="title-empresa-home"><?php echo $consultaEmpresa["titulo_".$_SESSION["lang"]]; ?></h2>
    			<p>
    				<?php echo $consultaEmpresa["texto_".$_SESSION["lang"]]; ?>
    			</p>
    		</div>

    		<div class="empresa linha-do-tempo-empresa pull-left">
    			<h3 class="title-linha-do-tempo-empresa-home"><?php echo $linhadotempo[$_SESSION['lang']]; ?></h3>
    			<div class="slider4">
                    <?php
                        $sqlLinha = "SELECT * FROM linhadotempo ORDER BY ano ASC";
                        $resultLinha = consulta_db($sqlLinha);
                        while($consultaLinha = mysql_fetch_array($resultLinha)){
                    ?>
                            <div class="slide">
                                <a href="uploads/<?php echo $consultaLinha["imagem_principal"]; ?>" data-lightbox="linhadotempo">
                                    <img src="uploads/<?php echo $consultaLinha["imagem_destaque"]; ?>" width="169">
                                </a>
                                <p>
                                    <span class="ano"><?php echo $consultaLinha["ano"]; ?></span>
                                    <span>
                                        <?php echo $consultaLinha["texto_".$_SESSION["lang"]]; ?>
                                    </span>
                                </p>
                            </div>
                    <?php
                        }
                    ?>
				</div>
    		</div>
    	</div>
    </section>

    <section class="produtos-home" id="produtos">
    	<div class="container">
    		<h4 class="title-produtos-home"><?php echo $produtos[$_SESSION['lang']]; ?></h4>
    		<div class="lista-categorias-home">
    			<ul class="categorias">
                    <?php
                        $sqlCats = "SELECT * FROM categorias ORDER BY id ASC";
                        $resultCats = consulta_db($sqlCats);
                        while($consultaCats = mysql_fetch_array($resultCats)){
                    ?>
            				<li>
            					<a href="produtos.php?categoria=<?php echo $consultaCats["id"]; ?>">
            						<img src="uploads/<?php echo $consultaCats["imagem"]; ?>" />
            						<p>
            							<?php echo $consultaCats["nome_".$_SESSION["lang"]]; ?>
            						</p>
            					</a>
            				</li>
                    <?php } ?>
    			</ul>
    		</div>
    	</div>
    </section>

    <section class="vendas-home" id="vendas">
        <div class="container">
            <div class="mapabrasil"></div>
            <h5 class="title-vendas-home"><?php echo $vendas[$_SESSION['lang']]; ?></h5>
            <div class="form-vendas-home">
                <p><?php echo $sub_vendas[$_SESSION['lang']]; ?></p>
                <form id="vendas" role="form" class="span12 form-contato" action="vendas-envia.php" method="POST" accept-charset="utf-8">
                    <div class="group-left pull-left">
                        <div class="form-group">
                            <label for="nome"><?php echo $nome[$_SESSION['lang']]; ?></label>
                            <input type="text" id="nome" name="nome" required="required" class="nome form-control">
                        </div>

                        <div class="form-group">
                            <label for="email"><?php echo $email[$_SESSION['lang']]; ?></label>
                            <input type="email" id="email" name="email" required="required" class="email form-control">
                        </div>

                        <div class="form-group">
                            <label for="telefone"><?php echo $telefone[$_SESSION['lang']]; ?></label>
                            <input type="text" id="telefone" name="telefone" required="required" class="telefone form-control">
                        </div>

                        <div class="form-group">
                            <label for="cidade"><?php echo $cidade[$_SESSION['lang']]; ?></label>
                            <input type="text" id="cidade" name="cidade" class="cidade form-control">
                        </div>

                        <div class="form-group">
                            <label for="estado"><?php echo $estado[$_SESSION['lang']]; ?></label>
                            <input type="text" id="estado" name="estado" class="estado form-control">
                        </div>

                        <div class="form-group">
                            <label for="cep"><?php echo $cep[$_SESSION['lang']]; ?></label>
                            <input type="text" id="cep" name="cep" class="cep form-control">
                        </div>
                    </div>

                    <div class="group-right pull-right">
                        <div class="form-group">
                            <label for="mensagem"><?php echo $mensagem[$_SESSION['lang']]; ?></label>
                            <textarea id="mensagem" rows="10" cols="50" name="mensagem" class="mensagem form-control"></textarea>
                        </div>

                        <button id="submit_vendas" class="btn btn-primary pull-right btn-envia-form" type="submit"><?php echo $enviar[$_SESSION['lang']]; ?></button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="contato-home" id="contato">
        <div class="container">
            <h6 class="title-contato-home"><?php echo $contato[$_SESSION['lang']]; ?></h6>
            <div class="infos-contato pull-left">
                <div class="infos address">
                    <?php echo $address_joelini[$_SESSION['lang']]; ?>
                    <span><?php echo $telefone[$_SESSION['lang']]; ?>: (43) 3172-4359</span>
                    <span>E-mail: joelini@joelini.com.br</span>
                </div>
                <?php
                    $sqlSocial = "SELECT * FROM facebook WHERE ativo = 1";
                    $resultSocial = consulta_db($sqlSocial);
                    $numSocial = mysql_num_rows($resultSocial);
                    if($numSocial > 0){
                        while($consultaSocial = mysql_fetch_array($resultSocial)){
                ?>
                            <div class="social-info">
                                <div class="fb-like-box" data-href="<?php echo $consultaSocial["link"]; ?>" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false" data-width="280" data-height="225" data-css="/css/style.css"></div>
                            </div>
                <?php
                        }
                    }
                ?>
            </div>
            <div class="form-vendas-home form-contato-home pull-right">
                <form id="contato" role="form" class="contato span12 form-contato" accept-charset="UTF-8" action="contato-envia.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nome"><?php echo $nome[$_SESSION['lang']]; ?></label>
                        <input type="text" id="nome" name="nome" required="required" class="nome form-control">
                    </div>

                    <div class="form-group">
                        <label for="email"><?php echo $email[$_SESSION['lang']]; ?></label>
                        <input type="email" id="email" name="email" required="required" class="email form-control">
                    </div>

                    <div class="form-group">
                        <label for="cidade"><?php echo $cidade[$_SESSION['lang']]; ?></label>
                        <input type="text" id="cidade" name="cidade" class="cidade form-control">
                    </div>

                    <div class="form-group">
                        <label for="estado"><?php echo $estado[$_SESSION['lang']]; ?></label>
                        <input type="text" id="estado" name="estado" class="estado form-control">
                    </div>

                    <div class="form-group">
                        <label for="telefone"><?php echo $telefone[$_SESSION['lang']]; ?></label>
                        <input type="text" id="telefone" name="telefone" required="required" class="telefone form-control">
                    </div>

                    <div class="form-group">
                        <label for="departamento"><?php echo $departamento[$_SESSION['lang']]; ?></label>
                        <select name="departamento" id="departamento" required="required" class="departamento form-control"><option value="" selected="selected">Selecione...</option><option value="Dúvidas">Dúvidas</option><option value="Sugestões">Sugestões</option></select>
                    </div>

                    <div class="form-group">
                        <label for="mensagem"><?php echo $mensagem[$_SESSION['lang']]; ?></label>
                        <textarea id="mensagem" rows="10" cols="50" name="mensagem" class="mensagem form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="arquivo"><?php echo $arquivo[$_SESSION['lang']]; ?></label>
                        <input type="file" id="arquivo" name="arquivo" class="arquivo form-control">
                    </div>

                    <button id="submit_vendas" class="btn btn-primary pull-right btn-envia-form" type="submit"><?php echo $enviar[$_SESSION['lang']]; ?></button>
                </form>
            </div>
        </div>
    </section>

    <section class="mapa-home" id="mapa">
        <!-- Google Map -->
        <div id="map_canvas"></div>
    </section>

    <?php include("inc/footer.php"); ?>

</body>
</html>   