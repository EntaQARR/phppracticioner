<?php


$app = [];


$app['config'] = require 'config.php';



require 'core/router.php';
require 'core/request.php';
require 'core/Connection.php';
require 'core/QueryBuilder.php';



$app['database'] = new QueryBuilder(

  Connection::make($app['config']['database'])
);
