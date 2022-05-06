<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
   public function index(){

$users= User::simplePaginate(5);
return view('users', compact('users'));

   }
   public function show($id){
      $users= User::find($id);
      return response()->json($users);
    
   }
  
}
