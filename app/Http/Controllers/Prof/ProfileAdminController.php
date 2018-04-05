<?php

namespace App\Http\Controllers\Prof;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileAdminController extends Controller
{
    //Панель управления системой и профилями
    
    public function dashboard() {
      return view('prof.dashboard');
    }
}
