<?php
$is_correct = null;
if ($email) {
    if (str_contains($email, '@') && str_contains($email, '.')) {
        $is_correct = true;
    } else {
        $is_correct = false;
    }
}
