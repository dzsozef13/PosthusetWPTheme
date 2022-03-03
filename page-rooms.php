<?php get_header(); ?>

<div class="section-header stone">
    <div class="row row-header">
        <!-- <div class="col-md-8 col-sm-12" style="padding:0;">
            <div class="img-header" style="background-image: url(<?php the_field('header_cover_image'); ?>);"></div>
        </div> -->
        <div class="col-md-6 col-sm-12 content-header">
            <h3> <?php the_title() ?> </h3>
            <h6> <?php the_content() ?> </h6>
        </div>
    </div>
</div>

<?php 
$events_args  = array('post_type' => 'room'); //array of arguments
$events_query = new WP_Query($events_args); //create new query
?>

<?php while($events_query -> have_posts()): $events_query -> the_post() ?>

    <?php $index = $index + 1; ?>
        <?php if ($index % 2 == 0) { ?>
            <div class="section stone">
        <?php } else { ?>
            <div class="section paper">
        <?php } ?>
                <div class="row wide">
                    <div class="col-md-12 col-sm-12 content">
                        <h2> <?php the_field('room_title') ?> </h2>
                        <h3> <?php the_field('room_subtitle') ?> </h3>

                        <div id="room-carousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                <div class="carousel-img" style="background-image: url(<?php the_field('room_carousel_item1'); ?>);"></div>
                                </div>
                                <div class="carousel-item">
                                <div class="carousel-img" style="background-image: url(<?php the_field('room_carousel_item2'); ?>);"></div>
                                </div>
                                <div class="carousel-item">
                                <div class="carousel-img" style="background-image: url(<?php the_field('room_carousel_item3'); ?>);"></div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#room-carousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#room-carousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>

                        <h6> <?php the_field('room_description') ?> </h6>
                        <!-- <h3 class="price-tag"> Fra <?php the_field('room_pricetag') ?>,-</h3>
                        <h6 class="price-note"> per person </h6> -->
                        <?php $button = get_field('room_button') ?>
                        <a href="<?php echo $button['url'] ?>" class="button">
                            <h2> <?php echo $button['title'] ?> </h2>
                            <div class="button-deco"></div>
                        </a>  
                    </div>
                    <div class="col-md-6 col-sm-12 content">
                        <div class="img" style="background-image: url(<?php the_field('event_cover_image'); ?>);"></div>
                    </div>
                </div>
            </div>

<?php endwhile ?>

<?php get_footer() ?>
