<?php

namespace Database\Seeders;

use App\Models\Info;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Info::query()->updateOrCreate(['key' => 'facebook'], [
            'key' => 'facebook',
            'type' => 'text',
            'name_en' => 'facebook',
            'name_ar' => 'فيس بوك',
        ]);
        Info::query()->updateOrCreate(['key' => 'linkedin'], [
            'key' => 'linkedin',
            'type' => 'text',
            'name_en' => 'linkedIn',
            'name_ar' => 'لينكد ان',
        ]);
        Info::query()->updateOrCreate(['key' => 'twitter'], [
            'key' => 'twitter',
            'type' => 'text',
            'name_en' => 'Twitter',
            'name_ar' => 'تويتر',
        ]);
        Info::query()->updateOrCreate(['key' => 'phone'], [
            'key' => 'phone',
            'type' => 'text',
            'name_en' => 'Phone',
            'name_ar' => 'رقم الهاتف',
        ]);
        Info::query()->updateOrCreate(['key' => 'email'], [
            'key' => 'email',
            'type' => 'text',
            'name_en' => 'Email',
            'name_ar' => 'البريد الالكترونى',
        ]);
        Info::query()->updateOrCreate(['key' => 'location'], [
            'key' => 'location',
            'type' => 'text',
            'name_en' => 'Location',
            'name_ar' => ' العنوان',
        ]);
        
    }
}
