<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>

<main class="bg--blackBg">
    <section class="container-fluid text-white hero hero--contacto">
        <h2 class="text--2xl cormorant-upright-medium">Contacto</h2>
        <h3 class="text--md cormorant-upright-medium" >Home > Contacto</h3>
    </section>
    <section class="container-fluid p-5">
        <div class="grid--2cols">
            <div class="p-4 text-white">
                <h2 class="my-4 cormorant-upright-medium">Ponte en contacto con nosotros</h2>
                <form class="d-flex flex-column gap--24 text--md cormorant-upright-medium">
                    <input type="text" class="input__gray" placeholder="Nombre completo">
                    <input type="email" class="input__gray" placeholder="Email">
                    <textarea class="input__gray" placeholder="Mensaje" rows="6" ></textarea>
                    <div>
                        <button class="btn btn--orange">Enviar mensaje</button>
                    </div>
                </form>
            </div>
            <div class="position-relative d-flex justify-content-center align-items-center">
                <img src="<?php echo __ROOT__; ?>/public/img/contacto/foto.png" class="img-fluid position-absolute" style="top: 0; left: 25%;">
                <img src="<?php echo __ROOT__; ?>/public/img/contacto/logo.png" class="img-fluid position-absolute" style="bottom: 0; left: 20%;">
            </div>
        </div>
    </section>
</main>

<?php include 'partials/footer.php'; ?>