<?php

namespace App\Http\Controllers;
use Alert;
use File;
use Illuminate\Http\Request;
use App\Models\Service;
class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::get();
        return view('backend.services.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.services.create');
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
        $fileName = time().'_'.$image->getClientOriginalName();
        $destinationPath = public_path().'/img/services';
        $image->move($destinationPath, $fileName);

        $services = new Service;
        $services->language = $request->input('language');
        $services->title = $request->input('title');
        $services->date = $request->input('date');
        $services->body = $request->input('body');
        $services->image = $fileName;
        
        $services->save();
        Alert::success('Added!','Added with success!');
        return redirect()->route('services.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $services = Service::findOrFail($id);
        return view('backend.services.edit',compact('services'));
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
        $services = Service::findOrFail($id);
        $services->language = $request->input('language');
        $services->title = $request->input('title');
        $services->body = $request->input('body');
        $services->date = $request->input('date');
        if($request->hasFile('image'))
        {
            $usersImage = public_path("img/services/{$services->image}"); // get previous image from folder
            if (File::exists($usersImage)) { // unlink or remove previous image from folder
                unlink($usersImage);
            }
            $file = $request->file('image');
            $name = time() . $file->getClientOriginalName();
            $file = $file->move(('img/services/'), $name);
            $services->image= $name;
        }
        $services->save();
        Alert::success('Updated','Updated successfully!');
        return redirect()->route('services.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $services = Service::findOrfail($id);
        $image_path = public_path()."/img/services/".$services->image;  // Value is not URL but directory file path
       if(File::exists($image_path)) {
            File::delete($image_path);
        }

        $services->delete();
        Alert::error('Deleted!','You just deleted a post!');
        return redirect()->route('services.index');
    }
}
