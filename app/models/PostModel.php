<?php

require_once __DIR__ . "/Post.php";
require_once __DIR__ . "/../../config/db_module.php";

class PostModel extends Post
{
    public function __construct($title = "", $content = "", $author = "")
    {
        parent::__construct($title, $content, $author);
    }
    public function getAllPosts()
    {
        $link = null;
        taoKetNoi($link);

        $query = "SELECT * FROM posts ORDER BY created_at DESC";

        $result = chayTruyVanTraVeDL($link, $query);

        $data = [];

        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $data[] = $row;
            }
        }

        giaiPhongBoNho($link, $result);

        return $data;
    }

    public function createPost()
    {
        $link = null;
        taoKetNoi($link);

        $title = $this->getTitle();
        $content = $this->getContent();
        $author = $this->getAuthor();

        $query = "INSERT INTO posts(title, content, author)
                  VALUES('$title', '$content', '$author')";

        $result = chayTruyVanKhongTraVeDL($link, $query);

        giaiPhongBoNho($link, null);

        return $result;
    }
}