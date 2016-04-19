<?php
    $inglesAtivo = 0;
    $espanholAtivo = 0;

    $sqlIngles = "SELECT * FROM idiomas WHERE nome = 'Inglês' AND ativo = 1";
    $resultIngles = consulta_db($sqlIngles);
    $numIngles = mysql_num_rows($resultIngles);
    if($numIngles > 0){
        $inglesAtivo = 1;
    }

    $sqlEspanhol = "SELECT * FROM idiomas WHERE nome = 'Espanhol' AND ativo = 1";
    $resultEspanhol = consulta_db($sqlEspanhol);
    $numEpanhol = mysql_num_rows($resultEspanhol);
    if($numEpanhol > 0){
        $espanholAtivo = 1;
    }
?>
<section class="header" id="topo">
            <div class="container">
                <nav id="menu-nav" class="nav nav-header nav-menu">
                    <div class="logo-topo pull-left">
                        <div class="logo-container ">
                            <a href="index.php" title="Home">
                                <img src="images/logo.png" alt="Home" />
                            </a>
                        </div>
                    </div>
                    <div class="nav-topo pull-right">
                        <ul class="secondary-menu pull-right">
                            <li>
                                <a href="https://mail.joelini.com.br:60443" target="_blank" title="Webmail" class="link link-webmail">
                                    <span>Webmail</span>
                                </a>
                            </li>
                            <?php
                                if($_SESSION["lang"] == "por"){
                            ?>
                                    <?php
                                        if($inglesAtivo == 1){
                                    ?>
                                            <li>
                                                <a href="index.php?lang=eng" title="Inglês" class="link link-ingles">
                                                    <span>Inglês</span>
                                                </a>
                                            </li>
                                    <?php        
                                        }
                                    ?>

                                    <?php
                                        if($espanholAtivo == 1){
                                    ?>
                                            <li>
                                                <a href="index.php?lang=esp" title="Espanhol" class="link link-espanhol">
                                                    <span>Espanhol</span>
                                                </a>
                                            </li>
                                    <?php        
                                        }
                                    ?>
                            <?php
                                } else if($_SESSION["lang"] == "eng"){
                            ?>
                                    <?php
                                        if($espanholAtivo == 1){
                                    ?>
                                            <li>
                                                <a href="index.php?lang=esp" title="Espanhol" class="link link-espanhol">
                                                    <span>Espanhol</span>
                                                </a>
                                            </li>
                                    <?php        
                                        }
                                    ?>
                                    <li>
                                        <a href="index.php?lang=por" title="Português" class="link link-portugues">
                                            <span>Português</span>
                                        </a>
                                    </li>
                            <?php
                                } else if($_SESSION["lang"] == "esp"){
                            ?>
                                    <?php
                                        if($inglesAtivo == 1){
                                    ?>
                                            <li>
                                                <a href="index.php?lang=eng" title="Inglês" class="link link-ingles">
                                                    <span>Inglês</span>
                                                </a>
                                            </li>
                                    <?php        
                                        }
                                    ?>
                                    <li>
                                        <a href="index.php?lang=por" title="Português" class="link link-portugues">
                                            <span>Português</span>
                                        </a>
                                    </li>
                            <?php
                                }
                            ?>
                        </ul>
                        <div class="primary-menu-show"></div>
                        <ul class="primary-menu">
                            <li>
                                <a href="#empresa" title="<?php echo $empresa[$_SESSION['lang']]; ?>" class="bt-scroll"><?php echo $empresa[$_SESSION['lang']]; ?></a>
                            </li>
                            <li>
                                <a href="#produtos" title="<?php echo $produtos[$_SESSION['lang']]; ?>" class="bt-scroll"><?php echo $produtos[$_SESSION['lang']]; ?></a>
                            </li>
                            <li>
                                <a href="#vendas" title="<?php echo $vendas[$_SESSION['lang']]; ?>" class="bt-scroll"><?php echo $vendas[$_SESSION['lang']]; ?></a>
                            </li>
                            <li>
                                <a href="#contato" title="<?php echo $contato[$_SESSION['lang']]; ?>" class="bt-scroll"><?php echo $contato[$_SESSION['lang']]; ?></a>
                            </li>
                            <li>
                                <a href="area-restrita.php" title="<?php echo $arearestrita[$_SESSION['lang']]; ?>"><?php echo $arearestrita[$_SESSION['lang']]; ?></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </section>

        <section class="header-hide position-fixed">
            <div class="container">
                <nav id="menu-nav" class="nav nav-header nav-menu">
                    <div class="logo-topo pull-left">
                        <div class="logo-container ">
                            <a href="index.php" title="Home">
                                <img src="images/logo.png" alt="Home" />
                            </a>
                        </div>
                    </div>
                    <div class="nav-topo pull-right">
                        <div class="primary-menu-show"></div>
                        <ul class="primary-menu">
                            <li>
                                <a href="#empresa" title="<?php echo $empresa[$_SESSION['lang']]; ?>" class="bt-scroll"><?php echo $empresa[$_SESSION['lang']]; ?></a>
                            </li>
                            <li>
                                <a href="#produtos" title="<?php echo $produtos[$_SESSION['lang']]; ?>" class="bt-scroll"><?php echo $produtos[$_SESSION['lang']]; ?></a>
                            </li>
                            <li>
                                <a href="#vendas" title="<?php echo $vendas[$_SESSION['lang']]; ?>" class="bt-scroll"><?php echo $vendas[$_SESSION['lang']]; ?></a>
                            </li>
                            <li>
                                <a href="#contato" title="<?php echo $contato[$_SESSION['lang']]; ?>" class="bt-scroll"><?php echo $contato[$_SESSION['lang']]; ?></a>
                            </li>
                            <li>
                                <a href="area-restrita.php" title="<?php echo $arearestrita[$_SESSION['lang']]; ?>"><?php echo $arearestrita[$_SESSION['lang']]; ?></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </section>