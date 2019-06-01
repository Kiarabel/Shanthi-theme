<?php
    /*
    Template Name: Home page

    */
    ?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>

<div class="container-fluid cardsselection">
        <div class="container">
            <div class="row">

                <div class="col-sm-4">
                   <?php the_field('cards_image'); ?>
                     <?php the_field('cardstext'); ?>

                <div class="col-sm-4">
                    <img src=http://localhost:8080/shanthi-wordpress/wp-content/themes/shanthi-theme/images/Valentine.jpg> <h3>Valentine's</h3>
                    <p class=cardstext>Give your loved one a card made with lots of love. Hearts in any colours available in the colour wheel!</p>
                </div>

                <div class="col-sm-4">
                    <img src=http://localhost:8080/shanthi-wordpress/wp-content/themes/shanthi-theme/images/Mothersday.jpg> <h3>Mother's Day</h3>
                    <p class="cardstext">A day for the most beautiful woman on Earth! Treat her with amazing visuals from our range of cards.</p>
                </div>


<?php get_footer(); /* Tells WordPress to include footer.php */ ?>