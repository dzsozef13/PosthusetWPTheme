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

<div class="row post">
    <div class="row" id="post-title">
        <h3> Main Sponsors </h3>
    </div>
    <div class="row post-content" style="background-color: #eee;">
        <div class="col-xl-8 col-md-8 col-sm-12" style="padding: 32px">
            <h4 style="margin-bottom: 16px;"> <?php the_field("main_sponsors_title") ?> </h4>
            <h6> <?php the_field('main_sponsors_text') ?> </h6>
        </div>
        <div class="col-xl-4 col-md-4 col-sm-12" style="padding:0;">
            <div class="post-img" id="main-sponsors-img" style="background-image: url(<?php the_field('main_sponsors_image'); ?>);"></div>
        </div>
    </div>
</div>

<div class="whitespace"></div>

<div class="section">
    <div class="row">
        <div class="col-md-6 col-sm-12 field line-right">
            <h2 style="margin-bottom:32px"> <?php the_field("tie-break_title") ?> </h2>
            <h6> <?php the_field("tie-break_text") ?> </h6>
        </div>
        <div class="col-md-6 col-sm-12 field-nopad line-left">
            <div class="img "id="all-sponsors-img" style="background-image: url(<?php the_field('all_sponsors_image'); ?>);"></div>
        </div>
    </div>
</div>

<div class="whitespace"></div>

<?php get_footer() ?>

