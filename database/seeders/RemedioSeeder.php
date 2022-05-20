<?php

namespace Database\Seeders;

use App\Models\Remedio;
use App\Models\User;
use Illuminate\Database\Seeder;

class RemedioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 100; $i++) { 
            Remedio::factory()->create(['user_id' => User::All()->random()->id]);  
        }
    }
}
