<?php
require_once 'inc/functions.php';
session_start();
require_once 'security.php';

$_SESSION['admin'] = true;
setFlash('noty', [
    'message' => 'добро пожаловать',
    'title' => 'Эгегей',
    'type' => 'success'
]);
goBack();