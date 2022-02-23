<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class UserController extends Controller
{

    public $request = [];


   /**
    * Constructor.
    *
    * @return void
    */
    public function __construct(Request $request)
    {
        
        $this->request = $request;
        $this->middleware('tmp.session');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($user_id)
    {
        $request    = Request::create("/api/User/detail/{$user_id}", 'GET');
        $response   = Route::dispatch($request);
        $User       = json_decode($response->getContent(),true);
        return view('user.index')->withUser($User);
    }
    
    public function update()
    {
        
        $params = [
            'user_id' => $this->request->id,
            'name' => $this->request->name,
            'email' => $this->request->email,
            'password' => $this->request->password
        ];
        $request    = Request::create("/api/User/update", 'POST');
        \Request::merge($params);

        $response   = Route::dispatch($request);
        $response       = json_decode($response->getContent(),true);
        
        return redirect('/User/show/'.$this->request->id)->with('status', 'Profile updated!');
    }

    public function register()
    {
        
        $params = [
            'name' => $this->request->name,
            'email' => $this->request->email,
            'password' => $this->request->password
        ];
        $request    = Request::create("/api/User/store", 'POST');
        \Request::merge($params);

        $response   = Route::dispatch($request);
        $response       = json_decode($response->getContent(),true);
        return redirect('/')->with('status', 'Successfully registered!');
    }

}
