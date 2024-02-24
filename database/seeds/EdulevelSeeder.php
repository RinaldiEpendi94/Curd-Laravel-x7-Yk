<?php

use Illuminate\Database\Seeder;

class EdulevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('adulevels')->insert([
            [  
            'name' => 'Sd sederajat',
            'desc' =>'Sd/mi',
            ],
            [  
            'name' => 'Sd sederajat',
            'desc' =>'Smp/Mts',
             ]
        ]);
    }
}
