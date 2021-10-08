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
                        <h1>RECIPES</h1>
                    </div>
                    <div class="row filters m-0" >
                        <div class="col"></div>
                    </div>
                    <div class="row recipe m-0" >
                        <div class="col"></div>
                        <div class="col"></div>
                        <div class="col"></div>
                    </div>
                    <div class="row" id="books">

                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
<?php get_footer() ?>