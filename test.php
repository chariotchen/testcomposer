<?php
  //include("./class/class1.php");
  //include("./class/class2.php");
  include("./vendor/autoload.php");
  $data = [
     'name' => 'zs',
	 'age' =>'18'
  ];
  $json_data = \phptestsoft\Json::encode($data);
  print_r($json_data);
  $json_data = \phptestsoft\Json::decode($json_data);
  print_r($json_data);
  $class = new class1();
  print_r($class);
  $class = new class2();
  print_r($class);
  $class = new \T1\class3();
  print_r($class);
?>