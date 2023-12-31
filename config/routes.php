<?php

use Pecee\{
    Http\Request,
    SimpleRouter\SimpleRouter as Router
};

const PROD = false;

Router::setDefaultNamespace('Pizza\Pizza\Controller');

Router::get('/', 'UserController@index');
/*
Router::group([
    'prefix' => 'api/v1',
    'middleware' => [
        ProccessRawBody::class
    ]
], function () {
    Router::post('/auth/sign-in', 'AuthController@signin');
    Router::get('/project', 'ProjectController@index');
    Router::group([
        'middleware' => [
            Authenticate::class
        ]
    ], function () {
        // authenticated routes
        Router::post('/project/create', 'ProjectController@create');
        Router::post('/project/update/{id}', 'ProjectController@update')
            ->where(['id' => '[\d]+']);
    });
});
*/
Router::get('/controller', 'UserController@index')
    ->setMatch('/\/([\w]+)/'); //для любого явно не заданного пути

Router::error(function(Request $request, Exception $exception) {
    $response = Router::response();
    switch (get_class($exception)) {
        case NotAuthorizedHttpException::class: {
            $response->httpCode(401);
            break;
        }
        case Exception::class: {
            $response->httpCode(500);
            break;
        }
    }
    if (PROD) {
        return $response->json([]);
    } else {
        return $response->json([
            'status' => 'error',
            'message' => $exception->getMessage()
        ]);
    }
});