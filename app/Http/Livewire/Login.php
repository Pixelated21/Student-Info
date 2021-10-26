<?php

namespace App\Http\Livewire;

use Auth;
use Livewire\Component;

class Login extends Component
{
    public $email = '';
    public $password = '';

    public function updated() {
        $this->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
    }

    public function login(){

        $data = $this->validate([
            'email' => 'required',
            'password' => 'required'
        ]);


        if (Auth::validate($data)) {
            return redirect('/dropdown');
        }
        return redirect()->back();


    }

    public function render()
    {
        return view('livewire.login')->extends('layouts.app');
    }
}
