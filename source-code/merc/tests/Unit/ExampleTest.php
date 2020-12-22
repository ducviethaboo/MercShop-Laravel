<?php

namespace Tests\Unit;

use App\Http\Controllers\TestController;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $test = new TestController();
        $result = $test->findById(100);
        $exptected = null;
        $this->assertEquals($exptected,$result);
    }
}
