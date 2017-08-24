<?php
header('Content-tepe: text/html,charset=utd-8');
/*============== task 1 ===========================*/
if ($_POST['action']) {
    $patternLogin = '/^[a-zA-Z0-9]{4,}+$/i';
    $patternName = '/[^a-zA-Z0-9\.\?\/\>\<\"\;\:\|\/\]\[\}\{\=\+\_\)\(\*\&\^\%\$\#\@\!\~]+/ui'; // <------May be  ^[а-яёА-ЯЁ-]+
    $patternEmail = '/^[a-zA-Z-\.]+\@[a-zA-Z]{1,6}+\.[a-zA-Z]{2,3}/i';
    $patternPassword = '/^[a-zA-Z0-9\-\/\?\*]{4,}/i';
    if (!isset($_POST['userLogin']) && !isset($_POST['userName']) && !isset($_POST['userEmail']) && !isset($_POST['userPassword'])) {
        echo "ERROR";
    }
    if (!preg_match($patternLogin, $_POST['userLogin'])) {
        echo "Field Login ERROR: Please,enter (English letters or numbers) > 4 symbol";
    }
    if (!preg_match($patternName, $_POST['userName'])) {
        echo "Field Name ERROR: Please,enter Russian letters";
    }
    if (!preg_match($patternEmail, $_POST['userEmail'])) {
        echo "Field Email ERROR: Please,enter English letters,@,English letters,\.,English lstters";
    }
    if (!preg_match($patternPassword, $_POST['userPassword'])) {
        echo "Field Password ERROR: Please,enter English letters,0-9,/,?,-,*";
    }
}
/*=================================================*/
// Транслитерация строк.
function translit($str) {
    $rus = array('А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я', 'а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я');
    $lat = array('A', 'B', 'V', 'G', 'D', 'E', 'E', 'Gh', 'Z', 'I', 'Y', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F', 'H', 'C', 'Ch', 'Sh', 'Sch', 'Y', 'Y', 'Y', 'E', 'Yu', 'Ya', 'a', 'b', 'v', 'g', 'd', 'e', 'e', 'gh', 'z', 'i', 'y', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'h', 'c', 'ch', 'sh', 'sch', 'y', 'y', 'y', 'e', 'yu', 'ya');
    return str_replace($rus, $lat, $str);
}

if ($_POST['actionHttp']) {
    $containTmp = "";
    $containTmp .= $_POST['pathUrl'];
    $translit = translit($containTmp);
    echo var_dump($translit);
}