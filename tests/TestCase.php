<?php

namespace Sawirricardo\Replicate\Laravel\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Sawirricardo\Replicate\Laravel\ReplicateServiceProvider;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            ReplicateServiceProvider::class,
        ];
    }
}
