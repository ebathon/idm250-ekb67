<header>
<nav class="navbar">
    <a href="<?php echo get_home_url();?>">
        <h1>The Cornerstone</h1>
    </a>
    <?php wp_nav_menu([
        'theme_location'=> 'primary'
    ]); ?>

    </header>
    <?php if (!is_front_page()) {
    echo '<h2>' . get_the_title() . '</h2>';
}
?>