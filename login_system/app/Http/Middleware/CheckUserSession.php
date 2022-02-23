<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Route;

class CheckUserSession extends Middleware
{

    public function __construct(){

    }

    public function handle($request,$next)
    {
        $exists = $request->session()->exists('user');
        
        if ($exists == false) {

            //die(var_dump($request->session()->has('user')));
            //die('redirect');
            //redirect('/')->with('status', 'Profile updated!');
            // user value cannot be found in session
            return redirect('/');
            die('sdf');
        }
        return $next($request);
    }
}
