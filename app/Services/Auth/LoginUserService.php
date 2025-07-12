<?php
namespace App\Services\Auth;

use App\Http\Requests\LoginUserRequest;
use Illuminate\Support\Facades\Auth;

class LoginUserService
{
    
    public function view()
    {
        return view('pages.auth.login');
    }


    public function handle(LoginUserRequest $req)
    {
        $data = $req->validated();
        if(Auth::attempt($data)) {
            $req->session()->regenerate();
            return redirect()->route('dashboard.index')->with([
                'toast'=> [
                    'title'=>'Welcome',
                    'description'=>'You have successfully logged in.',
                    'variant'=>'success',
                ],
            ]);
        }else {
            return redirect()->back()->withErrors([
                'email'=>'invalid credentials',
            ]);
        }
    }
}