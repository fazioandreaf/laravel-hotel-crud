<?php

use Illuminate\Database\Seeder;
use App\employees;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(employees::class, 50) -> create();
    }
}
