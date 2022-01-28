<?php

namespace App\Http\Livewire\Assignment;

use Livewire\Component;
use App\Models\Assignment;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $show_count = 10;

    public function render()
    {
        $data = [
            "assignments" => Assignment::with("project")->where("user_id", Auth::user()->user_id)->where("show_date", "<=", date("Y-m-d"))->where("assign_status_id", 1)->paginate($this->show_count)
        ];

        return view('livewire.assignment.index', $data);
    }
}
