<?php
require_once __DIR__ . "/../../config/db_module.php";

class PostModel {

    public function getAllPosts() {

        $link = null;
        taoKetNoi($link);

        $query = "SELECT * FROM posts ORDER BY created_at DESC";

        $result = chayTruyVanTraVeDL($link,$query);

        $data = [];

        if($result){
            while($row = mysqli_fetch_assoc($result)){
                $data[] = $row;
            }
        }

        giaiPhongBoNho($link,$result);

        return $data;
    }

    public function createPost($title,$content,$author){

        $link = null;
        taoKetNoi($link);

        $query = "INSERT INTO posts(title,content,author)
                  VALUES('$title','$content','$author')";

        $result = chayTruyVanKhongTraVeDL($link,$query);

        giaiPhongBoNho($link,null);

        return $result;
    }
}
?>