<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CommitmentList extends Component
{
    public $commitments;

    public function render()
    {

        $this->commitments = Auth::user()->commitments()->orderByDesc('updated_at')->get();

        return view('livewire.commitment-list');
    }
}
