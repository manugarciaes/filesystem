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
namespace filesystem\BreadCrumb;

/**
 * Interface BreadCrumbInterface
 * @package filesystem\BreadCrumb
 */
interface BreadCrumbInterface
{
    /**
     * @param string $string
     * @return $this
     */
    public function create(string $string);

    /**
     * @return array
     */
    public function get(): array;
}