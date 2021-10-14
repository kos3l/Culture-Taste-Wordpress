<?php get_header() ?>

<?php if(have_posts()):?>
                <?php while(have_posts()): the_post() ?>
                    <div class="row landing-page m-0" id="home" >
                            <img src="<?php the_field('home_background') ?>" class="bg-img p-0" alt="">
                            <div class="col center p-0">
                                <div class="pop-up-box">
                                    <h1>COOK WORLD</h1>
                                    <div class="text-box">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae dolor ut lacus interdum sollicitudin. Suspendisse porttitor risus eu velit pellentesque, ac porta leo maximus. Aenean a faucibus massa. Aenean venenatis diam vitae arcu efficitur, ac rutrum purus cursus. Vestibulum eu suscipit leo, in hendrerit lacus. Aenean nec ipsum eu tellus venenatis convallis. Donec gravida consequat urna, vel semper felis volutpat non. Mauris et mollis libero. </p>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="row filters-title m-0" id="recipes">
                        <div class="col title-col justify-content-center align-items-center">
                        
                        <a href="http://localhost:8888/wp-new/?post_type=recipes&customize_changeset_uuid=600b1be5-f893-48d0-9784-1187f5a2661c"> <h1>RECIPES</h1></a>
                        </div>
                        
                    </div>
                    <div class="row filters m-0" >
                        <div class="col" style="width:100vw; height:30vh;">
                            <div class="filters-container">
                                <div class="sort-title"><p>Pick by difficulty</p></div>
                                <?php
                                $args = array(
                                    'theme_location' => 'diff'
                                );
                                ?>
                                <?php wp_nav_menu( $args); ?>
                            </div>
                            <div class="filters-container">
                                <div class="sort-title"><p>Pick by daytime</p></div>
                                <?php
                                $args = array(
                                    'theme_location' => 'daytime'
                                );
                                ?>
                                <?php wp_nav_menu( $args); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row book-container" id="books">
                        <div class="col-3 arrows">
                            <button> <i class="fas fa-arrow-left"></i> </button>
                        </div>
                        <div class="col-6 book">
                            <h1>PURCHASE OUR BOOK</h1>
                            <img src=" <?php the_field('home_background') ?>" alt="">
                            <p>Mini description about the meal, recipe and the origin of the dish. I’m just trying to find words to fill place.I’m just trying to find words to fill place</p>
                            <button>Click for more</button>
                        </div>
                        <div class="col-3 arrows">
                            <button> <i class="fas fa-arrow-right"></i></button>
                        </div>
                    </div>
                    <div class="row chefs">
                        <h1>TEAM / CHEFS</h1>
                        <div class="circle-container">
                            <div class=" circle">
                                <img src="<?php the_field('placeholder') ?>" alt="">
                                <p>YOUR NAME</p>
                            </div>
                            <div class="circle">
                                <img src="<?php the_field('placeholder') ?>" alt="">
                                <p>YOUR NAME</p>
                            </div>
                            <div class="circle">
                                <img src="<?php the_field('placeholder') ?>" alt="">
                                <p>YOUR NAME</p>
                            </div>
                            <div class="circle">
                                <img src="<?php the_field('placeholder') ?>" alt="">
                                <p>YOUR NAME</p>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
<?php get_footer() ?>