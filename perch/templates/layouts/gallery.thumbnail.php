<?php

function getFileNameEnd($filenameSplit) {
    return explode(".", $filenameSplit[count($filenameSplit)-1])[0];
}

function formatImageUrl($url) {
    $explodedUrlByDot =  explode(".", $url);
    $extension = $explodedUrlByDot[1];
    $explodedUrlBySlash = explode("/", $explodedUrlByDot[0]);
    $name = $explodedUrlBySlash[count($explodedUrlBySlash)-1];

    $files = scandir($_SERVER['DOCUMENT_ROOT'] . "/perch/resources/");

    $thumbnail = "";

    foreach ($files as $filename) {
        // echo "-- $filename <br>";
        $filenameSplit = explode("-", $filename);
        $filenameEnd = getFileNameEnd($filenameSplit);
        $isThumb = false;
        $isMatch = false;
        foreach ($filenameSplit as $filenameSubString) {
            if ($filenameSubString == $name) {
                $isMatch = true;
            }
            if ($filenameEnd == "thumb@2x") {
                $isThumb = true;
            }
        }
        if ($isThumb && $isMatch) {
            $thumbnail = $filename;
            break;
        }
    }

    if ($thumbnail) {
        return "/perch/resources/" . $thumbnail;
    } else {
        return $url;
    }
}

$thumbnail = formatImageUrl(perch_layout_var("src", true));
?>

<img src=<?= $thumbnail ?> alt="<?php perch_layout_var("alt") ?>">