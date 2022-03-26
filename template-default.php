<?php /* Template Name: Default Template */ ?>
<?php get_header(); ?>

<div class="section light">
    <div class="row wide">
        <div class="col-md-12 col-sm-12 content">
            <h2> <?php the_title() ?> </h2>
            <h6> <?php the_content() ?> </h6>
            <?php $button = get_field('special_button'); ?>
            <?php if ($button) { ?>
                <a href="<?php echo $button['url'] ?>" target="_blank" class="button">
                    <h2> <?php echo $button['title'] ?> </h2>
                    <div class="button-deco"></div>
                </a> 
            <?php } ?> 
        </div>
    </div>
</div>

<?php get_footer(); ?>