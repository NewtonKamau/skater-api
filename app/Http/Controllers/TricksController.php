<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use App\Trick;
use App\Http\Resources\Trick as TrickResource;
use Illuminate\Http\Request;

class TricksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Get trick
         $trick = Trick::paginate(15);


        //return collection of articles as a resource
        return TrickResource::collection($trick);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $trick = $request->isMethod('put')? User::findOrFail($request->user_id) : new User;
        $trick->id = $request->input('trick_id');
        $trick->name = $request->input('name');
        $trick->description = $request->input('description');
        $trick->name_of_place = $request->input('name_of_place');


        if ($trick->save()) {
            return  new TrickResource($trick);
        }
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
