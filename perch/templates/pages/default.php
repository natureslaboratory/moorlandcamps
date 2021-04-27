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

<?php perch_content("Page Content"); ?>

<?php perch_layout("global.footer") ?>