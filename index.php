<?php

define('ROOT',$_SERVER['HTTP_X_FORWARDED_PROTO'].'://'.$_SERVER['HTTP_HOST']);

require('system/boot.php');
require('helpers/functions.php');
require('system/router.php');

