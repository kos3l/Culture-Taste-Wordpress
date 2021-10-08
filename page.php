<?php get_header() ?>
            <?php if(have_posts()):?>
                <?php while(have_posts()): the_post() ?>
                    <div class="row sub-recipe">
                        <div class="section">
                            <div class="left">
                                <img src="<?php the_field('placeholder') ?>" alt="">
                                <h1>Ingridients</h1>
                                <p>- lorem ipsum 
                                    - dolor sit 
                                    - amet 
                                    - consectetur 
                                    - adipiscing elit. 
                                    - etiam vitae dolor ut 
                                </p>
                            </div>
                            <div class="right">
                                <h1></h1>
                                <p></p>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
<?php get_footer() ?>