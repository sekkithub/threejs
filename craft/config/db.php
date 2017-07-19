<?php

/**
 * Database Configuration
 *
 * All of your system's database configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/db.php
 */

$dev = array(
    'server' => 'localhost',
    'user' => 'root',
    'password' => '',
    'database' => 'basecraft_dev');

$develop = array(
    'server' => 'localhost',
    'user' => '',
    'password' => '',
    'database' => '');

$staging = array(
    'server' => 'localhost',
    'user' => '',
    'password' => '',
    'database' => '');

$production = array(
    'server' => 'localhost',
    'user' => '',
    'password' => '',
    'database' => '');


return array(
    '*' => array(
        'tablePrefix' => 'craft',
    ),
    '.dev' => $dev,
    'localhost' => $dev,
    '192.168.1' => $dev,
    'tnhdev.com' => $develop,
    'tnhstage.com' => $staging,
    'tnhprod.com' => $production,
    'www.sample.com' => $production
);
