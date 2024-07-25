<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(RegisterRequest $request)
    {
        //
        $user = User::create($request->getData());

        // Return the created user as a JSON response
        return response()->json([
            'user' => $user,
            'token' => $user->createToken('api-token')->plainTextToken,
            'message' => 'User registered successfully.'
        ], 201);
    }
}
