<?php
require_once __DIR__ . '/session.php';


$is_correct = null;
if ($_SESSION['email']) {
    if (str_contains($_SESSION['email'], '@') && str_contains($_SESSION['email'], '.')) {
        $is_correct = true;
        header('Location: thankyou.php');
    } else {
        $is_correct = false;
    }
}
