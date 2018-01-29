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
$page = 'home';
$subpage = '';
include 'header.php'; ?>
<div class="banner">
    <div class="banner__media fit--media">
        <img src="assets/image.jpg" alt="Titulo">
    </div><!-- /.banner__media -->
    <div class="banner__content">
        <img src="img/banner/portada.svg" alt="Portada">
    </div><!-- /.banner__content -->
    <div class="icon--section">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" width="19.7px" height="32px" viewBox="0 0 19.7 32" enable-background="new 0 0 19.7 32" xml:space="preserve">
            <g>
                <path fill="#FFFFFA" d="M9.8,1.2c4.8,0,8.6,3.9,8.6,8.6v12.3c0,4.8-3.9,8.6-8.6,8.6c-4.8,0-8.6-3.9-8.6-8.6V9.8 C1.2,5.1,5.1,1.2,9.8,1.2 M9.8,0L9.8,0C4.4,0,0,4.4,0,9.8v12.3C0,27.6,4.4,32,9.8,32h0c5.4,0,9.8-4.4,9.8-9.8V9.8 C19.7,4.4,15.3,0,9.8,0L9.8,0z"/>
                <path fill="#FFFFFA" d="M7.1,19.4c0.9,0,2.3,1.2,2.7,2.1h0.1c0.5-0.9,1.8-2.1,2.7-2.1c0.3,0,0.6,0.1,0.6,0.1v0.1 c-1.7,1.2-2.8,3.7-3,4.4c0,0-0.1,0-0.2,0c-1.1,0-1.1-2.9-3.5-4.4v-0.1C6.5,19.5,6.8,19.4,7.1,19.4z"/>
                <path fill="#FFFFFA" d="M7.1,12.6c0.9,0,2.3-1.2,2.7-2.1h0.1c0.5,0.9,1.8,2.1,2.7,2.1c0.3,0,0.6-0.1,0.6-0.1v-0.1 c-1.7-1.2-2.8-3.7-3-4.4c0,0-0.1,0-0.2,0c-1.1,0-1.1,2.9-3.5,4.4v0.1C6.5,12.5,6.8,12.6,7.1,12.6z"/>
                <path fill="#FFFFFA" d="M0.9,16.9c0.4-1.1,2.3-1.8,4.9-1.8c3.6,0,5.7,0.7,8.7,0.7c1.4,0,2.5-0.2,4.1-0.7l0.2,0 c-0.4,1.1-2.3,1.8-4.9,1.8c-3.6,0-5.8-0.7-8.7-0.7c-1.4,0-2.5,0.2-4.1,0.7L0.9,16.9z"/>
            </g>
        </svg>
    </div><!-- /.icon--section -->
