<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {

         return User::all();
    }


    public function store(Request $request)
    {
/*         $request -> validate([
            'email' => ['required']
        ]) */

        $user = new User;

        $user -> name = $request->name;
        $user -> surname = $request->surname;
        $user -> email = $request->email;
        $user -> password = $request->password;
        $user -> role = $request->name;
        $user -> country = $request->country;

        $user->save();

        return $user;

    }


    public function show($user)
    {
        return User::find($user);
    }


    public function update(Request $request, User $user)
    {
        $request -> validate([
            'email' => ['required']
        ]);

        $user -> name = $request->name;
        $user -> surname = $request->surname;
        $user -> email = $request->email;
        $user -> password = $request->password;
        $user -> role = $request->name;
        $user -> country = $request->country;

        $user->save();

        return $user;
    }


    public function destroy(User $user)
    {
        $user -> delete();

        return response() -> noContent();
    }
}
