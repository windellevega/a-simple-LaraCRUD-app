<?php

use Illuminate\Database\Seeder;
use App\Department;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        $dept = new Department();
        $dept->deptabbv = 'SEAS';
        $dept->deptname = 'School of Education, Arts and Sciences';
        $dept->save();
        
        $dept = new Department();
        $dept->deptabbv = 'SEAIDITE';
        $dept->deptname = 'School of Engineering, Architecture, Interior Design, and Information Technology Education';
        $dept->save();
        
        $dept = new Department();
        $dept->deptabbv = 'SHAS';
        $dept->deptname = 'School of Health and Allied Sciences';
        $dept->save();
        
        $dept = new Department();
        $dept->deptabbv = 'SABH';
        $dept->deptname = 'School of Accountancy, Business, and Hospitality';
        $dept->save();
        
        $dept = new Department();
        $dept->deptabbv = 'JHS';
        $dept->deptname = 'Junior High School';
        $dept->save();
        
        $dept = new Department();
        $dept->deptabbv = 'SHS';
        $dept->deptname = 'Senior High School';
        $dept->save();
        
        $dept = new Department();
        $dept->deptabbv = 'Elem';
        $dept->deptname = 'Elementary';
        $dept->save();
        
    }
}
