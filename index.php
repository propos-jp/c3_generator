<?php
require 'vendor/autoload.php';
require 'c3demo.php';

\Slim\Slim::registerAutoloader();


$app = new \Slim\Slim(array('log.enable' => true,));

$app->get('/hello/:name', function ($name) {
    echo "Hello, " . $name;
});

$app->get('/c3/:name', function ($name) {
   if ($name == 'test1'){
       echo json_encode(c3_test1());
   }else if ($name == 'test2'){
       echo json_encode(c3_test2());
   }else{
       $app->error();
   }
  
});

$app->run();

?>