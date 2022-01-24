<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Assignment;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Project;
use App\Models\AssignmentStatus;

class AssignmentController extends Controller
{
    public function index()
    {
        $data = [
            "assignments" => Assignment::with("project")->where("user_id", Auth::user()->user_id)->where("show_date", "<=", date("Y-m-d"))->where("assign_status_id", 1)->paginate(20),
        ];

        return view("admin.assignment.index", $data);
    }

    public function create()
    {
        $auth = Auth::user();
        // dd($auth);

        if ($auth->id == 1) {
            $data["users"] = User::all();
            $data["assignment_status"] = AssignmentStatus::all();
        } else {
            $data["users"] = User::where("user_id", $auth->user_id)->get();
        }
        $data["projects"] = Project::all();

        return view("admin.assignment.create", $data);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            "user_id" => "required|uuid|exists:users,user_id",
            "project_id" => "required|uuid|exists:projects,project_id",
            "assign_status_id" => "sometimes|numeric|exists:assignment_status,assign_status_id",
            "assignment_title" => "required|string",
            "description" => "required|string",
            "show_date" => "required|dateformat:Y-m-d",
            "deadline_date" => "required|dateformat:Y-m-d",
        ]);

        $auth = Auth::user();
        $request->request->add(["user_created" => $auth->user_id]);
        if ($auth->id != 1) {
            $request->request->add(["assign_status_id" => 1]);
        }
        
        // dd($request);

        $assign = Assignment::create($request->all());
        return redirect("/assignment/$assign->assign_id")->with("message", "<script>alert('Sukses membuat assignment!')</script>");
    }

    public function show(Assignment $assignment)
    {
        $data = [
            "assignment" => $assignment
        ];
        // dd($assignment->user_create->name);

        return view("admin.assignment.detail", $data);
    }

    public function edit(Assignment $assignment)
    {
        $auth = Auth::user();

        if ($auth->id == 1) {
            $data["users"] = User::all();
            $data["assignment_status"] = AssignmentStatus::all();
        } else {
            $data["users"] = User::where("user_id", $auth->user_id)->get();
        }
        $data["projects"] = Project::all();
        $data["assignment"] = $assignment;

        return view("admin.assignment.edit", $data);
    }

    public function update(Request $request, Assignment $assignment)
    {
        $this->validate($request, [
            "user_id" => "required|uuid|exists:users,user_id",
            "project_id" => "required|uuid|exists:projects,project_id",
            "assign_status_id" => "sometimes|numeric|exists:assignment_status,assign_status_id",
            "assignment_title" => "required|string",
            "description" => "required|string",
            "show_date" => "required|dateformat:Y-m-d",
            "deadline_date" => "required|dateformat:Y-m-d",
        ]);

        // dd($assignment->update($request->all()));
        $assignment->update($request->all());
        return redirect("/assignment/$assignment->assign_id")->with("message", "<script>alert('Sukses mengedit assignment!')</script>");
    }

    public function finished($assignment_id)
    {
        Assignment::find($assignment_id)->update(["assign_status_id" => 2, "finish_date" => date("Y-m-d")]);
        return redirect("/assignment")->with("message", "<script>alert('Sukses menandai selesai!')</script>");
    }
}
