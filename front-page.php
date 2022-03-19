<?php get_header(); 
$buttonIntro = get_field('intro_button');
$buttonSection1 = get_field('section1_button');
$buttonSection2 = get_field('section2_button');
$buttonSection3 = get_field('section3_button');
$buttonSection4 = get_field('section4_button');
?>

<!-- Home Header -->

<div id="welcome" style="background-image: url(<?php the_field('welcome_background') ?>);">
    <div id="welcome-content">
        <div id="welcome-logo" style="background-image: url(<?php the_field('welcome_logo') ?>);"></div>
        <div id="welcome-title">
            <h1> <?php the_field('welcome_text') ?> </h1>
        </div>
    </div>
</div>

<!-- Welcome Cards -->

<div id="welcome-cards-container">
    <div id="welcome-cards">
        <a class="welcome-card" href="javascript:void(0);" onclick="scrollToView('posten')">
            <div class="card-img" style="background-image: url(<?php the_field('welcome_card1_image') ?>);"></div>
            <h3> <?php the_field('welcome_card1_title') ?> </h3>
        </a>
        <a class="welcome-card" href="javascript:void(0);" onclick="scrollToView('homerun')">
            <div class="card-img" style="background-image: url(<?php the_field('welcome_card2_image') ?>);"></div>
            <h3> <?php the_field('welcome_card2_title') ?> </h3>
        </a>
        <a class="welcome-card" href="javascript:void(0);" onclick="scrollToView('loftet')">
            <div class="card-img" style="background-image: url(<?php the_field('welcome_card3_image') ?>);"></div>
            <h3> <?php the_field('welcome_card3_title') ?> </h3>
        </a>
        <a class="welcome-card" href="javascript:void(0);" onclick="scrollToView('ganensfryd')">
            <div class="card-img" style="background-image: url(<?php the_field('welcome_card4_image') ?>);"></div>
            <h3> <?php the_field('welcome_card4_title') ?> </h3>
        </a>
    </div>
</div>

<!-- Mobile Welcome Cards -->

<div id="welcome-cards-container-mobile">
    <div id="welcome-cards-mobile">
        <a class="welcome-card-mobile" href="javascript:void(0);" onclick="scrollToView('posten')">
            <div class="card-img-mobile" style="background-image: url(<?php the_field('welcome_card1_image') ?>);"></div>
            <h3> <?php the_field('welcome_card1_title') ?> </h3>
        </a>
        <a class="welcome-card-mobile" href="javascript:void(0);" onclick="scrollToView('homerun')">
            <div class="card-img-mobile" style="background-image: url(<?php the_field('welcome_card2_image') ?>);"></div>
            <h3> <?php the_field('welcome_card2_title') ?> </h3>
        </a>
        <a class="welcome-card-mobile" href="javascript:void(0);" onclick="scrollToView('loftet')">
            <div class="card-img-mobile" style="background-image: url(<?php the_field('welcome_card3_image') ?>);"></div>
            <h3> <?php the_field('welcome_card3_title') ?> </h3>
        </a>
        <a class="welcome-card-mobile" href="javascript:void(0);" onclick="scrollToView('ganensfryd')">
            <div class="card-img-mobile" style="background-image: url(<?php the_field('welcome_card4_image') ?>);"></div>
            <h3> <?php the_field('welcome_card4_title') ?> </h3>
        </a>
    </div>
</div>

<!-- Introduction -->

<div class="section stone" id="intro">
    <div class="row">
        <div class="col-md-6 col-sm-12 content">
            <h2> <?php the_field('intro_title') ?> </h2>
            <h6> <?php the_field('intro_text') ?> </h6>
            <a href="<?php echo $buttonIntro['url'] ?>" class="button">
                <h2> <?php echo $buttonIntro['title'] ?> </h2>
                <div class="button-deco"></div>
            </a>    
        </div>
        <div class="col-md-6 col-sm-12 content">
            <div class="img" style="background-image: url(<?php the_field('intro_image'); ?>);"></div>
        </div>
    </div>
</div>

<!-- Facebook -->

<div class="section wood" id="facebook">
    <div class="row wide">
        <div class="col-md-12 col-sm-12 content">
            <div class="fb-page" data-href="https://www.facebook.com/posthusetesbjerg/" data-tabs="timeline, events" data-width="500" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/posthusetesbjerg/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/posthusetesbjerg/">Posthuset</a></blockquote></div>
        </div>
    </div>
