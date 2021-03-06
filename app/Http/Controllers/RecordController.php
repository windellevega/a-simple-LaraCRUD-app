<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Department;
use App\Person;

class RecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $people = Person::all();
        $people->load('Department');
        return view('contents.view-records')->with('records', $people);   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $depts = Department::all();

        return view('contents.add-record')->with('departments', $depts);
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
        $validator = \Validator::make($request->all(), [
                        'fname' => 'required',
                        'mname' => 'required',
                        'lname' => 'required',
                        'gender' => 'required',
                        'bdate' => 'required',
                        'address' => 'required',
                        'dept' => 'required'
            ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $person = new Person();

        $person->firstname = $request->fname;
        $person->middlename = $request->mname;
        $person->lastname = $request->lname;
        $person->gender = $request->gender;
        $person->birthday = $request->bdate;
        $person->address = $request->address;
        $person->aboutme = $request->aboutme;
        $person->deptid = $request->dept;

        $person->save();

        return redirect()->back()->with('message', 'Record successfully added!');
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
        $person = Person::find($id);
        $depts = Department::all();
        
        return view('contents.edit-record')->with('person', $person)->with('departments', $depts);
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
        $validator = \Validator::make($request->all(), [
                        'fname' => 'required',
                        'mname' => 'required',
                        'lname' => 'required',
                        'gender' => 'required',
                        'bdate' => 'required',
                        'address' => 'required',
                        'dept' => 'required'
        ]);
        
        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        //
        $person = Person::find($id);
        
        $person->firstname = $request->fname;
        $person->middlename = $request->mname;
        $person->lastname = $request->lname;
        $person->gender = $request->gender;
        $person->birthday = $request->bdate;
        $person->address = $request->address;
        $person->aboutme = $request->aboutme;
        $person->deptid = $request->dept;
        
        $person->save();
        
        return redirect()->back()->with('message', 'Record successfully edited!');
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
        $person = Person::find($id);
        $person->delete();
        return redirect()->back()->with('message', 'Record successfully deleted!');
    }
}
