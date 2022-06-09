<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ProfileSettings extends Component
{
    public $profile;


    protected $rules = [
        'profile.name' => 'required|string|min:6',
    ];

    public function render()
    {
        $this->profile = User::find(Auth::id());

        return view('livewire.profile-settings');
    }

    public function saveProfile() {
        $this->profile->save();
    }
}
