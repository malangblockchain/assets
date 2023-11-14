<?php

namespace Database\Seeders;

use App\Models\TpComponents;
use Illuminate\Database\Seeder;

class ComponentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TpComponents::create([
            'name' => 'Component Navbar',
            'tp_components_html_id' => 1,
            'tp_components_css_id' => 1,
            'tp_components_js_id' => 1,
            'tp_type_id' => 1
        ]);
        TpComponents::create([
            'name' => 'Component About',
            'tp_components_html_id' => 2,
            'tp_components_css_id' => 2,
            'tp_components_js_id' => 2,
            'tp_type_id' => 2
        ]);
        TpComponents::create([
            'name' => 'Component Project',
            'tp_components_html_id' => 3,
            'tp_components_css_id' => 3,
            'tp_components_js_id' => 3,
            'tp_type_id' => 3
        ]);
        TpComponents::create([
            'name' => 'Component Contact',
            'tp_components_html_id' => 4,
            'tp_components_css_id' => 4,
            'tp_components_js_id' => 4,
            'tp_type_id' => 4
        ]);
        TpComponents::create([
            'name' => 'Component Footer',
            'tp_components_html_id' => 5,
            'tp_components_css_id' => 5,
            'tp_components_js_id' => 5,
            'tp_type_id' => 5
        ]);
    }
}
