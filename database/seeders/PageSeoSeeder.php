<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PageSeo;
class PageSeoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pages = ['الرئيسية' , 'نبذة عني' , 'المقالات'  , 'تواصل معي' ];
        foreach ($pages as $page) {
            $page_seo = new PageSeo;
            $page_seo->page_name = $page;
            $page_seo->save();
        }
    }
}
