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
namespace filesystem\Collection;

use filesystem\Entity\File;

/**
 * Interface CollectionInterface
 * @package filesystem\Collection
 */
interface CollectionInterface
{
    /**
     * @param File $file
     * @return $this
     */
    public function add(File $file);

    /**
     * @return array
     */
    public function get(): array;
}