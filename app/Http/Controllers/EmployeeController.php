<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employee = employee::latest()->paginate(10);
        
        $breadcrumbsItems = [
            'name' => 'employee',
            'url' => '/employee',
            'active' => true
        ];
    
        $icon = '<iconify-icon icon="clarity:employee-line"></iconify-icon>';

        return view('employees.index', [
            'pageTitle' => 'Daftar Karyawan',
            'icon' => $icon,
            'employee' => $employee, // Menambahkan Karyawan ke array data yang dikirim ke view
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employees.tambah', [
            'pageTitle' => 'Tambah Karyawan',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employee = employee::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'jabatan' => $request->jabatan,
            'status' => $request->status
        ]);

        if ($employee) {
            return redirect()->route('employee.index')->with('success', 'Karyawan berhasil ditambahkan!');
        } else {
            return redirect()->route('employee.index')->with('error', 'Karyawan gagal ditambahkan!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(employee $employee)
    {
        return view('employees.update', [
            'pageTitle' => 'Update Karyawan',
            'employee' => $employee,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, employee $employee)
    {
        $employee->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'jabatan' => $request->jabatan,
            'status' => $request->status
        ]);
        if ($employee) {
            return redirect()->route('employee.index')->with('success', 'Karyawan berhasil di Update!');
        } else {
            return redirect()->route('employee.index')->with('error', 'Karyawan gagal di Update!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(employee $employee)
    {
        $employee->delete();
        if ($employee) {
            return redirect()->route('employee.index')->with('success', 'Karyawan berhasil dihapus!');
        } else {
            return redirect()->route('employee.index')->with('error', 'Karyawan gagal dihapus!');
        }
    }
}
