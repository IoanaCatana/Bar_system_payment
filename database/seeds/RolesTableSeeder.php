<?php
use Illuminate\Database\Seeder;
use App\Role;
/**
 * Created by PhpStorm.
 * User: ioana
 * Date: 12/14/2017
 * Time: 5:04 PM
 */

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        Role::insert([
            ['name'=>'Admin'],
            ['name'=>'Student'],
            ['name'=>'Teacher']
        ]);
    }
}