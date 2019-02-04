<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use App\Http\Resources\User as UserResource;
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //Get users
         $users = User::paginate(15);


        //return collection of articles as a resource
        return UserResource::collection($users);


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
       $user = $request->isMethod('put')? User::findOrFail($request->user_id) : new User;
        $user->id = $request->input('user_id');
        $user->name = $request->input('name');


        if ($user->save()) {
            return  new UserResource($user);
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
        //get a single user
        $user = User::findOrFail($id);

        //return a single user as a resource
        return new UserResource($article);

    }

}
