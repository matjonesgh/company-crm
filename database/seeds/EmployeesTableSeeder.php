<?php

use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create companies
	    DB::table('employees')->insert([

            [
			'first_name'  => 'leroy',
			'last_name'   => 'johnson',
			'email'       => 'leroyjohnson@example.com',
			'phone'       => '01226123456',
			'company_id'  => '1',
			],
			[
			'first_name'  => 'derrick',
			'last_name'   => 'williamson',
			'email'       => 'derrickwilliamson@example.com',
			'phone'       => '',
			'company_id'  => '1',
			],
			[
			'first_name'  => 'debbie',
			'last_name'   => 'fuller',
			'email'       => 'debbiefuller@example.com',
			'phone'       => '01226123456',
			'company_id'  => '1',
			],
			[
			'first_name'  => 'teresa',
			'last_name'   => 'hawkins',
			'email'       => 'teresahawkins@example.com',
			'phone'       => '',
			'company_id'  => '1',
			],
			[
			'first_name'  => 'elisa',
			'last_name'   => 'martinez',
			'email'       => 'elisamartinez@example.com',
			'phone'       => '01226123456',
			'company_id'  => '1',
			],
			[
			'first_name'  => 'albert',
			'last_name'   => 'arias',
			'email'       => 'albertarias@example.com',
			'phone'       => '',
			'company_id'  => '2',
			],
			[
			'first_name'  => 'mario',
			'last_name'   => 'nichols',
			'email'       => 'marionichols@example.com',
			'phone'       => '01226123456',
			'company_id'  => '2',
			],
			[
			'first_name'  => 'sophia',
			'last_name'   => 'chambers',
			'email'       => 'sophiachambers@example.com',
			'phone'       => '',
			'company_id'  => '2',
			],
			[
			'first_name'  => 'sonia',
			'last_name'   => 'herrero',
			'email'       => 'soniaherrero@example.com',
			'phone'       => '01226123456',
			'company_id'  => '2',
			],
			[
			'first_name'  => 'max',
			'last_name'   => 'stone',
			'email'       => 'maxstone@example.com',
			'phone'       => '',
			'company_id'  => '2',
			],
			[
			'first_name'  => 'frank',
			'last_name'   => 'ferguson',
			'email'       => 'frankferguson@example.com',
			'phone'       => '01226123456',
			'company_id'  => '3',
			],
			[
			'first_name'  => 'lance',
			'last_name'   => 'jones',
			'email'       => 'lancejones@example.com',
			'phone'       => '',
			'company_id'  => '3',
			],
			[
			'first_name'  => 'nora',
			'last_name'   => 'robinson',
			'email'       => 'norarobinson@example.com',
			'phone'       => '01226123456',
			'company_id'  => '3',
			],
			[
			'first_name'  => 'adam',
			'last_name'   => 'cook',
			'email'       => 'adamcook@example.com',
			'phone'       => '',
			'company_id'  => '3',
			],
			[
			'first_name'  => 'pedro',
			'last_name'   => 'flores',
			'email'       => 'pedroflores@example.com',
			'phone'       => '01226123456',
			'company_id'  => '3',
			],
			[
			'first_name'  => 'leo',
			'last_name'   => 'armstrong',
			'email'       => 'leoarmstrong@example.com',
			'phone'       => '',
			'company_id'  => '4',
			],
			[
			'first_name'  => 'andrea',
			'last_name'   => 'ortega',
			'email'       => 'andreaortega@example.com',
			'phone'       => '01226123456',
			'company_id'  => '4',
			],
			[
			'first_name'  => 'denise',
			'last_name'   => 'banks',
			'email'       => 'denisebanks@example.com',
			'phone'       => '',
			'company_id'  => '4',
			],
			[
			'first_name'  => 'evan',
			'last_name'   => 'payne',
			'email'       => 'evanpayne@example.com',
			'phone'       => '01226123456',
			'company_id'  => '4',
			],
			[
			'first_name'  => 'gema',
			'last_name'   => 'alonso',
			'email'       => 'gemaalonso@example.com',
			'phone'       => '',
			'company_id'  => '4',
			],
			[
			'first_name'  => 'javier',
			'last_name'   => 'marquez',
			'email'       => 'javiermarquez@example.com',
			'phone'       => '01226123456',
			'company_id'  => '5',
			],
			[
			'first_name'  => 'tracy',
			'last_name'   => 'graves',
			'email'       => 'tracygraves@example.com',
			'phone'       => '',
			'company_id'  => '5',
			],
			[
			'first_name'  => 'jesus',
			'last_name'   => 'gallardo',
			'email'       => 'jesusgallardo@example.com',
			'phone'       => '01226123456',
			'company_id'  => '5',
			],
			[
			'first_name'  => 'brianna',
			'last_name'   => 'moreno',
			'email'       => 'briannamoreno@example.com',
			'phone'       => '',
			'company_id'  => '5',
			],
			[
			'first_name'  => 'frankie',
			'last_name'   => 'fernandez',
			'email'       => 'frankiefernandez@example.com',
			'phone'       => '01226123456',
			'company_id'  => '5',
			],


        ]);
    }
}
