<?php

namespace Sawirricardo\Replicate\Laravel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \Sawirricardo\Replicate\Resources\PredictionResource predictions()
 * @method static \Sawirricardo\Replicate\Resources\TrainingResource trainings()
 * @method static \Sawirricardo\Replicate\Resources\ModelResource models()
 */
class Replicate extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Sawirricardo\Replicate\Laravel\Replicate::class;
    }
}
