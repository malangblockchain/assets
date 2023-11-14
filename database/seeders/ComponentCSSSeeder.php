<?php

namespace Database\Seeders;

use App\Models\TpComponentsCss;
use Illuminate\Database\Seeder;

class ComponentCSSSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TpComponentsCss::create([
            'tp_type_id' => 1,
            'content' => '
                .wg-navbar {
                    color : red;
                }
            '
        ]);
        TpComponentsCss::create([
            'tp_type_id' => 2,
            'content' => '
                .wg-about {
                    color : red;
                }
            '
        ]);
        TpComponentsCss::create([
            'tp_type_id' => 3,
            'content' => '
                .wg-project {
                    color : pink;
                }
            '

        ]);

        TpComponentsCss::create([
            'tp_type_id' => 4,
            'content' => '
                .wg-contact {
                    color : red;
                }
            '
        ]);

        TpComponentsCss::create([
            'tp_type_id' => 5,
            'content' => '
                .wg-footer {
                    color : blue;
                }
            '
        ]);
    }
}
