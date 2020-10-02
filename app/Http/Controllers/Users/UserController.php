<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\User;

class UserController extends Controller
{
 
    public function index()
    {
        return view('users.index');
    }

    public function create()
    {
        return view('users.create');
    }

 
    public function store(Request $request)
    {
        $users = User::create($request->All());
        return redirect()->route('users.index');
    }

    public function edit()
    {
        return view('users.edit');
    }

 
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
