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
 * Class BreadCrumb
 * @package filesystem\BreadCrumb
 */
class BreadCrumb implements BreadCrumbInterface
{
    /**
     * @var array
     */
    private $breadcrumb;

    public function __construct()
    {
        $this->breadcrumb = [];
    }

    /**
     * @param string $string
     * @return $this
     */
    public function create(string $string)
    {
        $elements = explode('/', $string);

        $this->breadcrumb = $elements;

        return $this;

    }

    /**
     * @return array
     */
    public function get(): array
    {
        return $this->breadcrumb;
    }

}