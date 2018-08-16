<?php
$output = [
    'success' => false
];

require_once('db_connect.php');

$method = $_SERVER['REQUEST_METHOD'];
$action = $_GET['action'];
switch ($method) {
    case "GET":
    require_once('get/'.$action.'.php');
    break;
    case "POST":
    $output['success'] = 'true';
    $output['message'] = 'Post Request Made';
    break;
    case "PUT":
    $output['success'] = 'true';
    $output['message'] = 'Put Request Made';
    break;
    case "DELETE":
    $output['success'] = 'true';
    $output['message'] = 'Delete Request Made';
    break;
    case "PATCH":
    $output['success'] = 'true';
    $output['message'] = 'Patch Request Made';
    break;
    default:
    $output['error'] = 'Unknown Request made';
}
$output = json_encode($output);
print $output;
?>