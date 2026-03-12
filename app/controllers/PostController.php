<?php
require_once __DIR__ . "/../models/PostModel.php";

class PostController
{

    public function index()
    {

        $model = new PostModel();

        $posts = $model->getAllPosts();

        require_once __DIR__ . "/../views/home.php";
    }

    public function create()
    {
        require_once __DIR__ . "/../views/createpost.php";
    }

    public function store()
    {
        if (isset($_POST['title']) && isset($_POST['content']) && isset($_POST['author'])) {

            $post = new PostModel(
                $_POST['title'],
                $_POST['content'],
                $_POST['author']
            );

            $post->createPost();

            header("Location: index.php");
        }
    }
}
