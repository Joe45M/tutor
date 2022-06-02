<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Onboarding extends Component
{

    public string $noun;

    public function render()
    {

        $this->noun = Auth::user()->type == 'student' ? 'study' : 'teach';

        return view('livewire.onboarding');
    }
}
