<?php

namespace Database\Seeders;

use App\Models\TpComponentsHtml;
use Illuminate\Database\Seeder;

class ComponentHTMLSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TpComponentsHtml::create([
            'tp_type_id' => 1,
            'content' => '
                <div class="wg-navbar">
                    <h1> <!--@(in_nama)--> </h1>
                </div>
            '
        ]);

        TpComponentsHtml::create([
            'tp_type_id' => 2,
            'content' => '
                <div class="wg-about">
                    <h1> <!--@(in_nim)--> </h1>
                </div>
            '
        ]);

        TpComponentsHtml::create([
            'tp_type_id' => 3,
            'content' => '
                <div class="wg-project">
                    <h1> <!--@(in_umur)--> </h1>
                </div>
            '
        ]);

        TpComponentsHtml::create([
            'tp_type_id' => 4,
            'content' => '
                <div class="wg-contact">
                    <h1> <!--@(in_kelas)--> </h1>
                </div>
            '
        ]);

        TpComponentsHtml::create([
            'tp_type_id' => 5,
            'content' => '
                <div class="wg-footer">
                    <h1> <!--@(in_url)--> </h1>
                </div>
            '
        ]);
    }
}
