<?php

namespace App\Http\Livewire;

use App\Models\Commitment;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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

    public function process($id) {
        $price = 200;

        $charge = Auth::user()->charge($price, $id);

        if ($charge->status == 'succeeded') {
            $commitment = Commitment::create([
                'tutor_id' => $this->user->id,
                'student_id' => Auth::id(),
                'charge' => $price,
            ]);

            return $this->redirect(route('commitment.show', $commitment));
        }
    }
}
