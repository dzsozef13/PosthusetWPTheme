<!DOCTYPE html>
<html <?php language_attributes()?>>
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

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

<!-- facebook plugin -->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/dk_DK/sdk.js#xfbml=1&version=v13.0" nonce="EqaCcw8i"></script>


<!-- navigation -->
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

// mobile navigation toggle
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