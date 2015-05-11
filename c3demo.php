<?php

require_once 'lib/c3generator.php';

function c3_test1(){
    $target = new C3Generator();
   
    $target->data_x("x");
    $target->data_columns("x",array('2013-01-01', '2013-01-02', '2013-01-03', '2013-01-04', '2013-01-05', '2013-01-06'));
    $target->data_columns("data1",array(30, 200, 100, 400, 150, 250));
    $target->data_columns("data2",array(50, 20, 10, 40, 15, 25));
    $target->axis_x(array('type'=>'timeseries','tick'=>array('format'=>'%Y-%m-%d')));
    $target->grid_y_lines(array('value'=>350,'text'=>'①基準値区分=1：単一'));
    return $target->generate();
}

function c3_test2(){
    $target = new C3Generator();
    
    $target->data_columns("data1",array(60));
    $target->data_columns("data2",array(120));
    $target->data_type('pie');
    return $target->generate();    
}

function c3_test3(){
    
}

function c3_test4(){
    
}
?>