<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Query;

class AdminController extends Controller
{

     public function index()
     {
          return view('admin.desktop');
     }

     public function admin()
     {
          return view('admin.desktop');
     }
}
