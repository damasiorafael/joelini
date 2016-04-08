<?php
    include("inc/config.php");
    include("inc/idiomas.php");
?>
<!DOCTYPE html>
<html lang="en">

<?php include("inc/head.php"); ?>

<body id="">

    <?php include("inc/header.php"); ?>

    <section class="area-restrita">
        <div class="container">
            <div class="content-btns-area-restrita">
                <a href="downloads.php" class="btn-downloads">
                    <span>Downloads</span>
                </a>

                <a href="produtos.php?categoria=lancamentos" class="btn-lancamentos">
                    <span>Lançamentos</span>
                </a>
            </div>
        </div>
    </section>

    <?php include("inc/footer.php"); ?>

</body>
</html>   