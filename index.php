 <?php
$database = require 'core/bootstrap.php';



require router::load('routes.php')
->direct(request::url(), Request::method());
