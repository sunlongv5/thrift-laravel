<?php

namespace sunlongv5\Thrift\Contracts;

interface ThriftClient
{
    /**
     * @param string $name
     * @return mixed
     */
    public function with($name);
}
