<?php

namespace App\Http\Livewire\Assignment;

use App\Models\Assignment;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\User;
use App\Models\Project;
use App\Models\AssignmentStatus;
use Illuminate\Http\Request;

class Create extends Component
{
    public $user_id;
    public $project_id;
    public $assign_status_id;
    public $assignment_title;
    public $description;
    public $priority;
    public $show_date;
    public $deadline_date;

    protected $rules = [
        "user_id" => "required|exists:users,user_id",
        "project_id" => "required|exists:projects,project_id",
        "assign_status_id" => "required|numeric|exists:assignment_status,assign_status_id",
        "assignment_title" => "required|string|max:100",
        "description" => "required|string|max:400",
        "priority" => "required|string|max:20",
        "show_date" => "required|date_format:Y-m-d",
        "deadline_date" => "required|date_format:Y-m-d",
    ];

    public function mount()
    {
        $this->show_date = date("Y-m-d");
        $this->deadline_date = date("Y-m-d");
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        $auth = Auth::user();

        if ($auth->id == 1) {
            $data["users"] = User::all();
            $data["assignment_status"] = AssignmentStatus::all();
        } else {
            $data["users"] = User::where("user_id", $auth->user_id)->get();
        }
        $data["projects"] = Project::all();

        return view('livewire.assignment.create', $data);
    }

    public function store()
    {
        $validatedData = $this->validate();

        Assignment::create($validatedData);

        session()->flash("success_message", "Sukses menambahan assignment!");

        return redirect("/assignment");
    }
}
