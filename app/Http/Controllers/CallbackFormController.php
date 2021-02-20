<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CallbackForm;
use App\Jobs\SendEmail;

class CallbackFormController extends Controller
{

    public function index(){
        return view('welcome')->with([
            'success'=>true
        ]);
    }

    public function send(Request $request){

        $request->validate([
            'email' => 'required|email|max:255',
            'name' => 'required',
            'surname' => 'required',
        ]);

        $callbackForm = CallbackForm::create($request->all());
        SendEmail::dispatch($callbackForm);
        
        return view('success');
    }
}