</div><!-- /.banner -->
<div class="container">
    <div class="block--info">
        <div class="btn--info">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" width="18px" height="18px" viewBox="0 0 18 18" enable-background="new 0 0 18 18" xml:space="preserve">
                <g>
                    <g>
                        <g>
                            <path d="M8.2,9.8H7.7c-1.1,0-2.1,0-2.6,0.1c0,0-0.1-0.4-0.1-0.8c0-0.4,0.1-1,0.5-1c0,0,1.3,0.1,2.7,0.1h1.5h0.7 c1.1,0,2.1,0,2.4-0.1c0,0,0.1,0.4,0.1,1c0,0.4-0.1,0.7-0.3,0.7c0,0-1.3-0.1-2.9-0.1H8.2z"/>
                        </g>
                        <g>
                            <path class="icon--hide" d="M8.2,8.3V7.7c0-1.1,0-2.1-0.1-2.6c0,0,0.4-0.1,0.8-0.1c0.4,0,1,0.1,1,0.5c0,0-0.1,1.3-0.1,2.7v1.5v0.7 c0,1.1,0,2.1,0.1,2.4c0,0-0.4,0.1-1,0.1c-0.4,0-0.7-0.1-0.7-0.3c0,0,0.1-1.3,0.1-2.9V8.3z"/>
                        </g>
                    </g>
                    <path d="M16,2v14H2V2H16 M18,0H0v18h18V0L18,0z"/>
                </g>
            </svg>
            <p>Ocultar <br> información</p>
        </div><!-- /.btn--info -->
        <div class="info__content">
            <div class="wrap">
                <div class="content">
                    <h2>Nosotros</h2>
                    <p>
                        En Greenvic siempre nos ha interesado lo mejor, por eso mantenemos una excelente relación con nuestros productores.
                    </p>
                    <p>
                        Somos una empresa acogedora, transparente y chilena, con consciencia ambiental y, desde 2005, nos dedicamos al proceso de embalaje en frío y de comercialización de fruta, tanto en el mercado nacional como para el mercado internacional.
                    </p>
                    <a href="#" title="Seguir leyendo" class="btn btn--border">Seguir leyendo</a>
                </div><!-- /.content -->
            </div><!-- /.wrap -->
        </div><!-- /.info__content -->
        <div class="icon--gallery">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" width="32px" height="19.7px" viewBox="0 0 32 19.7" enable-background="new 0 0 32 19.7" xml:space="preserve">
                <g>
                    <path fill="#FFFFFA" d="M1.2,9.8c0-4.8,3.9-8.6,8.6-8.6h12.3c4.8,0,8.6,3.9,8.6,8.6c0,4.8-3.9,8.6-8.6,8.6H9.8 C5.1,18.5,1.2,14.6,1.2,9.8 M0,9.8L0,9.8c0,5.4,4.4,9.8,9.8,9.8h12.3c5.4,0,9.8-4.4,9.8-9.8v0C32,4.4,27.6,0,22.2,0H9.8 C4.4,0,0,4.4,0,9.8L0,9.8z"/>
                    <path fill="#FFFFFA" d="M19.4,12.6c0-0.9,1.2-2.3,2.1-2.7V9.8c-0.9-0.5-2.1-1.8-2.1-2.7c0-0.3,0.1-0.6,0.1-0.6h0.1 c1.2,1.7,3.7,2.8,4.4,3c0,0,0,0.1,0,0.2c0,1.1-2.9,1.1-4.4,3.5h-0.1C19.5,13.2,19.4,12.9,19.4,12.6z"/>
                    <path fill="#FFFFFA" d="M12.6,12.6c0-0.9-1.2-2.3-2.1-2.7V9.8c0.9-0.5,2.1-1.8,2.1-2.7c0-0.3-0.1-0.6-0.1-0.6h-0.1 c-1.2,1.7-3.7,2.8-4.4,3c0,0,0,0.1,0,0.2c0,1.1,2.9,1.1,4.4,3.5h0.1C12.5,13.2,12.6,12.9,12.6,12.6z"/>
                    <path fill="#FFFFFA" d="M16.9,18.8c-1.1-0.4-1.8-2.3-1.8-4.9c0-3.6,0.7-5.7,0.7-8.7c0-1.4-0.2-2.5-0.7-4.1l0-0.2 c1.1,0.4,1.8,2.3,1.8,4.9c0,3.6-0.7,5.8-0.7,8.7c0,1.4,0.2,2.5,0.7,4.1L16.9,18.8z"/>
                </g>
            </svg>
        </div><!-- /.icon--gallery -->

        <div class="parallax-image-wrapper parallax-image-wrapper-100"
             data-anchor-target="#one" data-bottom-top="transform:translate3d(0px, 200%, 0px)" data-top-bottom="transform:translate3d(0px, 0%, 0px)">
            <div class="parallax-image parallax-image-100" style="background-image:url(assets/berry.jpg)" data-anchor-target="#one"
                 data-bottom-top="transform: translate3d(0px, -80%, 0px);"data-top-bottom="transform: translate3d(0px, 80%, 0px);"></div>
        </div>
        <div class="parallax-image-wrapper parallax-image-wrapper-100"
             data-anchor-target="#two" data-bottom-top="transform:translate3d(0px, 200%, 0px)" data-top-bottom="transform:translate3d(0px, 0%, 0px)">
            <div class="parallax-image parallax-image-100" style="background-image:url(assets/Cerezas-de-Virginia.jpg)" data-anchor-target="#two" data-bottom-top="transform: translate3d(0px, -80%, 0px);"data-top-bottom="transform: translate3d(0px, 80%, 0px);"></div>
        </div>
        <div class="parallax-image-wrapper parallax-image-wrapper-100"
             data-anchor-target="#three" data-bottom-top="transform:translate3d(0px, 200%, 0px)" data-top-bottom="transform:translate3d(0px, 0%, 0px)">
            <div class="parallax-image parallax-image-100" style="background-image:url(assets/image.jpg)" data-anchor-target="#three" data-bottom-top="transform: translate3d(0px, -80%, 0px);"data-top-bottom="transform: translate3d(0px, 80%, 0px);"></div>
        </div>
        <div id="skrollr-body" class="info--gallery">
            <ul class="slides">
                <li class="gap-100" id="one">
                    <img src="assets/berry.jpg" alt="Titulo">
                </li><!-- /#one.gap-100 -->
                <li class="gap-100" id="two">
                    <img src="assets/Cerezas-de-Virginia.jpg" alt="Titulo">
                </li><!-- /#one.gap-100 -->
                <li class="gap-100" id="three">
                    <img src="assets/image.jpg" alt="Titulo">
                </li><!-- /#one.gap-100 -->
            </ul>
        </div><!-- /#skrollr-body -->
    </div><!-- /.block--info -->
    <div class="end"></div><!-- /.end -->
    <div class="sponsor--block">
        <h2 class="section--title">Nuestras marcas</h2><!-- /.section--title -->
        <div class="sponsor wrap">
            <div class="sponsor__item">
                <img src="assets/fuji.jpeg" alt="Titulo">
            </div><!-- /.sponsor__item -->
            <div class="sponsor__item">
                <img src="assets/fruticultura_peras_034.jpg" alt="Titulo">
            </div><!-- /.sponsor__item -->
            <div class="sponsor__item">
                <img src="assets/image.jpg" alt="Titulo">
            </div><!-- /.sponsor__item -->
            <div class="sponsor__item">
                <img src="assets/berry.jpg" alt="Titulo">
            </div><!-- /.sponsor__item -->
        </div><!-- /.sponsor -->
    </div><!-- /.sponsor--block -->
    <section class="home--news banner--overlay" style="background-image: url(assets/image.jpg);">
        <div class="wrap">
            <h2 class="section--title light--title">Noticias</h2><!-- /.section--title -->
            <div class="container__news">
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
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias nostrum reprehenderit fugiat maxime ex, corporis similique, reiciendis modi qui vero, repudiandae. Excepturi eveniet culpa distinctio illo quos! Reiciendis, possimus, minus.
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
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis ut repellat, dolorum dicta quia alias molestias, maiores itaque facere doloribus quidem, quo sunt, assumenda possimus. Minima culpa maiores alias laboriosam ipsum deleniti temporibus molestias enim consectetur cumque, unde consequatur odit.
                        </p>
                    </div><!-- /.news__content -->
                </div><!-- /.item__news -->
            </div><!-- /.container__news -->
            <a href="#" title="Ver más noticias" class="btn btn--border btn--center">Ver más noticias</a>
        </div><!-- /.wrap -->
    </section><!-- /.home--news -->
    <div class="redes__home">
        <div class="wrap">
            <div class="redes__column content">
                <h2 class="light--title">Instagram</h2>
                <div class="btn btn--border">
                    <svg><use xlink:href="#shape-icon-instagram" /></svg>
                    Síguenos
                </div><!-- /.btn btn--border -->
            </div><!-- /.redes__column -->
            <div class="redes__column redes--images" id="instafeed">
            </div><!-- /.redes__column -->
        </div><!-- /.wrap -->
    </div><!-- /.redes__home -->
</div><!-- /.container -->
<?php include 'footer.php'; ?>