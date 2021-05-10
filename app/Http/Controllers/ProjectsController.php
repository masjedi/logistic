<?php

namespace App\Http\Controllers;
use Alert;
use File;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Project;
class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
       
        return view('backend.projects.index',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $request->file('image');
        $fileName = time().'_'.$image->getClientOriginalName(); //234343_mycv.pdf     343434_masihcv.pdf      
        $destinationPath = public_path().'/img/projects';
        $image->move($destinationPath, $fileName);

        $projects = new Project;
        $projects->language = $request->input('language');
        $projects->title = $request->input('title');
        $projects->date = $request->input('date');
        $projects->body = $request->input('body');
        $projects->image = $fileName;

        $projects->save();
        Alert::success('Inseted!','Inserted with success.');
        return redirect()->route('projects.index');

    }

   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $projects = Project::findOrFail($id);
        return view('backend.projects.edit',compact('projects'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $projects = Project::findOrFail($id);
        $projects->language = $request->input('language');
        $projects->title = $request->input('title');
        $projects->body = $request->input('body');
        $projects->date = $request->input('date');
        if($request->hasFile('image'))
        {
            $usersImage = public_path("img/projects/{$projects->image}"); // get previous image from folder
            if (File::exists($usersImage)) { // unlink or remove previous image from folder
                unlink($usersImage);
            }
            $file = $request->file('image');
            $name = time() . $file->getClientOriginalName();
            $file = $file->move(('img/projects/'), $name);
            $projects->image= $name;
        }
        $projects->save();
        Alert::success('Updated','Updated successfully!');
        return redirect()->route('projects.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $projects = Project::findOrfail($id);
        $image_path = public_path()."/img/projects/".$projects->image;  // Value is not URL but directory file path
       if(File::exists($image_path)) {
            File::delete($image_path);
        }

        $projects->delete();
        Alert::error('Deleted!','You just deleted a post!');
        return redirect()->route('projects.index');
    }
}
