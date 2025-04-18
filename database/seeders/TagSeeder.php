<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [

            'KZaman',
            'Web Development',
            'Laravel',
            'PHP',
            'JavaScript',
            'Database',
            'Design',
            'Developer',
            'AI',
            'Machine Learning',
            'Cloud Computing',
            'DevOps',
            'Security',
        ];
        foreach ($tags as $tagName) {
            Tag::firstOrCreate([
                'name' => $tagName
            ]);
        }
    }
}
