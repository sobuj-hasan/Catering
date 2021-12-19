<?php

namespace Database\Seeders;

use App\Models\Category;
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
        Category::create([
            'name' => 'Breackfast',
            'ar_name' => 'وجبة افطار',
        ]);
        Category::create([
            'name' => 'Lunch',
            'ar_name' => 'غداء',
        ]);
        Category::create([
            'name' => 'Dinner',
            'ar_name' => 'وجبة عشاء',
        ]);
        Category::create([
            'name' => 'Drinks',
            'ar_name' => 'مشروبات',
        ]);
    }
}
