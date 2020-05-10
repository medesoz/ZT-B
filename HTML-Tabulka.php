<?php
    include('nette/vendor/autoload.php');
    
    use Tracy\Debugger;

    Debugger::enable();
    Debugger::$showBar = true;

$radekJmenoPrijmeni = 8; // Mesic narozeni
$sloupecJmenoPrijmeni = 17; // rok narozeni

/*
funkce, ktera ma hodnotu $radekJmenoPrijmeni a hodnotu $sloupecJmenoPrijmeni
a udela s techto hodnot html tabulku s popisem radku a sloupcu (sloupec - radek)
*/
function htmlTabulka($radekJmenoPrijmeni, $sloupecJmenoPrijmeni)
{
    echo "<table border='1px'>";
    for ($j=1; $j <= $radekJmenoPrijmeni; $j++) {
        echo "<tr>";
        for ($i=1; $i <= $sloupecJmenoPrijmeni; $i++) {
            echo "<td> $i-$j";
        }
    }

    echo "</table>";
}
htmlTabulka(8, 17); // vypsana funkce htmlTabulka
echo "<br>";

$cislo1 = 10;
$cislo2 = 5;
dump(cos($cislo1)); // funkce kosinus
dump(max($cislo1, $cislo2)); // funkce ktera vybere nejvyssi hodnotu
echo "<br>";
$retezec = "Toto je zkouzka retezcovych 'funkci";
dump(addslashes($retezec)); // prida lomeno k retezci
dump(strtoupper($retezec)); // predela vsechna mala pismena na velka
echo "<br>";
$array1 = array("jedna", "dve");
$array2 = array("tri", "ctyri");
dump(array_reverse($array1)); // prohodi poradi pole
dump(array_merge($array1, $array2)); // spoji dve nebo vice poli dohromady
echo "<br>";
echo "<br>";

$co_delat_v_karantene = array(1 => "šachy", "piškvorky", "videohry","televize", "knihy", "filmy","stránky na internetu", "programování", "editace videií","spaní");
foreach ($co_delat_v_karantene as $key => $value) {
    echo $key ."<br>";
}
echo "<br>";
echo "<br>";

/*
vlastni funkce
po zadani pole do funkce vsechna slova zkontroluje zda neobsahuji ceskou
diakritiku a pokud ano upozorni uzivatele kde je problem (pocitani od 0)
a sama navrhne spravne reseni (bez diakritiky)
*/

function diakritikaVeSlove($slovaKonverzace)
{
    $slovaKonverzace;
    $bezDiakritiky = array("á", "é", "í", "ó", "ú", "ý", "č", "ď", "ě", "ň", "ř", "š", "ť", "ž", "ů");
    $zamena = array("a", "e", "i", "o", "u", "y", "c", "d", "e", "n", "r", "s", "t", "z", "u", "5", "9");
    foreach ($slovaKonverzace as $key => $value) {
        foreach ($bezDiakritiky as $klic => $hodnota) {
            foreach ($zamena as $klic1 => $hodnota1) {
                $pos = strpos($value, $hodnota);
                if ($pos === false) {
                } elseif ($pos !== true && $klic === $klic1) {
                    echo "Znak '$hodnota' byl nalezen ve slove '$value'";
                    echo " na pozici $pos a mel by byt zmenen na znak '$hodnota1'<br> ";
                    $prepis = str_replace($hodnota, $hodnota1, $value);
                    str_replace($bezDiakritiky, $zamena, $value);
                    echo "slovo by melo vypadat takto:" .str_replace($bezDiakritiky, $zamena, $value);
                    echo "<br>";
                    echo "<br>";
                } else {
                }
            }
        }
    }
    echo "<br>";
}
diakritikaVeSlove(array("ahoj","tady","půjdém"));
