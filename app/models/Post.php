<?php

abstract class Post {

    protected $id;
    protected $title;
    protected $content;
    protected $author;
    protected $created_at;

    public function __construct($title = "", $content = "", $author = "")
    {
        $this->title = $title;
        $this->content = $content;
        $this->author = $author;
    }

    // getter
    public function getTitle(){
        return $this->title;
    }

    public function getContent(){
        return $this->content;
    }

    public function getAuthor(){
        return $this->author;
    }

    public function getCreatedAt(){
        return $this->created_at;
    }

    // abstract methods (lớp con phải implement)
    abstract public function getAllPosts();
    abstract public function createPost($title,$content,$author);

}