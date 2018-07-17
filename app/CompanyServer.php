<?php

namespace App;


use Illuminate\Support\Facades\Input;


class CompanyServer
{
    public function getAllCompanies()
    {
        $companies = Company::all();

        return $companies;
    }
    public function addCompany(){
            Company::create(array(
            'name' => Input::get('name'),
            'location' => Input::get('location'),
            'servicies' => Input::get('servicies'),
        ));
    }
}