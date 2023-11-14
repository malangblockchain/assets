<?php

namespace App\Http\Controllers;

use App\Models\TpFrame;
use App\Models\TpPage;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function main()
    {
        $intPage = 1;
        $frame = TpFrame::first()->pluck('content')->first();
        $pages = TpPage::first();
        $components = DB::table('tp_pages_components as pc')
            ->leftJoin('tp_pages as p', 'p.id', '=', 'pc.tp_page_id')
            ->leftJoin('tp_components as c', 'c.id', '=', 'pc.tp_component_id')
            ->leftJoin('tp_types as t', 't.id', '=', 'c.tp_type_id')
            ->leftJoin('tp_components_html as ch', 'ch.id', '=', 'c.tp_components_html_id')
            ->leftJoin('tp_components_css as cc', 'cc.id', '=', 'c.tp_components_css_id')
            ->leftJoin('tp_components_js as cj', 'cj.id', '=', 'c.tp_components_js_id')
            ->select([
                'pc.id as pc_id',
                'c.id as c_id',
                'ch.content as content_html',
                'cc.content as content_css',
                'cj.content as content_js',
                't.name as type_name'
            ])
            ->get();

        $css = '';
        $js = '';
        foreach ($components as $component) {
            $frame = str_replace(
                '@component(' . $component->type_name . ')',
                $component->content_html,
                $frame
            );

            $css .= $component->content_css;

            $js .= $component->content_js;
        }

        $frame = str_replace(
            '@component(fr_style)',
            '<style>'   . $css . '</style>',
            $frame
        );
        $frame = str_replace(
            '@component(fr_script)',
            '<script>' . $js . '</script>',
            $frame
        );



        $data = [
            'name' => 'Thoriq',
            'nim' => '11111',
            'umur' => '100',
            'kelas' => 'KELAZZ',
            'url' => 'http://thoriq.com'
        ];

        foreach ($data as $key => $value) {
            $frame = str_replace(
                '<!--@(in_' . $key . ')-->',
                $value,
                $frame
            );
        }




        return view('test', compact('frame'));
    }
}
