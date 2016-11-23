<?php
require_once 'SingletonSample.class.php';

echo '$instance1 : ';
$instance1 = SingletonSample::getInstance();
echo '<br>';
sleep(1);
echo '$instance2 : ';
$instance2 = SingletonSample::getInstance();
echo '<br>';
echo '<hr>';

echo '$instance1 ID : '.$instance1->getID().'<br>';
echo '$instance2 ID : '.$instance2->getID().'<br>';
echo '<hr>';

echo '$instance1 === $instance2 : '.($instance1 === $instance2 ? 'true' : 'false');
echo '<hr>';

$instance1_clone = clone $instance1;
