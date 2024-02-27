<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>

<main class="bg--blackBg">
    <section class="container-fluid text-white hero hero--nuestrosRestaurantes">
        <h2 class="text--2xl cormorant-upright-medium">Nuestros restaurantes</h2>
        <h3 class="text--md cormorant-upright-medium" >Home > Restaurantes</h3>
    </section>
    <section class="container-fluid nrestaurantes__grid p-5">
        <div class="nrestaurantes__itm itm--1">
            <div>
                <img src="<?php echo __ROOT__; ?>/public/img/nuestrosRestaurantes/rest1.png" class="w-100">
            </div>
            <footer class="text-white text-center p-2">
                <h3>NorteSur</h3>
                <a href="#" class="a--white">Ver restaurante</a>
            </footer>
        </div>
        <div class="nrestaurantes__itm itm--2">
            <div>
                <img src="<?php echo __ROOT__; ?>/public/img/nuestrosRestaurantes/rest2.png" class="w-100">
            </div>
            <footer class="text-white text-center p-2">
                <h3>Fonda Yecapixtla</h3>
                <a href="#" class="a--white">Ver restaurante</a>
            </footer>
        </div>
        <div class="nrestaurantes__itm itm--3">
            <div>
                <img src="<?php echo __ROOT__; ?>/public/img/nuestrosRestaurantes/rest3.png" class="w-100">
            </div>
            <footer class="text-white text-center p-2">
                <h3>Hacienda San Martín</h3>
                <a href="#" class="a--white">Ver restaurante</a>
            </footer>
        </div>
        <div class="nrestaurantes__itm itm--4">
            <div>
                <img src="<?php echo __ROOT__; ?>/public/img/nuestrosRestaurantes/rest4.png" class="w-100">
            </div>
            <footer class="text-white text-center p-2">
                <h3>Santa Diabla - Cocina Mexicana</h3>
                <a href="#" class="a--white">Ver restaurante</a>
            </footer>
        </div>
    </section>
</main>

<?php include 'partials/footer.php'; ?>