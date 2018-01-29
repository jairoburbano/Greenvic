<?php
/**
 * Archivo principal.
 *
 * Aquí se muestra todo lo que se ve en la portada de la página
 *
 * @package		greenvic
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		0.1.0
 */
$page = 'busqueda';
$subpage = '';
include 'header.php'; ?>
<div class="banner__media fit--media">
    <img src="assets/image.jpg" alt="Titulo">
</div><!-- /.banner__media -->
<div class="container--news">
    <section class="home--news banner--overlay">
        <div class="wrap">
            <div class="headline">
                <h1 class="page--title light--title title--center">Terminos de Búsqueda</h1><!-- /.page--title -->
            </div><!-- /.headline -->
            <div class="content title--center">
                <h2 class="light--title search__title">Se encontraron 3 resultados</h2><!-- /.section--title -->
                <h2 class="light--title search__title">No se encontraron resultados</h2><!-- /.section--title -->
            </div><!-- /.content -->
            <div class="container__news">
                <div class="item__news">
                    <div class="news__data">
                        <p>Inicio</p>
                        <span>»</span>
                        <a href="#" title="titulo">Noticias</a>
                    </div><!-- /.news__data -->
                    <div class="news__content">
                        <h2><a href="#" title="tiutlo">Lorem ipsum dolor sit amet.</a></h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias nostrum reprehenderit fugiat maxime ex, corporis similique, reiciendis modi qui vero, repudiandae. Excepturi eveniet culpa distinctio illo quos! Reiciendis, possimus, minus.
                        </p>
                    </div><!-- /.news__content -->
                </div><!-- /.item__news -->
                <div class="item__news">
                    <div class="news__data">
                        <p>Inicio</p>
                        <span>»</span>
                        <a href="#" title="titulo">Empresa</a>
                    </div><!-- /.news__data -->
                    <div class="news__content">
                        <h2><a href="#" title="tiutlo">Lorem ipsum dolor sit amet.</a></h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, perferendis!
                        </p>
                    </div><!-- /.news__content -->
                </div><!-- /.item__news -->
                <div class="item__news">
                    <div class="news__data">
                        <p>Inicio</p>
                        <span>»</span>
                        <a href="#" title="titulo">Certificaciones</a>
                    </div><!-- /.news__data -->
                    <div class="news__content">
                        <h2><a href="#" title="tiutlo">Lorem ipsum dolor sit amet.</a></h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis ut repellat, dolorum dicta quia alias molestias, maiores itaque facere doloribus quidem, quo sunt, assumenda possimus. Minima culpa maiores alias laboriosam ipsum deleniti temporibus molestias enim consectetur cumque, unde consequatur odit.
                        </p>
                    </div><!-- /.news__content -->
                </div><!-- /.item__news -->
                <div class="item__news">
                    <div class="news__data">
                        <p>16 Oct, 2016</p>
                        <span>|</span>
                        <a href="#" title="titulo">Categoria 1</a>,
                        <a href="#" title="titulo">Categoria 2</a>,
                        <a href="#" title="titulo">Categoria 3</a>
                    </div><!-- /.news__data -->
                    <div class="news__content">
                        <h2><a href="#" title="tiutlo">Lorem ipsum dolor sit amet.</a></h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, perferendis!
                        </p>
                    </div><!-- /.news__content -->
                </div><!-- /.item__news -->
                <div class="item__news">
                    <div class="news__data">
                        <p>16 Oct, 2016</p>
                        <span>|</span>
                        <a href="#" title="titulo">Categoria 1</a>,
                        <a href="#" title="titulo">Categoria 2</a>,
                        <a href="#" title="titulo">Categoria 3</a>
                    </div><!-- /.news__data -->
                    <div class="news__content">
                        <h2><a href="#" title="tiutlo">Lorem ipsum dolor sit amet.</a></h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis ut repellat, dolorum dicta quia alias loribus quidem, quo sunt, assumenda possimus. Minima culpa maiores.
                        </p>
                    </div><!-- /.news__content -->
                </div><!-- /.item__news -->
            </div><!-- /.container__news -->
            <ul class="paginador">
                <li>
                    <a href="#" title="Anterior" class="disable">
                        <svg><use xlink:href="#shape-flex-prev" /></svg>
                    </a>
                </li>
                <li>
                    <a href="#" title="1" class="current">1</a>
                </li>
                <li>
                    <a href="#" title="2">2</a>
                </li>
                <li>
                    <a href="#" title="3">3</a>
                </li>
                <li>
                    <a href="#" title="Siguiente">
                        <svg><use xlink:href="#shape-flex-next" /></svg>
                    </a>
                </li>
            </ul><!-- /.paginador -->
        </div><!-- /.wrap -->
    </section><!-- /.home--news -->
</div><!-- /.container -->
<?php include 'footer.php'; ?>