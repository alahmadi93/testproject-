<?php
use PHPUnit\Framework\TestCase;

final class buildTest extends TestCase
{
    //require 'test.php';
    public function testInjection()
    {
        if($_GET['method']=='create')
        {
            $this->assertRegExp($_GET['name'], 'nc -nlvp 8000');
        }  


    }
    public function testTraversal()
    {
        if($_GET['method']=='view')
        {
            $this->assertRegExp($_GET['name'], '../../../../../../../etc/passw$
        }


    }    



} 





?>
