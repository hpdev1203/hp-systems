<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\GenerateEnityId;

class Clicker extends Component
{
    public $name = "";
    public $email = "";
    public $password = "";
    public function createNewUser(){
        $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);
        $user = new User();
        $user->id = GenerateEnityId::generateEntityId();
        $user->name = $this->name;
        $user->email = $this->email;
        $user->password = Hash::make($this->password);
        $user->save();

        $this->reset('name', 'email', 'password');
    }
    public function render()
    {
        $title = "Create New User";
        $users = User::paginate(5);
        return view('livewire.clicker', ['users' => $users, 'title' => $title]);
    }
}
