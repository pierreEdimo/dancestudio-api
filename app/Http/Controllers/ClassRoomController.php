<?php

namespace App\Http\Controllers;


use App\Models\Classroom; 
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class ClassRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return Classroom::all(); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required', 
            'description' => 'required', 
            'videoUrl' => 'required',
        ]); 

        return Classroom::create($request->all()); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Classroom::find($id); 
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
       $classroom = Classroom::find($id); 
       $classroom->update($request->all()); 
       return $classroom; 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Classroom::destroy($id); 
    }


    /**
     * search for a title
     * 
     * @param str $title
     * @return \Illuminate\Http\Response
     */
     public function search($title)
     {
         return Classroom::where('title', 'like', '%'.$title.'%')->get(); 
     }

}
