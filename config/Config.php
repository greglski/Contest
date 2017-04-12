<?php
define('E_MAIL_ADMIN', 'admin@example.com' );
define('SERVER', 'localhost');
define('USER', 'root');
define('PASSWORD', '');
define('DB', 'warsaw');

define('WITRYNA', 'http://localhost/Contest/');


function __autoload($className){
    require 'class/'.$className.'.php';
}
