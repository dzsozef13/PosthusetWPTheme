<!DOCTYPE html>
<html <?php language_attributes()?>>
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <!-- <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> -->
    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.typekit.net/nog1bda.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Roboto -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- Roboto Slab -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Bebas Neue -->
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <?php wp_head();?>
    <title><?php bloginfo("name") ?></title>
</head>
<body>

<?php if (current_user_can('administrator')) { ?>
    <header id="header" style="margin-top:32px">
<?php } else { ?>
    <header id="header">
<?php } ?>
    <div id="nav">
        <?php
            wp_nav_menu(
                array( 
                    'theme_location' => 'main-menu'
                )
            )
        ?>
    </div>

    <div id="nav-mobile">
        <?php
            wp_nav_menu(
                array( 
                    'theme_location' => 'main-menu'
                )
            )
        ?>
    </div>
    <a id="nav-mobile-toggle" href="javascript:void(0);" onclick="toggleNav()">
        <div id="nav-mobile-toggle-icon"></div>
    </a>
</header>

<script>

function toggleNav() {
    var nav = document.getElementById("nav");
    var navMobile = document.getElementById("nav-mobile");

    if (window.innerWidth < 600) {    
        if (navMobile.style.display === "flex") {
            navMobile.style.display = "none";
        } else {
            navMobile.style.display = "flex";
        }
    }
}

</script>