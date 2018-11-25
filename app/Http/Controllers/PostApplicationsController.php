<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Application;
use Auth;
use App\User;


class PostApplicationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
        $user = Auth::user();

        $data = [
            'post_id' => $request->post_id,
            'user_id' => $user->id,
            'name' => $user->name,
            'email' =>$user->email,
            'photo' => $user->photo->file,
            'body' => $request->body,
            'experience' => $request->experience,
            'cert_date' => $request->cert_date,
            'cert_number'=>$request->cert_number,
            'certified' => $request->certified,
            'skill_1' => $request->skill_1,
            'skill_2' => $request->skill_2,
            'skill_3' => $request->skill_3,
            'skill_1_years' => $request->skill_1_years,
            'skill_2_years' => $request->skill_2_years,
            'skill_3_years' => $request->skill_3_years
        ];

        $application = Application::create($data);

        //dd($application);
        
        return redirect()->back();

       
        
         
        


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $application = Application::findOrFail($id);
        

        //dd($application);

        return view('applications.show', compact('application'));
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
