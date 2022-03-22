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
        <div class="col-md-6 col-sm-12 content-header">
            <div class="fb-page" data-href="https://www.facebook.com/posthusetesbjerg/" data-tabs="timeline, events" data-width="" data-height="400" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/posthusetesbjerg/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/posthusetesbjerg/">Posthuset</a></blockquote></div>
        </div>
    </div>
</div>

<?php 
$events_args  = array('post_type' => 'event'); //array of arguments
$events_query = new WP_Query($events_args); //create new query
?>

<?php while($events_query -> have_posts()): $events_query -> the_post() ?>

    <?php $index = $index + 1; ?>
        <?php if ($index % 2 == 0) { ?>
            <div class="section stone">
        <?php } else { ?>
            <div class="section paper">
        <?php } ?>
                <div class="row reversed">
                    <div class="col-md-6 col-sm-12 content">
                        <h2> <?php the_field('event_title') ?> </h2>
                        <h3> <?php the_field('event_intro') ?> </h3>
                        <h6> <?php the_field('event_description') ?> </h6>
                        <h3 class="price-tag"> <?php the_field('event_price') ?> </h3>
<!--                         <h6 class="price-note"> per person </h6> -->
                        <?php $button = get_field('event_button') ?>
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
