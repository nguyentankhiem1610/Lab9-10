<?php
require_once __DIR__ . "/../models/PostModel.php";

class PostController {

    public function index() {

        $model = new PostModel();

        $posts = $model->getAllPosts();

        require_once __DIR__ . "/../views/home.php";
    }

    public function create() {
        require_once __DIR__ . "/../views/createpost.php";
    }

    public function store(){

    if(isset($_POST['title']) && isset($_POST['content']) && isset($_POST['author'])){

        $title = $_POST['title'];
        $content = $_POST['content'];
        $author = $_POST['author'];

        $model = new PostModel();

        $model->createPost($title,$content,$author);

        header("Location: index.php");
    }
}
}
?>