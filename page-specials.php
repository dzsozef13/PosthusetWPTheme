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
$menu_args  = array('post_type' => 'special-offer'); //array of arguments
$menu_query = new WP_Query($menu_args); //create new query
?>

<?php while($menu_query -> have_posts()): $menu_query -> the_post() ?>

    <?php $index = $index + 1; ?>
        <?php if ($index % 2 == 0) { ?>
            <div class="section paper">
        <?php } else { ?>
            <div class="section paper">
        <?php } ?>
            <?php if ($index % 2 == 0) { ?>
                <div class="row">
            <?php } else { ?>
                <div class="row reversed">
            <?php } ?>
                    <div class="col-md-6 col-sm-12 content">
                        <h2> <?php the_field('special_title') ?> </h2>
                        <h3> <?php the_field('special_subtitle') ?> </h3>
                        <h6> <?php the_field('special_description') ?> </h6>
                        <?php 
                        $button = get_field('special_button');
                        if ($button) { ?>
                            <a href="<?php echo $button['url'] ?>" target="_blank" class="button">
                                <h2> <?php echo $button['title'] ?> </h2>
                                <div class="button-deco"></div>
                            </a> 
                        <?php } ?> 
                    </div>
                    <div class="col-md-6 col-sm-12 content">
                        <div class="img" style="background-image: url(<?php the_field('special_image'); ?>);"></div>
                    </div>
                </div>
            </div>

<?php endwhile ?>

<?php get_footer() ?>
