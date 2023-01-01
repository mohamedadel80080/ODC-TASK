<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getAll(){
        return view("admin", ['all' => Employee::all()]);
    }
        
    
}