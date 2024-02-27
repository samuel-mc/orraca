<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>
<main id="home">
    <section class="container-fluid p-0 home__hero">
        <div class="home__hero--text cormorant-upright-medium">
            <h2>En</h2>
            <img src="<?php echo __ROOT__; ?>/public/img/logo.png">
            <h2>Amamos lo que hacemos</h2>
        </div>
        <div id="carouselHero" class="splide" aria-label="Splide Basic HTML Example">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide mx-0">
                        <img src="<?php echo __ROOT__; ?>/public/img/home/hero1.png" class="w-100">
                    </li>
                    <li class="splide__slide mx-0">
                        <img src="<?php echo __ROOT__; ?>/public/img/home/hero3.png" class="w-100">
                    </li>
                    <li class="splide__slide mx-0">
                        <img src="<?php echo __ROOT__; ?>/public/img/home/hero2.png" class="w-100">
                    </li>
                    <li class="splide__slide mx-0">
                        <img src="<?php echo __ROOT__; ?>/public/img/home/hero4.png" class="w-100">
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="container-fluid p-2 py-4 row text-white">
        <div class="d-flex flex-column justify-content-between align-items-end p-3 col-md-5">
            <h3 class="cormorant-upright-medium text--2xl text--end">Acerca de nosotros</h3>
            <img src="<?php echo __ROOT__; ?>/public/img/home/figuraNaranja.png">
            <p class="text--white-light text--sm text--end">
                Con más de 30 años en la industria restaurantera, nos enorgullecemos de ser una potencia culinaria que combina innovación, tradición, experiencia y sabor.
            </p>
            <a href="<?php echo __ROOT__; ?>/contacto" class="btn btn--white py-2 px-5 w--fit h--fit">
                Conoce más
            </a>
        </div>
        <div class="p-3 py-4 col-md-2 text-center">
            <img src="<?php echo __ROOT__; ?>/public/img/home/cuchillo.png" id="cuchilloNosotros">
            <img src="<?php echo __ROOT__; ?>/public/img/home/cuchillo90.png" id="cuchilloNosotros90">
        </div>
        <div class="d-flex flex-column justify-content-between p-3 col-md-5">
            <h3 class="cormorant-upright-medium text--2xl">Nuestros restaurantes</h3>
            <img src="<?php echo __ROOT__; ?>/public/img/home/figuraNaranja.png" style="transform: rotate(180deg); width: 40px;">
            <p class="text--white-light text--sm">
                Cada uno de los restaurantes en Orraca Restauranteros, cuenta con su propia esencia que los hace únicos a los ojos de quienes los conocen; pero existe un sentimiento que hace que todos nuestros restaurantes sean como uno solo, ese sentimiento se llama PASIÓN. </p>
            <a href="<?php echo __ROOT__; ?>/contacto" class="btn btn--white py-2 px-5 w--fit h--fit">
                Conoce más
            </a>
        </div>
    </section>
    <section class="container-fluid p-2 p-sm-5 text-white cormorant-upright-medium text-center" id="sectionQuote">
        <div class="w-100 mw--640 py-5">
            <i class="fa-solid fa-quote-left fa-4x mb-5"></i>
            <p class="text--xl">"La excelencia no existe, pero nunca nos cansaremos de buscarla"</p>
            <p class="text--lg">Manuel Orraca Manero</p>
        </div>
    </section>
    <section class="container-fluid p-0">
        <header class="text-center py-5">
            <h2 class="text--xl cormorant-upright-medium text-white">¡Conoce nuestros restaurantes!</h2>
        </header>
        <div class="grid--4cols gap--0 w-100">
            <div class="restaurantes__item">
                <img src="<?php echo __ROOT__; ?>/public/img/home/nRestaurantes1.png" class="w-100 restaurantes__back">
                <img src="<?php echo __ROOT__; ?>/public/img/home/nRestaurantes1Logo.png" class="restaurantes__logo">
            </div>
            <div class="restaurantes__item">
                <img src="<?php echo __ROOT__; ?>/public/img/home/nRestaurantes2.png" class="w-100 restaurantes__back">
                <img src="<?php echo __ROOT__; ?>/public/img/home/nRestaurantes2Logo.png" class="restaurantes__logo">
            </div>
            <div class="restaurantes__item">
                <img src="<?php echo __ROOT__; ?>/public/img/home/nRestaurantes3.png" class="w-100 restaurantes__back">
                <img src="<?php echo __ROOT__; ?>/public/img/home/nRestaurantes3Logo.png" class="restaurantes__logo">
            </div>
            <div class="restaurantes__item">
                <img src="<?php echo __ROOT__; ?>/public/img/home/nRestaurantes4.png" class="w-100 restaurantes__back">
                <img src="<?php echo __ROOT__; ?>/public/img/home/nRestaurantes4Logo.png" class="restaurantes__logo">
            </div>
        </div>
    </section>
</main>

<script src="<?php echo __ROOT__; ?>/public/js/splide/dist/js/splide.min.js"></script>
<script>
    var splide = new Splide('#carouselHero', {
        autoplay: true,
        type: 'loop',
        gap: '1.6rem',
        perPage: 1,
        perMove: 1,
        isNavigation: false,
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
            speed: 2,
        },
    });

    splide.mount();
</script>
<?php include 'partials/footer.php'; ?>