<?php

namespace Rajagonda\Excel\Concerns;

use Rajagonda\Excel\Validators\Failure;

interface SkipsOnFailure
{
    /**
     * @param Failure[] $failures
     */
    public function onFailure(Failure ...$failures);
}
