<header class="entry-header alignwide">
    <div class="swiper singleSwiper">
        <div class="swiper-wrapper">
            <?php $aa = get_field('slider');
            if (isset($aa)) {
                foreach ($aa as $value) { ?>
                    <div class="swiper-slide">
                        <img class="swiper-slide" src="<?php echo $value; ?>" alt="image">
                    </div>

                <?php }
            }else{
                echo 'هیچ اسلایدری برای این پرونده قرار داده نشده است!!!';
            } ?>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
    <div class="fields row">
        <div class="type_of_treatment row">
            <h4>نوع درمان: </h4>
            <span class="info">
                <p>
                    <?php the_field('type_of_treatment'); ?>
                </p>
            </span>
        </div>
        <div class="treatment_duration row">
            <h4>طول درمان: </h4>
            <span class="info">
                <p>
                    <?php the_field('treatment_duration'); ?>
                </p>
            </span>
        </div>
    </div>
</header><!-- .entry-header -->