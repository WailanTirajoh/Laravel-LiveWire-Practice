<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $users = User::latest()->get();
        return view('livewire.user.index', compact('users'))
        ->extends('layouts.app')
        ->section('contents');
    }
}
