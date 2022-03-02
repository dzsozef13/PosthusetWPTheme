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
        <h3> Current ranking </h3>
    </div>
    <div class="row post-content" style="background-color: #eee;">
        <div class="col-xl-8 col-md-8 col-sm-12" style="padding: 32px">
            <!-- Top 3 -->
            <h5 class="podium-field"> 1. <?php the_field('rank_1') ?> </h5>
            <h5 class="podium-field"> 2. <?php the_field('rank_2') ?> </h5>
            <h5 class="podium-field"> 3. <?php the_field('rank_3') ?> </h5>
            <!-- 3 to 10 -->
            <h6 class="leaderboard-field"> <?php the_field('rank_all_above') ?> </h6>
        </div>
        <div class="col-xl-4 col-md-4 col-sm-12" style="padding:0;">
            <div class="post-img" style="background-image: url(<?php the_field('leaderboard_image'); ?>);"></div>
        </div>
    </div>
</div>

<div class="whitespace"></div>

<?php get_footer() ?>