<?php get_header() ?>
<?php while(have_posts()): the_post() ?>
<div class="row sub-recipe">
    <div class="section">
        <div class="col-lg-4 col-sm-12 col-md-12 left d-flex flex-lg-column flex-md-row flex-sm-row">
            <img src="<?php the_field('dish_image') ?>" alt="">
            <div class="ingredients">
            <h2> <?php the_field('ingredients_title') ?></h2>
            <ul>
                <li>
                    <?php the_field('ingredient_1') ?>
                </li>
                <li>
                    <?php the_field('ingredient_2') ?>
                </li>
                <li>
                    <?php the_field('ingredient_3') ?>
                </li>
                <li>
                    <?php the_field('ingredient_4') ?>
                </li>
                <li>
                    <?php the_field('ingredient_5') ?>
                </li>
                <li>
                    <?php the_field('ingredient_6') ?>
                </li>
                <li>
                    <?php the_field('ingredient_7') ?>
                </li>
                <li>
                    <?php the_field('ingredient_8') ?>
                </li>
                <li>
                    <?php the_field('ingredient_9') ?>
                </li>
                <li>
                    <?php the_field('ingredient_10') ?>
                </li>
                <li>
                    <?php the_field('ingredient_11') ?>
                </li>
                <li>
                    <?php the_field('ingredient_12') ?>
                </li>
                <li>
                    <?php the_field('ingredient_13') ?>
                </li>
                <li>
                    <?php the_field('ingredient_14') ?>
                </li>
                <li>
                    <?php the_field('ingredient_15') ?>
                </li>
                <li>
                    <?php the_field('ingredient_16') ?>
                </li>
            </ul>
            </div>
            
        </div>
        <div class="col-lg-8 col-md-12 col-sm-12  right">
            <h1><?php the_title() ?></h1>
            <p><?php the_content() ?></p>
        </div>
    </div>
</div>
<?php endwhile; ?>
<?php get_footer() ?>
