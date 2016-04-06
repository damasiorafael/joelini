@extends('layouts.master')

@section('title', 'Joelini - Produtos - Categoria ')

@section('container')
    <section class="produtos">
    	<div class="container">
    		<aside class="nav-cat pull-left">
                <h3 class="title-produtos">Produtos</h3>
                <ul class="categorias">
                    <li class="active">
                        <a href="/categoria/1" tittle="Sitema para Porta de Correr">Sitema para Porta de Correr</a>
                        <ul class="subcategorias">
                            <li>
                                <a href="/subcategoria/1" title="Guias">Guias</a>
                            </li>
                            <li>
                                <a href="/subcategoria/2" title="Roldanas">Roldanas</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="/categoria/2" tittle="Infantil">Infantil</a>
                        <ul class="subcategorias">
                            <li>
                                <a href="/subcategoria/3" title="Guias">Guias</a>
                            </li>
                            <li>
                                <a href="/subcategoria/4" title="Roldanas">Roldanas</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="/categoria/3" tittle="Suporte">Suporte</a>
                        <ul class="subcategorias">
                            <li>
                                <a href="/subcategoria/5" title="Guias">Guias</a>
                            </li>
                            <li>
                                <a href="/subcategoria/6" title="Roldanas">Roldanas</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </aside>

            <div class="produtos-lista pull-right">
                <h3 class="title-produtos">Sistemas para Portas de Correr | <strong> Guias</strong></h3>
                <ul class="itens-produtos">
                    <li>
                        <a href="/produto/1" tittle="jm135">
                            <img src="/images/produtos/produto1.jpg" />
                            <span>jm135</span>
                        </a>
                    </li>
                    <li>
                        <a href="/produto/1" tittle="jm135">
                            <img src="/images/produtos/produto1.jpg" />
                            <span>jm135</span>
                        </a>
                    </li>
                    <li>
                        <a href="/produto/1" tittle="jm135">
                            <img src="/images/produtos/produto1.jpg" />
                            <span>jm135</span>
                        </a>
                    </li>
                    <li>
                        <a href="/produto/1" tittle="jm135">
                            <img src="/images/produtos/produto1.jpg" />
                            <span>jm135</span>
                        </a>
                    </li>
                    <li>
                        <a href="/produto/1" tittle="jm135">
                            <img src="/images/produtos/produto1.jpg" />
                            <span>jm135</span>
                        </a>
                    </li>
                    <li>
                        <a href="/produto/1" tittle="jm135">
                            <img src="/images/produtos/produto1.jpg" />
                            <span>jm135</span>
                        </a>
                    </li>
                    <li>
                        <a href="/produto/1" tittle="jm135">
                            <img src="/images/produtos/produto1.jpg" />
                            <span>jm135</span>
                        </a>
                    </li>
                    <li>
                        <a href="/produto/1" tittle="jm135">
                            <img src="/images/produtos/produto1.jpg" />
                            <span>jm135</span>
                        </a>
                    </li>
                    <li>
                        <a href="/produto/1" tittle="jm135">
                            <img src="/images/produtos/produto1.jpg" />
                            <span>jm135</span>
                        </a>
                    </li>
                    <li>
                        <a href="/produto/1" tittle="jm135">
                            <img src="/images/produtos/produto1.jpg" />
                            <span>jm135</span>
                        </a>
                    </li>
                    <li>
                        <a href="/produto/1" tittle="jm135">
                            <img src="/images/produtos/produto1.jpg" />
                            <span>jm135</span>
                        </a>
                    </li>
                    <li>
                        <a href="/produto/1" tittle="jm135">
                            <img src="/images/produtos/produto1.jpg" />
                            <span>jm135</span>
                        </a>
                    </li>
                </ul>
            </div>
    	</div>
    </section>
@endsection