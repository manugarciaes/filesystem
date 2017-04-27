<?php

require __DIR__ . '/vendor/autoload.php';

use filesystem\FileSystem;
use filesystem\Driver\LocalDriver;
use filesystem\Factory\FileFactory;
use filesystem\BreadCrumb\BreadCrumb;

$driver = new LocalDriver(
    new FileFactory()
);

$fileSystem = new FileSystem(
    $driver,
    new BreadCrumb()
);

$fileSystem->setPath('./*');
$list = $fileSystem->read();

print_r($list);