<?php
class C3Test extends PHPUnit_Framework_TestCase
{
    public function test2()
    {
        $target = new C3Generator();
        
        $str2 = file_get_contents(dirname(__FILE__) . '/files/test2.json');
    
        $test_data = json_decode($str2,true,8);
        
        $target->data_columns("data1",array(30));
        $target->data_columns("data2",array(120));
        $target->data_type('pie');
        $this->assertEquals($test_data, $target->generate());
    }
    
    public function test1()
    {
        $target = new C3Generator();
        
        $str2 = file_get_contents(dirname(__FILE__) . '/files/test1.json');
    
        $test_data = json_decode($str2,true,8);
        
        $target->data_x("x");
        $target->data_columns("x",array('2013-01-01', '2013-01-02', '2013-01-03', '2013-01-04', '2013-01-05', '2013-01-06'));
        $target->data_columns("data1",array(30, 200, 100, 400, 150, 250));
        $target->data_columns("data2",array(50, 20, 10, 40, 15, 25));
        $target->axis_x(array('type'=>'timeseries','tick'=>array('format'=>'%Y-%m-%d')));
        $target->grid_y_lines(array('value'=>350,'text'=>'①基準値区分=1：単一'));
        $this->assertEquals($test_data, $target->generate());
    }
    
    public function test3()
    {
        $target = new C3Generator();
        
        $str2 = file_get_contents(dirname(__FILE__) . '/files/test3.json');
    
        $test_data = json_decode($str2,true,8);
        
        $target->data_x("x");
        $target->data_columns("x",array('2013-01-01', '2013-01-02', '2013-01-03', '2013-01-04', '2013-01-05', '2013-01-06'));
        $target->data_columns("data1",array(30, 200, 100, 400, 150, 250));
        $target->data_columns("data2",array(50, 20, 10, 40, 15, 25));
        $target->axis_x(array('type'=>'timeseries','tick'=>array('format'=>'%Y-%m-%d')));
        $target->regions_y(null,140,'regionY');
        $target->regions_y(300,null,'regionY');
        $this->assertEquals($test_data, $target->generate());
    }
    
    public function test4()
    {
        $target = new C3Generator();
        
        $str2 = file_get_contents(dirname(__FILE__) . '/files/test4.json');
    
        $test_data = json_decode($str2,true,8);
        $target->axis_x(array('type'=>'category','categories'=>array('2011', '2012', '2013', '2014', '2015','2016')));
        $target->data_columns("data1",array(30, 200, 100, 400, 150, 250));
        $target->data_columns("data2",array(50, 20, 10, 40, 15, 25));
        $target->grid_y_lines(array('value'=>350,'text'=>'①基準値区分=1：単一'));
        $this->assertEquals($test_data, $target->generate());
    }

}
?>