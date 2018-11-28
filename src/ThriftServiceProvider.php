<?php

namespace sunlongv5\Thrift;

use Illuminate\Support\ServiceProvider;

class ThriftServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('sunlongv5\Thrift\Contracts\ThriftServer', 'sunlongv5\Thrift\ThriftServerImpl');
        $this->app->singleton('sunlongv5\Thrift\Contracts\ThriftClient', 'sunlongv5\Thrift\ThriftClientImpl');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['sunlongv5\Thrift\Contracts\ThriftServer', 'sunlongv5\Thrift\Contracts\ThriftClient'];
    }
}
