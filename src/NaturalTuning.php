<?php

namespace Tuner;

class NaturalTuning implements TuningInterface
{
    public function getFrequency(): integer
    {
        return 432;
    }
}