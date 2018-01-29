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
$page = 'empresa';
$subpage = 'nosotros';
include 'header.php'; ?>
<div class="banner banner--auto">
    <div class="banner__media fit--media">
        <img src="assets/fruticultura_peras_034.jpg" alt="Titulo">
    </div><!-- /.banner__media -->
    <div class="info__content">
        <div class="wrap">
            <div class="content">
                <h2 class="page--title">Nosotros</h2>
                <p>
                    En Greenvic siempre nos ha interesado lo mejor, por eso mantenemos una excelente relación con nuestros productores.
                </p>
                <p>
                    Somos una empresa acogedora, transparente y chilena, con consciencia ambiental y, desde 2005, nos dedicamos al proceso de embalaje en frío y de comercialización de fruta, tanto en el mercado nacional como para el mercado internacional. De espalda sólida, trabajamos con productores certificados y de plena confianza, por ello, no existe rotación o cambio de productores, ya que nuestra meta es sostener una relación a largo plazo para formar un equipo íntegro y seguro.
                </p>
            </div><!-- /.content -->
        </div><!-- /.wrap -->
    </div><!-- /.info__content -->
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
    <div class="showcase__block">
        <div class="showcase">
            <div class="showcase__background">
                <div class="container--background">
                    <img src="assets/image.jpg" alt="titulo">
                </div><!-- /.container--background -->
            </div><!-- /.showcase__background -->
            <div class="wrap">
                <div class="showcase__content">
                    <div class="content">
                        <p>
                            Como empresa, nos comprometemos con nuestros asociados en la venta de productos de calidad tanto orgánicos como convencionales. Contamos con un equipo de logística especializado  e interdisciplinario que cumple a cabalidad sus plazos.
                        </p>
                        <p>
                            En Greenvic destacamos la naturaleza de nuestra fruta orgánica, productos de alto estándar, que no contienen químicos, pesticidas, fertilizantes o aditivos sintéticos en: manzanas, uvas, ciruelas, arándanos, nueces y kiwis. Por otro lado, nuestra fruta convencional, al igual que la orgánica, está 100% certificada y destaca en calidad, sabor y textura, en productos como: duraznos, nectarines, peras, paltas, por nombrar sólo algunos.
                            Somos pioneros y principal exportador nacional de manzanas orgánicas, y nos distinguimos como una de las compañías líderes en el mundo de exportación de fruta. Nuestros productos orgánicos se comercializan principalmente a través de las marcas Organik Time, Awe Sum Organics y Viva Tierra.
                        </p>
                    </div><!-- /.content -->
                </div><!-- /.showcase__content -->
                <div class="showcase__media">
                    <ul class="slides">
                        <li>
                            <img src="assets/berry.jpg" alt="Titulo">
                        </li>
                    </ul><!-- /.slides -->
                    <div class="custom--controls">
                        <div class="slide--count">
                            <p class="current-slide"></p><!-- /.current-slide -->
                            <p>/</p>
                            <p class="total-slide"></p><!-- /.total-slide -->
                        </div><!-- /.slide--count -->
                    </div><!-- /.custom--controls -->
                </div><!-- /.showcase__media -->
            </div><!-- /.wrap -->
        </div><!-- /.showcase -->
    </div><!-- /.showcase__block -->
    <div class="icon--block">
        <div class="icon__item">
            <div class="wrap">
                <div class="icon__media">
                    <img src="assets/zicono.svg" alt="Titulo">
                </div><!-- /.icon__media -->
                <div class="icon__content content">
                    <h2>Formamos un gran equipo</h2>
                    <p>
                        Nuestra historia como Greenvic nace en familia, por ello, orientamos nuestra fuerza a solucionar problemas sociales y ambientales, trabajando como una familia desde un compromiso y vínculo total con nuestros asociados y trabajadores.
                    </p>
                </div><!-- /.icon__content -->
            </div><!-- /.wrap -->
        </div><!-- /.icon__item -->
        <div class="icon__item">
            <div class="wrap">
                <div class="icon__media">
                    <img src="assets/zicono.svg" alt="Titulo">
                </div><!-- /.icon__media -->
                <div class="icon__content content">
                    <h2>Compromiso comunidad</h2>
                    <p>
                        Nos comprometemos con nuestra comunidad desde un compromiso sólido, por medio de estrategias que aportan a mejores experiencias sociales. Vinculándonos con los trabajadores, apoyándolos por medio de variados beneficios y capacitaciones para un mejor futuro, desde lo que ellos realmente necesitan.
                    </p>
                    <p>
                        Elegimos programas de salud y prevención a la altura de la empresa, entregando igualdad de oportunidades a nuestras y nuestros trabajadores. Creamos así un comité de bienestar, que gestionó las cabañas en el balneario Boyeruca, que están disponibles por una semana al año para cualquier trabajador de la compañía que quiera ir de vacaciones.
                    </p>
                    <p>
                        Sabemos lo que nuestro personal necesita, por eso, apoyamos a nuestros trabajadores de menores recursos financiando la educación técnica de sus hijos a través de la beca Anders Larsson.
                    </p>
                    <p>
                        Queremos que la comunidad esté en armonía y sienta ganas de pertenecer a nuestra gran empresa, por ello realizamos actividades anuales enfocadas en la recreación de niños y adultos mayores de la comunidad local. Apoyamos actividades deportivas y culturales, para los trabajadores y familias al interior de la comunidad. Convirtiéndonos así en el principal auspiciador del equipo local de fútbol Deportes Colchagua.
                    </p>
                    <p>
                        Contamos con programa social voluntario (PSV) que beneficia tanto a los trabajadores de plantas de procesos como de productores relacionados. A través de este programa, los trabajadores realizan diferentes proyectos que van en beneficio de sus familias y de la comunidad.
                    </p>
                    <p>
                        Para nosotros es fundamental la tranquilidad de nuestra comunidad, por eso nos preocupamos y desde metas claras sumamos a mejorar la calidad de vida de las personas que forman parte de esta gran familia.
                    </p>
                </div><!-- /.icon__content -->
            </div><!-- /.wrap -->
        </div><!-- /.icon__item -->
        <div class="icon__item">
            <div class="wrap">
                <div class="icon__media">
                    <img src="assets/zicono.svg" alt="Titulo">
                </div><!-- /.icon__media -->
                <div class="icon__content content">
                    <h2>Compromiso con el medio ambiente</h2>
                    <p>
                        Nuestras especies frutales de producción orgánica y convencional viajan desde Chile por el continente Americano, Europeo y Asiático.
                    </p>
                    <p>
                        Produciendo productos de calidad, apoyamos a la biodiversidad, por medio de una responsabilidad ambiental y social compartida desde el productor al consumidor.
                    </p>
                    <p>
                        Nos preocupamos del trato de nuestros suelos, ocupándonos del ecosistema, siendo responsables, respetando los criterios ambientales y certificados que competen a cada una de nuestras instalaciones y productores. De esta manera, contribuimos para que la tierra de producción no contenga productos que puedan maltratar al ecosistema.
                    </p>
                    <p>
                        Participamos en la Mesa Ambiental Aguas Limpias para Colchagua y en la Ruta del río Tinguiririca, iniciativas generadas para la preservación de las aguas en la comuna de Placilla. La CONAMA (Corporación Nacional del Medio Ambiente) nos destaca en numerosas oportunidades como empresa pionera en el cuidado del medio ambiente.
                        Asimismo, promovemos la educación medioambiental en los lugares turísticos de la zona a través de Greenvito (mascota de la empresa), para informar y orientar a quienes necesiten conocer más acerca de los cuidados del medioambiente.
                    </p>
                </div><!-- /.icon__content -->
            </div><!-- /.wrap -->
        </div><!-- /.icon__item -->
    </div><!-- /.icon--block -->
    <div class="team">
        <div class="wrap">
            <h2 class="page--title title--center light--title">Nuestro equipo</h2><!-- /.page--title -->
            <div class="team--important">
                <h3 class="section--title light--title">Directorio</h3><!-- /.section--title -->
                <div class="team__content">
                    <div class="team__item">
                        <div class="team__media fit--media">
                            <img src="http://i.imgur.com/CUdPltF.jpg" alt="Titulo">
                        </div><!-- /.team__media -->
                        <div class="team__title">
                            <p>Pablo Guilisasti U.</p>
                            <svg version="1.1" x="0px" y="0px" width="18px" height="18px" viewBox="0 0 18 18" enable-background="new 0 0 18 18" xml:space="preserve"><path fill="#FFFFF8" d="M8.2,9.8H7.7c-1.1,0-2.1,0-2.6,0.1c0,0-0.1-0.4-0.1-0.8c0-0.4,0.1-1,0.5-1c0,0,1.3,0.1,2.7,0.1h1.5h0.7 c1.1,0,2.1,0,2.4-0.1c0,0,0.1,0.4,0.1,1c0,0.4-0.1,0.7-0.3,0.7c0,0-1.3-0.1-2.9-0.1H8.2z"/><path fill="#FFFFF8" d="M8.2,8.3V7.7c0-1.1,0-2.1-0.1-2.6c0,0,0.4-0.1,0.8-0.1c0.4,0,1,0.1,1,0.5c0,0-0.1,1.3-0.1,2.7v1.5v0.7 c0,1.1,0,2.1,0.1,2.4c0,0-0.4,0.1-1,0.1c-0.4,0-0.7-0.1-0.7-0.3c0,0,0.1-1.3,0.1-2.9V8.3z"/><path fill="#FFFFF8" d="M16,2v14H2V2H16 M18,0H0v18h18V0L18,0z"/></svg>
                        </div><!-- /.team__title -->
                        <div class="team__text">
                            <p>
                                Estudios de derecho en la Universidad Católica de Chile 1969 – 1973, Licenciado en Ciencias Jurídicas y Sociales de esa Universidad año 1974, Título de Abogado otorgado por la Corte Suprema de Chile el 26 de enero de 1976.
                            </p>
                            <p>
                                Abogado que ejerce liberalmente su profesión y agricultor, con vasta experiencia en materias civiles, comerciales, laborales y tributarias, y en el negocio de producción y comercialización de frutos secos. Abogado de Greenvic y Viconto desde los inicios.
                            </p>
                        </div><!-- /.team__text -->
                    </div><!-- /.team__item -->
                    <div class="team__item">
                        <div class="team__media fit--media">
                            <img src="http://i.imgur.com/CUdPltF.jpg" alt="Titulo">
                        </div><!-- /.team__media -->
                        <div class="team__title">
                            <p>Joss Fong</p>
                            <svg version="1.1" x="0px" y="0px" width="18px" height="18px" viewBox="0 0 18 18" enable-background="new 0 0 18 18" xml:space="preserve"><path fill="#FFFFF8" d="M8.2,9.8H7.7c-1.1,0-2.1,0-2.6,0.1c0,0-0.1-0.4-0.1-0.8c0-0.4,0.1-1,0.5-1c0,0,1.3,0.1,2.7,0.1h1.5h0.7 c1.1,0,2.1,0,2.4-0.1c0,0,0.1,0.4,0.1,1c0,0.4-0.1,0.7-0.3,0.7c0,0-1.3-0.1-2.9-0.1H8.2z"/><path fill="#FFFFF8" d="M8.2,8.3V7.7c0-1.1,0-2.1-0.1-2.6c0,0,0.4-0.1,0.8-0.1c0.4,0,1,0.1,1,0.5c0,0-0.1,1.3-0.1,2.7v1.5v0.7 c0,1.1,0,2.1,0.1,2.4c0,0-0.4,0.1-1,0.1c-0.4,0-0.7-0.1-0.7-0.3c0,0,0.1-1.3,0.1-2.9V8.3z"/><path fill="#FFFFF8" d="M16,2v14H2V2H16 M18,0H0v18h18V0L18,0z"/></svg>
                        </div><!-- /.team__title -->
                        <div class="team__text">
                            <p>
                                Estudios de derecho en la Universidad Católica de Chile 1969 – 1973, Licenciado en Ciencias Jurídicas y Sociales de esa Universidad año 1974, Título de Abogado otorgado por la Corte Suprema de Chile el 26 de enero de 1976.
                            </p>
                            <p>
                                Abogado que ejerce liberalmente su profesión y agricultor, con vasta experiencia en materias civiles, comerciales, laborales y tributarias, y en el negocio de producción y comercialización de frutos secos. Abogado de Greenvic y Viconto desde los inicios.
                            </p>
                        </div><!-- /.team__text -->
                    </div><!-- /.team__item -->
                    <div class="team__item">
                        <div class="team__media fit--media">
                            <img src="http://i.imgur.com/CUdPltF.jpg" alt="Titulo">
                        </div><!-- /.team__media -->
                        <div class="team__title">
                            <p>Joss Fong</p>
                            <svg version="1.1" x="0px" y="0px" width="18px" height="18px" viewBox="0 0 18 18" enable-background="new 0 0 18 18" xml:space="preserve"><path fill="#FFFFF8" d="M8.2,9.8H7.7c-1.1,0-2.1,0-2.6,0.1c0,0-0.1-0.4-0.1-0.8c0-0.4,0.1-1,0.5-1c0,0,1.3,0.1,2.7,0.1h1.5h0.7 c1.1,0,2.1,0,2.4-0.1c0,0,0.1,0.4,0.1,1c0,0.4-0.1,0.7-0.3,0.7c0,0-1.3-0.1-2.9-0.1H8.2z"/><path fill="#FFFFF8" d="M8.2,8.3V7.7c0-1.1,0-2.1-0.1-2.6c0,0,0.4-0.1,0.8-0.1c0.4,0,1,0.1,1,0.5c0,0-0.1,1.3-0.1,2.7v1.5v0.7 c0,1.1,0,2.1,0.1,2.4c0,0-0.4,0.1-1,0.1c-0.4,0-0.7-0.1-0.7-0.3c0,0,0.1-1.3,0.1-2.9V8.3z"/><path fill="#FFFFF8" d="M16,2v14H2V2H16 M18,0H0v18h18V0L18,0z"/></svg>
                        </div><!-- /.team__title -->
                        <div class="team__text">
                            <p>
                                Estudios de derecho en la Universidad Católica de Chile 1969 – 1973, Licenciado en Ciencias Jurídicas y Sociales de esa Universidad año 1974, Título de Abogado otorgado por la Corte Suprema de Chile el 26 de enero de 1976.
                            </p>
                            <p>
                                Abogado que ejerce liberalmente su profesión y agricultor, con vasta experiencia en materias civiles, comerciales, laborales y tributarias, y en el negocio de producción y comercialización de frutos secos. Abogado de Greenvic y Viconto desde los inicios.
                            </p>
                        </div><!-- /.team__text -->
                    </div><!-- /.team__item -->
                    <div class="team__item">
                        <div class="team__media fit--media">
                            <img src="http://i.imgur.com/CUdPltF.jpg" alt="Titulo">
                        </div><!-- /.team__media -->
                        <div class="team__title">
                            <p>Joss Fong</p>
                            <svg version="1.1" x="0px" y="0px" width="18px" height="18px" viewBox="0 0 18 18" enable-background="new 0 0 18 18" xml:space="preserve"><path fill="#FFFFF8" d="M8.2,9.8H7.7c-1.1,0-2.1,0-2.6,0.1c0,0-0.1-0.4-0.1-0.8c0-0.4,0.1-1,0.5-1c0,0,1.3,0.1,2.7,0.1h1.5h0.7 c1.1,0,2.1,0,2.4-0.1c0,0,0.1,0.4,0.1,1c0,0.4-0.1,0.7-0.3,0.7c0,0-1.3-0.1-2.9-0.1H8.2z"/><path fill="#FFFFF8" d="M8.2,8.3V7.7c0-1.1,0-2.1-0.1-2.6c0,0,0.4-0.1,0.8-0.1c0.4,0,1,0.1,1,0.5c0,0-0.1,1.3-0.1,2.7v1.5v0.7 c0,1.1,0,2.1,0.1,2.4c0,0-0.4,0.1-1,0.1c-0.4,0-0.7-0.1-0.7-0.3c0,0,0.1-1.3,0.1-2.9V8.3z"/><path fill="#FFFFF8" d="M16,2v14H2V2H16 M18,0H0v18h18V0L18,0z"/></svg>
                        </div><!-- /.team__title -->
                        <div class="team__text">
                            <p>
                                Estudios de derecho en la Universidad Católica de Chile 1969 – 1973, Licenciado en Ciencias Jurídicas y Sociales de esa Universidad año 1974, Título de Abogado otorgado por la Corte Suprema de Chile el 26 de enero de 1976.
                            </p>
                            <p>
                                Abogado que ejerce liberalmente su profesión y agricultor, con vasta experiencia en materias civiles, comerciales, laborales y tributarias, y en el negocio de producción y comercialización de frutos secos. Abogado de Greenvic y Viconto desde los inicios.
                            </p>
                        </div><!-- /.team__text -->
                    </div><!-- /.team__item -->
                    <div class="team__item">
                        <div class="team__media fit--media">
                            <img src="http://i.imgur.com/CUdPltF.jpg" alt="Titulo">
                        </div><!-- /.team__media -->
                        <div class="team__title">
                            <p>Joss Fong</p>
                            <svg version="1.1" x="0px" y="0px" width="18px" height="18px" viewBox="0 0 18 18" enable-background="new 0 0 18 18" xml:space="preserve"><path fill="#FFFFF8" d="M8.2,9.8H7.7c-1.1,0-2.1,0-2.6,0.1c0,0-0.1-0.4-0.1-0.8c0-0.4,0.1-1,0.5-1c0,0,1.3,0.1,2.7,0.1h1.5h0.7 c1.1,0,2.1,0,2.4-0.1c0,0,0.1,0.4,0.1,1c0,0.4-0.1,0.7-0.3,0.7c0,0-1.3-0.1-2.9-0.1H8.2z"/><path fill="#FFFFF8" d="M8.2,8.3V7.7c0-1.1,0-2.1-0.1-2.6c0,0,0.4-0.1,0.8-0.1c0.4,0,1,0.1,1,0.5c0,0-0.1,1.3-0.1,2.7v1.5v0.7 c0,1.1,0,2.1,0.1,2.4c0,0-0.4,0.1-1,0.1c-0.4,0-0.7-0.1-0.7-0.3c0,0,0.1-1.3,0.1-2.9V8.3z"/><path fill="#FFFFF8" d="M16,2v14H2V2H16 M18,0H0v18h18V0L18,0z"/></svg>
                        </div><!-- /.team__title -->
                        <div class="team__text">
                            <p>
                                Estudios de derecho en la Universidad Católica de Chile 1969 – 1973, Licenciado en Ciencias Jurídicas y Sociales de esa Universidad año 1974, Título de Abogado otorgado por la Corte Suprema de Chile el 26 de enero de 1976.
                            </p>
                            <p>
                                Abogado que ejerce liberalmente su profesión y agricultor, con vasta experiencia en materias civiles, comerciales, laborales y tributarias, y en el negocio de producción y comercialización de frutos secos. Abogado de Greenvic y Viconto desde los inicios.
                            </p>
                        </div><!-- /.team__text -->
                    </div><!-- /.team__item -->
                    <div class="team__item">
                        <div class="team__media fit--media">
                            <img src="http://i.imgur.com/CUdPltF.jpg" alt="Titulo">
                        </div><!-- /.team__media -->
                        <div class="team__title">
                            <p>Joss Fong</p>
                            <svg version="1.1" x="0px" y="0px" width="18px" height="18px" viewBox="0 0 18 18" enable-background="new 0 0 18 18" xml:space="preserve"><path fill="#FFFFF8" d="M8.2,9.8H7.7c-1.1,0-2.1,0-2.6,0.1c0,0-0.1-0.4-0.1-0.8c0-0.4,0.1-1,0.5-1c0,0,1.3,0.1,2.7,0.1h1.5h0.7 c1.1,0,2.1,0,2.4-0.1c0,0,0.1,0.4,0.1,1c0,0.4-0.1,0.7-0.3,0.7c0,0-1.3-0.1-2.9-0.1H8.2z"/><path fill="#FFFFF8" d="M8.2,8.3V7.7c0-1.1,0-2.1-0.1-2.6c0,0,0.4-0.1,0.8-0.1c0.4,0,1,0.1,1,0.5c0,0-0.1,1.3-0.1,2.7v1.5v0.7 c0,1.1,0,2.1,0.1,2.4c0,0-0.4,0.1-1,0.1c-0.4,0-0.7-0.1-0.7-0.3c0,0,0.1-1.3,0.1-2.9V8.3z"/><path fill="#FFFFF8" d="M16,2v14H2V2H16 M18,0H0v18h18V0L18,0z"/></svg>
                        </div><!-- /.team__title -->
                        <div class="team__text">
                            <p>
                                Estudios de derecho en la Universidad Católica de Chile 1969 – 1973, Licenciado en Ciencias Jurídicas y Sociales de esa Universidad año 1974, Título de Abogado otorgado por la Corte Suprema de Chile el 26 de enero de 1976.
                            </p>
                            <p>
                                Abogado que ejerce liberalmente su profesión y agricultor, con vasta experiencia en materias civiles, comerciales, laborales y tributarias, y en el negocio de producción y comercialización de frutos secos. Abogado de Greenvic y Viconto desde los inicios.
                            </p>
                        </div><!-- /.team__text -->
                    </div><!-- /.team__item -->
                </div><!-- /.team__content -->
            </div><!-- /.team--important -->
            <div class="team--normal">
                <h3 class="section--title light--title">Gerencia</h3><!-- /.section--title -->
                <div class="team__content">
                    <div class="team__item">
                        <div class="team__media fit--media">
                            <img src="http://i.imgur.com/CUdPltF.jpg" alt="Titulo">
                        </div><!-- /.team__media -->
                        <div class="team__text">
                            <p class="team__title">Joss Fong</p>
                            <p>Gerente General</p>
                        </div><!-- /.team__text -->
                    </div><!-- /.team__item -->
                    <div class="team__item">
                        <div class="team__media fit--media">
                            <img src="http://i.imgur.com/CUdPltF.jpg" alt="Titulo">
                        </div><!-- /.team__media -->
                        <div class="team__text">
                            <p class="team__title">Álvaro Sepúlveda</p>
                            <p>Subgerencia Administración y Finanzas</p>
                        </div><!-- /.team__text -->
                    </div><!-- /.team__item -->
                    <div class="team__item">
                        <div class="team__media fit--media">
                            <img src="http://i.imgur.com/CUdPltF.jpg" alt="Titulo">
                        </div><!-- /.team__media -->
                        <div class="team__text">
                            <p class="team__title">Joss Fong</p>
                            <p>Gerente General</p>
                        </div><!-- /.team__text -->
                    </div><!-- /.team__item -->
                    <div class="team__item">
                        <div class="team__media fit--media">
                            <img src="http://i.imgur.com/CUdPltF.jpg" alt="Titulo">
                        </div><!-- /.team__media -->
                        <div class="team__text">
                            <p class="team__title">Joss Fong</p>
                            <p>Gerente General</p>
                        </div><!-- /.team__text -->
                    </div><!-- /.team__item -->
                    <div class="team__item">
                        <div class="team__media fit--media">
                            <img src="http://i.imgur.com/CUdPltF.jpg" alt="Titulo">
                        </div><!-- /.team__media -->
                        <div class="team__text">
                            <p class="team__title">Joss Fong</p>
                            <p>Gerente General</p>
                        </div><!-- /.team__text -->
                    </div><!-- /.team__item -->
                    <div class="team__item">
                        <div class="team__media fit--media">
                            <img src="http://i.imgur.com/CUdPltF.jpg" alt="Titulo">
                        </div><!-- /.team__media -->
                        <div class="team__text">
                            <p class="team__title">Joss Fong</p>
                            <p>Gerente General</p>
                        </div><!-- /.team__text -->
                    </div><!-- /.team__item -->
                </div><!-- /.team__content -->
            </div><!-- /.team--normal -->
        </div><!-- /.wrap -->
    </div><!-- /.team -->
</div><!-- /.container -->
<?php include 'footer.php'; ?>