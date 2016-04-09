<?php
    include("inc/config.php");
    include("inc/idiomas.php");

    $username = "";
    $senha = "";

    if(isset($_REQUEST["username"])){
        $username = $_REQUEST["username"];
    }

    if(isset($_REQUEST["senha"])){
        $senha = $_REQUEST["senha"];
    }

    $msgErroLogin = "";

    $sql = "SELECT * FROM area_restrita WHERE username = '$username' AND senha = '$senha'";
    $result = consulta_db($sql);
    $numRows = mysql_num_rows($result);
    if($numRows > 0){
        $_SESSION["arearestrita"] = 1;
        header('Location: area-restrita.php');
    } else {
        $msgErroLogin = $erroLogin[$_SESSION["lang"]];
    }

?>
<!DOCTYPE html>
<html lang="en">

<?php include("inc/head.php"); ?>

<body id="">

    <?php include("inc/header.php"); ?>

    <section class="area-restrita">
        <div class="container">
            <form id="login" role="form" class="form-login" accept-charset="UTF-8" action="login-area-restrita.php" method="POST">
                <h3><?php echo $msgformlogin[$_SESSION['lang']]; ?></h3>

                <?php
                    if(isset($_REQUEST["username"]) && isset($_REQUEST["senha"])){
                        if($erroLogin != ""){
                ?>
                            <div class="form-group">
                                <label for="errologin" class="erro-login"><?php echo $msgErroLogin; ?></label>
                            </div>
                <?php
                        }
                    }
                ?>
                
                <div class="form-group">
                    <label for="username"><?php echo $usernamelabel[$_SESSION['lang']]; ?></label>
                    <input type="text" id="username" name="username" required="required" class="nome form-control">
                </div>

                <div class="form-group">
                    <label for="senha"><?php echo $senhalabel[$_SESSION['lang']]; ?></label>
                    <input type="password" id="senha" name="senha" required="required" class="senha form-control">
                </div>
                
                <button id="submit_vendas" class="btn btn-primary pull-right btn-envia" type="submit"><?php echo $enviar[$_SESSION['lang']]; ?></button>
            </form>
        </div>
    </section>

    <?php include("inc/footer.php"); ?>

</body>
</html>   