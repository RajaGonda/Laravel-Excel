<?php

namespace Rajagonda\Excel\Transactions;

use Illuminate\Support\Manager;
use Rajagonda\Excel\Config\Configuration;

class TransactionManager extends Manager
{
    /**
     * @return string
     */
    public function getDefaultDriver()
    {
        return Configuration::getTransactionHandler();
    }

    /**
     * @return NullTransactionHandler
     */
    public function createNullDriver()
    {
        return new NullTransactionHandler();
    }

    /**
     * @return DbTransactionHandler
     */
    public function createDbDriver()
    {
        return new DbTransactionHandler(
            $this->app->get('db.connection')
        );
    }
}
