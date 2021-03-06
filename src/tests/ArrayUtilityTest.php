<?php

namespace Slackbot\Tests;

use PHPUnit\Framework\TestCase;
use Slackbot\utility\ArrayUtility;

class ArrayUtilityTest extends TestCase
{
    /**
     * Test filterArray.
     */
    public function testFilterArray()
    {
        $utility = new ArrayUtility();

        $toFilter = [
            'token'    => '123',
            'dummyKey' => '333',
            'access'   => 'public',
        ];

        $expected = [
            'token'  => '123',
            'access' => 'public',
        ];

        $filtered = $utility->filterArray($toFilter, [
            'token',
            'access',
        ]);

        $this->assertEquals($expected, $filtered);
    }
}
