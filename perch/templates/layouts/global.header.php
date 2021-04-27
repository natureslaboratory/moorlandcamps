<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title><?php perch_pages_title(); ?></title>
    <?php perch_page_attributes(); ?>
    <link rel="stylesheet" type="text/css" href="/assets/css/base.css?v=<?php echo rand() ?>">
    <link rel="stylesheet" type="text/css" href="/assets/css/stylesheet.css?v=<?php echo rand() ?>">
</head>

<?php

perch_content_create("Header Image", ["template" => "header_image.html"])

?>

<body>
    <header style="background-image: url(<?php perch_content("Header Image") ?>)" 
            class="c-header c-header--<?php echo PerchSystem::get_page() == "/index.php" ? "large" : "normal" ?> l-wrap">
        <?php perch_pages_navigation([
            'levels'=>1]
            ); ?>
        <!-- <div class="c-header__logo-wrapper">
            <img src="" alt="Logo">
        </div> -->
    </header>