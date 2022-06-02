<?php

namespace App\Http\Livewire;

use App\Models\Stage;
use App\Models\Subject;
use App\Models\Virtuality;
use Livewire\Component;

class SearchFilters extends Component
{
    public $subjects;
    public $stages;
    public $virtualities;

    // selected values
    public $subject = [];
    public $stage = [];
    public $virtuality = [];

    public $rules = [
        'subject.*' => '',
        'stage.*' => '',
        'virtuality.*' => '',
    ];

    public function render()
    {
        $this->subjects     = Subject::all();
        $this->stages       = Stage::all();
        $this->virtualities = Virtuality::all();

        return view('livewire.search-filters');
    }

    public function search() {
        $this->emit('search', [
            'stages' => $this->stage,
            'subjects' => $this->subject,
            'virtuality' => $this->virtuality,
        ]);
    }
}
