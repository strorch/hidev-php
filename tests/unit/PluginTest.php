<?php

/*
 * HiDev config for PHP projects
 *
 * @link      https://github.com/hiqdev/hidev-php
 * @package   hidev-php
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015, HiQDev (http://hiqdev.com/)
 */

namespace hidev\php\tests\unit;

use hidev\php\Plugin;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2015-11-23 at 10:17:16.
 */
class PluginTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Plugin
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Plugin();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    public function testConstructor()
    {
        $this->assertTrue(is_object($this->object));
        $this->assertArrayHasKey('views', $this->object->getItems());
    }
}
