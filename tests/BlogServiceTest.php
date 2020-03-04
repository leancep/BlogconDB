<?php
namespace Tests;

use \PHPUnit\Framework\TestCase;

class BlogServiceTest extends TestCase
{
    public function testSavePost(){
        $FS= new \Blogs\BlogService();
        $contain="El mejor Alumno";
        $user="leandro";
        $posteo=$FS->savePost($contain,$user);
        $this->assertTrue($posteo);
    }
    public function testGetAllPost(){
        $FS= new \Blogs\BlogService();
        $mipost=$FS->getAllPosts("leandro");
        $this->assertNotEmpty($mipost);
    }
    public function testSaveVariosPost(){
        $FS= new \Blogs\BlogService();
        $post=$FS->savePost("Los muchachos se juntan","TeamProvincia");
        $post=$FS->savePost("Eliel se esta enojando","TeamProvincia");
        $post=$FS->savePost("El perro se comio a Robert","TeamProvincia");
        $this->assertTrue($post);

    }
}