<?php 
namespace Blogs;
include "../vendor/autoload.php";

class BlogService {
    private $collection;
    public function __construct(){
      $conn= new \MongoDB\Client("mongodb://localhost");
      $this->collection = $conn->leandro->usuarios;
    }
  
    public function savePost(string $content, string $user) {
      $post = $this->collection->insertOne([
        'post'.$user => $content,
      ]);
      return true;
    }
    
    public function getAllPosts(string $user) { 
      $usuarios = $this->collection->insertOne([
        'users' => $user,
    ]);
      return true;
      return $posts;
    }
  }