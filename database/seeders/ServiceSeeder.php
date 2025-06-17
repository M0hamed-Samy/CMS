<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::create([
            'icon' => 'images/services/boobs-up.png',
            'main_image' => 'images/services/boobs-big.png',
            'main_title' => 'خدمة رفع الثدي',
            'main_about' => 'عملية رفع الثدي لتحسين الشكل والمظهر العام.',
            'main_description' => 'تُعتبر عملية رفع الثدي من العمليات التجميلية التي تهدف إلى تحسين مظهر الثدي من خلال إزالة الجلد الزائد وشد الأنسجة للحصول على شكل أكثر تناسقاً وشباباً. تُجرى هذه العملية في عيادتنا باستخدام أحدث التقنيات لضمان أفضل النتائج وأقل فترة تعافي.',

            'secondary_image' => 'images/services/boobs-small.png',
            'secondary_title' => 'نتائج مبهرة خلال فترة قصيرة',
            'secondary_description' => 'يمكن ملاحظة الفرق مباشرة بعد العملية مع نتائج تدوم طويلاً وتعيد الثقة بالنفس للسيدات.',

            'mini_image_1' => 'images/services/stretch-face.png',
            'mini_title_1' => 'قبل وبعد - الحالة الأولى',
            'mini_title_image_1' => 'images/services/stretch-neck.png',
            'mini_description_1' => 'هذه الحالة تُظهر الفرق الكبير بين شكل الثدي قبل وبعد العملية مع تحسن واضح في الشكل والارتفاع.',
            'mini_about_1' => 'الحالة الأولى توضح الفرق الكبير بعد العملية.',

            'mini_image_2' => 'images/services/stretch-leg.png',
            'mini_title_2' => 'قبل وبعد - الحالة الثانية',
            'mini_title_image_2' => 'images/services/stretch-stomach.png',
            'mini_description_2' => 'في هذه الحالة تم استعادة التناسق بين الثديين مع مظهر طبيعي وجذاب.',
            'mini_about_2' => 'الحالة الثانية تظهر نتائج طبيعية وجذابة.',

            'mini_image_3' => 'images/services/fat-face.png',
            'mini_title_3' => 'قبل وبعد - الحالة الثالثة',
            'mini_title_image_3' => 'images/services/fat-hand.png',
            'mini_description_3' => 'الحالة الثالثة تعكس الفرق في استعادة الشكل الطبيعي والثقة بعد إجراء العملية.',
            'mini_about_3' => 'الحالة الثالثة توضح تحسن الثدي بعد العملية.',
        ]);
    }
}
