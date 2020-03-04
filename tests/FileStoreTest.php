<?php
namespace Tests;

use \PHPUnit\Framework\TestCase;

class FileStoreTest extends TestCase
{
    public function testandaTodo(){
        $this->assertTrue(True);
    }
    public function testexisteClase(){
        $FS= new \Blogs\FileStore("Lean");
        $this->assertTrue(class_exists("\Blogs\FileStore")); //ESTA MAL
    }
    // public function testSave(){
       
    //     $FS=new \Blogs\FileStore("Leandro");
    //     $cosas=array ("jugo","pan","coca");
    //     $this->assertTrue($FS->save($cosas));
        // $cosas[]="leche";
        // $this->assertTrue($FS->save($cosas));
        // $FS->read();
        // $this->assertContains("leche","Leandro");
    public function testRead(){
        $fst=new \Blogs\FileStore("txt");
        $lala=array("hola");
        $fst->save($lala);
        $this->assertIsArray($fst->read());
    }
    public function testSave(){
        $file=new \Blogs\FileStore("jaja");
        $this->assertNotFalse($file->save(["holis"]));
    }
    public function testSaveandRead(){
    $archivo= new \Blogs\FileStore("readme.txt");
    $archivo->save(["hola","chau"]);
    $this->assertSame(["hola","chau"],$archivo->read());
    }
    public function testContarElementos(){
        $file= new \Blogs\FileStore("service");
        $lista=array("pepe","pepa","pipo");
        $file->save($lista);
        $this->assertCount(3,$lista);
    }
}

