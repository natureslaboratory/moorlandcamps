<?php
if (!defined('PERCH_RUNWAY')) {
    include($_SERVER['DOCUMENT_ROOT'] . '/perch/runtime.php');
}

// Report all PHP errors
error_reporting(-1);

// Same as error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);

perch_content_create("Pictures", ["template" => "pictures.html"]);
perch_content_create("Videos", ["template" => "videos.html"]);

?>
<?php perch_layout("global.header") ?>

<main>
    <div class="l-wrap">
        <div class="l-restrict l-restrict c-albums">
            <?php //if (perch_get("p")) { 
            ?>
            <?php //if (perch_get("p") == "pictures") { 
            //perch_content_custom("Pictures");
            //} else if (perch_get("p") == "videos") { 
            //    perch_content_custom("Videos");
            //} 
            ?>
            <?php // } else { 
            ?>
            <!-- <div class="c-gallery-links">
                    <a href="/gallery/pictures" class="c-gallery_link">
                        <h2>Pictures</h2>
                    </a>
                    <a href="/gallery/videos" class="c-gallery_link">
                        <h2>Videos</h2>
                    </a>
                </div> -->
            <?php // } 
            ?>

            <?php
            if (perch_get("s")) {
                perch_gallery_album(perch_get("s"));
            } else {
            ?>
                    <?php

                    function compareAlbums($a, $b) {
                        if ($a["date"] < $b["date"]) {
                            return 1;
                        } else if ($a["date"] > $b["date"]) {
                            return -1;
                        } else {
                            return 0;
                        }
                    }

                    function splitByYear($albums) {
                        $albumsByYear = [];
                        foreach ($albums as $album) {
                            $albumYear = explode("-", $album["date"])[0];
                            $albumsByYear[$albumYear][$album["albumTitle"]] = $album;
                        }
                        return $albumsByYear;
                    }

                    $albums = perch_gallery_albums(["skip-template" => true], true);
                    usort($albums, "compareAlbums");

                    $albumsByYear = splitByYear($albums);

                    foreach ($albumsByYear as $year => $albums) { ?>
                    <div class="c-albums__block">
                        <h3 class="c-albums__year"><?= $year ?></h3>
                        <div class="c-albums__list">
                        <?php
                        foreach ($albums as $title => $album) { 
                            $imageUrl = perch_gallery_album($album["albumSlug"], ["skip-template" => true], true)[0]["small"];
                            ?>
                            <a class="c-album c-choose-camp__camp" style="background-image: url(<?= $imageUrl ?>)" href="/gallery/index.php?s=<?= $album["albumSlug"] ?>">
                                <div class="c-choose-camp__title-content">
                                    <svg class="c-choose-camp__svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 304.09 69.76">
                                        <defs>
                                        </defs>
                                        <g id="Layer_2" data-name="Layer 2">
                                            <g id="Layer_1-2" data-name="Layer 1">
                                                <path class="c-choose-camp__svg-path" d="M186.51,59.93c0,.21,0,.42.05.63a2.15,2.15,0,0,0,2.65-.77l-2.7.14Zm8-.2c1.1,1.2,1.56,1.23,4.14.52-1.26-1.5-2.63-.37-4.14-.52Zm-22.53.53,4.75.1c-1.12-1.69-2.68-1.77-4.75-.1Zm-2.22-1.33c-2,0-4,0-5.95-.14-4.6-.31-9.18-.8-13.77-1-2.65-.13-5.33.24-7.91-.75a5.6,5.6,0,0,0-1.93-.14c-4.91.09-9.83,0-14.73.33-5.06.33-10.11,1-15.15,1.6-2.56.31-5.09.9-7.65,1.18-1.39.15-3.07,1-4-1-.1-.19-5.58-5-6-5-2.46.37-.13,5.54-2.56,6a3,3,0,0,1-2.7-.42,4.89,4.89,0,0,0-2.65-.94c-5-.11-10,0-14.9,1.4a9.67,9.67,0,0,0-1.38.66c0,.17,0,.33,0,.49a35.92,35.92,0,0,0,4.14,1.06c2.56.35,5.16.41,7.72.77,8.8,1.22,17.59.27,26.39,0,2,0,4-.25,5.83,1a1.93,1.93,0,0,0,1.14.27c3.53-.24,7-.54,10.57-.79,2.73-.2,5.5-.72,8.18-.43a25.08,25.08,0,0,0,5.47.16c1.93-.22,3.92-.71,5.77-.39,2.93.52,5.71-.19,8.56-.33,0,0,.06-.27.09-.47-1.7-.65-3.95.48-5.85-1.75a28.56,28.56,0,0,1,3.07-.33c3.48,0,7,.18,10.43.22,2.84,0,5.67,0,8.49,0,.94,0,1.66-.11,1.27-1.37ZM286.66,42.39c1.36,1,2.32,1.72,3.26,2.46,1.93,1.51,3.75,3.13,3.83,5.85a7,7,0,0,1-.23,1.48c-2.48.16-4.82.15-7.1.52-1.37.22-2.64,1.09-4,1.57a12.26,12.26,0,0,1-3.44.95c-2.4.15-4.66.35-6.26,2.53-.29.4-1.16.5-1.78.52-4.75.23-9.51.39-14.28.58a14.33,14.33,0,0,0-2.17.18,18.91,18.91,0,0,1-7.23.22,5.52,5.52,0,0,0-2.65,0c-4.38,1.45-8.84.42-13.25.49-4.86.08-9.71-.23-14.56-.26-1.27,0-2.55.61-3.79.54s-2.39-.86-3.61-1c-2.23-.17-4.48-.07-6.79-.09.42,2.21.51,2.29,2,2.29,2.29,0,4.57,0,6.86.06.54,0,1,.75,1.58.82,3.77.49,7.53.94,11.3,1.3,3,.29,6,.35,9,.67s6.07.85,9.11,1.28c3.75.52,7.5,1,11.27,1.38-1.53.06-3.06.09-4.59.19a47.36,47.36,0,0,1-11.82-1c-.8-.14-1.59-.33-2.4-.4-5.63-.46-11.27-1-16.91-1.3-3.38-.15-6.79.16-10.18.27-5.66.18-11.32.32-17,.54-8.26.33-16.47-.43-24.69-1a81,81,0,0,0-14.75.63c-8.2.93-16.42,1.59-24.64,2.25-7.35.58-14.69.74-22,1-6.46.2-12.89,1.07-19.34,1.56-2.82.21-5.66.3-8.49.26a107.82,107.82,0,0,1-19.56-1.54,1.75,1.75,0,0,1-.24,0c-2.57-1.44-5.48-2.07-8.11-3.51-2.15-1.18-2.17-2.67-2-4.87a17.36,17.36,0,0,0-3.2-.57,48.27,48.27,0,0,0-5.08.4c-6.7.74-13.42.43-20.13.26-1.53,0-3.07,0-4.6.1a20.15,20.15,0,0,1-8.12-1.14A5.17,5.17,0,0,1,3.3,57.16a40,40,0,0,1-3-6.06c-.65-1.75-.14-4,.07-6a8.07,8.07,0,0,1,4-6,47.59,47.59,0,0,1,15.35-6.49c8.5-2,17.05-3.78,25.59-5.57,2.46-.51,5-.72,7.44-1.11a23.32,23.32,0,0,0,3.32-.7c1.48-.45,1.62-.85,1.11-2.31-.77-2.21-1.57-4.4-2.26-6.63a11.25,11.25,0,0,1-.28-2.4A3.59,3.59,0,0,1,57,10,13.2,13.2,0,0,0,60,8.1,13.6,13.6,0,0,1,67.55,5C77.7,4,87.84,3,98,2.11c13.64-1.16,27.33-1,41-1.21C151.47.71,163.92.13,176.38,0c9.47-.08,18.94.28,28.41.45,7.69.14,15.38.12,23.05.5,6.87.35,13.71,1.15,20.56,1.76a3.8,3.8,0,0,1,1.18.22c3.43,1.58,7.08,1.63,10.72,1.55,4.1-.08,8,.84,12,1.65A3.09,3.09,0,0,1,274,7c1.11,1.37,2.66,1.74,4.19,2.25,3.29,1.11,6.58,2.26,9.87,3.39,1.4.49,2.74,1.29,4.2-.1a2.34,2.34,0,0,1,2.07.09c2,1.13,4,2.36,6,3.67A3.37,3.37,0,0,1,301.48,18q1.33,4.78,2.47,9.62a5.51,5.51,0,0,1-2,5.44A35,35,0,0,1,292,40C290.37,40.65,288.78,41.42,286.66,42.39Z" />
                                            </g>
                                        </g>
                                    </svg>
                                    <div class="c-choose-camp__title-wrapper">
                                        <h3 class="c-choose-camp__title"><?= $title ?></h3>
                                    </div>
                                </div>
                            </a>
                        <?php } ?>
                        </div>
                    </div>
                    <?php } ?>
            <?php
            }

            function printArray($item, $depth = 0) {
                foreach ($item as $key => $value) {
                    $depthString = str_repeat("--", $depth);
                    if (gettype($value) !== "array") {
                        echo "$depthString $key: $value <br>";
                    } else {
                        echo "$depthString $key: <br>";
                        printArray($value, $depth+1);
                    }
                }
            }

            // printArray($albumsByYear);

            ?>

        </div>
    </div>
</main>

<?php perch_layout("global.footer") ?>