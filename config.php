<?php

session_start();

define("BL",__DIR__.'/');
define("BLA",__DIR__.'/admin/');


define("BU","http://localhost:8080/web/medical_srv/");
define("BUA","http://localhost:8080/web/medical_srv/admin/");
define("ASSETS","http://localhost:8080/web/medical_srv/assets");


#connect to database

require BL.'functions/db.php';


?>