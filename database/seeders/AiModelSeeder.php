<?php

namespace Database\Seeders;

use App\Models\ai_Model;
use App\Models\AiModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Factories\AiModelFactory ;

class AiModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AiModel::factory()->count(30)->create();
    }
}
