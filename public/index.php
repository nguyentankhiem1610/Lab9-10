<?php

require_once "../app/controllers/PostController.php";

$link=null;
taoKetNoi($link);

if($link){
    echo "Kết nối thành công đến máy chủ";
    giaiPhongBoNho($link, null);
}


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
