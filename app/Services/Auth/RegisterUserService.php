<?php
namespace App\Services\Auth;

use App\Http\Requests\RegisterUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterUserService
{

    public function view()
    {
        return view('pages.auth.register');
    }

    public function handle(RegisterUserRequest $req)
    {
        $data = $req->validated();
        $user = new User();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);
        $user->role = "user";
        $user->save();
        return redirect()->route('login')->with([
            'toast' => [
                'title' => 'Completed',
                'description' => 'Registration successful! You can now log in.',
                'variant' => 'success',
            ],
        ]);
    }
}
