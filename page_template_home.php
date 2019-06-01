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
                   <?php the_field('card_image_1'); ?>
                     <?php the_field('cards'); ?>

                <div class="col-sm-4">
                  <?php the_field('card_image_2'); ?>
                     <?php the_field('cards'); ?>
                </div>

                <div class="col-sm-4">
                    <?php the_field('card_image_3'); ?>
                     <?php the_field('cards'); ?>
                 
                </div>
                    
                </div>
            </div>
            </div>
            </div>


<?php get_footer(); /* Tells WordPress to include footer.php */ ?>