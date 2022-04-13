<!DOCTYPE html>
<html lang="FR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Burger House</title>
    <?php wp_head(); ?>
</head>

<body class="container">
    <header id="top" style="background-image: url('<?= get_template_directory_uri();  ?>/img/default.png');">
        
        <div class="logo-menu">
            <a href="" class="logo-link"><img src="<?= get_template_directory_uri(); ?>/img/logo.png" alt="" class="logo-header"></a>

            <nav class="menu">
                <div class="express-delivery">
                    <img src="<?= get_template_directory_uri(); ?>/img/gova.png" alt="">
                    <p>Express Delivery +1 234 67 890</p>
                </div>

                <?php wp_nav_menu(); ?>
            </nav>

        </div>
        <div class="intro">
            <div class="left-header">
                <section class="headerwidget">
                    <?php if (is_active_sidebar('header')) {
                        dynamic_sidebar('header');
                    } ?>
                </section>
                <p class="text-intro-frame">IT IS A GOOD TIME FOR THE GREAT TASTE OF BURGERS</p>
                <p class="text-burger-intro">BURGER</p>
                <p class="text-week-intro">WEEK</p>
            </div>
            <div class="burger-week-price">

                <img src="<?= get_template_directory_uri(); ?>/img/group-burger.png" alt="">
                <img src="<?= get_template_directory_uri(); ?>/img/Price.png" alt="" class="price">
            </div>

        </div>
        <!-- eztfgrezger -->
        <!-- nuznefgz -->
    </header>