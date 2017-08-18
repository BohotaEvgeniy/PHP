<?php
header('content-type:text/html;charset=utf-8');
?>
<?php
/**
 * Created by PhpStorm.
 * User: Евгений
 * Date: 18.08.2017
 * Time: 6:38
 */

function userBook()
{
    if ($_GET['action']) {
        $file = "files/File.txt";

        $user = $_GET['user'] . "\n";
        $date = date("Y-m-d H:i:s") . "\n";
        $path = $_SERVER['SCRIPT_NAME'] . "\n";

        $r = fopen($file, 'a+');
        fwrite($r, $user);
        fwrite($r, $date);
        fwrite($r, $path);
        fclose($r);
    }
}
/*----------------------------------------------------*/
function numbers () {
    $arr = array();
    $file = "files/FileTask_2.txt";
    $even = "files/even.txt";
    $odd = "files/odd.txt";
    $r = fopen($file, 'w+');
    $evenNumbers = fopen($even, 'w+');
    $oddNumbers = fopen($odd, 'w+');

    for ($i = 0; $i < 1000; $i++) {
        fwrite($r, rand(1, 500) . "\n");
    }
    $arr = file($file);

    foreach ($arr as $key => $value) {
        if (($value % 2) != 1) {
            $tmp = $key . " => " . $value;
            fwrite($evenNumbers, $tmp);
        } else {
            $tmp = $key . " => " . $value;
            fwrite($oddNumbers, $tmp);
        }
    }
    while (!feof($oddNumbers)) {
        echo fgets($oddNumbers) . "<br>";
    }
}

function viewImg () {
    // Каталог, в который мы будем принимать файл:
    $uploaddir = './files/';
    $uploadfile = $uploaddir.basename($_FILES['uploadfile']['name']);

// Копируем файл из каталога для временного хранения файлов:
    if (copy($_FILES['uploadfile']['tmp_name'], $uploadfile))
    {
        echo "<h4>Файл успешно загружен на сервер</h4>";
    }
    else { echo "<h3>Ошибка! Не удалось загрузить файл на сервер!</h3>"; exit; }

// Выводим информацию о загруженном файле:
    echo "<img src='files/".$_FILES["uploadfile"]["name"]."'/><br/>";
    echo "<h4>Информация о загруженном на сервер файле: </h4>";
    echo "<p><b>Оригинальное имя загруженного файла: ".$_FILES['uploadfile']['name']."</b></p>";
    echo "<p><b>Mime-тип загруженного файла: ".$_FILES['uploadfile']['type']."</b></p>";
    echo "<p><b>Размер загруженного файла в байтах: ".$_FILES['uploadfile']['size']."</b></p>";
    echo "<p><b>Временное имя файла: ".$_FILES['uploadfile']['tmp_name']."</b></p>";
}