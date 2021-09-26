<?php

namespace App\Http\Controllers;
use App\Project;
use DB;
use Illuminate\Http\Request;

class projectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //  $this-> withoutExceptionHandling();
        
    return  view('projects.index', [ 
        'projects' => Project::latest()->get()

    ]);
    
    }


 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


     public function create2()
    {
        //
         Project::create([

            'title1' => request('title'),
            'url' => request('url'),
            'description' => request('description')

            ]);

    }





    public function store()
    {
        //
        Project::create([

            'title' => request('title'),
            'url' => request('url'),
            'description' => request('description'),

            ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($project)
    {
        //
          
        $projects = Project::findOrFail($project);

     //   return view('projects.show', compact('projects'));

          return view('projects.show', [
            'projects' => $projects

            ]);
    }




    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
