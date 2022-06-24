<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiddlewareController extends Controller
{
    public function _construct()
    {
        $this->middleware(middleware:'auth') ->except (method:TestMiddleware2());
    } 

    public function TestMiddleware1()
    {
        return 'Test Middleware1';
    }

    public function TestMiddleware2()
    {
        return 'Test Middleware2';
    }

    public function TestMiddleware3()
    {
        return 'Test Middleware3';
    }
}
