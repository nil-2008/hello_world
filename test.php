<?php
require_once "vendor/autoload.php";

$hello = new Lianyou\Demo\Hello();

echo $hello->hello();

echo "\n";

$hiGirl = new Lianyou\Demo\Hello("My Goddess");
echo $hiGirl->hello();
