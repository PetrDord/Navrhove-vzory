<?php
require 'singleton/jedinacek.php';
require 'fasada/fas.php';

fasada::echoSoucet(10, 15);
echo "\n";
fasada::echoRozdil(10, 15);
echo "\n";
fasada::echoSoucin(10, 15);
echo "\n";
fasada::echoPodil(10, 15);
echo "\n";
echo "\n";
single::getinstance();
echo "\n";
single::getinstance();
echo "\n";
