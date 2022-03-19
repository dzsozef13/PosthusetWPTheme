<?php get_header(); ?>

<div class="section paper" id="posten">
    <div class="row wide">
        <div class="col-md-12 col-sm-12 content">
            <h2> <?php the_field('special_title') ?> </h2>
            <h3> <?php the_field('special_subtitle') ?> </h3>
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

<div class="section stone">
    <div class="row wide">
        <div class="col-md-12 col-sm-12 content">
            <?php
            $carousel = "carousel";
            $carouselIndex = $carousel . strval($index);
            ?>
            <div id="<?php echo $carouselIndex ?>" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <?php 
                    $carouselItem1 = get_field("special_carousel_item1");
                    $carouselItem2 = get_field("special_carousel_item2");
                    $carouselItem3 = get_field("special_carousel_item3");
                    ?>
                    <?php if ($carouselItem1) { ?>
                        <div class="carousel-item active">
                            <div class="carousel-img" style="background-image: url(<?php echo $carouselItem1 ?>);"></div>
                        </div>
                    <?php } if ($carouselItem2) { ?>
                        <div class="carousel-item">
                            <div class="carousel-img" style="background-image: url(<?php echo $carouselItem2 ?>);"></div>
                        </div>
                    <?php } if ($carouselItem3) { ?>
                        <div class="carousel-item">
                            <div class="carousel-img" style="background-image: url(<?php echo $carouselItem3 ?>);"></div>
                        </div>
                    <?php } ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#<?php echo $carouselIndex ?>" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#<?php echo $carouselIndex ?>" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div> 
        </div>
    </div>
</div>

<?php get_footer(); ?>