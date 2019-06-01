<?php get_header(); /* Tells WordPress to include header.php */ ?>

    <div class="container-fluid get-to-know">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img class="img-responsive" src="http://localhost:8080/shanthi-wordpress/wp-content/themes/shanthi-theme/images/Shanthi.png">
                </div>

                <section class="col-md-8 text-right">
                   <div class="gettoknow-body">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('second_tag') ) : 
endif; ?>
                    </div>
                    <button type="button" class="btn-about"> Read More
                    </button>


                </section>
            </div>
        </div>
    </div>

    <div class="container-fluid cardsselection">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 ">
                   <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('cards') ) : 
endif; ?>
                </div>

                <div class="col-sm-4">
                    <img src=http://localhost:8080/shanthi-wordpress/wp-content/themes/shanthi-theme/images/Butterfly%20copy.jpg> <h3>Birthday</h3>
                    <p class="cardstext">Someone's Birthday? Order a birthday card now, complete with a personalized message just for them.</p>
                </div>

                <div class="col-sm-4">
                    <img src=http://localhost:8080/shanthi-wordpress/wp-content/themes/shanthi-theme/images/Valentine.jpg> <h3>Valentine's</h3>
                    <p class=cardstext>Give your loved one a card made with lots of love. Hearts in any colours available in the colour wheel!</p>
                </div>

                <div class="col-sm-4">
                    <img src=http://localhost:8080/shanthi-wordpress/wp-content/themes/shanthi-theme/images/Mothersday.jpg> <h3>Mother's Day</h3>
                    <p class="cardstext">A day for the most beautiful woman on Earth! Treat her with amazing visuals from our range of cards.</p>
                </div>

                <button type="button" class="btn-shopnow"> Shop Now</button>
            </div>
        </div>
    </div>

    <div class="container-fluid dancing">
        <div class="container">
            <div class="row">
                <section class="col-md-6">
                    <h2 class="dancetitle">Dancing, the center of her life.</h2>

                    <p class="dancetext">Shanthi is very shy and takes a while to warm up to people. It is when she dances, sings, plays the piano or recorder or performs in general that she sparkles.</p>
                    <button type="button" class="btn-dance"> Read More
                    </button>


                </section>

                <section class="col-md-6 video">
                    <video width="500" controls>
                        <source src="http://localhost:8080/shanthi-wordpress/wp-content/themes/shanthi-theme/images/ShanthiVideo.mp4" type="video/mp4">
                    </video>

                </section>
            </div>
        </div>
    </div>

<?php get_footer(); /* Tells WordPress to include footer.php */ ?>