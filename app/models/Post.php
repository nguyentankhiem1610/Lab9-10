<?php

abstract class Post
{
    private $id;
    private $title;
    private $content;
    private $author;
    private $created_at;

    public function __construct($title = "", $content = "", $author = "")
    {
        $this->title = $title;
        $this->content = $content;
        $this->author = $author;
    }

    // Getter
    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getCreatedAt()
    {
        return $this->created_at;
    }

    // Setter
    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }

    abstract public function getAllPosts();
    abstract public function createPost();
}