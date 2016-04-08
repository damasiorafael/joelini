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
                    <li>
                        <a href="produtos.php?categoria=1" tittle="Sitema para Porta de Correr">
                            <span class="nome-download">Download 1</span>
                            <span class="glyphicons glyphicons-download-alt btn-baixar"></span>
                        </a>
                    </li>
                    <li>
                        <a href="produtos.php?categoria=1" tittle="Sitema para Porta de Correr">
                            <span class="nome-download">Download 2</span>
                            <span class="glyphicons glyphicons-download-alt btn-baixar"></span>
                        </a>
                    </li>
                </ul>
            </aside>
        </div>
    </section>

    <?php include("inc/footer.php"); ?>

</body>
</html>   