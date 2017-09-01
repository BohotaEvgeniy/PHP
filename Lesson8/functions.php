<?php
session_start();
$data = $_POST;
if ( isset($data['action']) ) {

    $errors = array();
    if ( !preg_match('/^[a-zA_Z0-9-]{4,}/i',$data['userLogin']) && (trim($data['userLogin']) != '')){
        $errors[] = "Enter login.Login isn't correct.Enter please numbers or letters not less 4 symbols";
    }

    if ( !preg_match('/^[a-zA_Z0-9]{4,}/i',$data['userLogin']) && ($data['userPassword'] != '') ){
        $errors[] = "Enter Password";
    }

    if ( trim($data['userPassword2']) != $data['userPassword'] ){
        $errors[] = "Enter Password repeat";
    }

    if ( empty($errors) ) {
        $files = 'files/users.txt';
        $f = fopen($files, 'a+');
        if(!stristr(file_get_contents($files), strtolower($data['userLogin']))){
            $containUser = strtolower($data['userLogin']) . ' ||| ' . password_hash($data['userPassword'],PASSWORD_DEFAULT) . PHP_EOL;
            file_put_contents($files,$containUser,FILE_APPEND | LOCK_EX);
            while  (!feof($f)) {
                $containStr = fgets($f);
                $lengthStr = strlen($containStr);
                $sliceStrHash = substr($containStr,-62);
                $lengthSliceStrLogin = $lengthStr - 66;
                $SliceStrLogin = substr($containStr,0,$lengthSliceStrLogin);
            }
            header('Location: http://php/Lesson8/task_2.php');
        } else {
            echo 'Enter other "Login".Login already exist!';
        }

    } else {
        echo '<div>' . array_shift($errors) . '</div>';
    }
}

/****************************************************************************************************/

if ( isset($data['submit']) ) {

    $errors = array();
    if ( !preg_match('/^[a-zA_Z0-9-]{4,}/i',$data['userLogin']) && (trim($data['userLogin']) != '')){
        $errors[] = "Enter login.Login isn't correct.Enter please numbers or letters not less 4 symbols";
    }

    if ( !preg_match('/^[a-zA_Z0-9]{4,}/i',$data['userLogin']) && ($data['userPassword'] != '') ){
        $errors[] = "Enter Password";
    }

    if ( empty($errors) ) {
        $f = fopen('files/users.txt', 'a+');
        $password = $data['userPassword'];
        if(stristr(file_get_contents('files/users.txt'), strtolower($data['userLogin']))){
            $containUser = strtolower($data['userLogin']) . ' ||| ' . password_hash($data['userPassword'],PASSWORD_DEFAULT) . PHP_EOL;
            while  (!feof($f)) {
                $containStr = fgets($f);
                $lengthStr = strlen($containStr);
                $sliceStrHash = substr($containStr,-62);
                $lengthSliceStrLogin = $lengthStr - 66;
                $sliceStrLogin = substr($containStr,0,$lengthSliceStrLogin);
                if (password_verify($password,$sliceStrHash)){
                    echo 'Invalid password!';
                } else {
                    echo 'Password is invalid' . "\n";
                    $_SESSION['name'] = $sliceStrLogin;
                    echo $_SESSION['name'];
                    exit;
                }
            }
        } else {
            echo "You don't register'";
        }

    } else {
        echo '<div>' . array_shift($errors) . '</div>';
    }
}