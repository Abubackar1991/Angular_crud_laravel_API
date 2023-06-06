<?php

namespace App\Services;

use App\Models\Employee;
use Illuminate\Http\JsonResponse;

class EmployeeService
{
    public function store(array $data): JsonResponse
    {
        $employeeData['firstName'] = $data['FirstName'];
        $employeeData['lastName'] = $data['LastName'];
        $employeeData['email'] = $data['Email'];
        $employeeData['address'] = $data['Address'];
        $employeeData['phone'] = $data['Phone'];
        $employeeData['status'] = 1;

        Employee::create($employeeData);
            return response()->json([
                'message' => 'Employee created successfully'
            ], 201);
    }

    public function index(): JsonResponse
    {
        return response()->json(Employee::all(), 200);
    }

    public function show(Employee $employee): JsonResponse
    {
        return response()->json($employee, 200);
    }

    public function edit(Employee $employee): JsonResponse
    {
        return response()->json($employee, 200);
    }

    public function update(array $data, Employee $employee): JsonResponse
    {
        $employeeData['firstName'] = $data['FirstName'];
        $employeeData['lastName'] = $data['LastName'];
        $employeeData['email'] = $data['Email'];
        $employeeData['address'] = $data['Address'];
        $employeeData['phone'] = $data['Phone'];
        $employeeData['status'] = 1;

        $employee->update($employeeData);
        return response()->json([
            'message' => 'Employee updated successfully'
        ], 200);
    }

    public function destroy(Employee $employee): JsonResponse
    {
        $employee->delete();
        return response()->json([
            'message' => 'Employee deleted successfully'
        ], 200);
    }
}
