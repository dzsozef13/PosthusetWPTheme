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
$training_args  = array('post_type' => 'trainings'); //array of arguments
$training_query = new WP_Query($training_args); //create new query
?>

<?php while($training_query -> have_posts()): $training_query -> the_post() ?>

    <div class="row post">
        <div class="row" id="post-title">
            <h3> <?php the_title() ?> </h3>
        </div>
        <div class="row" style="background-color: #eee;">
            <div class="col-md-8 col-sm-12" style="padding: 32px">
                <h4 style="margin-bottom: 16px;"> <?php the_field("target_group") ?> </h4>
                <h6> <?php the_content() ?> </h6>
                <div class="col calendar">
                    <div id="calendar-icon"></div>
                    <h6 id="dates"> <?php the_field("training_schedule") ?> </h6>
                </div>
            </div>
            <div class="col-md-4 col-sm-12" style="padding:0;">
                <div class="post-img" style="background-image: url(<?php the_field('cover_image'); ?>);"></div>
            </div>
        </div>
    </div>

    <div class="whitespace"></div>
    
<?php endwhile ?>

<?php get_footer() ?>
