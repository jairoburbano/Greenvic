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
$page = 'error';
$subpage = '';
include 'header.php'; ?>
<div class="banner">
    <div class="banner__media">
        <img src="assets/image.jpg" alt="Titulo">
    </div><!-- /.banner__media -->
    <div class="banner__content content">
        <img src="img/banner/error.svg" alt="Portada">
        <p>
            Nullam arcu velit, efficitur at orci sed, suscipit feugiat sapien. Nullam nibh velit, dignissim non nisl finibus, imperdiet tempor eros. Praesent ac libero laoreet.
        </p>
        <a href="index.php" title="Ir al inicio" class="btn btn--border">Ir al inicio</a>
    </div><!-- /.banner__content -->
</div><!-- /.banner -->
<?php include 'footer.php'; ?>