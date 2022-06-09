<?php

namespace App\Http\Livewire;

use App\Models\CommitmentMessage;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Commitment extends Component
{


    public $commitment;

    public $message;

    public function mount($commitment) {
        $this->commitment = Auth::user()->commitments()->where('id', $commitment)->firstOrFail();

    }

    public function render()
    {

        return view('livewire.commitment');
    }

    public function send() {
        $this->commitment->messages()->create([
            'user_id' => Auth::id(),
            'message' => $this->message,
        ]);

        $this->commitment->refresh();
    }

    public function refreshMessages() {
        $this->commitment->refresh();
    }
}
