<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\About;
class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $about = new About;

        $about->setTranslation('name' , 'ar'  , 'علي سعيد الشامسي');
        $about->setTranslation('name' , 'en'  , 'ali saaed elsahmsi');

        $about->setTranslation('job_title' , 'ar'  , 'المحامي والمستشار القانوني');
        $about->setTranslation('job_title' , 'en'  , 'Lawyer and legal consultant');

        $about->setTranslation('quote' , 'ar'  , 'الثقة تُبنى بالفعل قبل القول، والعدالة تُنال بالصبر قبل الحكم');
        $about->setTranslation('quote' , 'en'  , 'Trust is built through actions before words, and justice is achieved through patience before judgment.');

        $about->setTranslation('left_text' , 'ar'  , 'القانون في عالم اليوم لم يعد خياراً جانبياً، بل أداة استراتيجية لحماية المصالح وبناء قرارات واضحة وسط تحديات ومتغيرات. أعمل مع كل عميل كأن قضيته الشخصية، وأمنحه كل عناية مستحقة من رؤية ومتابعة دقيقة للسرية والمصداقية المطلقة، وإيماناً بأن خدمة موكلي هي جوهر النزاهة ومساري المهني.');
        $about->setTranslation('left_text' , 'en'  , 'In today\'s world, law is no longer a secondary option, but a strategic tool for protecting interests and making clear decisions amidst challenges and changes. I treat each client as if their case were my own, giving them the utmost care, including meticulous attention, confidentiality, and absolute integrity, believing that serving my clients is the essence of my integrity and my professional path.');

        $about->setTranslation('right_text' , 'ar'  , 'أؤمن أن القانون ليس مجرد نصوص تقرأ، بل هو درع يحمي الحقوق، وبوصلة تقود إلى العدالة. منذ أكثر من عقدين من الزمن، وأنا أرافق عملائي في أدق قضاياهم، واضعاً كل خبرتي ومهنتي في خدمتهم بثبات وثقة وأمان.');
        $about->setTranslation('right_text' , 'en'  , 'I believe that the law is not merely texts to be read, but a shield that protects rights and a compass that leads to justice. For over two decades, I have accompanied my clients through their most complex cases, placing all my experience and expertise at their service with steadfastness, confidence, and security.');

        $about->setTranslation('bio' , 'ar'  , 'بدأت رحلتي في أروقة المحاكم الإماراتية، حيث تشربت روح القانون من منابعه الأصيلة. لم أعتمد يومًا على المسارات التقليدية وحدها، بل سعيت دائمًا إلى فهم أعمق لدقائق التشريعات وتقاطعاتها مع الواقع المعيش للناس والشركات. عبر السنوات، نسجت علاقات متينة مع نخبة من القضاة والمستشارين وزملاء المهنة، مؤسسًا لنفسي مكانة راسخة في الوسط القانوني. كل قضية خضتها أضافت إلى مخزوني المعرفي بُعدًا جديدًا، وكل تحدٍ واجهته صقل مهاراتي وجعلني أكثر استعدادًا لما هو أعقد. اليوم، وبعد أكثر من عشرين عامًا من العطاء المتواصل، أقف عند محطة جديدة من النضج المهني، حاملًا معي إرثًا من الثقة والمصداقية، ومتطلعًا إلى مستقبل أكون فيه شريكًا أمينًا لكل من يبحث عن العدالة.');
        $about->setTranslation('bio' , 'en'  , 'My journey began within the halls of the UAE courts, where I absorbed the spirit of the law from its very source. I never relied solely on traditional methods, but always sought a deeper understanding of the intricacies of legislation and its intersections with the lived realities of individuals and businesses. Over the years, I forged strong relationships with a distinguished group of judges, advisors, and colleagues, establishing myself as a prominent figure in the legal profession. Every case I handled added a new dimension to my knowledge base, and every challenge I faced honed my skills and prepared me for more complex matters. Today, after more than twenty years of dedicated service, I stand at a new milestone of professional maturity, carrying with me a legacy of trust and integrity, and looking forward to a future where I can be a reliable partner to all who seek justice.');


        $about->main_image = 'person-2.webp' ;
        $about->bio_image = 'about-2.webp' ;
        $about->save();





    }
}
