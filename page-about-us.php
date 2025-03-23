<?php get_header(); ?>

<div class="page-title"><?php the_title( '<h2>', '</h2>' ); ?></div>
<div class="about-container">
    <div class="about-title-div"><span class="about-title"><h3><?php echo get_theme_mod('title_1', 'Titolo di default'); ?></h3></span></div>
    <div class="about-text-div"><p class="about-text"><?php echo get_theme_mod('description_1', 'Descrizione di default'); ?></p></div>
    <div class="about-title-div"><span class="about-title"><h3><?php echo get_theme_mod('title_2', 'Titolo di default'); ?></h3></span></div>
    <div class="about-text-div"><p class="about-text"><?php echo get_theme_mod('description_2', 'Descrizione di default'); ?></p></div>
    <div class="about-title-div"><span class="about-title"><h3><?php echo get_theme_mod('title_3', 'Titolo di default'); ?></h3></span></div>
    <div class="about-text-div"><p class="about-text"><?php echo get_theme_mod('description_3', 'Descrizione di default'); ?></p></div>
    
</div>

<?php get_footer(); ?>