</div>

<!-- Posten -->

<div class="section light" id="posten">
    <div class="row reversed">
        <div class="col-md-6 col-sm-12 content">
            <h2> <?php the_field('section1_title') ?> </h2>
            <h3> <?php the_field('section1_subtitle') ?> </h3>
            <h6> <?php the_field('section1_text') ?> </h6>
            <a href="<?php echo $buttonSection1['url'] ?>" class="button">
                <h2> <?php echo $buttonSection1['title'] ?> </h2>
                <div class="button-deco"></div>
            </a>  
        </div>
        <div class="col-md-6 col-sm-12 content">
            <div class="img" style="background-image: url(<?php the_field('section1_image'); ?>);"></div>
        </div>
    </div>
</div>

<!-- Video -->

<!-- <video id="video" class="line-top" src="wp-content/themes/ETK Theme/assets/etk_final.mp4" playsinline loop muted autoplay width="100%" height="auto" style="margin:0;"></video>
<div id="mute-button">
    <a class="button" href="javascript:void(0);" onclick="toggleMute()">
        <div id="volume-icon"></div>
        Better with sound!
    </a>
</div>

<div class="whitespace"></div> -->

<!-- Loftet -->

<div class="section paper" id="loftet">
    <div class="row">
        <div class="col-md-6 col-sm-12 content">
            <h2> <?php the_field('section2_title') ?> </h2>
            <h3> <?php the_field('section2_subtitle') ?> </h3>
            <h6> <?php the_field('section2_text') ?> </h6>
            <a href="<?php echo $buttonSection2['url'] ?>" class="button">
                <h2> <?php echo $buttonSection2['title'] ?> </h2>
                <div class="button-deco"></div>
            </a>    
        </div>
        <div class="col-md-6 col-sm-12 content">
            <div class="img" style="background-image: url(<?php the_field('section2_image'); ?>);"></div>
        </div>
    </div>
</div>

<!-- Homerun -->

<div class="section smoke" id="homerun">
    <div class="row reversed">
    <div class="col-md-6 col-sm-12 content">
            <h2> <?php the_field('section3_title') ?> </h2>
            <h3> <?php the_field('section3_subtitle') ?> </h3>
            <h6> <?php the_field('section3_text') ?> </h6>
            <a href="<?php echo $buttonSection3['url'] ?>" class="button">
                <h2> <?php echo $buttonSection3['title'] ?> </h2>
                <div class="button-deco"></div>
            </a>    
        </div>
        <div class="col-md-6 col-sm-12 content">
            <div class="img" style="background-image: url(<?php the_field('section3_image'); ?>);"></div>
        </div>
    </div>
</div>

<!-- Ganens Fryd  -->

<div class="section light" id="ganensfryd">
    <div class="row">
    <div class="col-md-6 col-sm-12 content">
            <h2> <?php the_field('section4_title') ?> </h2>
            <h3> <?php the_field('section4_subtitle') ?> </h3>
            <h6> <?php the_field('section4_text') ?> </h6>
            <a href="<?php echo $buttonSection4['url'] ?>" class="button">
                <h2> <?php echo $buttonSection4['title'] ?> </h2>
                <div class="button-deco"></div>
            </a>    
        </div>
        <div class="col-md-6 col-sm-12 content">
            <div class="img" style="background-image: url(<?php the_field('section4_image') ?>);"></div>
        </div>
    </div>
</div>

<!-- <div class="section light">
    <div class="row wide">
        <div class="col-md-12 col-sm-12 content">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1007.5066568589378!2d8.451773178297902!3d55.46657316343962!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x464b212b2f1e12cd%3A0xcc33349cd629c25f!2sPosthuset+Esbjerg!5e0!3m2!1sda!2sdk!4v1508081680670" width="100%" height="450" frameborder="0" style="border: 0px; pointer-events: none;" allowfullscreen=""></iframe>  
        </div>
    </div>
</div> -->

<!-- Functions -->

<script>
    function toggleMute() {
        let video = document.getElementById('video');
        video.muted = !video.muted;
    }

    function scrollToView(view) {
        let target = document.getElementById(view);
        target.scrollIntoView({behavior: "smooth", block: "start", inline: "nearest"});
    }
</script>

<?php get_footer() ?>
