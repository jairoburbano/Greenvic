<?php
include 'functions.php';
/**
 * Cabacera de la Página
 *
 * Nuestra todo el contenido hasta <body>
 *
 * @package		greenvic
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		0.1.0
 */
?>
<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title><?php wp_title(); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <link rel="icon" href="/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr.js"></script>
    </head>
    <body class="<?php if ( $page == 'noticias' ) { echo ' page-noticias'; } ?><?php if ( $page == 'busqueda' ) { echo ' page-busqueda'; } ?><?php if ( $page == 'error' ) { echo ' page-error'; } ?>">
        <?php include 'svg-defs.svg'?>
        <div class="page-wrap">
            <header class="header">
                <a href="index.php" title="Greenvic" class="logo">
                    <div class="logo__icon">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" width="31.3px" height="41.9px" viewBox="0 0 31.3 41.9" enable-background="new 0 0 31.3 41.9" xml:space="preserve">
                            <path fill="#FFFFF8" d="M0,0v31.3h31.3V0H0z M30.4,30.4H0.9V0.9h29.5V30.4z"/>
                            <path fill="#FFFFF8" d="M15.4,41.9h-2.3c0,0,1.8-7.8,2-12s0.3-6.9,0.3-6.9s-1.5-1.9-2.5-4.2s-1.2-3.2-1.2-3.2l0.4-0.9 c0,0,1.1,2.9,1.7,3.9c0.6,1,1.5,2.4,1.5,2.4s-0.1-2.9-0.4-4.4c-0.3-1.6-1.3-5.8-1.3-5.8l1.3,1.2c0,0,1.9,6.7,2,11.9 s-0.1,8.3-0.4,10.9C16.3,37.2,15.4,41.9,15.4,41.9z M11.1,25.8C10.6,21.4,11,14.4,11,14.4s0.8-1.2,1.6-2.4c0.8-1.2,2-4.9,2-4.9 l-0.4-0.9c0,0-0.7,1.6-1.5,3.3C12,11.3,11.3,12,11.3,12s0.2-1.1,0.4-2.1c0.2-1.1,1-4.1,1-4.1L11.3,7c0,0-1.2,4.3-1.5,6.6 C9.5,16,8.9,20.6,9.2,25s1.6,12,1.6,12h2.4C13.1,37.1,11.8,31.5,11.1,25.8z M8.1,34.9c-0.7-3.7-1.4-9.8-1.3-14.8 c0-5,1.8-11.7,1.8-11.7L7.2,9.5c0,0-0.6,2.3-0.9,3.5c-0.3,1.3-0.8,4.7-0.8,4.7s-0.3-0.9-0.7-2c-0.3-1.2-0.6-4.1-0.6-4.1l-0.6,0.8 c0,0,0.1,2.4,0.5,4.2s1.2,3.6,1.2,3.6S5,23.4,5.2,27.7s1.6,12,1.6,12H9C9,39.7,8.8,38.6,8.1,34.9z"/>
                            <path fill="#FFFFF8" d="M22.2,9.7c0,1.1-0.9,1.9-1.9,1.9s-1.9-0.9-1.9-1.9s0.9-1.9,1.9-1.9S22.2,8.6,22.2,9.7z M22,14.3 c-1.1,0-1.9,0.9-1.9,1.9s0.9,1.9,1.9,1.9s1.9-0.9,1.9-1.9S23.1,14.3,22,14.3z M20.1,20.5c-1.1,0-1.9,0.9-1.9,1.9s0.9,1.9,1.9,1.9 c1.1,0,1.9-0.9,1.9-1.9S21.2,20.5,20.1,20.5z"/>
                        </svg>
                    </div><!-- /.logo__icon -->
                    <div class="logo__text">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" width="77.9px" height="19.4px" viewBox="0 0 77.9 19.4" enable-background="new 0 0 77.9 19.4" xml:space="preserve">
                            <path fill="#FFFFF8" d="M12,13.6c0.5-0.8,1.7-9.6,1.7-9.6h2.1l-0.1,0.6c0,0,1-0.9,2.5-0.9s2.5,0.7,2.5,0.7l-1.3,1.3 c0,0-0.3-0.5-1.4-0.5s-2.5,0.8-2.9,2.5s-0.7,4.6-1.1,6.1c-0.3,1.5-1.6,2.3-1.6,2.3l-1.3-1.2C11.1,14.8,11.5,14.4,12,13.6z M22.5,10.1c0,0.1-0.2,1.3-0.2,1.5c0,0.3,0.1,2.3,2.1,2.4s2.7-0.8,2.7-0.8l0.6,1.3c0,0-1.7,0.9-3.6,0.9s-3.3-1-3.7-3.1 c-0.4-2.1,0.4-5.5,1.4-6.8s2.6-2.1,4.3-2.1s3.6,0.9,3.6,2.9s-1.6,2.6-4.6,3.2C23.1,10.1,22.6,10.1,22.5,10.1z M22.9,8.4 c0,0,1.3-0.1,3.2-0.5s2.3-1.7,1.6-2.3c-0.7-0.6-2.4-0.7-3.6,0S22.9,8.4,22.9,8.4z M32.8,10.1c0,0.1-0.2,1.3-0.2,1.5 c0,0.3,0.1,2.3,2.1,2.4c2,0.1,2.7-0.8,2.7-0.8l0.6,1.3c0,0-1.7,0.9-3.6,0.9s-3.3-1-3.7-3.1s0.4-5.5,1.4-6.8c1.1-1.3,2.6-2.1,4.3-2.1 s3.6,0.9,3.6,2.9s-1.6,2.6-4.6,3.2C33.4,10.1,32.9,10.1,32.8,10.1z M33.2,8.5c0,0,1.2-0.2,3.2-0.6c1.9-0.3,2.1-1.8,1.4-2.4 s-2.3-0.6-3.4,0.1S33.2,8.5,33.2,8.5z M10.4,4c0,0-0.6,3.6-1.2,6.8s-0.5,3.1-1.3,5.5s-2.9,3.2-4.6,3.2S0,18.8,0,18.8l0.7-1.3 c0,0,1.2,0.3,2.1,0.4c1,0.1,2.3-0.4,2.9-1.2c0.6-0.8,1-3,1-3s-1.1,1.2-2.8,1.2s-3.8-0.8-3.1-5.8s4-5.4,5.2-5.4s2.2,0.7,2.2,0.7V4 H10.4z M5.9,5.3C4,5.3,3.1,6.2,2.7,9.5s-0.1,3.8,1.4,3.9s2-0.9,2-0.9l0.8,0.9c0,0,0.4-2.9,0.8-5.1C8.2,6,7.7,5.3,5.9,5.3z M40.7,15.5h2.1c0,0,1.3-7.6,1.5-8.1c0.1-0.6,0.4-2.2,2.5-2.2c1.7,0,1.8,0.8,1.7,1.8s-0.8,4.3-0.8,5.4c0.1,1.1,0.2,2.1,0.4,2.5 c0.2,0.4,0.6,0.9,0.6,0.9l1.6-0.9c0,0-0.4-0.4-0.5-0.9c-0.1-0.5-0.2-1.6,0.1-2.8c0.2-1.3,0.8-3.5,0.7-4.5s-0.8-3-3.4-3 c-1.5,0-2.5,0.7-2.5,0.7V3.5h-1.9c0,0-1.8,10-1.9,10.5C40.7,14.5,40.7,15.5,40.7,15.5z M53.3,10.3c0.2,2,0.3,3.9,0.8,4.6 c0.4,0.7,1.4,0.6,1.9,0.6c0.5,0,0.6-0.4,0.6-0.4s3.2-5.7,3.7-6.7c0.5-1,0.9-1.6,0.7-3c-0.2-1.3-0.7-2-0.7-2l-1.7,0.4 c0,0,0.3,0.4,0.4,0.8s0.2,1.1,0.2,1.8s-0.5,1.3-0.9,2.2S55.8,13,55.8,13l-0.3,0.1l-0.8-9.7h-2.1C52.7,3.5,53.1,8.3,53.3,10.3z M64.1,5.3c0,0-0.7,4.3-1,5.8c-0.2,1.5-0.2,2.3,0,3.2c0.2,0.9,1,1.7,1,1.7l1.6-1.2c0,0-0.2-0.2-0.6-0.8c-0.3-0.6-0.2-1-0.1-2.2 s1.3-8.2,1.3-8.2h-2.8l-0.4,1.6L64.1,5.3z M64.7,2h2.1l0.4-2h-2.1L64.7,2z M76,7l1.9-0.5c0,0-0.3-2.1-2-2.6 c-1.7-0.5-3.4-0.4-4.7,0.5c-1.3,0.9-2.7,2.8-2.8,5.5c-0.1,2.6-0.3,4,1.3,5.1s4.4,0.3,5.1,0.1c0.8-0.2,0.8-0.4,0.8-0.4l-0.6-1.3 c0,0-0.9,0.8-2.1,0.8c-1.2,0-2.5-0.4-2.6-1.6s0.2-4.4,0.8-5.6c0.5-1.1,1.2-1.9,2.8-1.9S75.8,5.9,76,7z"/>
                        </svg>
                    </div><!-- /.logo__text -->
                </a><!-- /.logo -->
                <div class="header__bottom">
                    <div class="header--superior">
                        <div class="header--superior--top">
                            <div class="lang">
                                <a href="#en" title="English" class="active">En</a>
                                <a href="#es" title="Español">Es</a>
                            </div><!-- /.lang -->
                            <button target="_blank" title="Extranet" class="btn">Extranet</button>
                        </div><!-- /.header--superior--top -->
                        <form action="page-result.php" class="header__search">
                            <div class="input-group">
                                <input type="text" placeholder="Buscar...">
                            </div><!-- /.input-group -->
                            <div class="send-group">
                                <input type="submit" value=" ">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" width="17.7px" height="17.3px" viewBox="0 0 17.7 17.3" enable-background="new 0 0 17.7 17.3" xml:space="preserve">
                                    <g>
                                        <circle fill="none" stroke="#FFFFFA" stroke-width="2" stroke-miterlimit="10" cx="7.3" cy="7.3" r="6.3"/>
                                        <line fill="none" stroke="#FFFFFA" stroke-width="2" stroke-miterlimit="10" x1="11.7" y1="11.1" x2="17" y2="16.6"/>
                                    </g>
                                </svg>
                            </div><!-- /.send-group -->
                        </form><!-- /.header__search -->
                    </div><!-- /.header--superior -->
                    <ul class="menu">
                        <li class="menu-item <?php if ( $page == 'empresa' ) { echo ' current-menu-item current-page-ancestor menu-item-has-children'; } ?>">
                            <a href="page-historia.php" title="Empresa">Empresa</a>
                            <ul class="submenu">
                                <li class="menu-item <?php if ( $subpage == 'historia' ) { echo ' current-menu-item current-page-ancestor'; } ?>">
                                    <a href="page-historia.php" title="Historia">Historia</a>
                                </li><!-- /.menu-item -->
                                <li class="menu-item <?php if ( $subpage == 'nosotros' ) { echo ' current-menu-item current-page-ancestor'; } ?>">
                                    <a href="page-nosotros.php" title="Nosotros">Nosotros</a>
                                </li><!-- /.menu-item -->
                            </ul><!-- /.submenu -->
                        </li><!-- /.menu-item -->
                        <li class="menu-item <?php if ( $page == 'packing' ) { echo ' current-menu-item current-page-ancestor'; } ?>">
                            <a href="page-packing.php" title="Packing">Packing</a>
                        </li><!-- /.menu-item -->
                        <li class="menu-item <?php if ( $page == 'productos' ) { echo ' current-menu-item current-page-ancestor menu-item-has-children'; } ?>">
                            <a href="page-productos.php" title="Productos">Productos</a>
                            <ul class="submenu">
                                <li class="menu-item <?php if ( $subpage == 'organico' ) { echo ' current-menu-item current-page-ancestor'; } ?>">
                                    <a href="page-productos.php" title="Orgánico">Orgánico</a>
                                </li><!-- /.menu-item -->
                                <li class="menu-item <?php if ( $subpage == 'convencional' ) { echo ' current-menu-item current-page-ancestor'; } ?>">
                                    <a href="#" title="Convencional">Convencional</a>
                                </li><!-- /.menu-item -->
                            </ul><!-- /.submenu -->
                        </li><!-- /.menu-item -->
                        <li class="menu-item <?php if ( $page == 'certificaciones' ) { echo ' current-menu-item current-page-ancestor'; } ?>">
                            <a href="page-certificaciones.php" title="Certificaciones">Certificaciones</a>
                        </li><!-- /.menu-item -->
                        <li class="menu-item <?php if ( $page == 'noticias' ) { echo ' current-menu-item current-page-ancestor'; } ?>">
                            <a href="page-news.php" title="Noticias">Noticias</a>
                        </li><!-- /.menu-item -->
                        <li class="menu-item<?php if ( $page == 'contacto' ) { echo ' current-menu-item current-page-ancestor'; } ?>">
                            <a href="page-contacto.php" title="Contacto">Contacto</a>
                        </li><!-- /.menu-item -->
                    </ul><!-- /.menu -->
                </div><!-- /.header__bottom -->
                <div class="header__mobile">
                    <div class="menu--icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div><!-- /.menu--icon -->
                    <nav class="menu--mobile">
                        <a href="page-productos.php" class="menu-item" title="Orgánico">Orgánico</a>
                        <a href="#" class="menu-item" title="Certificaciones">Certificaciones</a>
                        <a href="page-contacto.php" class="menu-item" title="Contacto">Contacto</a>
                    </nav><!-- /.menu--mobile -->
                </div><!-- /.header__mobile -->
            </header><!-- /.header -->