<?php

/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/general.php
 */

return array(
    '*' => array(
        'omitScriptNameInUrls' => true,
        'allowAutoUpdates' => false,
        'defaultImageQuality' => 85,
        'cpTrigger' => 'cp'
    ),

    'localhost' => array(
        'devMode' => true,
        'siteUrl' => 'http://localhost:8080',
        'environmentVariables' => array(
          'baseUrl' => 'http://localhost:8080/',
          'basePath' => '../public'
        ),
        'environment' => 'dev'
    ),

    '.dev' => array(
        'devMode' => true,
        'siteUrl' => 'http://threejs.dev',
        'environmentVariables' => array(
          'baseUrl' => 'http://threejs.dev',
          'basePath' => '../public/'
        ),
        'environment' => 'dev'
    ),

    'dbh.tnhdev.com' => array(
        'devMode' => false,
        'cooldownDuration' => 0,
        'environmentVariables' => array(
          'baseUrl' => 'https://sample.tnhdev.com',
          'basePath' => '/home/forge/sample.tnhdev.com/public/',
        ),
        'siteUrl' => 'https://sample.tnhdev.com',
        'environment' => 'staging'
    ),

    'dbh.tnhstage.com' => array(
        'devMode' => false,
        'cooldownDuration' => 0,
        'environmentVariables' => array(
          'baseUrl' => 'https://sample.tnhstage.com',
          'basePath' => '/home/forge/sample.tnhstage.com/public/',
        ),
        'siteUrl' => 'https://sample.tnhstage.com',
        'environment' => 'staging'
    ),

    'dbh.tnhprod.com' => array(
        'devMode' => false,
        'cooldownDuration' => 0,
        'environmentVariables' => array(
          'baseUrl' => 'https://sample.tnhprod.com',
          'basePath' => '/home/forge/sample.tnhprod.com/public/',
        ),
        'siteUrl' => 'https://sample.tnhprod.com',
        'environment' => 'production'
    ),

    'www.dinnerbyheston.com' => array(
        'cooldownDuration' => 0,
        'siteUrl' => 'http://www.sample.com',
        'environment' => 'production'
    ),
);
