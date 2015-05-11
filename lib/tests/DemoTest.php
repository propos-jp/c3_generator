<?php


require '../../c3demo.php';

class C3DemoTest extends PHPUnit_Framework_TestCase
{
    public function test_for_test1(){
        $str2 = file_get_contents(dirname(__FILE__) . '/files/test1.json');
    
        $test_data = json_decode($str2,true,8);
        
        $this->assertEquals($test_data,c3_test1());
    }
}
?>