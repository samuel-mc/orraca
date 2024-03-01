<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>

<main class="bg--blackBg">
    <section class="container-fluid text-white hero hero--uneteEquipo">
        <h2 class="text--2xl cormorant-upright-medium">Únete A Nuestro Equipo</h2>
        <h3 class="text--md cormorant-upright-medium" >Home > Únete</h3>
    </section>
    <section class="container-fluid p-5">
        <div class="grid--2cols">
            <div class="p-4 text-white">
                <h2 class="my-4 cormorant-upright-medium">Únete A Nuestro Equipo</h2>
                <form class="d-flex flex-column gap--24 text--md cormorant-upright-medium">
                    <input type="text" class="input__gray" placeholder="Nombre completo">
                    <input type="email" class="input__gray" placeholder="Email">
                    <input type="tel" class="input__gray" placeholder="Teléfono">
                    <input type="text" class="input__gray" placeholder="Puesto">
                    <!-- Hidden file input -->
                    <input type="file" id="cvInput" class="d-none">
                    <a href="#" class="a--grey" style="text-decoration: underline;"
                        onclick="document.getElementById('cvInput').click(); return false;">Adjuntar CV</a>
                    <div>
                        <button class="btn btn--orange">Enviar postulación</button>
                    </div>
                </form>
            </div>
            <div>
                <img src="<?php echo __ROOT__; ?>/public/img/uneteEquipo/empleado.png" class="w-100">
            </div>
        </div>
    </section>
</main>

<?php include 'partials/footer.php'; ?>