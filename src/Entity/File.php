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
namespace filesystem\Entity;

/**
 * Class File
 * @package filesystem\Entity
 */
class File {

    /**
     * @var string
     */
    private $name;

    /**
     * @var bool
     */
    private $isDir;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return bool
     */
    public function isIsDir(): bool
    {
        return $this->isDir;
    }

    /**
     * @param $isDir
     * @return $this
     */
    public function setIsDir($isDir)
    {
        $this->isDir = $isDir;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param string $createdAt
     * @return $this
     */
    public function setCreatedAt(string $createdAt)
    {
        $this->createdAt = new \DateTime($createdAt);

        return $this;
    }
}
