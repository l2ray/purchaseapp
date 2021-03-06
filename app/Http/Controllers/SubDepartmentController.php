<?php

namespace App\Http\Controllers;

use App\Department;
use App\SubDep;
use Illuminate\Http\Request;

class SubDepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $d = Department::all();
        $departmentList = array();
        foreach($d as $dep){
            $departmentList[$dep->id] = $dep -> department_name;
        }
        $subDepartment = SubDep::all();

        $data = array("subDep"=>$subDepartment,"depList"=>$departmentList);
        return view("subDepartments.index",$data);
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
        $subDepartment = new SubDep();
        $subDepartment -> subDepName = $request -> subDep;
        $subDepartment ->depId = $request -> depId;
        $subDepartment -> save();
        return redirect("/subDep");
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
