<?php
namespace App\repositories;

interface EmployeeRepositoryInterface {
public function addEmployee();

public function selectAll();

public function find($id);

}