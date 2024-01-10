<?php

session_start();
if (isset($_GET["email-input"])) {
    $_SESSION['email'] = $_GET["email-input"];
}
