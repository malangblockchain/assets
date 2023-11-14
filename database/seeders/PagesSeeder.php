<?php

namespace Database\Seeders;

use App\Models\TpPage;
use Illuminate\Database\Seeder;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TpPage::create([
            'name' => 'Page 1',
            'tp_frame_id' => 1
        ]);
    }
}
