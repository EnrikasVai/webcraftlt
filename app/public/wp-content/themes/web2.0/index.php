<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package webw2.0
 */
?>

<?php get_header(); ?>

<main>
    <div class="container">
        <div class="col-12 text-center mt-4 mb-5">
            <p class="banner space-grotesk text-secondary " style="font-size:80px;">Galimybės</p>
            <p class="banner text-primary" style="font-size:80px;">Prasideda čia</p>
            <p class="fs-2">Mūsų komanda padės Jums įgyvendinti visus Jūsų lūkesčius</p>
            <a href="<?php site_url() ?>/kontaktai/"><button type="button"
                    class="btn btn-outline-secondary rounded-pill fs-3">Susisiekite dabar!</button></a>
        </div>
        <?php //Karusele automatine pacios slenkasi foto ?>
        <div id="carouselExampleInterval" class="carousel slide rounded" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="">
                    <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.imagelighteditor.com%2Fimg%2Fbg-after.jpg&f=1&nofb=1&ipt=5106b730cefd04a5be46860f87206fa2b90e3fd998e6eaff696229f04bdb9e12&ipo=images"
                        class="d-block w-100 rounded" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="">
                    <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.imagelighteditor.com%2Fimg%2Fbg-after.jpg&f=1&nofb=1&ipt=5106b730cefd04a5be46860f87206fa2b90e3fd998e6eaff696229f04bdb9e12&ipo=images"
                        class="d-block w-100 rounded" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.imagelighteditor.com%2Fimg%2Fbg-after.jpg&f=1&nofb=1&ipt=5106b730cefd04a5be46860f87206fa2b90e3fd998e6eaff696229f04bdb9e12&ipo=images"
                        class="d-block w-100 rounded" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="col text-center">
            <p class="fs-1">Mūsų darbai</p>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fimages.pexels.com%2Fphotos%2F531880%2Fpexels-photo-531880.jpeg%3Fcs%3Dsrgb%26dl%3Dbackground-blur-clean-531880.jpg%26fm%3Djpg&f=1&nofb=1&ipt=f6aa84a53abd20594885a35eb05746803832946926669f1076c0fcb36f04cf98&ipo=images"
                    alt="" style="width: 98%;">
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="card border-secondary mb-3">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h4 class="card-title">Secondary card title</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fimages.pexels.com%2Fphotos%2F531880%2Fpexels-photo-531880.jpeg%3Fcs%3Dsrgb%26dl%3Dbackground-blur-clean-531880.jpg%26fm%3Djpg&f=1&nofb=1&ipt=f6aa84a53abd20594885a35eb05746803832946926669f1076c0fcb36f04cf98&ipo=images"
                    alt="" style="width: 98%;">
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="card border-secondary mb-3">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h4 class="card-title">Secondary card title</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fimages.pexels.com%2Fphotos%2F531880%2Fpexels-photo-531880.jpeg%3Fcs%3Dsrgb%26dl%3Dbackground-blur-clean-531880.jpg%26fm%3Djpg&f=1&nofb=1&ipt=f6aa84a53abd20594885a35eb05746803832946926669f1076c0fcb36f04cf98&ipo=images"
                    alt="" style="width: 98%;">
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="card border-secondary mb-3">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h4 class="card-title">Secondary card title</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 text-center mt-5">
            <a href="<?php site_url() ?>/kontaktai/"><button type="button"
                    class="btn btn-outline-secondary rounded-pill fs-3">Daugiau darbu</button></a>
        </div>

        <div class="col-12 border-primary text-center mt-4 mb-5">
            <p class="banner" style="font-size:80px;">Susisiekim</p>
            <a href="<?php site_url() ?>/kontaktai" style="" class="btn btn-primary">Susisiekite dabar!</a>
        </div>

    </div>
</main>

<?php get_footer(); ?>