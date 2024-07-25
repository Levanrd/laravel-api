<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //
        auth()->guard('web')->logout();

        $response = response()->json(['message' => 'Logout successfully.'], 200);

        return $response->withCookie(cookie()->forget('laravel_session'))
                        ->withCookie(cookie()->forget('XSRF-TOKEN'));
    }
}
