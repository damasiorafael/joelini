<?php
    include("inc/config.php");
    include("inc/idiomas.php");

    if($_REQUEST["categoria"] == "lancamentos"){
        if(!isset($_SESSION["arearestrita"])){
            header('Location: login-area-restrita.php');
        } else {
            if($_SESSION["arearestrita"] != 1){
                header('Location: login-area-restrita.php');
            }
        }
    }

    $categoria = $_REQUEST["categoria"];
    $subcategoria = $_REQUEST["subcategoria"];
?>
<!DOCTYPE html>
<html lang="en">

<?php include("inc/head.php"); ?>

<body id="">

    <?php include("inc/header.php"); ?>

    <section class="produtos">
        <div class="container">
            <aside class="nav-cat pull-left">
                <?php
                    if($categoria == "lancamentos"){
                ?>
                        <h3 class="title-produtos"><?php echo $todosprodutos[$_SESSION["lang"]]; ?></h3>
                <?php
                    } else {
                ?>
                    <h3 class="title-produtos"><?php echo $produtos[$_SESSION['lang']]; ?></h3>
                <?php } ?>
                <ul class="categorias">
                    <?php
                        $sqlCats = "SELECT * FROM categorias WHERE ocultar = 0 ORDER BY ordem, id ASC";
                        $resultCats = consulta_db($sqlCats);
                        $numCats = mysql_num_rows($resultCats);
                        if($numCats > 0){
                            while($consultaCats = mysql_fetch_array($resultCats)){
                    ?>
                                <li rel="<?php echo $consultaCats["id"]; ?>" <?php if($consultaCats["id"] == $categoria){ echo "class='active'"; } ?>>
                                    <a href="produtos.php?categoria=<?php echo $consultaCats["id"]; ?>" tittle="<?php echo $consultaCats["nome_".$_SESSION["lang"]]; ?>"><?php echo $consultaCats["nome_".$_SESSION["lang"]]; ?></a>
                                    <ul class="subcategorias">
                                        <?php
                                            $sqlSub = "SELECT * FROM subcategorias WHERE id_categoria = ".$consultaCats["id"]." ORDER BY ordem, id ASC";
                                            $resultSubs = consulta_db($sqlSub);
                                            $numSubs = mysql_num_rows($resultSubs);
                                            if($numSubs > 0){
                                                while($consultaSubs = mysql_fetch_array($resultSubs)){
                                        ?>
                                                    <li rel="<?php echo $consultaSubs["id"]; ?>">
                                                        <a <?php if($consultaSubs["id"] == $subcategoria){ echo "class='active'"; } ?> href="produtos.php?categoria=<?php echo $consultaCats["id"]; ?>&subcategoria=<?php echo $consultaSubs["id"]; ?>" title="<?php echo $consultaSubs["nome_".$_SESSION["lang"]]; ?>"><?php echo $consultaSubs["nome_".$_SESSION["lang"]]; ?></a>
                                                    </li>
                                        <?php
                                                }
                                            } else {
                                        ?>
                                                <li>
                                                    <a title="<?php echo $nenhumasub[$_SESSION['lang']]; ?>"><?php echo $nenhumasub[$_SESSION['lang']]; ?></a>
                                                </li>
                                        <?php
                                            }
                                        ?>
                                    </ul>
                                </li>
                    <?php
                            }
                        } else {
                    ?>
                                <li>
                                    <a tittle="<?php echo $nenhumregistro[$_SESSION['lang']]; ?>"><?php echo $nenhumregistro[$_SESSION['lang']]; ?></a>
                                </li>
                    <?php
                        }
                    ?>
                </ul>
            </aside>

            <div class="produtos-lista pull-right">
                <?php
                    $sqlTitCats = "SELECT * FROM categorias WHERE id = $categoria";
                    $resultTitCats = consulta_db($sqlTitCats);
                    $consultaTitCats = mysql_fetch_array($resultTitCats);

                    if($subcategoria != ""){
                        $sqlTitSubs = "SELECT * FROM subcategorias WHERE id = $subcategoria";
                        $resultTitSubs = consulta_db($sqlTitSubs);
                        $consultaTitSubs = mysql_fetch_array($resultTitSubs);
                    }
                    if($categoria == "lancamentos"){
                ?>
                        <h3 class="title-produtos"><?php echo $lancamentos[$_SESSION["lang"]]; ?></h3>
                <?php
                    } else {
                ?>
                        <h3 class="title-produtos"><?php echo $consultaTitCats["nome_".$_SESSION["lang"]]; if($subcategoria != ""){ echo " | "; } ?>  <strong> <?php echo $consultaTitSubs["nome_".$_SESSION["lang"]]; ?></strong></h3>
                <?php } ?>
                <ul class="itens-produtos">
                    <?php
                        $sqlProdutos = "";
                        if($categoria == "lancamentos"){
                            $sqlProdutos = "SELECT * FROM produtos WHERE arearestrita = 1 ORDER BY ordem ASC";
                        } else if($subcategoria == ""){
                            $sqlProdutos = "SELECT produtos.id, produtos.nome_por, produtos.nome_eng, produtos.nome_esp, produtos.imagens, produtos.ordem FROM produtos LEFT JOIN subcategorias ON subcategorias.id = produtos.id_subcategoria WHERE subcategorias.id_categoria = $categoria AND produtos.ocultar = 0 AND arearestrita = 0 ORDER BY produtos.ordem ASC, produtos.nome_por ASC";
                        } else {
                            $sqlProdutos = "SELECT * FROM produtos WHERE id_subcategoria = $subcategoria AND ocultar = 0 AND arearestrita = 0 ORDER BY ordem ASC, produtos.nome_por ASC";
                        }

                        $resultProdutos = consulta_db($sqlProdutos);
                        $numProdutos = mysql_num_rows($resultProdutos);
                        if($numProdutos > 0){
                            while($consultaProdutos = mysql_fetch_array($resultProdutos)){
                    ?>
                                <li>
                                    <a href="produto.php?id=<?php echo $consultaProdutos["id"]; ?>" tittle="<?php echo $consultaProdutos["nome_".$_SESSION["lang"]]; ?>">
                                        <script type="text/javascript">
                                            var imagens = <?php echo $consultaProdutos["imagens"]; ?>;
                                            var imagemThumb = imagens[0]['name'].replace("..\/", "");
                                            imagemThumb = "<img src='"+imagemThumb+"' />";
                                            document.write(imagemThumb);
                                        </script>
                                        <span><?php echo $consultaProdutos["nome_".$_SESSION["lang"]]; ?></span>
                                    </a>
                                </li>
                    <?php
                            }
                        } else {
                    ?>
                            <li>
                                <a tittle="<?php echo $nenhumregistro[$_SESSION["lang"]]; ?>">
                                    <img src="images/none.jpg" alt="<?php echo $nenhumregistro[$_SESSION["lang"]]; ?>" />
                                    <span><?php echo $nenhumregistro[$_SESSION["lang"]]; ?></span>
                                </a>
                            </li>
                    <?php
                        }
                    ?>
                </ul>
            </div>
        </div>
    </section>

    <?php include("inc/footer.php"); ?>

</body>
</html>   