<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;
class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $service = new Service;
        $service->setTranslation('name' , 'ar' , 'القضايا المدنية والتجارية' );
        $service->setTranslation('name' , 'en' , 'Civil and commercial cases' );
        $service->setTranslation('content' , 'ar' , 'معالجة المنازعات المدنية والتجارية، وتقديم الحلول القانونية التي تساعد على حماية الحقوق وإدارة النزاعات بكفاءة واحترافية.' );
        $service->setTranslation('content' , 'en' , 'Handling civil and commercial disputes, and providing legal solutions that help protect rights and manage disputes efficiently and professionally.' );
        $service->user_id = 1;
        $service->is_active = 1;
        $service->image = 'k-1.png';
        $service->icon = 'c-1.webp';
        $service->save();

         $service = new Service;
        $service->setTranslation('name' , 'ar' , 'القضايا المدنية والتجارية' );
        $service->setTranslation('name' , 'en' , 'Civil and commercial cases' );
        $service->setTranslation('content' , 'ar' , 'معالجة المنازعات المدنية والتجارية، وتقديم الحلول القانونية التي تساعد على حماية الحقوق وإدارة النزاعات بكفاءة واحترافية.' );
        $service->setTranslation('content' , 'en' , 'Handling civil and commercial disputes, and providing legal solutions that help protect rights and manage disputes efficiently and professionally.' );
        $service->user_id = 1;
        $service->is_active = 1;
        $service->image = 'k-1.png';
        $service->icon = 'c-1.webp';
        $service->save();


         $service = new Service;
        $service->setTranslation('name' , 'ar' , 'القضايا المدنية والتجارية' );
        $service->setTranslation('name' , 'en' , 'Civil and commercial cases' );
        $service->setTranslation('content' , 'ar' , 'معالجة المنازعات المدنية والتجارية، وتقديم الحلول القانونية التي تساعد على حماية الحقوق وإدارة النزاعات بكفاءة واحترافية.' );
        $service->setTranslation('content' , 'en' , 'Handling civil and commercial disputes, and providing legal solutions that help protect rights and manage disputes efficiently and professionally.' );
        $service->user_id = 1;
        $service->is_active = 1;
        $service->image = 'k-1.png';
        $service->icon = 'c-1.webp';
        $service->save();



         $service = new Service;
        $service->setTranslation('name' , 'ar' , 'القضايا المدنية والتجارية' );
        $service->setTranslation('name' , 'en' , 'Civil and commercial cases' );
        $service->setTranslation('content' , 'ar' , 'معالجة المنازعات المدنية والتجارية، وتقديم الحلول القانونية التي تساعد على حماية الحقوق وإدارة النزاعات بكفاءة واحترافية.' );
        $service->setTranslation('content' , 'en' , 'Handling civil and commercial disputes, and providing legal solutions that help protect rights and manage disputes efficiently and professionally.' );
        $service->user_id = 1;
        $service->is_active = 1;
        $service->image = 'k-1.png';
        $service->icon = 'c-1.webp';
        $service->save();
    }
}
