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
namespace filesystem;

use filesystem\BreadCrumb\BreadCrumbInterface;
use filesystem\Collection\FileCollection;
use filesystem\Driver\DriverInterface;

/**
 * Class FileSystem
 * @package filesystem
 */
class FileSystem
{
    /**
     * @var DriverInterface
     */
    private $driver;

    /**
     * @var string
     */
    private $path;

    /**
     * @var BreadCrumb
     */
    private $breadcrumb;

    /**
     * FileSystem constructor.
     * @param DriverInterface $driver
     * @param BreadCrumbInterface $breadCrumb
     */
    public function __construct(
        DriverInterface $driver,
        BreadCrumbInterface $breadCrumb
    ) {
        $this->driver = $driver;
        $this->breadcrumb = $breadCrumb;
    }

    /**
     * @param string $path
     * @return $this
     */
    public function setPath(string $path)
    {
        $this->path = $path;

        return $this;
    }
    /**
     * @return FileCollection
     */
    public function read(): FileCollection
    {
        return $this->driver->read($this->path);
    }

    public function breadcrumb() : BreadCrumbInterface
    {
        $this->breadcrumb->create($this->path);

        return $this->breadcrumb->get();
    }
}