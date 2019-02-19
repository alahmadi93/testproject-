<?php
use PHPUnit\Framework\TestCase;

final class buildTest extends TestCase
{
    //require 'test.php';
    public function testInjection()
    {
        if($_GET['method']=='create')
        {
            $t=new test();
            $this->assertRegExp($_GET['name'], 'nc -nlvp 8000');
        }  


    }
    public function testTraversal()
    {
        if($_GET['method']=='view')
        {
            $t=new test();
            $this->assertRegExp($_GET['name'], '../../../../../../../etc/passw$
        }


    }    



} 





?>
