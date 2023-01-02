<?php


namespace App\Http\Controllers;
use App\Models\Employee;
use App\Http\Controllers\ApiSendMailController;

use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Illuminate\Mail\Mailable;


class Register extends Controller
{
    public function create(){
        return view('register');
    }
    public function store(){
       
        $attributes = request()->validate([
            'name' =>'required|max:255',
            'address'=>'required|max:255',
            'jobTitle'=>'required|max:255',
            'age'=>'required|max:255',
            'email'=>'required|max:255',
            'phoneNumber'=>'required|max:255'
        ]);

        Employee::create($attributes);
        ApiSendMailController::send($attributes['email']);
        return redirect('/');
    }
}