<?php get_header(); ?>

<?php
if ( is_page('home') ) {
    get_template_part('page', 'home'); // cerca il file page-home.php
} elseif ( is_page('rooms') ) {
    get_template_part('page', 'rooms'); // cerca il file page-rooms.php
} elseif ( is_page('contact-us') ) {
    get_template_part('page', 'contact-us'); // cerca page-contact-us.php
} elseif ( is_page('about-us') ) {
    get_template_part('page', 'about-us'); // cerca about-us-page.php
} else {
    ?>
    <h1>Pagina Generica</h1>
    <p>Questa è una pagina predefinita.</p>
    <?php
}
?>

<?php get_footer(); ?>