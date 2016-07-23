<?php

require 'MilDateTime.php';

$d = new MilDateTime('2015 0907 0401');
echo $d->year_str;
echo $d->sql_format;