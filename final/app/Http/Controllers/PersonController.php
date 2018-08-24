<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $people=\App\Person::all();
        return view('index',compact('people'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $person= new \App\Person;
        $person->name=$request->get('name');
        $person->age=$request->get('age');
        $person->type=$request->get('type');
        $person->email=$request->get('email');
        $person->save();
        
        return redirect('people')->with('success', 'Person added');

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
        $person = \App\Person::find($id);
        return view('edit',compact('person','id'));
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
        $person= \App\Person::find($id);
        $person->name=$request->get('name');
        $person->age=$request->get('age');
        $person->type=$request->get('type');
        $person->email=$request->get('email');
        $person->save();
        return redirect('people');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $person = \App\Person::find($id);
        $person->delete();
        return redirect('people')->with('success','Person deleted');
    }
}
