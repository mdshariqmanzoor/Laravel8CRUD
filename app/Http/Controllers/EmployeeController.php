<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return Employee::all();
        $data['emp'] = Employee::all();
        //$data['emp'] = Employee::orderBy('name', 'asc')->get();
        //$data['emp'] = Employee::orderBy('name', 'asc')->take(2)->get();
        return View('Employee.Index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('Employee.Create');
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

            'name'=>'required',
            'age'=>'required',
            'gender'=>'required',
            'designation'=>'required',
        ]);

        $emp = new Employee();
        $emp->name = $request->input('name');
        $emp->age = $request->input('age');
        $emp->gender = $request->input('gender');
        $emp->designation = $request->input('designation');
        $emp->save();
        return redirect('/employee')->with('Insert_alert', 'Your data has been Inserted');
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
        $emp = Employee::find($id);
        //return $emp;
        return View('Employee.Edit')->with('emp', $emp);
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

        $request->validate([

            'name'=>'required',
            'age'=>'required',
            'gender'=>'required',
            'designation'=>'required',
        ]);

        $emp = Employee::find($id);
        $emp->name = $request->input('name');
        $emp->age = $request->input('age');
        $emp->gender = $request->input('gender');
        $emp->designation = $request->input('designation');
        $emp->save();
        return redirect('/employee')->with('Edit_alert', 'Your data has been Updated.');
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
