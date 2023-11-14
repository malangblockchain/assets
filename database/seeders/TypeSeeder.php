<?php

namespace Database\Seeders;

use App\Models\TpType;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TpType::create([
            'name' => 'fr_navbar'
        ]);
        TpType::create([
            'name' => 'fr_about'
        ]);
        TpType::create([
            'name' => 'fr_project'
        ]);
        TpType::create([
            'name' => 'fr_contact'
        ]);
        TpType::create([
            'name' => 'fr_footer'
        ]);
    }
}
