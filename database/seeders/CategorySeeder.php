<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::firstOrCreate(['name' => 'জাতীয়']);
        Category::firstOrCreate(['name' => 'বিনোদন']);
        Category::firstOrCreate(['name' => 'রাজনীতি']);
        Category::firstOrCreate(['name' => 'আন্তর্জাতিক']);
        Category::firstOrCreate(['name' => 'খেলা']);
        Category::firstOrCreate(['name' => 'কৃষি']);
        Category::firstOrCreate(['name' => 'রাজধানী']);
        Category::firstOrCreate(['name' => 'বিজ্ঞান ও প্রযুক্তি']);
        Category::firstOrCreate(['name' => 'গণমাধ্যম']);
        Category::firstOrCreate(['name' => 'শিক্ষা']);
        Category::firstOrCreate(['name' => 'পর্যটন']);
        Category::firstOrCreate(['name' => 'পর্যটন']);
    }
}
