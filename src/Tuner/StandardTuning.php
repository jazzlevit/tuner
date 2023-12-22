<?php

namespace Jazzlevit\Tuner;

class StandardTuning implements TuningInterface
{
    public function getFrequency(): integer
    {
        return 440;
    }
}