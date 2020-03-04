<?php
namespace Blogs;

include "../vendor/autoload.php";




class UserService {
  private $collection;
  public function __construct(){
    $conn= new \MongoDB\Client("mongodb://localhost");
    $this->collection = $conn->leandro->usuarios;
  }

  public function getAllUsers() {
    $cursor = $this->collection->find(array());

    $usuarios=array();
    foreach ($cursor as $users) {
      $usuarios[]= $users['users'];
    }
    return $usuarios;
  }

  public function userExists(string $user) {
    $usuarios = $this->getAllUsers();
    foreach($usuarios as $u) {
      if ($u == $user) {
        return true;
      }
    }
    return false;
  }
  
  public function saveUser(string $user) {
    $usuarios = $this->collection->insertOne([
      'users' => $user,
  ]);
    return true;
  }

  public function deleteCollection() {
    $this->collection->drop();
  }
}
