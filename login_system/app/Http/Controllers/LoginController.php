<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class LoginController extends Controller
{
    public $request = [];

    public function __construct(Request $request)
    {
      $this->request = $request;
    }

    public function index()
    {
        return view('login.index');
    }

    public function auth()
    {

        $params = [
            'email' => $this->request->email,
            'password' => $this->request->password
        ];
        $request    = Request::create("/api/User/login", 'POST');
        \Request::merge($params);

        $response   = Route::dispatch($request);
        $response       = json_decode($response->getContent(),true);
        

        if ($response['status']) {
            session(['user' => $response['data']['id']]);
            return redirect('/User/show/'.$response['data']['id']);    
        } else {
            return redirect('/')->with('error', 'Invalid credentials!');
        }
        
    }

    public function register()
    {
        return view('login.register');
    }

    public function logout()
    {
        session()->pull('user');
        return redirect('/');
    }
}
