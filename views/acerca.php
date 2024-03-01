<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>

<main class="bg--blackBg">
    <section class="container-fluid text-white hero hero--acerca">
        <div>
            <img src="<?php echo __ROOT__; ?>/public/img/acerca/logo.png" class="w-100">
        </div>
        <h3 class="text--md cormorant-upright-medium" >Home > Acerca De Nosotros</h3>
    </section>
    <section class="container-fluid p-xl-4 p-0 cormorant-upright-medium text-white">
        <div>
            <div class="text-center">
                <h2 class="text--md m-0">Nuestra Historia</h2>
                <img src="<?php echo __ROOT__; ?>/public/img/home/figuraNaranja.png" style="transform: rotate(180deg); width: 40px;">
                <h2 class="text--xl my-4">Más de Treinta Años apasionados por servirte</h2>
            </div>
            <div class="grid--2cols gap--24 px-4 my-4">
                <div class="d-flex flex-column justify-content-center px-0 px-xl-4">
                    <p class="text--white-light text--md">Tenemos un compromiso por buscar continuamente nuevas formas de mejorar la experiencia gastronómica y optimizar nuestras operaciones.</p>
                    <img src="<?php echo __ROOT__; ?>/public/img/acerca/historia1.png" class="img-fluid">
                </div>
                <div class="d-flex flex-column px-0 px-xl-4" style="top: 0; ">
                    <img src="<?php echo __ROOT__; ?>/public/img/acerca/historia2.png" class="img-fluid">
                    <h2 class="text--xl py-4">A Lo Largo De Los Años</h2>
                    <div class="grid--3cols">
                        <div>
                            <h2 class="text--xl">30+</h2>
                            <img src="<?php echo __ROOT__; ?>/public/img/acerca/figuraBlanca.png" style="width: 40px;">
                            <h2 class="text--lg">Años De <br> Historia</h2>
                        </div>
                        <div>
                            <h2 class="text--xl">50+</h2>
                            <img src="<?php echo __ROOT__; ?>/public/img/acerca/figuraBlanca.png" style="width: 40px;">
                            <h2 class="text--lg">Locales <br> Físicos</h2>
                        </div>
                        <div>
                            <h2 class="text--xl">2</h2>
                            <img src="<?php echo __ROOT__; ?>/public/img/acerca/figuraBlanca.png" style="width: 40px;">
                            <h2 class="text--lg">Presencia en <br> Dos Paises</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="carouselAcerca" class="splide" aria-label="Splide Basic HTML Example">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide mx-0 grid--2cols gap--24">
                        <div class="d-flex flex-column justify-content-center p-0 p-xl-5">
                            <img src="<?php echo __ROOT__; ?>/public/img/acerca/slider/1.png" class="img-fluid">
                        </div>
                        <div class="d-flex flex-row justify-content-between align-items-center px-5">
                            <i class="fa-solid fa-angle-left p-3" id="btnPrev" onclick="splideNext(0)"></i>
                            <div>
                                <h2 class="text--lg">1979</h2>
                                <img src="<?php echo __ROOT__; ?>/public/img/home/figuraNaranja.png" style="transform: rotate(180deg); width: 40px;">
                                <h1 class="text--2xl">Inicia La Travesía</h1>
                            </div>
                            <i class="fa-solid fa-angle-right p-3" id="btnPrev" onclick="splideNext(1)"></i>
                        </div>
                    </li>
                    <li class="splide__slide mx-0 grid--2cols gap--24">
                        <div class="d-flex flex-column justify-content-center p-0 p-xl-5">
                            <img src="<?php echo __ROOT__; ?>/public/img/acerca/slider/2.png" class="img-fluid">
                        </div>
                        <div class="d-flex flex-row justify-content-between align-items-center px-5">
                            <i class="fa-solid fa-angle-left p-3" id="btnPrev" onclick="splideNext(0)"></i>
                            <div>
                                <h2 class="text--lg">1981</h2>
                                <img src="<?php echo __ROOT__; ?>/public/img/home/figuraNaranja.png" style="transform: rotate(180deg); width: 40px;">
                                <h1 class="text--2xl">Primeros <br>Restaurantes <br>En Puebla</h1>
                            </div>
                            <i class="fa-solid fa-angle-right p-3" id="btnPrev" onclick="splideNext(1)"></i>
                        </div>
                    </li>
                    <li class="splide__slide mx-0 grid--2cols gap--24">
                        <div class="d-flex flex-column justify-content-center p-0 p-xl-5">
                            <img src="<?php echo __ROOT__; ?>/public/img/acerca/slider/3.png" class="img-fluid">
                        </div>
                        <div class="d-flex flex-row justify-content-between align-items-center px-5">
                            <i class="fa-solid fa-angle-left p-3" id="btnPrev" onclick="splideNext(0)"></i>
                            <div>
                                <h2 class="text--lg">1988-1994</h2>
                                <img src="<?php echo __ROOT__; ?>/public/img/home/figuraNaranja.png" style="transform: rotate(180deg); width: 40px;">
                                <h1 class="text--2xl">Carlos o’Harrys <br>Barraca Orraca<br>Y Carlos’n <br>Charlie’s</h1>
                            </div>
                            <i class="fa-solid fa-angle-right p-3" id="btnPrev" onclick="splideNext(1)"></i>
                        </div>
                    </li>
                    <li class="splide__slide mx-0 grid--2cols gap--24">
                        <div class="d-flex flex-column justify-content-center p-0 p-xl-5">
                            <img src="<?php echo __ROOT__; ?>/public/img/acerca/slider/4.png" class="img-fluid">
                        </div>
                        <div class="d-flex flex-row justify-content-between align-items-center px-5">
                            <i class="fa-solid fa-angle-left p-3" id="btnPrev" onclick="splideNext(0)"></i>
                            <div>
                                <h2 class="text--lg">1994</h2>
                                <img src="<?php echo __ROOT__; ?>/public/img/home/figuraNaranja.png" style="transform: rotate(180deg); width: 40px;">
                                <h1 class="text--2xl">Nace <br> “Grupo Orraca <br> Restauranteros” </h1>
                            </div>
                            <i class="fa-solid fa-angle-right p-3" id="btnPrev" onclick="splideNext(1)"></i>
                        </div>
                    </li>
                    <li class="splide__slide mx-0 grid--2cols gap--24">
                        <div class="d-flex flex-column justify-content-center p-0 p-xl-5">
                            <img src="<?php echo __ROOT__; ?>/public/img/acerca/slider/5.png" class="img-fluid">
                        </div>
                        <div class="d-flex flex-row justify-content-between align-items-center px-5">
                            <i class="fa-solid fa-angle-left p-3 p-2" id="btnPrev" onclick="splideNext(0)"></i>
                            <div>
                                <h2 class="text--lg">1995-2005</h2>
                                <img src="<?php echo __ROOT__; ?>/public/img/home/figuraNaranja.png" style="transform: rotate(180deg); width: 40px;">
                                <h1 class="text--2xl">La Calle,<br> La Destilería,<br> Barraca Orraca <br>Vino  E Cucina,<br> El Mercado Y <br>BO Oyster Bar</h1>
                            </div>
                            <i class="fa-solid fa-angle-right p-3" id="btnPrev" onclick="splideNext(1)"></i>
                        </div>
                    </li>
                    <li class="splide__slide mx-0 grid--2cols gap--24">
                        <div class="d-flex flex-column justify-content-center p-0 p-xl-5">
                            <img src="<?php echo __ROOT__; ?>/public/img/acerca/slider/6.png" class="img-fluid">
                        </div>
                        <div class="d-flex flex-row justify-content-between align-items-center px-5">
                            <i class="fa-solid fa-angle-left p-3" id="btnPrev" onclick="splideNext(0)"></i>
                            <div>
                                <h2 class="text--lg">2007</h2>
                                <img src="<?php echo __ROOT__; ?>/public/img/home/figuraNaranja.png" style="transform: rotate(180deg); width: 40px;">
                                <h1 class="text--2xl">Venta De<br> Restaurantes<br> A CRM</h1>
                            </div>
                            <i class="fa-solid fa-angle-right p-3" id="btnPrev" onclick="splideNext(1)"></i>
                        </div>
                    </li>
                    <li class="splide__slide mx-0 grid--2cols gap--24">
                        <div class="d-flex flex-column justify-content-center p-0 p-xl-5">
                            <img src="<?php echo __ROOT__; ?>/public/img/acerca/slider/7.png" class="img-fluid">
                        </div>
                        <div class="d-flex flex-row justify-content-between align-items-center px-5">
                            <i class="fa-solid fa-angle-left p-3" id="btnPrev" onclick="splideNext(0)"></i>
                            <div>
                                <h2 class="text--lg">2008</h2>
                                <img src="<?php echo __ROOT__; ?>/public/img/home/figuraNaranja.png" style="transform: rotate(180deg); width: 40px;">
                                <h1 class="text--2xl">Nortesur</h1>
                            </div>
                            <i class="fa-solid fa-angle-right p-3" id="btnPrev" onclick="splideNext(1)"></i>
                        </div>
                    </li>
                    <li class="splide__slide mx-0 grid--2cols gap--24">
                        <div class="d-flex flex-column justify-content-center p-0 p-xl-5">
                            <img src="<?php echo __ROOT__; ?>/public/img/acerca/slider/8.png" class="img-fluid">
                        </div>
                        <div class="d-flex flex-row justify-content-between align-items-center px-5">
                            <i class="fa-solid fa-angle-left p-3" id="btnPrev" onclick="splideNext(0)"></i>
                            <div>
                                <h2 class="text--lg">2014</h2>
                                <img src="<?php echo __ROOT__; ?>/public/img/home/figuraNaranja.png" style="transform: rotate(180deg); width: 40px;">
                                <h1 class="text--2xl">Hacienda<br> San Martín</h1>
                            </div>
                            <i class="fa-solid fa-angle-right p-3" id="btnPrev" onclick="splideNext(1)"></i>
                        </div>
                    </li>
                    <li class="splide__slide mx-0 grid--2cols gap--24">
                        <div class="d-flex flex-column justify-content-center p-0 p-xl-5">
                            <img src="<?php echo __ROOT__; ?>/public/img/acerca/slider/9.png" class="img-fluid">
                        </div>
                        <div class="d-flex flex-row justify-content-between align-items-center px-5">
                            <i class="fa-solid fa-angle-left p-3" id="btnPrev" onclick="splideNext(0)"></i>
                            <div>
                                <h2 class="text--lg">2016</h2>
                                <img src="<?php echo __ROOT__; ?>/public/img/home/figuraNaranja.png" style="transform: rotate(180deg); width: 40px;">
                                <h1 class="text--2xl">Las Verdes <br>Matas</h1>
                            </div>
                            <i class="fa-solid fa-angle-right p-3" id="btnPrev" onclick="splideNext(1)"></i>
                        </div>
                    </li>
                    <li class="splide__slide mx-0 grid--2cols gap--24">
                        <div class="d-flex flex-column justify-content-center p-0 p-xl-5">
                            <img src="<?php echo __ROOT__; ?>/public/img/acerca/slider/10.png" class="img-fluid">
                        </div>
                        <div class="d-flex flex-row justify-content-between align-items-center px-5">
                            <i class="fa-solid fa-angle-left p-3" id="btnPrev" onclick="splideNext(0)"></i>
                            <div>
                                <h2 class="text--lg">2017</h2>
                                <img src="<?php echo __ROOT__; ?>/public/img/home/figuraNaranja.png" style="transform: rotate(180deg); width: 40px;">
                                <h1 class="text--2xl">Fonda <br>Yecapixtla Y<br> Taller De Tacos</h1>
                            </div>
                            <i class="fa-solid fa-angle-right p-3" id="btnPrev" onclick="splideNext(1)"></i>
                        </div>
                    </li>
                    <li class="splide__slide mx-0 grid--2cols gap--24">
                        <div class="d-flex flex-column justify-content-center p-0 p-xl-5">
                            <img src="<?php echo __ROOT__; ?>/public/img/acerca/slider/11.png" class="img-fluid">
                        </div>
                        <div class="d-flex flex-row justify-content-between align-items-center px-5">
                            <i class="fa-solid fa-angle-left p-3" id="btnPrev" onclick="splideNext(0)"></i>
                            <div>
                                <h2 class="text--lg">2018-2022</h2>
                                <img src="<?php echo __ROOT__; ?>/public/img/home/figuraNaranja.png" style="transform: rotate(180deg); width: 40px;">
                                <h1 class="text--2xl">Continuamos El Crecimiento De Fonda Yecapixtla Y Nos Renovamos Para Enfrentar Un Nuevo Reto.</h1>
                            </div>
                            <i class="fa-solid fa-angle-right p-3" id="btnPrev" onclick="splideNext(1)"></i>
                        </div>
                    </li>
                    <li class="splide__slide mx-0 grid--2cols gap--24">
                        <div class="d-flex flex-column justify-content-center p-0 p-xl-5">
                            <img src="<?php echo __ROOT__; ?>/public/img/acerca/slider/12.png" class="img-fluid">
                        </div>
                        <div class="d-flex flex-row justify-content-between align-items-center px-5">
                            <i class="fa-solid fa-angle-left p-3" id="btnPrev" onclick="splideNext(0)"></i>
                            <div>
                                <h2 class="text--lg">2023</h2>
                                <img src="<?php echo __ROOT__; ?>/public/img/home/figuraNaranja.png" style="transform: rotate(180deg); width: 40px;">
                                <h1 class="text--2xl">Nace El Primer Restaurante De Orraca Restauranteros En Estados Unidos. Abrimos Santa Diabla - Cocina Mexicana En San Antonio Texas</h1>
                            </div>
                            <i class="fa-solid fa-angle-right p-3" id="btnPrev" onclick="splideNext(1)"></i>
                        </div>
                    </li>
                    <li class="splide__slide mx-0 grid--2cols gap--24">
                        <div class="d-flex flex-column justify-content-center p-0 p-xl-5">
                            <img src="<?php echo __ROOT__; ?>/public/img/acerca/slider/13.png" class="img-fluid">
                        </div>
                        <div class="d-flex flex-row justify-content-between align-items-center px-5">
                            <i class="fa-solid fa-angle-left p-3" id="btnPrev" onclick="splideNext(0)"></i>
                            <div>
                                <h2 class="text--lg">2024</h2>
                                <img src="<?php echo __ROOT__; ?>/public/img/home/figuraNaranja.png" style="transform: rotate(180deg); width: 40px;">
                                <h1 class="text--2xl"> Abrimos Santa Birria, <br>El Segundo Concepto Del <br>Grupo En San Antonio, Texas</h1>
                            </div>
                            <i class="fa-solid fa-angle-right p-3" id="btnPrev" onclick="splideNext(1)"></i>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div>
            <div class="text-center">
                <h2 class="text--xl mt-0 mt-lg-4">Filosofía</h2>
            </div>
            <div class="grid--2cols gap--24 px-4 my-4">
                <div class="d-flex flex-column justify-content-center px-xl-4 px-0 nrestaurantes__itm">
                    <div class="mx-0 mx-xl-4 px-2 p-xl-4">
                        <p class="text--white-light text--lg">
                        Nuestra filosofía está basada en la honestidad como valor fundamental, trabajar en equipo, tratando siempre de que todos los que integramos la familia de colaboradores en ORRACA RESTAURANTEROS mejoremos como personas y como profesionales, cumpliendo y superando las expectativas de nuestros clientes a través de un concepto único que unifica “tradición y vanguardia”.
                        </p>
                    </div>
                </div>
                <div class="d-flex flex-column m-xl-4 mx-0">
                    <img src="<?php echo __ROOT__; ?>/public/img/acerca/filosofia.png" class="img-fluid">
                </div>
            </div>
        </div>
        <div>
            <div class="text-center">
                <h2 class="text--xl mt-0 mt-lg-4">Misión</h2>
            </div>
            <div class="grid--2cols gap--24 px-4 my-4">
                <div class="d-flex flex-column m-xl-4 m-0">
                    <img src="<?php echo __ROOT__; ?>/public/img/acerca/mision.png" class="img-fluid">
                </div>
                <div class="d-flex flex-column justify-content-center px-xl-4 px-0 nrestaurantes__itm">
                    <div class="mx-0 mx-xl-4 px-2 p-xl-4">
                        <p class="text--white-light text--lg">
                        “Sobrepasar las expectativas de nuestros invitados, día a día”.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="text-center">
                <h2 class="text--xl mt-0 mt-lg-4">Visión</h2>
            </div>
            <div class="grid--2cols gap--24 px-4 my-4">
                <div class="d-flex flex-column justify-content-center px-xl-4 px-0 nrestaurantes__itm">
                    <div class="mx-0 mx-xl-4 px-2 p-xl-4">
                        <p class="text--white-light text--lg">
                        Ser un grupo de restaurantes competitivo y vanguardista dentro de un excelente ambiente de trabajo, donde nuestros colaboradores tengan desarrollo personal, profesional y económico, al mismo tiempo que compartimos nuestros valores con los invitados, proveedores y socios de ORRACA RESTAURANTEROS.
                        </p>
                    </div>
                </div>
                <div class="d-flex flex-column m-xl-4 m-0">
                    <img src="<?php echo __ROOT__; ?>/public/img/acerca/vision.png" class="img-fluid">
                </div>
            </div>
        </div>
        <div>
            <div class="text-center">
                <h2 class="text--xl mt-0 mt-lg-4">Nuestros valores</h2>
            </div>
            <div class="grid--2cols gap--24 px-4 mt-4 mb-0">
                <div class="d-flex flex-column m-xl-4 mx-0">
                    <img src="<?php echo __ROOT__; ?>/public/img/acerca/mision.png" class="img-fluid">
                </div>
                <div class="px-xl-4 px-0 grid--3cols text--md">
                    <div>
                        <h2>Honestidad</h2>
                        <p class="text--white-light">
                            Entre todos los que integramos la familia ORRACA RESTAURANTEROS: colaboradores, inversionistas y directivos, así como honestidad y transparencia hacia nuestros invitados.
                        </p>
                    </div>

                    <div>
                        <h2>Humildad</h2>
                        <p class="text--white-light">
                        Para saber que nuestras experiencias tienen un largo camino por recorrer, reconociendo que nuestros conocimientos pueden ser alimentados cada día mediante las críticas constructivas que recibamos en nuestro trabajo.
                        </p>
                    </div>
                    <div>
                        <h2>Respeto</h2>
                        <p class="text--white-light">
                        Hacia nuestros compañeros de trabajo, inversionistas, invitados y hacia nuestro propio trabajo.
                        </p>
                    </div>
                    <div>
                        <h2>Compromiso</h2>
                        <p class="text--white-light">
                        Del equipo de trabajo hacia nuestra empresa ORRACA RESTAURANTEROS, exigiéndonos día a día desarrollar nuestro máximo potencial y comprometiéndonos al mismo tiempo, a dar lo mejor de nosotros mismos a cada uno de nuestros invitados.
                        </p>
                    </div>
                    <div>
                        <h2>Compañerismo</h2>
                        <p class="text--white-light">
                        Pues tenemos siempre presente que el trabajo en equipo y el apoyo hacia los demás, nos han permitido llegar a la posición privilegiada en la que nos encontramos.
                        </p>
                    </div>

                    
                </div>
            </div>
        </div>

    </section>
</main>

<?php include 'partials/footer.php'; ?>

<script src="<?php echo __ROOT__; ?>/public/js/splide/dist/js/splide.min.js"></script>
<script>
    var splide = new Splide('#carouselAcerca', {
        autoplay: true,
        type: 'loop',
        gap: '1.6rem',
        perPage: 1,
        perMove: 1,
        isNavigation: false,
        arrows: false,
        breakpoints: {
            1024: {
                perPage: 1,
                gap: '1rem',
            },
            480: {
                perPage: 1,
                gap: '1rem',
            },
        },
        autoScroll: {
            speed: 1,
        },
    });
    splide.mount();
    function splideNext(avanza) {
        if (avanza == 1){
            splide.go('+1')
        } else {
            splide.go('-1')
        }
    }

</script>