<?php
/*
 * This file is part of the String Validator package.
 *
 * Copyright (c) 2015-2017
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Feel free to edit as you please, and have fun.
 *
 * @author Manu Garcia <manugarciaes@gmail.com>
 */
namespace filesystem\Driver;

use filesystem\Collection\FileCollection;
use filesystem\Factory\FileFactoryInterface;

/**
 * Class LocalDriver
 * @package filesystem\Driver
 */
class LocalDriver implements DriverInterface
{
    /**
     * @var FileFactoryInterface
     */
    private $fileFactory;

    /**
     * LocalDriver constructor.
     * @param FileFactoryInterface $fileFactory
     */
    public function __construct(
        FileFactoryInterface $fileFactory
    ){
        $this->fileFactory = $fileFactory;
    }

    public function read(string $path): FileCollection
    {
        $fileCollection = new FileCollection();
        foreach (glob($path) as $filename) {
            $isDir =is_dir($filename) ?? false;
            $fileCollection->add(
                $this->fileFactory->create(
                    basename($filename),
                    date('d-m-y h:i:s', filemtime($filename)),
                    $isDir
                )
            );
        }

        return $fileCollection;
    }
}
