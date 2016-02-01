<?php

/**
 * Created by PhpStorm.
 * User: Adminiator
 * Date: 2016-02-01
 * Time: 21:16
 */
class Test extends PHPUnit_Framework_TestCase
{
    /**
     * @expectedException \Enforce\EnforceException
     */
    function testEnforceThrows() {
        \Enforce\enforce(0, "Tryed to enforce value 0");
    }

    function testEnforcePasses() {
        \Enforce\enforce(1, "Tryed to enforce value 1");
    }

    /**
     * @expectedException \Enforce\EnforceException
     */
    function testEnforceExistsThrows() {
        $arr = [5 => 0];
        \Enforce\enforceExists(4, $arr, "Arr");
    }

    function testEnforceExistsPasses() {
        $arr = [5 => 0];
        \Enforce\enforceExists(5, $arr, "Arr");
    }

    /**
     * @expectedException \Enforce\EnforceException
     */
    function testEnforceNotExistsThrows() {
        $arr = [5 => 0];
        \Enforce\enforceNotExists(5, $arr, "Arr");
    }

    function testEnforceNotExistsPasses() {
        $arr = [5 => 0];
        \Enforce\enforceNotExists(4, $arr, "Arr");
    }
}
