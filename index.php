<?php
require 'vendor/autoload.php';
require 'c3test.php';

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();
$app->get('/hello/:name', function ($name) {
    echo "Hello, " . $name;
});

$app->get('/c3/:name', function ($name) {
   if ($name == 'test1'){
       echo c3_test1();
   }else if ($name == 'test2'){
       echo file_get_contents('demo2.json');
   }else{
       $app->error();
   }
  
});

$app->run();

?>