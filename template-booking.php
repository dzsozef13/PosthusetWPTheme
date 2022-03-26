<?php /* Template Name: Booking Template */ ?>
<?php get_header(); ?>

<div class="section paper">
    <div class="row">

        <?php 
        $menu_args  = array('post_type' => 'table'); //array of arguments
        $menu_query = new WP_Query($menu_args); //create new query
        ?>
        <?php while($menu_query -> have_posts()): $menu_query -> the_post() ?>
        
        <div class="col-md-6 col-sm-12 content align-top">
            <div class="small-img" style="background-image: url(<?php the_field('table_image'); ?>);"></div>
            <h2> <?php the_field('table_title') ?> </h2>
            <?php $button = get_field('table_button') ?>
            <a href="<?php echo $button['url'] ?>" target="_blank" class="button">
                <h2> <?php echo $button['title'] ?> </h2>
                <div class="button-deco"></div>
            </a>  
        </div>

        <?php endwhile ?>

    </div>
</div>

<?php get_footer() ?>
