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
                    </div>
                    <div class="row book-custom">
                    <?php
                        $args = array(
                        'post_type'   => 'book',
                        'post_status' => 'publish',
                        
                        );
                        
                        $book = new WP_Query( $args );
                        if( $book->have_posts() ) :
                        ?>
                        <ul>
                            <?php
                            while( $book->have_posts() ) :
                                $book->the_post();
                                ?>
                                
                                <li><?php printf( '%1$s - %2$s', get_the_title(), get_the_content() );  ?></li>
                                
                                <?php
                            endwhile;
                            wp_reset_postdata();
                            ?>
                        </ul>
                        <?php
                        else :
                        esc_html_e( 'No testimonials in the diving taxonomy!', 'text-domain' );
                        endif;
                        ?>
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