<?php

ini_set('xdebug.var_display_max_depth', '10');
ini_set('xdebug.var_display_max_children', '256');
ini_set('xdebug.var_display_max_data', '1024');
ini_set("xdebug.overload_var_dump", 1);

$michalSlanina1 = 1;
$michalSlanina2 = 1;

if ($michalSlanina1 = $michalSlanina2) {
    echo "Slanina Michal";
}

echo "<br>";

if ($michalSlanina1 === 1) {
    echo "Michal";
    if ($michalSlanina2 === 1) {
        echo "&nbsp";
        echo "Slanina";
    }
}

echo "<br>";

switch ($michalSlanina1) {
    case '1':
        echo "1";
        break;

    case '2':
        echo "2";
        break;

    case '3':
        echo "3";
        break;  

    case '4':
        echo "4";
        break;

    case '5':
        echo "5";
        break;

    case '6':
        echo "A";
        break;

    default:
        echo "N";
        break;
}

echo "<br>";

$co_delat_v_karantene = array(1 => "šachy", "piškvorky", "videohry","televize", "knihy", "filmy","stránky na internetu", "programování", "editace videií","spaní");

var_dump ($co_delat_v_karantene);

echo "<br>";

$co_delat_v_karantene_s_popisem = array( "první úroveň",
    array( "druhá úroveň",
        0 => array(0 => "třetí úroveň"),
        array("šachy" =>
            array(1 => "přátelské partie", "vážné partie", "rapid šach", "bleskový šach", "korespondenční partie")),
        array("piškvorky" =>
            array(1 => "Gomoku", "Rendžu", "Šestvorky", "3D piškvorky", "Pentago")),
        array("videohry" =>
            array(1 => "simulátor", "strategické", "VR", "MMO", "FPS")),
        array("televize" =>
            array(1 => "zprávy", "pořady", "reklamy", "filmy", "seriály")),
        array("knihy" =>
            array(1 => "babička", "kytice", "bylo nás pět", "hamlet", "romeo a julie")),
        array("filmy" =>
            array(1 => "akční", "komedie", "romantické", "horrorové", "sci-fi")),
        array("stránky na internetu" =>
            array(1 => "technologie", "vaření", "součastná situlace", "politika", "domácnost")),
        array("programování" =>
            array(1 => "C++", "JS", "java", "PHP", "python")),
        array("editace videií" =>
            array(1 => "kompilace", "montáž", "filmová", "animace", "videoklip")),
        array("spaní" =>
            array(1 => "na boku", "na zádech", "na břiše", "na zemi", "v sedě",)),
    ),
);


var_dump ($co_delat_v_karantene_s_popisem);

?>