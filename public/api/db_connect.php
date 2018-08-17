<?php
require_once('../../config/db.php');

$conn = mysqli_connect($host, $user, $password, $db_name);

if(!$conn) {
    $output['error'] = 'ERROR CONNECTING TO SERVER';
    exit;
}