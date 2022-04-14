<!DOCTYPE html>
<html lang="FR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/img/logo.png" type="image/x-icon">
    <?php wp_head(); ?>
</head>

<body class="container">
    <h2></h2>
    <header>
        <?php wp_nav_menu(); ?>
        <h2><a href="/wp-admin/">Login</a></h2>
    </header>