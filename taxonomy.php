<?php get_header() ?>

                            <div class="food-card">
                                <img src="<?php the_field('home_background') ?>" alt="">
                                <div class="card-text">
                                    <h1><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h1>
                                    <p>Mini description about the meal, recipe and the organon of the dish. I’m just trying to find words to fill place.</p>
                                    <a href="<?php the_permalink() ?>"><button>Click for more</button></a>
                                </div>
                            </div>


<?php get_footer() ?>