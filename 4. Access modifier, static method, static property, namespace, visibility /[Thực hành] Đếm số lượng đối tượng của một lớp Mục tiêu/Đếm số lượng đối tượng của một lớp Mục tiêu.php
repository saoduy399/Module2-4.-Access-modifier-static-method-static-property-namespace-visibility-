<?php
require "Application.php";
$ob=new Application("John");
$ob2=new Application("Mary");
echo Application::$count;