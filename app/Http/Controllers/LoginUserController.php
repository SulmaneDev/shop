<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequest;
use Illuminate\Http\Request;
use App\Services\Auth\LoginUserService;

class LoginUserController extends Controller
{
    protected LoginUserService $auth;
    function __construct(LoginUserService $auth)
    {
        $this->auth = $auth;
    }
    function index() {
        return $this->auth->view();
    }
    function handle(LoginUserRequest $req){
        return $this->auth->handle($req);
    }
}
