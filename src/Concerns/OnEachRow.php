<?php

namespace Rajagonda\Excel\Concerns;

use Rajagonda\Excel\Row;

interface OnEachRow
{
    /**
     * @param Row $row
     */
    public function onRow(Row $row);
}
