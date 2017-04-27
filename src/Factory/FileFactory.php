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
namespace filesystem\Factory;

use filesystem\Entity\File;

/**
 * Class FileFactory
 * @package filesystem\Factory
 */
class FileFactory implements FileFactoryInterface
{
    /**
     * @param string $name
     * @param string $createdAt
     * @param bool $isDir
     * @return $this
     */
    public function create(
        string $name,
        string $createdAt,
        bool $isDir
    )
    {
        return (new File())
            ->setName($name)
            ->setIsDir($isDir)
            ->setCreatedAt($createdAt);
    }
}
