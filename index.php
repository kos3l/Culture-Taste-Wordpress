<?php get_header() ?>

<?php if(have_posts()):?>
                <?php while(have_posts()): the_post() ?>
                    <div class="row landing-page m-0" id="home" >
                            <img src="<?php the_field('home_background') ?>" class="bg-img p-0" alt="">
                            <div class="col center p-0">
                                <div class="pop-up-box">
                                    <h1><?php the_title() ?></h1>
                                    <div class="text-box">
                                        <p> <?php the_content() ?> </p>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="row filters-title m-0" id="recipes">
                        <div class="col title-col justify-content-center align-items-center">

                        <a href="http://localhost:8888/wp-new/?post_type=recipes&customize_changeset_uuid=600b1be5-f893-48d0-9784-1187f5a2661c"> 
                        <h1><?php the_field('category_title') ?></h1></a>
                        </div>
                        
                    </div>
                    <div class="row m-0">
                        <div class="col title-col-middle justify-content-center align-items-center">
                            <p><?php the_field('under_category_title') ?></p>
                        </div>
                        
                    </div>
                    <div class="row filters m-0" >
                        <div class="col" style="width:100vw; height:30vh;">
                            <div class="filters-container">
                                <div class="sort-title"><p> Pick by daytime</p></div>
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
                    <h1><?php the_field('purchase') ?></h1>
                        <div class="col-6 book">
                            <img src=" <?php the_field('book_1_image') ?>" alt="">
                            <p><?php the_field('book_1_description') ?></p>
                            <a href="<?php the_field('link_1') ?>">
                            <button id="last"><a href="<?php the_field('link_1') ?>">Order online</a></button>
                        </div>
                        <div class="col-6 book">
                            <img src=" <?php the_field('book_2_image') ?>" alt="">
                            <p><?php the_field('book_2_description') ?></p>
                            <button id="last"><a href="<?php the_field('link_2') ?>">Order online</a></button>
                        </div>

                    </div>
                    <div class="row chefs">
                        <h1><?php the_field('team_title') ?></h1>
                        <div class="circle-container">
                            <div class=" circle">
                                <img src="<?php the_field('name_1_picture') ?>" alt="">
                                <p><?php the_field('name_1') ?></p>
                            </div>
                            <div class="circle">
                                <img src="<?php the_field('name_2_picture') ?>" alt="">
                                <p><?php the_field('name_2') ?></p>
                            </div>
                            <div class="circle">
                                <img src="<?php the_field('name_3_picture') ?>" alt="">
                                <p><?php the_field('name_3') ?></p>
                            </div>
                            <div class="circle">
                                <img src="<?php the_field('name_4_picture') ?>" alt="">
                                <p><?php the_field('name_4') ?></p>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
<?php get_footer() ?>