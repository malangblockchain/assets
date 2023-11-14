<?php

namespace Database\Seeders;

use App\Models\TpFrame;
use Illuminate\Database\Seeder;

class FrameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TpFrame::create([
            'name' => 'Frame 1',
            'content' => '<!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Portfolio Landing Page</title>
                @component(fr_style)
            </head>
            <body>
                <header>
                    <nav>
                        @component(fr_navbar)
                    </nav>
                </header>
            
                <main>
                    <section id="about">
                        @component(fr_about)
                    </section>
            
                    <section id="projects">
                        @component(fr_project)
                    </section>
            
                    <section id="contact">
                        @component(fr_contact)
                    </section>
                </main>
            
                <footer>
                    <!-- Footer Content -->
                    @component(fr_footer)
                </footer>
            
                @component(fr_script)
            </body>
            </html>
            '
        ]);
    }
}
