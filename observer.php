<?php
use Design\Observer\MySubject;
use Design\Observer\MyObserver;

require_once __DIR__.'/autoload.php';

$subject = new MySubject('Publicer');

$subject->attach(new MyObserver("Subscripter 1"));
$subject->attach(new MyObserver("Subscripter 2"));
$subject->attach(new MyObserver("Subscripter 3"));
$subject->attach(new MyObserver("Subscripter 4"));
$subject->attach(new MyObserver("Subscripter 5"));

$subject->setContent("Hello Observer Pattern");