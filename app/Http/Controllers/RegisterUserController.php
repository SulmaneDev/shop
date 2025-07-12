<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterUserRequest;
use App\Services\Auth\RegisterUserService;

class RegisterUserController extends Controller
{
    protected RegisterUserService $auth;

    function __construct(RegisterUserService $auth)
    {
        $this->auth = $auth;
    }
    function index() {
        return $this->auth->view();
    }

    function handle(RegisterUserRequest $req) {
        return $this->auth->handle($req);
    }
}
