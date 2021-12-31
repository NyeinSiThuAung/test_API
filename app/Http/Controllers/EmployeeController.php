<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function getEmployee() {
        return response()->json(Employee::all(),200);
    }

    public function getSingleEmployee($id) {
        $employee = Employee::find($id);
        if(is_null($employee)) {
            return response()->json(['message' => 'Emp not found'],404);
        }
        return response()->json($employee,200);
    }

    public function addNewEmployee(Request $request) {
        $employee = Employee::create($request->all());
        return response($employee, 201);
    }

    public function updateEmp(Request $request, $id) {
        $employee = Employee::find($id);
        if(is_null($employee)) {
            return response()->json(['message' => 'Emp not found'],404);
        }
        $employee->update($request->all());
        return response()->json($employee,200);
    }

    public function deleteEmp($id) {
        $employee = Employee::find($id);
        if(is_null($employee)) {
            return response()->json(['message' => 'Emp not found'],404);
        }
        $employee->delete();
        return response()->json(null,204);
    }
}
