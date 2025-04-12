<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\View;

class UserController extends Controller
{
        /**
     * Show the profile for a given user.
     */
    public function show($id)
    {
      $names = ['1'=>'John', '2'=>'Jane','3'=> 'Doe'];
      $Username = 'unknown';
      if (array_key_exists($id, $names)) {
        $Username = $names[$id];
      }
      return view('UserShow', ['name' => $Username]);
    }
    public function index()
    {
        $names = ['1'=>'John', '2'=>'Jane','3'=> 'Doe'];
        return view('users', ['names' => $names]);
    }
    
}
