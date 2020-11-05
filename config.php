<?php

active_group = 'default';
$query_builder = TRUE;


$db['default'] = array(
    'dsn'    => '',
    'hostname' => 'us-cdbr-east-02.cleardb.com',
    'username' => 'bf0b7d9cee40df',
    'password' => 'd13d39e8',
    'database' => 'heroku_296d1f040e8ccb9',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => FALSE,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt' => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);


?>

