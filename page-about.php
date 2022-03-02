<?php get_header(); 
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

<div class="section">
    <div class="row">
        <div class="col-md-6 col-sm-12 field line-right">
            <h2 style="margin-bottom:32px"> <?php the_field("history_title") ?> </h2>
            <h6> <?php the_field("history_text") ?> </h6>
        </div>
        <div class="col-md-6 col-sm-12 field-nopad line-left">
            <div class="img" style="background-image: url(<?php the_field('history_image'); ?>);"></div>
        </div>
    </div>
</div>

<div class="whitespace"></div>

<div class="section">
    <div class="row">
        <div class="col-md-6 col-sm-12 field-nopad line-right">
            <div class="img" style="background-image: url(<?php the_field('information_image'); ?>);"></div>
        </div>
        <div class="col-md-6 col-sm-12 field line-left">
            <h2 style="margin-bottom:32px"> <?php the_field("information_title") ?> </h2>
            <h6> <?php the_field("information_text") ?> </h6>
        </div>
    </div>
</div>

<div class="whitespace"></div>

<?php get_footer() ?>
