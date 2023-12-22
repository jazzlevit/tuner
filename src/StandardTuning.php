<?php

namespace Jazzlevit\Tuner;

class StandardTuning implements TuningInterface
{
    public function getFrequency(): int
    {
        return 440;
    }
}