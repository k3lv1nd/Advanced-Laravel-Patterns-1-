<?php
/**
 * Created by PhpStorm.
 * User: kwambui
 * Date: 7/19/18
 * Time: 2:43 PM
 */

namespace App\Factories;


class DepartmentFactory
{
    public function makeCt()
    {
        return new CytonnTechnologies;
    }

    public function makeFinance()
    {

        return new Finnce();
    }

    public function makeHumanResource()
    {

        return new HumanResource();
    }



}