<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CaseStep;
class CaseStepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        $case_step = new CaseStep;
        $case_step->setTranslation('step_rank' , 'ar' , 'الخطوة الأولى' );
        $case_step->setTranslation('step_rank' , 'en' , 'First step' );

        $case_step->setTranslation('title' , 'ar' , 'الاستماع وفهم القضية' );
        $case_step->setTranslation('title' , 'en' , 'Listening and understanding the issue' );

        $case_step->setTranslation('content' , 'ar' , 'تبدأ الرحلة بالتعرف على تفاصيل القضية، ومراجعة المعلومات والمستندات، وفهم احتياجات العميل للوصول إلى رؤية قانونية دقيقة.' );
        $case_step->setTranslation('content' , 'en' , 'The journey begins with getting to know the details of the case, reviewing information and documents, and understanding the client\'s needs to arrive at an accurate legal perspective.' );
        $case_step->user_id = 1;
        $case_step->save();

         $case_step = new CaseStep;
        $case_step->setTranslation('step_rank' , 'ar' , 'الخطوة الأولى' );
        $case_step->setTranslation('step_rank' , 'en' , 'First step' );

        $case_step->setTranslation('title' , 'ar' , 'الاستماع وفهم القضية' );
        $case_step->setTranslation('title' , 'en' , 'Listening and understanding the issue' );

        $case_step->setTranslation('content' , 'ar' , 'تبدأ الرحلة بالتعرف على تفاصيل القضية، ومراجعة المعلومات والمستندات، وفهم احتياجات العميل للوصول إلى رؤية قانونية دقيقة.' );
        $case_step->setTranslation('content' , 'en' , 'The journey begins with getting to know the details of the case, reviewing information and documents, and understanding the client\'s needs to arrive at an accurate legal perspective.' );
        $case_step->user_id = 1;
        $case_step->save();





         $case_step = new CaseStep;
        $case_step->setTranslation('step_rank' , 'ar' , 'الخطوة الأولى' );
        $case_step->setTranslation('step_rank' , 'en' , 'First step' );

        $case_step->setTranslation('title' , 'ar' , 'الاستماع وفهم القضية' );
        $case_step->setTranslation('title' , 'en' , 'Listening and understanding the issue' );

        $case_step->setTranslation('content' , 'ar' , 'تبدأ الرحلة بالتعرف على تفاصيل القضية، ومراجعة المعلومات والمستندات، وفهم احتياجات العميل للوصول إلى رؤية قانونية دقيقة.' );
        $case_step->setTranslation('content' , 'en' , 'The journey begins with getting to know the details of the case, reviewing information and documents, and understanding the client\'s needs to arrive at an accurate legal perspective.' );
        $case_step->user_id = 1;
        $case_step->save();


    }
}
