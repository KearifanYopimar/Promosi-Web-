<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
<<<<<<< HEAD
=======
use Illuminate\Http\Request;
>>>>>>> 34aca4c04279cf1cb0308240c7e2a79c6ea6a443

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
<<<<<<< HEAD
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()){
            return route('auth.index');
        }
=======
    protected function redirectTo(Request $request): ?string
    {
        return $request->expectsJson() ? null : url('/login');
>>>>>>> 34aca4c04279cf1cb0308240c7e2a79c6ea6a443
    }
}
