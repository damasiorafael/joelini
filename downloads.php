<?php
    include("inc/config.php");
    include("inc/idiomas.php");
?>
<!DOCTYPE html>
<html lang="en">

<?php include("inc/head.php"); ?>

<body id="">

    <?php include("inc/header.php"); ?>

    <section class="downloads">
        <div class="container">
            <aside class="nav-cat nav-downloads pull-left">
                <h3 class="title-produtos">Downloads</h3>
                <ul class="categorias downlaods-itens-lista">
                    <?php
                        $sql = "SELECT * FROM downloads";
                        $result = consulta_db($sql);
                        $numRows = mysql_num_rows($result);
                        if($numRows > 0){
                            while($consulta = mysql_fetch_array($result)){
                    ?>
                                <li>
                                    <a href="downloads/<?php echo $consulta["arquivo"]; ?>" target="_blank" tittle="<?php echo $consulta["nome_".$_SESSION['lang']]; ?>">
                                        <span class="nome-download"><?php echo $consulta["nome_".$_SESSION['lang']]; ?></span>
                                        <span class="glyphicons glyphicons-download-alt btn-baixar"></span>
                                    </a>
                                </li>
                    <?php
                            }
                        } else {
                    ?>
                            <li>
                                <a tittle="<?php echo $nenhumregistro[$_SESSION['lang']]; ?>">
                                    <span class="nome-download"><?php echo $nenhumregistro[$_SESSION['lang']]; ?></span>
                                </a>
                            </li>
                    <?php
                        }
                    ?>
                </ul>
            </aside>
        </div>
    </section>

    <?php include("inc/footer.php"); ?>

</body>
</html>   