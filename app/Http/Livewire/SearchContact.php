<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class SearchContact extends Component
{
    public $listeners = ['contactModal' => 'open'];

    public $user;

    public function render()
    {
        return view('livewire.search-contact');
    }

    public function open(User $user) {
        $this->user = $user;
    }

}
