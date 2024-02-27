<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>
<main>
    <section class="container-fluid p-0 home__hero">
        <div class="home__hero--text cormorant-upright-medium">
            <h2>En</h2>
            <img src="<?php echo __ROOT__; ?>/public/img/logo.png" class="w-100">
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
</main>

<script src="<?php echo __ROOT__; ?>/public/js/splide/dist/js/splide.min.js"></script>
<script>
    var splide = new Splide('#carouselHero', {
        // autoplay: true,
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
        // autoScroll: {
        //     speed: 2,
        // },
    });

    splide.mount();
</script>
<?php include 'partials/footer.php'; ?>