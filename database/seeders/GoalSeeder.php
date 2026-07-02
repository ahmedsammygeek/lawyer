<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Goal;
class GoalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $goal = new Goal;
        $goal->setTranslation('title'  , 'ar' , 'المسؤولية');
        $goal->setTranslation('title'  , 'en' , 'Responsibility');
        $goal->setTranslation('content'  , 'ar' , 'أتعامل مع ملفك باهتمام كامل، وتقديم الدعم القانوني الذي يساعد العميل على اتخاذ قرارات واثقة.');
        $goal->setTranslation('content'  , 'en' , 'I handle your case with utmost care, providing legal support that helps the client make confident decisions.');

        $goal->image  = 'icon-1.webp';
        $goal->is_active = 1;
        $goal->user_id = 1;
        $goal->save();


        $goal = new Goal;
        $goal->setTranslation('title'  , 'ar' , 'المسؤولية');
        $goal->setTranslation('title'  , 'en' , 'Responsibility');
        $goal->setTranslation('content'  , 'ar' , 'أتعامل مع ملفك باهتمام كامل، وتقديم الدعم القانوني الذي يساعد العميل على اتخاذ قرارات واثقة.');
        $goal->setTranslation('content'  , 'en' , 'I handle your case with utmost care, providing legal support that helps the client make confident decisions.');

        $goal->image  = 'icon-1.webp';
        $goal->is_active = 1;
        $goal->user_id = 1;
        $goal->save();


        $goal = new Goal;
        $goal->setTranslation('title'  , 'ar' , 'المسؤولية');
        $goal->setTranslation('title'  , 'en' , 'Responsibility');
        $goal->setTranslation('content'  , 'ar' , 'أتعامل مع ملفك باهتمام كامل، وتقديم الدعم القانوني الذي يساعد العميل على اتخاذ قرارات واثقة.');
        $goal->setTranslation('content'  , 'en' , 'I handle your case with utmost care, providing legal support that helps the client make confident decisions.');

        $goal->image  = 'icon-1.webp';
        $goal->is_active = 1;
        $goal->user_id = 1;
        $goal->save();




        $goal = new Goal;
        $goal->setTranslation('title'  , 'ar' , 'المسؤولية');
        $goal->setTranslation('title'  , 'en' , 'Responsibility');
        $goal->setTranslation('content'  , 'ar' , 'أتعامل مع ملفك باهتمام كامل، وتقديم الدعم القانوني الذي يساعد العميل على اتخاذ قرارات واثقة.');
        $goal->setTranslation('content'  , 'en' , 'I handle your case with utmost care, providing legal support that helps the client make confident decisions.');

        $goal->image  = 'icon-1.webp';
        $goal->is_active = 1;
        $goal->user_id = 1;
        $goal->save();




        




    }
}
