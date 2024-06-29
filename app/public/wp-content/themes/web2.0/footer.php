<footer class="container">
    <div class="row mb-3">
        <div class="col-sm-12 col-md-4">
            <p class="fs-3">Socialiniai tinklai</p>
            <a href="">
                <i class="bi bi-facebook fs-1 pe-3"></i>
            </a>
            <a href="">
                <i class="bi bi-instagram fs-1"></i>
            </a>
        </div>
        <div class="col-sm-12 col-md-4">
            <p class="fs-3">Pagalba</p>
            <ul class="m-0 p-0">
                <a href="<?php site_url() ?>/privatumo-politika/">
                    <li>Privatumo politika</li>
                </a>
                <a href="<?php site_url() ?>/taisykles/">
                    <li>Taisyklės</li>
                </a>
                <a href="<?php site_url() ?>/kontaktai/">
                    <li>Kontaktai</li>
                </a>
                <a href="<?php site_url() ?>/apie-mus/">
                    <li>Apie mus</li>
                </a>
                <a href="<?php site_url() ?>/paslaugos/">
                    <li>Paslaugos</li>
                </a>
            </ul>
        </div>
        <div class="col-sm-12 col-md-4">
            <p class="fs-3">Kontaktai</p>
            <a href="mailto:">mail@mail.com</a>
        </div>
    </div>
    <div class="col-12 border-top">
        <p class="text-center mt-3">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>