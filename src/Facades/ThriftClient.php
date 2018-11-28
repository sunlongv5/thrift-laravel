<?php

namespace sunlongv5\Thrift\Facades;

use Illuminate\Support\Facades\Facade;
use sunlongv5\Thrift\Contracts\ThriftClient as BaseThriftClient;

/**
 * @see \sunlongv5\Thrift\Contracts\ThriftClient
 */
class ThriftClient extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return BaseThriftClient::class;
    }
}
