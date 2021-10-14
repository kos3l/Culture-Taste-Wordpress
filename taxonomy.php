<?php get_header() ?>
<?php while(have_posts()): the_post() ?>
<div class="row recipe m-0" >
                        <div class="col" style="height:auto;">
                            <div class="food-card">
                                <img src="<?php the_field('dish_image') ?>" alt="">
                                <div class="card-text">
                                    <h1><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h1>
                                    <p>Mini description about the meal, recipe and the organon of the dish. I’m just trying to find words to fill place.</p>
                                    <button><a href="<?php the_permalink() ?>">Click for more</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
<?php endwhile; ?>
<?php get_footer() ?>