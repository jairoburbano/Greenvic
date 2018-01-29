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
$page = 'noticias';
$subpage = '';
include 'header.php'; ?>
<div class="banner__media fit--media">
    <img src="assets/fruticultura_peras_034.jpg" alt="Titulo">
</div><!-- /.banner__media -->
<div class="container--news">
    <section class="home--news banner--overlay">
        <div class="wrap">
            <div class="headline">
                <h1 class="page--title light--title">Noticias</h1><!-- /.page--title -->
                <div class="category__box">
                    <select name="category" id="category">
                        <option value="default">Categorias</option>
                        <option value="uno">Uno</option>
                        <option value="dos">Dos</option>
                        <option value="tres">Tres</option>
                    </select>
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" width="10.8px" height="7.4px" viewBox="0 0 10.8 7.4" enable-background="new 0 0 10.8 7.4" xml:space="preserve" >
                        <path fill="#FFFFFA" d="M1,0c1.4,0,3.7,1.9,4.4,3.5h0.1C6.2,1.9,8.5,0,9.9,0c0.5,0,1,0.1,1,0.1v0.2C8.1,2.3,6.3,6.4,5.9,7.4 c0,0-0.2,0-0.3,0C3.9,7.4,3.9,2.7,0,0.3V0.1C0,0.1,0.4,0,1,0z"/>
                    </svg>
                </div><!-- /.category__box -->
            </div><!-- /.headline -->
            <div class="container__news">
                <div class="item__news">
                    <div class="news__data">
                        <p>16 Oct, 2016</p>
                        <span>|</span>
                        <a href="single-news.php" title="titulo">Categoria 1</a>,
                        <a href="single-news.php" title="titulo">Categoria 2</a>,
                        <a href="single-news.php" title="titulo">Categoria 3</a>
                    </div><!-- /.news__data -->
                    <div class="news__content">
                        <h2><a href="single-news.php" title="titulo">Lorem ipsum dolor sit amet.</a></h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias nostrum reprehenderit fugiat maxime ex, corporis similique, reiciendis modi qui vero, repudiandae. Excepturi eveniet culpa distinctio illo quos! Reiciendis, possimus, minus.
                        </p>
                    </div><!-- /.news__content -->
                </div><!-- /.item__news -->
                <div class="item__news">
                    <div class="news__data">
                        <p>16 Oct, 2016</p>
                        <span>|</span>
                        <a href="single-news.php" title="titulo">Categoria 1</a>,
                        <a href="single-news.php" title="titulo">Categoria 2</a>,
                        <a href="single-news.php" title="titulo">Categoria 3</a>
                    </div><!-- /.news__data -->
                    <div class="news__content">
                        <h2><a href="single-news.php" title="titulo">Lorem ipsum dolor sit amet.</a></h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, perferendis!
                        </p>
                    </div><!-- /.news__content -->
                </div><!-- /.item__news -->
                <div class="item__news">
                    <div class="news__data">
                        <p>16 Oct, 2016</p>
                        <span>|</span>
                        <a href="single-news.php" title="titulo">Categoria 1</a>,
                        <a href="single-news.php" title="titulo">Categoria 2</a>,
                        <a href="single-news.php" title="titulo">Categoria 3</a>
                    </div><!-- /.news__data -->
                    <div class="news__content">
                        <h2><a href="single-news.php" title="titulo">Lorem ipsum dolor sit amet.</a></h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis ut repellat, dolorum dicta quia alias molestias, maiores itaque facere doloribus quidem, quo sunt, assumenda possimus. Minima culpa maiores alias laboriosam ipsum deleniti temporibus molestias enim consectetur cumque, unde consequatur odit.
                        </p>
                    </div><!-- /.news__content -->
                </div><!-- /.item__news -->
                <div class="item__news">
                    <div class="news__data">
                        <p>16 Oct, 2016</p>
                        <span>|</span>
                        <a href="single-news.php" title="titulo">Categoria 1</a>,
                        <a href="single-news.php" title="titulo">Categoria 2</a>,
                        <a href="single-news.php" title="titulo">Categoria 3</a>
                    </div><!-- /.news__data -->
                    <div class="news__content">
                        <h2><a href="single-news.php" title="titulo">Lorem ipsum dolor sit amet.</a></h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, perferendis!
                        </p>
                    </div><!-- /.news__content -->
                </div><!-- /.item__news -->
                <div class="item__news">
                    <div class="news__data">
                        <p>16 Oct, 2016</p>
                        <span>|</span>
                        <a href="single-news.php" title="titulo">Categoria 1</a>,
                        <a href="single-news.php" title="titulo">Categoria 2</a>,
                        <a href="single-news.php" title="titulo">Categoria 3</a>
                    </div><!-- /.news__data -->
                    <div class="news__content">
                        <h2><a href="single-news.php" title="titulo">Lorem ipsum dolor sit amet.</a></h2>
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