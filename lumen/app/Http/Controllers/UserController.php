<?php

namespace App\Http\Controllers;


use App\Models\User;

use Illuminate\Http\Request;


class UserController extends Controller

{

    public function register(Request $request)
{
    $user = new User();
    $user->name = $request->input('name');
    $user->email = $request->input('email');
    $user->password = bcrypt($request->input('password'));
    $user->save();

    return response()->json(['message' => 'User created successfully']);
}

    public function create(Request $request)

    {

        $user = new User();

        $user->name = $request->input('name');

        $user->email = $request->input('email');

        $user->password = $request->input('password');

        $user->save();


        return response()->json(['message' => 'User created successfully']);

    }
    // Get all users
    public function index()
    {
        return response('Hello World!', 200);
    }

    // Get a single user
    public function show($id)
    {
        $user = User::find($id);
        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }
        return response()->json($user);
    }

    // Update a user
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->save();
        return response()->json(['message' => 'User updated successfully']);
    }

    // Delete a user
    public function destroy($id)
    {
        $user = User::find($id);
        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }
        $user->delete();
        return response()->json(['message' => 'User deleted successfully']);
    }
}