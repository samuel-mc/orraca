<?php 
    $title = isset($title) ? $title : 'Orraca';
    $isNavAbsolute = isset($isNavAbsolute) ? $isNavAbsolute : false;
?>

<header class="py-3 d-none d-lg-block <?php echo $isNavAbsolute ? "header__desk--absolute" : "header__desk" ?>">
    <div class="mw--1440 d-flex justify-content-between align-items-center">
        <img src="<?php echo __ROOT__; ?>/public/img/logo.png" alt="icono" class="w--128">
        <nav>
            <ul class="d-flex text--sm w-100 list--unstyled">
                <li class="mx-2"><a class="<?php echo $title == 'Inicio' ? 'a--orange text--bold' : 'a--white' ?>" href="<?php echo __ROOT__; ?>">Inicio</a></li>
                <li class="mx-2"><a class="<?php echo $title == 'Acerca' ? 'a--orange text--bold' : 'a--white' ?>" href="<?php echo __ROOT__; ?>/acerca">Acerca</a></li>
                <li class="mx-2"><a class="<?php echo $title == 'Nuestros restaurantes' ? 'a--orange text--bold' : 'a--white' ?>" href="<?php echo __ROOT__; ?>/nuestros-restaurantes">Nuestros restaurantes</a></li>
                <li class="mx-2"><a class="<?php echo $title == 'Únete al equipo' ? 'a--orange text--bold' : 'a--white' ?>" href="<?php echo __ROOT__; ?>/unete">Únete al equipo</a></li>
                <li class="mx-2"><a class="<?php echo $title == 'Galería' ? 'a--orange text--bold' : 'a--white' ?>" href="<?php echo __ROOT__; ?>/galeria">Galería</a></li>
            </ul>
        </nav>

        <a href="<?php echo __ROOT__; ?>/contacto" class="btn btn--white py-2 px-5 w--fit h--fit">
            Contacto
        </a>
    </div>
</header>

<header class="bg--blackBg p-2 d-lg-none w-100">
    <div class="d-flex justify-content-between w-100">
        <img src="<?php echo __ROOT__; ?>/public/img/logo.png" class="w--128">
        <button class="btn a--white btn--square px-3 text-white" onclick="toggleShowMenu()">
            <i class="fa-solid fa-bars"></i>
        </button>
    </div>
</header>
<nav class="h--screen notShowed position-fixed bg--blackBg w-100 py-4" id="mobileMenu" style="top: 0; z-index: 2;">
    <div class="d-flex flex-column justify-content-between px-4 py-2 h-100">
        <div class="d-flex justify-content-between p-2">
            <img src="<?php echo __ROOT__; ?>/public/img/logo.png" class="w--128">
            <button class="btn px-3" onclick="toggleShowMenu()">
                <i class="fa-solid fa-x text-danger"></i>
            </button>
        </div>
        <div class="my-10">
            <nav>
                <ul class="d-flex flex-column text--md w-100 list--unstyled">
                    <li class="my-2"><a class="<?php echo $title == 'Inicio' ? 'a--orange text--bold' : 'a--white' ?>" href="<?php echo __ROOT__; ?>">Inicio</a></li>
                    <li class="my-2"><a class="<?php echo $title == 'Acerca' ? 'a--orange text--bold' : 'a--white' ?>" href="<?php echo __ROOT__; ?>/acerca">Acerca</a></li>
                    <li class="my-2"><a class="<?php echo $title == 'Nuestros restaurantes' ? 'a--orange text--bold' : 'a--white' ?>" href="<?php echo __ROOT__; ?>/nuestros-restaurantes">Nuestros restaurantes</a></li>
                    <li class="my-2"><a class="<?php echo $title == 'Únete al equipo' ? 'a--orange text--bold' : 'a--white' ?>" href="<?php echo __ROOT__; ?>/unete">Únete al equipo</a></li>
                    <li class="my-2"><a class="<?php echo $title == 'Galería' ? 'a--orange text--bold' : 'a--white' ?>" href="<?php echo __ROOT__; ?>/galeria">Galería</a></li>
                </ul>
            </nav>
        </div>
        <div>
            <a href="<?php echo __ROOT__; ?>/contacto" class="btn btn--white py-3 px-5 w--fit h--fit">
                Contacto
            </a>
        </div>
    </div>
</nav>