<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Services\EmployeeService;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    public function __construct(private EmployeeService $employeeService)
    {

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      return   $this->employeeService->index();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //echo json_encode($request->all());
        return  $this->employeeService->store($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        return $this->employeeService->show($employee);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        return $this->employeeService->edit($employee);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        return $this->employeeService->destroy($employee);
    }
}
