<?php

require_once "../app/controllers/PostController.php";

$controller = new PostController();

$action = isset($_GET['action']) ? $_GET['action'] : 'index';

switch ($action) {

    case "create":
        $controller->create();
        break;

    case "store":
        $controller->store();
        break;

    default:
        $controller->index();
        break;
}
