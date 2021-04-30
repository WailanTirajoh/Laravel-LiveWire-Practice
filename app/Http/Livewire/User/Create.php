<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\User as UserModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class Create extends Component
{
    public $first_name, $last_name, $email;
    public function render()
    {
        return view('livewire.user.create')
        ->extends('layouts.app')
        ->section('contents');
    }

    public function store()
    {
        UserModel::create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'role' => 'Admin',
            'email' => $this->email,
            'password' => Hash::make($this->first_name),
            'random_key' => Str::random(60)
        ]);

        request()->session()->flash(
            'success','User '. $this->first_name .' created succesfully'
        );

        return redirect()->route('user.index');
    }
}
