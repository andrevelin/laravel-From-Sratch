<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create(){
        return view('register.create');
    }

    public function store(){

        // se a validacao funcionar podemos salvar o array a uma variável
        $attributes = request()->validate([
            'email' => 'required|email|max:255|unique:users,email',
            'name' => 'required|max:10',
            'username' => 'required|max:255|min:3|unique:users,username',
            'password' => 'required|max:255|min:7',

        ]);
        $attributes['password'] = bcrypt($attributes['password']);
        // atribuir o usuario criado a uma variavel user
        $user = User::create($attributes);

        // usar a variavel user para logar
        auth()->login($user);
        return redirect('/')->with('success', 'Your account has been created');
    }
}
