<?php

namespace Database\Seeders;

use App\Models\TpPagesComponents;
use Illuminate\Database\Seeder;

class PageComponentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TpPagesComponents::create([
            'tp_page_id' => 1,
            'tp_component_id' => 1
        ]);
        TpPagesComponents::create([
            'tp_page_id' => 1,
            'tp_component_id' => 2
        ]);
        TpPagesComponents::create([
            'tp_page_id' => 1,
            'tp_component_id' => 3
        ]);
        TpPagesComponents::create([
            'tp_page_id' => 1,
            'tp_component_id' => 4
        ]);
        TpPagesComponents::create([
            'tp_page_id' => 1,
            'tp_component_id' => 5
        ]);
    }
}
