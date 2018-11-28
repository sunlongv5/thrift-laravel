# thrift-laravel

use Thrift in Laravel

# How to use

## Server side

1. `composer require sunlongv5/thrift-laravel`
2. add provider to `app.providers`:
    ````
    \sunlongv5\Thrift\ThriftServiceProvider::class
    ````
3. setting `thrift.providers` in file `config/thrift.php`:
    ````
    // first is service name, defined in thrift file
    // second in Service implement reference, e.g.
    // class ImageServcie implement \sunlongv5\ImageServiceIf
    ['sunlongv5.ImageService', \sunlongv5\ImageService::class],
    ````
4. add Middleware `\sunlongv5\Thrift\Middleware\ThriftServerMiddleware::class` to `app\Http\Kernel`

    in default, the request to `/rpc` will be process by Middleware,
    if you want to change this, please extend `ThriftServerMiddleware` and overwrite `process` method

## Client side

1. `composer require sunlongv5/thrift-laravel`
2. add provider in `app.providers`:
    ````
    \sunlongv5\Thrift\ThriftServiceProvider::class
    ````
3. setting `thrift.depends` in file `config/thrift.php`:
    ````
    // key is url
    // value is array of service name
    "http://localhost/rpc" => [
        'sunlongv5.ImageService',
    ]
    ````
4. usage:
    ````
    /** @var \sunlongv5\Thrift\Contracts\ThriftClient $thriftClient */
    $thriftClient = app(\sunlongv5\Thrift\Contracts\ThriftClient::class);
    /** @var \sunlongv5\ImageServiceIf $imageService */
    $imageService = $thriftClient->with('sunlongv5.ImageService');
    
    $result = $imageService->foo();
    ````

# TODO

* Unittest
