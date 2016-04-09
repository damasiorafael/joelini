<?php
    include("inc/config.php");
    include("inc/idiomas.php");
    $id = $_REQUEST["id"];
?>
<!DOCTYPE html>
<html lang="en">

<?php include("inc/head.php"); ?>

<body id="">

    <?php include("inc/header.php"); ?>

    <section class="produtos pag-produto-detalhes">
        <div class="container">
            <div class="content-fotos">
                <div class="topo-pag-produto">
                    <a href="" class="link-voltar"> &lt;&lt;<?php echo $voltar[$_SESSION["lang"]]; ?></a>

                    <?php
                        $sql = "SELECT
                                    produtos.id,
                                    produtos.nome_".$_SESSION["lang"].",
                                    produtos.descricao_".$_SESSION["lang"].",
                                    produtos.video,
                                    produtos.imagens,
                                    subcategorias.nome_".$_SESSION["lang"]." AS subcategoria
                                FROM
                                    produtos
                                LEFT JOIN 
                                    subcategorias
                                ON
                                    subcategorias.id = produtos.id_subcategoria
                                WHERE 
                                    produtos.id = $id
                                AND 
                                    produtos.arearestrita = 0
                                AND
                                    produtos.ocultar = 0";
                        $result = consulta_db($sql);
                        $consulta = mysql_fetch_array($result);
                    ?>
                    <h3><?php echo $consulta["subcategoria"]; ?> | <strong><?php echo $consulta["nome_".$_SESSION["lang"]]; ?></strong></h3>
                </div>

                <script type="text/javascript">
                    var imagens = <?php echo $consulta["imagens"]; ?>;
                    var imagemDestaque = imagens[0]['name'].replace("..\/", "");
                    var divImgDestaque = "<div class='img-principal'>";
                    divImgDestaque += "<a href='"+imagemDestaque+"' class='myLightBox'>";
                    divImgDestaque += "<img src='"+imagemDestaque+"' width='534'>";
                    divImgDestaque += "</a></div>";
                    document.write(divImgDestaque);

                    var divImagensSlide = "<div class='galeria0img-produtos'>";
                    divImagensSlide += "<div class='sliderProdutos'>";
                    var imagemThumb = "";
                    for(var i = 1; i < imagens.length; i++){
                        imagemThumb = imagens[i]['name'];
                        imagemThumb = imagemThumb.replace("..\/", "");
                        divImagensSlide += "<div class='slide'>";
                        divImagensSlide += "<a href='"+imagemThumb+"' class='myLightBox'>";
                        divImagensSlide += "<img src='"+imagemThumb+"' width='145'></a></div>";
                    };
                    divImagensSlide += "</div></div>";

                    document.write(divImagensSlide);
                </script>
            </div>

            <div class="content-caracteristicas">
                <div class="dados-produto">
                    <?php echo $consulta["descricao_".$_SESSION["lang"]]; ?>
                </div>
                <div class="video-produto">
                    <div class="embed-container">
                        <script type="text/javascript">
                            var video = "<?php echo $consulta["video"]; ?>";
                            video = video.split("?v=")[1];

                            var frame = "<iframe src='http://www.youtube.com/embed/"+video+"' frameborder='0' allowfullscreen></iframe>";

                            document.write(frame);
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include("inc/footer.php"); ?>

</body>
</html>   