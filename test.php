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

$fileSystem->setPath($_SERVER['argv']['1'].'/*');
$list = $fileSystem->read();

echo json_encode($list->get(), JSON_PRETTY_PRINT);