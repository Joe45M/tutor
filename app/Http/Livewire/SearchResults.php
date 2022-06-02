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
        return view('livewire.search-results');
    }

    public function search(array $filters) {
        $users = User::query()->tutor();

        if ($filters['stages']) {
            $users->whereHas('stages', function ($q) use ($filters) {
                $q->whereIn('stages.id', $filters['stages']);
            });
        }

        if ($filters['subjects']) {
            $users->whereHas('subjects', function ($q) use ($filters) {
                $q->whereIn('subjects.id', $filters['subjects']);
            });
        }

        if ($filters['virtuality']) {
            $users->whereHas('virtuals', function ($q) use ($filters) {
                $q->whereIn('virtualities.id', $filters['virtuality']);
            });
        }

        $this->results = $users->get();
    }
}
