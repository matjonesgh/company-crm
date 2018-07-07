<?php

use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create companies
	    DB::table('companies')->insert([
	    	[
	    		'id'       => 1,
                'name'     => 'Apple',
                'email'    => 'admin@apple.com',
                'logo'     => 'apple_logo4_2.png',
                'website'  => 'http://www.apple.com',
            ],
            [
	    		'id'       => 2,
                'name'     => 'Samsung Group',
                'email'    => 'admin@samsung.com',
                'logo'     => 'samsunglogo.png',
                'website'  => 'http://www.samsung.com',
            ],
            [
	    		'id'       => 3,
                'name'     => 'Google',
                'email'    => 'admin@google.com',
                'logo'     => 'google4.png',
                'website'  => 'http://www.google.com',
            ],
            [
	    		'id'       => 4,
                'name'     => 'Microsoft',
                'email'    => 'admin@microsoft.com',
                'logo'     => 'microsoft_best_global_brand.png',
                'website'  => 'http://www.microsoft.com',
            ],
            [
	    		'id'       => 5,
                'name'     => 'Verizon',
                'email'    => 'admin@verizon.com',
                'logo'     => 'verizon_logo22.jpg',
                'website'  => 'http://www.verizon.com',
            ],
            [
	    		'id'       => 6,
                'name'     => 'GE',
                'email'    => 'admin@ge.com',
                'logo'     => 'general_electric.jpg',
                'website'  => 'http://www.ge.com',
            ],
            [
	    		'id'       => 7,
                'name'     => 'Amazon',
                'email'    => 'admin@amazon.com',
                'logo'     => 'amazon_logo_cms.jpg',
                'website'  => 'http://www.amazon.com',
            ],

           [
	    		'id'       => 8,
                'name'     => 'Walmart',
                'email'    => 'admin@walmart.com',
                'logo'     => 'walmart_logo_cms.jpg',
                'website'  => 'http://www.walmart.com',
            ],
           [
	    		'id'       => 9,
                'name'     => 'IBM',
                'email'    => 'admin@ibm.com',
                'logo'     => 'ibm_logo_cms.jpg',
                'website'  => 'http://www.ibm.com',
            ],

           [
	    		'id'       => 10,
                'name'     => 'Coca-Cola',
                'email'    => 'admin@cocacola.com',
                'logo'     => 'cocacola.jpg',
                'website'  => 'http://www.cocacola.com',
            ],

           [
	    		'id'       => 11,
                'name'     => 'China Mobile',
                'email'    => 'admin@chinamobile.com',
                'logo'     => 'chinamobile3.png',
                'website'  => 'http://www.chinamobile.com',
            ],

           [
	    		'id'       => 12,
                'name'     => 'T (Deutsche Telekom)',
                'email'    => 'admin@deutschetelekom.com',
                'logo'     => 't_telekom.jpg',
                'website'  => 'http://www.deutschetelekom.com',
            ],

           [
	    		'id'       => 13,
                'name'     => 'Wells Fargo',
                'email'    => 'admin@wellsfargo.com',
                'logo'     => 'wells_fargo_logo_cms.jpg',
                'website'  => 'http://www.wellsfargo.com',
            ],

           [
	    		'id'       => 14,
                'name'     => 'Vodafone',
                'email'    => 'admin@vodafone.com',
                'logo'     => 'vodafone_logo_cms.jpg',
                'website'  => 'http://www.vodafone.com',
            ],

           [
	    		'id'       => 15,
                'name'     => 'BMW',
                'email'    => 'admin@bmw.com',
                'logo'     => 'bmw_1.jpg',
                'website'  => 'http://www.bmw.com',
            ],

           [
	    		'id'       => 16,
                'name'     => 'Shell',
                'email'    => 'admin@shell.com',
                'logo'     => 'shell_logo.svg_cms.jpg',
                'website'  => 'http://www.shell.com',
            ],

           [
	    		'id'       => 17,
                'name'     => 'Volkswagen',
                'email'    => 'admin@volkswagen.com',
                'logo'     => 'vw.jpg',
                'website'  => 'http://www.volkswagen.com',
            ],

           [
	    		'id'       => 18,
                'name'     => 'HSBC',
                'email'    => 'admin@hsbc.com',
                'logo'     => 'hsbc.jpg',
                'website'  => 'http://www.hsbc.com',
            ]

        ]);
    }
}
