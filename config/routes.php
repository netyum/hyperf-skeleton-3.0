<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
use Hyperf\HttpServer\Router\Router;
use Hyperf\HttpServer\Contract\RequestInterface;
//Router::addRoute(['GET', 'POST', 'HEAD'], '/', 'App\Controller\IndexController@index');
//
//Router::get('/favicon.ico', function () {
//    return '';
//});

Router::get('/api/test/[{id}]', function($id = null) {
   return $id??'null';
});

Router::get('/api/req', function(RequestInterface $request) {
    var_dump($request->get('abc'));
    return $request->only(['abc', 'efg']);
});
