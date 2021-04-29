<?php 
if (!defined('PERCH_RUNWAY')) {
     include($_SERVER['DOCUMENT_ROOT'] . '/perch/runtime.php');
}

// Report all PHP errors
error_reporting(-1);

// Same as error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);

?>
<?php perch_layout("global.header") ?>

<main>
    <div class="l-wrap">
        <div class="l-restrict l-restrict--narrow">
            <?php
                if (perch_get("s")) {
                    perch_blog_post(perch_get("s"));
                } else {
            ?>
            <h2 class="c-page-title">Moorlands Camp News</h2>
            <?php
                    perch_blog_custom([
                        "template" => "post_in_list_card.html",
                        "count" => 10
                    ]);
                }
            ?>
        </div>
    </div>
</main>
<?php perch_layout("global.footer") ?>