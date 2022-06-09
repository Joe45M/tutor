<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class SearchResults extends Component
{

    public $listeners = 'search';
    public $results;

    public function render()
    {

        // prepopulate some results
        if (!$this->results) {
            $this->search([]);
        }

        return view('livewire.search-results');
    }

    public function search(array $filters) {

        $filters = collect($filters);

        $users = User::query()->tutor();

        if ($filters->get('stages')) {
            $users->whereHas('stages', function ($q) use ($filters) {
                $q->whereIn('stages.id', $filters->get('stages'));
            });
        }

        if ($filters->get('subjects')) {
            $users->whereHas('subjects', function ($q) use ($filters) {
                $q->whereIn('subjects.id', $filters->get('subjects'));
            });
        }

        if ($filters->get('virtuality')) {
            $users->whereHas('virtuals', function ($q) use ($filters) {
                $q->whereIn('virtualities.id', $filters->get('virtuality'));
            });
        }

        $this->results = $users->get();
    }

    public function modal(User $user) {
        $this->emit('contactModal', $user);
    }
}
