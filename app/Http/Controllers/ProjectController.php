<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveProjectRequest;
use App\Project;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    
    public function __construct() {
        $this->middleware('auth')->except('index','show');
    }

    public function index()
    {
        $projects = Project::latest()->paginate();
        return view('projects.index', compact('projects'));
    }

    public function show(Project $project){
        //return $id;
        return view('projects.show', ['project'=>$project]);
    }

    public function create()
    {
        return view('projects.create', ['project'=>new Project]);
    }

    public function store(SaveProjectRequest $request){
        Project::create($request->validated());
        return redirect()->route('projects.index')->with('success','El proyecto fue creado con éxito.');
    }

    public function edit(Project $project){
        return view('projects.edit', ['project'=>$project]);
    }

    public function update(Project $project, SaveProjectRequest $request){
        $project->update($request->validated());

        return redirect()->route('projects.show', $project)->with('success','El proyecto fue actualizado con éxito.');
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index')->with('success','El proyecto fue eliminado con éxito.');
    }
}
