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

/**
 * Interface DriverInterface
 * @package filesystem\Driver
 */
interface DriverInterface {

    /**
     * @param string $path
     * @return FileCollection
     */
    public function read(string $path): FileCollection;
}