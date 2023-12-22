<?php

namespace Jazzlevit\Tuner;

class NaturalTuning implements TuningInterface
{
    public function getFrequency(): int
    {
        return 432;
    }
}