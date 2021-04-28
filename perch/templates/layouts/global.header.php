<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php perch_pages_title(); ?></title>
    <?php perch_page_attributes(); ?>
    <link rel="stylesheet" type="text/css" href="/assets/css/base.css?v=<?php echo rand() ?>">
    <link rel="stylesheet" type="text/css" href="/assets/css/stylesheet.css?v=<?php echo rand() ?>">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="/slick/slick-theme.css"/>
</head>

<?php

perch_content_create("Header Image", ["template" => "header_image.html"])

?>

<body>
    <header style="background-image: url(<?php perch_content("Header Image") ?>)" class="c-header c-header--<?php echo PerchSystem::get_page() == "/index.php" ? "large" : "normal" ?> l-wrap">
        <?php perch_pages_navigation(
            [
                'levels' => 1
            ]
        ); ?>
        <?php perch_pages_navigation(
            [
                'levels' => 1,
                'template' => 'hamburgerItem.html'
            ]
        ); ?>
        <!-- <div class="c-header__logo-wrapper">
            <img src="" alt="Logo">
        </div> -->
    </header>