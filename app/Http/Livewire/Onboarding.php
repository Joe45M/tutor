<?php

namespace App\Http\Livewire;

use App\Models\Stage;
use App\Models\Subject;
use App\Models\Virtuality;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Onboarding extends Component
{

    public string $noun;
    public $subjects;
    public $stages;
    public $virtualities;

    // selected values
    public $subject = [];
    public $stage = [];
    public $virtuality = [];

    public function render()
    {

        $this->subjects     = Subject::all();
        $this->stages       = Stage::all();
        $this->virtualities = Virtuality::all();

        $this->noun = Auth::user()->type == 'student' ? 'study' : 'teach';

        return view('livewire.onboarding');

    }

    public function save()
    {

        if ($this->stage) {
            foreach ($this->stage as $s) {
                Auth::user()->stages()->save(Stage::find($s));
            }
        }

        if ($this->subject) {
            foreach ($this->subject as $s) {
                Auth::user()->subjects()->save(Subject::find($s));
            }
        }

        if ($this->virtuality) {
            foreach ($this->virtuality as $s) {
                Auth::user()->virtuals()->save(Virtuality::find($s));
            }
        }

        return $this->redirect(route('dashboard'));
    }
}
