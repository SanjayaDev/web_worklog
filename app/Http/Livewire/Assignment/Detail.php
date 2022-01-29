<?php

namespace App\Http\Livewire\Assignment;

use Livewire\Component;
use App\Models\Assignment;

class Detail extends Component
{
    public $assignment;

    public function mount($assign_id)
    {
        $this->assignment = Assignment::where("assign_id", $assign_id)->first();
        if (!$this->assignment) {
            return redirect("/assignment")->with("error_message", "Assignment tidak ditemukan!");
        }
    }

    public function render()
    {
        return view('livewire.assignment.detail');
    }
}
