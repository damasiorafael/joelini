<!DOCTYPE html>
<html lang="en">

<?php include("inc/head.php"); ?>

<body id="home">

    <?php include("inc/header.php"); ?>

    <section class="destaque-home">
    	<div class="container">
    		<div class="btn-catalogo pull-right">
    			<a href="#" title="Catálogo"></a>
    		</div>
    	</div>
    </section>

    <section class="empresa-home" id="empresa">
    	<div class="container">
    		<div class="empresa tx-empresa pull-left">
    			<h2 class="title-empresa-home">A Empresa</h2>
    			<p>
    				A Joelini desenvolve e produz componentes para a indústria moveleira, com o objetivo de torná-la mais eficiente e eficaz.
    				<br />
    				<br />
					Com 23 anos de experiência e parcerias sólidas com os mais importantes fabricantes de móveis do país, nos destacam como uma das melhores opções em componentes plásticos e metálicos.
					<br />
					<br />
					Atuamos nos principais pólos moveleiros do país, com uma equipe comercial de consultores técnicos e especializados, treinados e capacitados para proporcionar o melhor atendimento.
    			</p>
    		</div>

    		<div class="empresa linha-do-tempo-empresa pull-left">
    			<h3 class="title-linha-do-tempo-empresa-home">Linha do Tempo</h3>
    			<div class="slider4">
					<div class="slide">
						<a href="images/linhadotempo/imagens/1977.jpg" class="myLightBox">
							<img src="images/linhadotempo/1977.png" width="169">
						</a>
						<p>
							<span class="ano">1977</span>
							<span>
								(Santiago - Chile) Rene Quezada e família se mudam para o Brasil.
							</span>
						</p>
					</div>

					<div class="slide">
						<a href="images/linhadotempo/imagens/1987.jpg" class="myLightBox">
							<img src="images/linhadotempo/1987.png" width="169">
						</a>
						<p>
							<span class="ano">1987</span>
							<span>
								(Santiago - Chile) Rene Quezada e família se mudam para o Brasil.
							</span>
						</p>
					</div>

					<div class="slide">
						<a href="images/linhadotempo/imagens/1992.jpg" class="myLightBox">
							<img src="images/linhadotempo/1992.png" width="169">
						</a>
						<p>
							<span class="ano">1992</span>
							<span>
								(Santiago - Chile) Rene Quezada e família se mudam para o Brasil.
							</span>
						</p>
					</div>

					<div class="slide">
						<a href="images/linhadotempo/imagens/1995.jpg" class="myLightBox">
							<img src="images/linhadotempo/1995.png" width="169">
						</a>
						<p>
							<span class="ano">1995</span>
							<span>
								(Santiago - Chile) Rene Quezada e família se mudam para o Brasil.
							</span>
						</p>
					</div>
				</div>
    		</div>
    	</div>
    </section>

    <section class="produtos-home" id="produtos">
    	<div class="container">
    		<h4 class="title-produtos-home">Produtos</h4>
    		<div class="lista-categorias-home">
    			<ul class="categorias">
    				<li>
    					<a href="produtos.php?categoria=1">
    						<img src="images/img-categoria.png" />
    						<p>
    							Sistemas para Porta de Correr
    						</p>
    					</a>
    				</li>
    				<li>
    					<a href="produtos.php?categoria=1">
    						<img src="images/img-categoria.png" />
    						<p>
    							Sistemas para Porta de Correr
    						</p>
    					</a>
    				</li>
    				<li>
    					<a href="produtos.php?categoria=1">
    						<img src="images/img-categoria.png" />
    						<p>
    							Sistemas para Porta de Correr
    						</p>
    					</a>
    				</li>
    			</ul>
    		</div>
    	</div>
    </section>

    <section class="vendas-home" id="vendas">
        <div class="container">
            <div class="mapabrasil"></div>
            <h5 class="title-vendas-home">Vendas</h5>
            <div class="form-vendas-home">
                <p>Nos envie uma mensagem, e indicaremos nosso representante mais próximo de você!</p>
                <form id="vendas" role="form" class="span12" accept-charset="UTF-8" action="#" method="POST">
                    <div class="group-left pull-left">
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" id="nome" name="nome" required="required" class="nome form-control">
                        </div>

                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" id="email" name="email" required="required" class="email form-control">
                        </div>

                        <div class="form-group">
                            <label for="telefone">Telefone</label>
                            <input type="text" id="telefone" name="telefone" required="required" class="telefone form-control">
                        </div>

                        <div class="form-group">
                            <label for="cidade">Cidade</label>
                            <input type="text" id="cidade" name="cidade" class="cidade form-control">
                        </div>

                        <div class="form-group">
                            <label for="estado">Estado</label>
                            <input type="text" id="estado" name="estado" class="estado form-control">
                        </div>

                        <div class="form-group">
                            <label for="cep">Cep</label>
                            <input type="text" id="cep" name="cep" class="cep form-control">
                        </div>
                    </div>

                    <div class="group-right pull-right">
                        <div class="form-group">
                            <label for="mensagem">Mensagem</label>
                            <textarea id="mensagem" rows="10" cols="50" name="mensagem" class="mensagem form-control"></textarea>
                        </div>

                        <button id="submit_vendas" class="btn btn-primary pull-right btn-envia" type="submit">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="contato-home" id="contato">
        <div class="container">
            <h6 class="title-contato-home">Contato</h6>
            <div class="infos-contato pull-left">
                <div class="infos address">
                    <p>Joelini - Componentes para Móveis</p>
                    <span>Rua Arapaçu-Listrado, 260 - Parque Industrial</span>
                    <span>CEP: 86703-295</span>
                    <span>Arapongas - PR - Brasil</span>
                    <span>Fone: (43) 3172-4359</span>
                    <span>E-mail: joelini@joelini.com.br</span>
                </div>
                <div class="social-info">
                    <div class="fb-like-box" data-href="https://www.facebook.com/distrito704" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false" data-width="280" data-height="225" data-css="/css/style.css"></div>
                </div>
            </div>
            <div class="form-vendas-home form-contato-home pull-right">
                <form id="contato" role="form" class="contato span12" accept-charset="UTF-8" action="#" method="POST">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" id="nome" name="nome" required="required" class="nome form-control">
                    </div>

                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" id="email" name="email" required="required" class="email form-control">
                    </div>

                    <div class="form-group">
                        <label for="cidade">Cidade</label>
                        <input type="text" id="cidade" name="cidade" class="cidade form-control">
                    </div>

                    <div class="form-group">
                        <label for="estado">Estado</label>
                        <input type="text" id="estado" name="estado" class="estado form-control">
                    </div>

                    <div class="form-group">
                        <label for="telefone">Telefone</label>
                        <input type="text" id="telefone" name="telefone" required="required" class="telefone form-control">
                    </div>

                    <div class="form-group">
                        <label for="departamento">Escolha o departamento</label>
                        <select name="departamento" id="departamento" required="required" class="departamento form-control"><option value="" selected="selected">Selecione...</option><option value="Dúvidas">Dúvidas</option><option value="Sugestões">Sugestões</option></select>
                    </div>

                    <div class="form-group">
                        <label for="mensagem">Mensagem</label>
                        <textarea id="mensagem" rows="10" cols="50" name="mensagem" class="mensagem form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="arquivo">Anexar arquivo</label>
                        <input type="file" id="arquivo" name="arquivo" class="arquivo form-control">
                    </div>

                    <button id="submit_vendas" class="btn btn-primary pull-right btn-envia" type="submit">Enviar</button>
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