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
        $emp = Employee::where('del',1)->get();
        return view('employee.index', compact('emp'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.create');
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
            'firstname'=>'required',
            'lastname'=>'required',
            'phone'=>'required',
        ],[
            'firstname.required'=>'ກະລຸນາໃສ່ຊື່ພະນັກງານກ່ອນ!',
            'lastname.required'=>'ກະລຸນາໃສ່ນາມສະກຸນກ່ອນ',
            'phone.required'=>'ກະລຸນາໃສ່ເບີ້ໂທກ່ອນ'
        ]);
        Employee::create($request->all());
        return redirect()->route('employee.index')->with('success','ທ່ານໄດ້ບັນທຶກຂໍ້ມູນສຳເລັດ!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $emp = Employee::find($id);
        return view('employee.delete', compact('emp'));
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
        return view('employee.edit', compact('emp'));
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
        $emp = Employee::find($id);
        $request->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'phone'=>'required',
        ],[
            'firstname.required'=>'ກະລຸນາໃສ່ຊື່ພະນັກງານກ່ອນ!',
            'lastname.required'=>'ກະລຸນາໃສ່ນາມສະກຸນກ່ອນ',
            'phone.required'=>'ກະລຸນາໃສ່ເບີ້ໂທກ່ອນ'
        ]);
        $emp->update($request->all());
        return redirect()->route('employee.index')->with('success','ແກ້ໄຂຂໍ້ມູນສຳເລັດ!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $emp = Employee::find($id);
        $emp->del = 0;
        $emp->save();
        return redirect()->route('employee.index')->with('success','ທ່ານໄດ້ລຶບຂໍ້ມູນສຳເລັດ!');
    }
}
