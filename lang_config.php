<?php
if(isset($_REQUEST['lang'])){
    switch ($_GET['lang']) {
        case 'es':
            $_SESSION['Setlang'] = $_GET['lang'];
            break;
        case 'en':
            $_SESSION['Setlang'] = $_GET['lang'];
            break;
        default:
            $_SESSION['Setlang'] = "es";
            break;
    }
} elseif (!$_SESSION['Setlang']) {
    $_SESSION['Setlang'] = "es";
}

$LanguageFile = 'lang/' . $_SESSION['Setlang'] . '.php';

include $LanguageFile; 
