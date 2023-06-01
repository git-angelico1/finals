<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function showLoginForm(Request $request){
    
       return view('login');
    
   }
   public function Dashboard(){
        
        return redirect()->route('dashboard');
   }
}
