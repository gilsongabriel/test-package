<?php

namespace Codemastersolutions\TestPackage\Tests;

use Orchestra\Testbench\TestCase;
use Codemastersolutions\TestPackage\TestPackageServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [TestPackageServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
