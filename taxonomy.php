<?php get_header() ?>
<div class="row archive-header d-flex justify-content-center align-items-center">
    <h1> EASY</h1>
</div>
<div class="row archive-list m-0" >
                <div class="recipes-container">
                <?php while(have_posts()): the_post() ?>
                            <div class="food-card" id="archive-margin-card" style=>
                                <img src="<?php the_field('dish_image') ?>" alt="">
                                <div class="card-text">
                                    <h1><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h1>
                                    <p>Mini description about the meal, recipe and the organon of the dish. I’m just trying to find words to fill place.</p>
                                    <button><a href="<?php the_permalink() ?>">Click for more</a></button>
                                </div>
                            </div>
                <?php endwhile; ?>
                </div>
</div>
<?php get_footer() ?>