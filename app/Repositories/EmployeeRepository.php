<?php
namespace App\repositories;

use Illuminate\Support\Facades\Input;

use App\Employee;

class EmployeeRepository implements EmployeeRepositoryInterface {

    public function selectAll()
    {
        return Employee::all();
    }

    public function find($id)
    {
        return Employee::find($id);
    }

    public function addEmployee(){
        Employee::create(array(
            'name' => Input::get('name'),
            'designation' => Input::get('designation'),

        ));
    }
}