<?php

namespace Rajagonda\Excel\Concerns;

interface SkipsUnknownSheets
{
    /**
     * @param string|int $sheetName
     */
    public function onUnknownSheet($sheetName);
}
