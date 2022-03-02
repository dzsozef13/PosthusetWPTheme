<?php get_header(); 
$buttonJoin = get_field('join_us_button');
?>

<div class="whitespace"></div>

<div class="section">
    <div class="row">
        <div class="col-md-6 col-sm-12 field line-right">
            <h2 style="margin-bottom:32px"> <?php the_title() ?> </h2>
            <h6> <?php the_content() ?> </h6>
        </div>
        <div class="col-md-6 col-sm-12 field-nopad line-left">
            <div class="img" style="background-image: url(<?php the_field('cover_image'); ?>);"></div>
        </div>
    </div>
</div>

<div class="whitespace"></div>

<div class="section line-top">
    <div class="row line-bottom">
        <div class="col-md-6 col-sm-12 field line-right">
            <h2 style="margin-bottom:32px"> <?php the_field("join_us_title") ?> </h2>
            <h6> <?php the_field("join_us_text") ?> </h6>
        </div>
        <div class="col-md-6 col-sm-12 field-nopad line-left">
            <a class="button line-bottom" 
                role="button"
                href="<?php echo $buttonJoin['url']; ?>" 
                >
                <?php echo $buttonJoin['title']; ?>
            </a>
            <div class="img-wbutton line-top" style="background-image: url(<?php the_field('join_us_image'); ?>);"></div>
        </div>
    </div>
</div>

<div class="whitespace"></div>

<?php get_footer() ?>
