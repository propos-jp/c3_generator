<?php
class C3Generator
{
    var $data = array();
    var $axis = array();
    var $grid = array();
    var $regions = array();
    
    const DATA = 'data';  
    const AXIS = 'axis';
    const GRID = 'grid';
    const REGIONS = 'regions';
    
    const X = 'x';
    const Y = 'y';
    
    const COLUMNS = 'columns';
    const TYPE = 'type';
    const LINES = 'lines';
   
    const START = 'start';
    const END = 'end';
    const CLAZZ = 'class';
   
    public function data_x($name){
        $this->data[self::X] = $name;
    }
    
    public function data_columns($name,$data){
        $this->data[self::COLUMNS][] = array_merge(array($name),$data);
    } 
   
    public function data_type($type){
        $this->data[self::TYPE] = $type;
    }
    
    public function axis_x($param){
        $this->axis[self::X] = $param;
    }    
    
    
    public function grid_y_lines($param){
        $this->grid[self::Y] [self::LINES][]= $param;
    }
    
    public function regions($axis,$start,$end,$clazz){
        $region = array();
        $region[self::AXIS] = $axis;
        if (!empty($start)){
            $region[self::START] = $start;
        }
        if (!empty($end)){
            $region[self::END] = $end;
        }
        if (!empty($clazz)){
            $region[self::CLAZZ] = $clazz;
        }
        $this->regions[] = $region;
    }
    
    public function regions_x($start,$end,$clazz)
    {
        $this->regions(self::X,$start,$end,$clazz);
    }
    
    public function regions_y($start,$end,$clazz){
        $this->regions(self::Y,$start,$end,$clazz);
    }
    
    public function generate() {
      $ret = array();
      if (!empty($this->data)){
          $ret[self::DATA] = $this->data;
      }
      if (!empty($this->axis)){
          $ret[self::AXIS] = $this->axis;
      }
      if (!empty($this->grid)){
          $ret[self::GRID] = $this->grid;
      }
      if (!empty($this->regions)){
          $ret[self::REGIONS] = $this->regions;
      }
      return $ret;
    }

    
}
?>