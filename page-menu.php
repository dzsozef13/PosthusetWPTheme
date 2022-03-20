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
            <div class="header-img" style="background-image: url(<?php the_field('header_cover_image'); ?>);"></div>
        </div>
    </div>
</div>

<div class="section paper">
    <div class="row">

        <?php 
        $menu_args  = array('post_type' => 'menucard'); //array of arguments
        $menu_query = new WP_Query($menu_args); //create new query
        ?>
        <?php while($menu_query -> have_posts()): $menu_query -> the_post() ?>
        
        <div class="col-md-6 col-sm-12 content align-top">
            <div class="small-img" style="background-image: url(<?php the_field('menu_image'); ?>);"></div>
            <h2> <?php the_field('menu_title') ?> </h2>
            <h6> <?php the_field('menu_description') ?> </h6>
            <?php $button = get_field('menu_button') ?>
            <a href="<?php echo $button['url'] ?>" target="_blank" class="button">
                <h2> <?php echo $button['title'] ?> </h2>
                <div class="button-deco"></div>
            </a>  
        </div>

        <?php endwhile ?>

    </div>
</div>

<?php get_footer() ?>
