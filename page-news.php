<?php get_header(); 
// $buttonJoin = get_field('become_a_member_button');
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

<?php 
$news_args  = array('post_type' => 'news'); //array of arguments
$news_query = new WP_Query($news_args); //create new query
?>

<?php while($news_query -> have_posts()): $news_query -> the_post() ?>

    <div class="row post">
        <div class="row" id="post-title">
            <h3> <?php the_title() ?> </h3>
        </div>
        <div class="row post-content" style="background-color: #eee;">
            <div class="col-xl-8 col-md-8 col-sm-12" style="padding: 32px">
                <h4 style="margin-bottom: 16px;"> <?php the_field("subtitle") ?> </h4>
                <h6> <?php the_content() ?> </h6>
                <div class="col calendar">
                    <h6 id="post-date"> <?php the_date() ?> </h6>
                </div>
            </div>
            <div class="col-xl-4 col-md-4 col-sm-12" style="padding:0;">
                <div class="post-img" style="background-image: url(<?php the_field('cover_image'); ?>);"></div>
            </div>
        </div>
    </div>

    <div class="whitespace"></div>
    
<?php endwhile ?>

<?php get_footer() ?>
