<?php

namespace Database\Seeders;

use App\Models\Language;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $langs = [
            [
                'code' => 'en',
                'name' => 'English',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'fr',
                'name' => 'Français',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'de',
                'name' => 'Deutsch',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'es',
                'name' => 'Español',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'zh',
                'name' => '中文',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'it',
                'name' => 'Italiano',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        Language::insert($langs);
    }
}
