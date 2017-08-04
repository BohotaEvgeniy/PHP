<?php
/**
 * Created by PhpStorm.
 * User: Евгений
 * Date: 04.08.2017
 * Time: 17:40
 */

$text = trim($_POST['text']);

if($_POST['submit']) {
    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
     echo "Enter email";
    } elseif (empty($text)) {
        echo "May be you'll write some text?";
    } elseif (mail($_POST['email'], $_POST['subject'], $_POST['text'])) {
        echo "Message's sent!";
    } else {
        echo "Message hasn't sent!";
    }
}