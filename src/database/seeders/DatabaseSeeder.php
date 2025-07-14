<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Contact;
use App\Models\Category;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Contact::truncate();
        Category::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $this->call(CategorySeeder::class);
        Contact::factory(35)->create();
    }
}
