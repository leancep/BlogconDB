<?php
namespace Tests;

use \PHPUnit\Framework\TestCase;

class UserServiceTest extends TestCase
{
    public function testandaTodo(){
        $this->assertTrue(True);
    }
    public function testexisteClase(){
        $FS= new \Blogs\UserService();
        $this->assertTrue(class_exists("\Blogs\UserService"));
    }
    public function testGetAllUsers(){
        $FS= new \Blogs\UserService();
        $FS->deleteCollection();
        $FS->saveUser("jaime");
        $users=$FS->getAllUsers();
        $this->assertCount(1,$users);
        $FS->deleteCollection();
    }
    public function testUserExists(){
        $FS= new \Blogs\UserService();
        $FS->getAllUsers();
        $FS->saveUser("lean");
        $FS->saveUser("jaime");
        $user=$FS->userExists("lean");
        $this->assertTrue($user);
        $user1=$FS->userExists("jaime");
        $this->assertTrue($user1);
        $FS->deleteCollection();
    }
    public function testSaveUser(){
        $FS= new \Blogs\UserService(); 
        $save=$FS->saveUser("jaime");
        $this->assertTrue($save);
        $FS->deleteCollection();
    }
}